<?php

namespace App\Http\Controllers\Civic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PortalController extends Controller
{
    public function home(): Response
    {
        $site = $this->siteData();

        return response()->view('pages.home', $site + [
            'quickLinks' => config('civic.quick_links', []),
            'highlights' => array_slice($this->records('news'), 0, 3),
            'services' => array_slice($this->records('services'), 0, 4),
            'destinations' => array_slice($this->records('destinations'), 0, 3),
            'facts' => config('civic.facts', []),
            'actions' => config('civic.community_actions', []),
        ]);
    }

    public function about(): Response
    {
        return response()->view('pages.about', $this->siteData() + ['facts' => config('civic.facts', [])]);
    }

    public function services(): Response
    {
        return response()->view('pages.services', $this->siteData() + ['services' => $this->records('services')]);
    }

    public function service(string $service): Response
    {
        return response()->view('pages.services.show', $this->siteData() + ['service' => $this->findRecord('services', $service)]);
    }

    public function barangays(Request $request): Response
    {
        $query = trim((string) $request->string('q'));
        $barangays = $this->records('barangays');

        if ($query !== '') {
            $barangays = array_values(array_filter($barangays, fn (array $barangay): bool => Str::contains(Str::lower($barangay['name']), Str::lower($query))));
        }

        return response()->view('pages.barangays', $this->siteData() + ['barangays' => $barangays, 'query' => $query]);
    }

    public function barangay(string $barangay): Response
    {
        return response()->view('pages.barangays.show', $this->siteData() + ['barangay' => $this->findRecord('barangays', $barangay)]);
    }

    public function transparency(): Response
    {
        return response()->view('pages.transparency', $this->siteData() + ['sections' => config('civic.transparency', [])]);
    }

    public function transparencySection(string $section): Response
    {
        $sections = config('civic.transparency', []);

        abort_unless(isset($sections[$section]), 404);

        return response()->view('pages.transparency.show', $this->siteData() + ['section' => $sections[$section], 'sectionKey' => $section]);
    }

    public function tourism(): Response
    {
        return response()->view('pages.tourism', $this->siteData() + [
            'destinations' => $this->records('destinations'),
            'experiences' => config('civic.experiences', []),
            'culture' => config('civic.culture', []),
        ]);
    }

    public function destination(string $destination): Response
    {
        return response()->view('pages.tourism.show', $this->siteData() + ['destination' => $this->findRecord('destinations', $destination)]);
    }

    public function news(): Response
    {
        return response()->view('pages.news', $this->siteData() + ['articles' => $this->records('news')]);
    }

    public function article(string $article): Response
    {
        return response()->view('pages.news.show', $this->siteData() + ['article' => $this->findRecord('news', $article)]);
    }

    public function directory(): Response
    {
        return response()->view('pages.directory', $this->siteData() + ['offices' => config('civic.offices', [])]);
    }

    public function emergency(): Response
    {
        return response()->view('pages.emergency', $this->siteData() + ['hotlines' => config('civic.hotlines', [])]);
    }

    public function contact(): Response
    {
        return response()->view('pages.contact', $this->siteData() + ['contact' => config('civic.contact', [])]);
    }

    public function sources(): Response
    {
        return response()->view('pages.sources', $this->siteData() + ['sources' => config('civic.sources', [])]);
    }

    public function search(Request $request): Response
    {
        $query = trim((string) $request->string('q'));
        $results = [];

        if ($query !== '') {
            $groups = [
                ['key' => 'services', 'type' => 'Service', 'route' => 'services.show'],
                ['key' => 'destinations', 'type' => 'Place', 'route' => 'tourism.show'],
                ['key' => 'news', 'type' => 'News', 'route' => 'news.show'],
                ['key' => 'barangays', 'type' => 'Barangay', 'route' => 'barangays.show'],
            ];

            foreach ($groups as $group) {
                foreach ($this->records($group['key']) as $record) {
                    $haystack = Str::lower(implode(' ', array_filter([$record['name'] ?? null, $record['title'] ?? null, $record['summary'] ?? null, $record['description'] ?? null, $record['category'] ?? null])));

                    if (Str::contains($haystack, Str::lower($query))) {
                        $results[] = [
                            'title' => $record['name'] ?? $record['title'],
                            'description' => $record['summary'] ?? $record['description'] ?? '',
                            'category' => $group['type'],
                            'href' => route($group['route'], $record['slug']),
                            'icon' => $record['icon'] ?? 'spark',
                        ];
                    }
                }
            }
        }

        return response()->view('pages.search', $this->siteData() + ['query' => $query, 'results' => $results]);
    }

    public function sitemap(): Response
    {
        $urls = [
            route('home'), route('about'), route('services'), route('barangays'), route('transparency'),
            route('tourism'), route('news'), route('directory'), route('emergency'), route('contact'), route('sources'), route('search'),
        ];

        foreach (['services' => 'services.show', 'barangays' => 'barangays.show', 'destinations' => 'tourism.show', 'news' => 'news.show'] as $key => $routeName) {
            foreach ($this->records($key) as $record) {
                $urls[] = route($routeName, $record['slug']);
            }
        }

        return response()->view('pages.sitemap', ['urls' => $urls])->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    private function siteData(): array
    {
        return [
            'site' => config('civic', []),
            'imageCredit' => 'Concept artwork generated for this independent civic project; not documentary evidence.',
        ];
    }

    private function records(string $key): array
    {
        return array_map(fn (array $record): array => $this->withSlug($record), config('civic.'.$key, []));
    }

    private function findRecord(string $key, string $slug): array
    {
        foreach ($this->records($key) as $record) {
            if ($record['slug'] === $slug) {
                return $record;
            }
        }

        abort(404);
    }

    private function withSlug(array $record): array
    {
        $record['slug'] ??= Str::slug($record['slug_source'] ?? $record['name'] ?? $record['title'] ?? 'record');

        return $record;
    }
}
