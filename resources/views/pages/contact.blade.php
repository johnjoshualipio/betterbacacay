<x-civic.layout title="Contact BetterBacacay" description="Send a message, correction, source, or newsletter signup to BetterBacacay maintainers.">
    <x-civic.page-hero eyebrow="Participation · Corrections · Questions" title="Help make this guide <strong>better.</strong>" description="Send the maintainers a question, correction, broken link, or official source to review." :image="$site['images']['community']" image-alt="Concept artwork of a coastal community">
        <x-civic.cta href="#send-message" icon="message">Send a message</x-civic.cta>
        <x-civic.cta href="{{ route('directory') }}" variant="outline" icon="building">Browse directory</x-civic.cta>
    </x-civic.page-hero>
    <section id="send-message" class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">Reach the maintainers</p>
                <h2>Your voice helps keep information <span style="color:var(--civic-teal)">useful.</span></h2>
                <p>Submissions are stored privately for review. A successful submission means BetterBacacay maintainers received your message; it does not open an official LGU case or government transaction.</p>
                @if (session('submission_success'))<p class="civic-form-success" role="status">{{ session('submission_success') }}</p>@endif
                <x-civic.independence />
            </div>
            <form class="civic-form" method="POST" action="{{ route('submissions.store') }}">
                @csrf
                <input type="hidden" name="type" value="{{ old('type', 'contact') }}">
                <input type="hidden" name="page_url" value="{{ url()->current() }}">
                <div class="civic-form-grid">
                    <x-civic.form-field label="Your name" name="name" required />
                    <x-civic.form-field label="Email address" name="email" type="email" />
                </div>
                <div class="civic-form-field">
                    <label for="type">What would you like to send?</label>
                    <select class="civic-input" id="type" name="type">
                        <option value="contact" @selected(old('type', 'contact') === 'contact')>A question or message</option>
                        <option value="correction" @selected(old('type') === 'correction')>A correction</option>
                        <option value="broken_link" @selected(old('type') === 'broken_link')>A broken-link report</option>
                    </select>
                    @error('type')<p class="civic-form-error">{{ $message }}</p>@enderror
                </div>
                <x-civic.form-field label="Official source URL (optional)" name="source_url" type="url" placeholder="https://..." />
                <div class="civic-form-field">
                    <label for="message">Message <span aria-hidden="true">*</span></label>
                    <textarea class="civic-input" id="message" name="message" required placeholder="Tell us what you found or what you need help with.">{{ old('message') }}</textarea>
                    @error('message')<p class="civic-form-error">{{ $message }}</p>@enderror
                </div>
                <input class="civic-honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button class="civic-cta civic-cta--primary" type="submit">Send to maintainers <x-civic.icon name="arrow-right" size="18" /></button>
            </form>
        </div>
    </section>
    <section class="civic-section civic-section--mist">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Stay connected" title="Get occasional updates" description="Newsletter signups are used only for BetterBacacay updates." />
            <form class="civic-newsletter" method="POST" action="{{ route('submissions.store') }}">
                @csrf
                <input type="hidden" name="type" value="newsletter">
                <input type="hidden" name="page_url" value="{{ url()->current() }}">
                <div><label class="civic-sr-only" for="newsletter-email">Email address</label><input class="civic-input" id="newsletter-email" type="email" name="email" placeholder="Your email address" required></div>
                <input class="civic-honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button class="civic-cta civic-cta--primary" type="submit">Subscribe <x-civic.icon name="arrow-right" size="18" /></button>
            </form>
        </div>
    </section>
</x-civic.layout>
