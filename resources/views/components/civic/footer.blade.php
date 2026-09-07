<footer class="civic-footer">
    <x-civic.wave variant="footer" />
    <div class="civic-container civic-footer__content">
        <div class="civic-footer__brand">
            <a class="civic-brand civic-brand--footer" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-word.png') }}" alt="BetterBacacay" width="260" height="67">
            </a>
            <p>Our people. Our home. A brighter Bacacay.</p>
            <p class="civic-footer__mission">A community-first guide to local information, services, places, and opportunities.</p>
        </div>
        <div>
            <p class="civic-footer__label">Explore</p>
            <div class="civic-footer__links">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('barangays') }}">Barangays</a>
                <a href="{{ route('tourism') }}">Tourism</a>
                <a href="{{ route('news') }}">News</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
        <div>
            <p class="civic-footer__label">Public resources</p>
            <div class="civic-footer__links">
                <a href="{{ route('directory') }}">Office directory</a>
                <a href="{{ route('transparency') }}">Transparency</a>
                <a href="{{ route('emergency') }}">Emergency contacts</a>
                <a href="{{ config('civic.sources.bettergov.url') }}" target="_blank" rel="noreferrer">BetterGov.ph <span aria-hidden="true">↗</span></a>
                <a href="{{ route('sitemap') }}">Sitemap</a>
            </div>
        </div>
        <div class="civic-footer__support">
            <div class="civic-footer__support-cost-row">
                <p class="civic-footer__support-label">Cost to the people of Bacacay:</p>
                <p class="civic-footer__support-cost"><strong>₱0</strong></p>
            </div>
            <div class="civic-footer__support-links">
                <a href="{{ route('contact') }}" class="civic-footer__support-link"><x-civic.icon name="mail" size="16" /> Volunteer with us</a>
                <a href="https://github.com/johnjoshualipio/betterbacacay" class="civic-footer__support-link" target="_blank" rel="noreferrer noopener"><x-civic.icon name="arrow-up-right" size="16" /> Contribute code with us</a>
            </div>
            <a href="{{ config('civic.sources.bettergov.url') }}" class="civic-footer__bettergov" target="_blank" rel="noreferrer noopener" aria-label="Visit BetterGov.ph">
                <img src="{{ asset('images/bettergov-footer.svg') }}" alt="BetterGov.ph" width="1080" height="1080" loading="lazy">
            </a>
        </div>
    </div>
    <div class="civic-container civic-footer__bottom">
        <span>© {{ now()->year }} BetterBacacay</span>
        <span>BetterBacacay is an independent civic information project and does not create government cases or transactions.</span>
    </div>
</footer>
