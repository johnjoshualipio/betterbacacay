@php
    $navigation = config('civic.navigation', []);
@endphp

<header class="civic-navbar">
    <div class="civic-container civic-navbar__inner">
        <a class="civic-brand" href="{{ route('home') }}" aria-label="BetterBacacay home">
            <img src="{{ asset('images/logo-word.png') }}" alt="BetterBacacay" width="296" height="76">
        </a>

        <nav class="civic-navbar__links" aria-label="Primary navigation">
            @foreach ($navigation as $item)
                <a href="{{ route($item['route']) }}" @if (request()->routeIs($item['active'])) aria-current="page" @endif @class(['is-active' => request()->routeIs($item['active'])])>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="civic-navbar__actions">
            <a class="civic-navbar__search" href="{{ route('search') }}" aria-label="Search BetterBacacay">
                <x-civic.icon name="search" size="18" />
            </a>
            <x-civic.cta href="{{ route('tourism') }}" icon="compass" class="civic-navbar__explore">
                Explore
            </x-civic.cta>
        </div>

        <details class="civic-mobile-menu">
            <summary aria-label="Navigation menu">
                <span></span><span></span><span></span>
            </summary>
            <nav aria-label="Mobile navigation">
                @foreach ($navigation as $item)
                    <a href="{{ route($item['route']) }}" @if (request()->routeIs($item['active'])) aria-current="page" @endif @class(['is-active' => request()->routeIs($item['active'])])>
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <a href="{{ route('search') }}">Search the portal</a>
            </nav>
        </details>
    </div>
</header>
