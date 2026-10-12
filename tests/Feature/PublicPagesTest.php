<?php

use App\Models\Submission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

uses(RefreshDatabase::class);

it('renders every public page', function (): void {
    foreach ([
        route('home'), route('about'), route('services'), route('barangays'), route('transparency'),
        route('tourism'), route('news'), route('directory'), route('emergency'), route('contact'), route('sources'), route('search'),
    ] as $url) {
        $this->get($url)->assertOk();
    }
});

it('renders detail pages and active navigation state', function (): void {
    $this->get(route('services.show', 'permits-and-documents'))->assertOk()->assertSee('is-active');
    $this->get(route('barangays.show', 'banao'))->assertOk();
    $this->get(route('tourism.show', 'karagumoy-weaving'))->assertOk();
    $this->get(route('news.show', 'karagumoy-livelihood'))->assertOk();
    $this->get(route('transparency.section', 'documents'))->assertOk();
});

it('renders every published detail page', function (): void {
    foreach (['services' => 'services.show', 'barangays' => 'barangays.show', 'destinations' => 'tourism.show', 'news' => 'news.show'] as $key => $routeName) {
        foreach (config('civic.'.$key, []) as $record) {
            $slug = $record['slug'] ?? Str::slug($record['slug_source'] ?? $record['name'] ?? $record['title']);

            $this->get(route($routeName, $slug))->assertOk();
        }
    }

    foreach (array_keys(config('civic.transparency', [])) as $section) {
        $this->get(route('transparency.section', $section))->assertOk();
    }
});

it('returns not found for unknown records', function (): void {
    $this->get('/services/no-such-service')->assertNotFound();
    $this->get('/barangays/no-such-barangay')->assertNotFound();
    $this->get('/tourism/no-such-place')->assertNotFound();
    $this->get('/news/no-such-story')->assertNotFound();
    $this->get('/transparency/no-such-section')->assertNotFound();
});

it('renders the complete barangay directory and source metadata', function (): void {
    $response = $this->get(route('barangays'));

    $response->assertOk()->assertSee('56 barangays')->assertSee('PSA PSGC: Municipality of Bacacay')->assertSee('Last verified: 2026-09-07');
    $response->assertSee('Baclayon')->assertSee('Vinisitahan-Napao');
});

it('shows the independent project disclaimer', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('independent civic information project', false)
        ->assertSee('does not create government cases', false);
});

it('renders the source and credit page', function (): void {
    $this->get(route('sources'))
        ->assertOk()
        ->assertSee('Sources and Credits')
        ->assertSee('Philippine Statistics Authority')
        ->assertSee('Concept artwork generated for BetterBacacay');
});

it('supports search results and an empty state', function (): void {
    $this->get(route('search', ['q' => 'Cagraray']))->assertOk()->assertSee('Cagraray Island');
    $this->get(route('search', ['q' => 'not-a-real-place']))->assertOk()->assertSee('No results for');
});

it('stores valid contact and newsletter submissions privately', function (): void {
    $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.10'])
        ->post(route('submissions.store'), [
            'type' => 'contact',
            'name' => 'A Resident',
            'email' => 'resident@example.com',
            'message' => 'Please review this public source.',
            'page_url' => route('contact'),
        ])->assertRedirect()->assertSessionHas('submission_success');

    $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.11'])
        ->post(route('submissions.store'), [
            'type' => 'newsletter',
            'email' => 'updates@example.com',
            'page_url' => route('home'),
        ])->assertRedirect();

    expect(Submission::query()->count())->toBe(2);
    $this->assertDatabaseHas('submissions', ['type' => 'contact', 'status' => 'new']);
    $this->assertDatabaseHas('submissions', ['type' => 'newsletter', 'email' => 'updates@example.com']);
});

it('rejects invalid submissions and honeypot traffic', function (): void {
    $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.12'])
        ->post(route('submissions.store'), ['type' => 'contact', 'email' => 'not-an-email'])
        ->assertSessionHasErrors(['email', 'message']);

    $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.13'])
        ->post(route('submissions.store'), [
            'type' => 'newsletter',
            'email' => 'bot@example.com',
            'website' => 'https://spam.example',
        ])->assertSessionHasErrors('website');

    expect(Submission::query()->count())->toBe(0);
});

it('rate limits public submissions', function (): void {
    $server = ['REMOTE_ADDR' => '198.51.100.14'];

    for ($attempt = 0; $attempt < 5; $attempt++) {
        $this->withServerVariables($server)->post(route('submissions.store'), [
            'type' => 'newsletter',
            'email' => 'updates'.$attempt.'@example.com',
        ])->assertRedirect();
    }

    $this->withServerVariables($server)->post(route('submissions.store'), [
        'type' => 'newsletter',
        'email' => 'blocked@example.com',
    ])->assertTooManyRequests();
});

it('renders the XML sitemap', function (): void {
    $this->get(route('sitemap'))
        ->assertOk()
        ->assertHeader('Content-Type', 'application/xml; charset=UTF-8')
        ->assertSee('<urlset', false)
        ->assertSee(route('home'), false)
        ->assertSee(route('barangays.show', 'banao'), false);
});

it('gives pages descriptive document titles and a focusable content destination', function (): void {
    $this->get(route('search'))
        ->assertSee('<title>Search | BetterBacacay</title>', false)
        ->assertSee('id="main-content" tabindex="-1"', false);

    $this->get('/services/no-such-service')
        ->assertNotFound()
        ->assertSee('<h1>That page is not here</h1>', false)
        ->assertSee('Return home');
});

it('shows newsletter validation errors and preserves the submitted address', function (): void {
    $this->followingRedirects()->from(route('home'))->post(route('submissions.store'), [
        'type' => 'newsletter',
        'email' => 'invalid-address',
    ])
        ->assertSee('Please correct the following and submit again:')
        ->assertSee('value="invalid-address"', false)
        ->assertSee('aria-describedby="newsletter-email-error"', false)
        ->assertSee('The email field must be a valid email address.');
});
