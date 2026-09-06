@props(['variant' => 'section'])

<div @class(['civic-wave', 'civic-wave--' . $variant]) aria-hidden="true">
    <svg viewBox="0 0 1440 160" preserveAspectRatio="none" focusable="false">
        @if ($variant === 'footer')
            <path class="civic-wave__footer" d="M0 98c178 34 307 6 455-12 185-23 291 12 432 28 187 27 335-40 553-27v73H0Z" />
        @else
            <path class="civic-wave__back" d="M0 92c187 61 312 17 456-8 186-32 290 19 432 43 179 31 328-65 552-51v84H0Z" />
            <path class="civic-wave__front" d="M0 118c169 49 294 15 439-9 178-29 287 21 423 37 198 23 323-54 578-47v61H0Z" />
        @endif
    </svg>
</div>
