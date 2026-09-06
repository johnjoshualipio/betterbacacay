@props([
    'name' => 'spark',
    'size' => 24,
])

<svg {{ $attributes->merge(['class' => 'civic-icon', 'width' => $size, 'height' => $size]) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
    @switch($name)
        @case('arrow-right') <path d="M4 12h15m-6-6 6 6-6 6" /> @break
        @case('arrow-up-right') <path d="M7 17 17 7m-9 0h9v9" /> @break
        @case('alert') <path d="M10.3 4.5 2.8 18a2 2 0 0 0 1.7 3h15a2 2 0 0 0 1.7-3l-7.5-13.5a2 2 0 0 0-3.4 0ZM12 9v4m0 4h.01" /> @break
        @case('archive') <path d="M4 7h16v13H4zM3 4h18v3H3zm5 8h8" /> @break
        @case('bank') <path d="m3 10 9-6 9 6M5 10v8m4-8v8m6-8v8m4-8v8M3 21h18M2 18h20" /> @break
        @case('book') <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H20v16H6.5A2.5 2.5 0 0 0 4 21.5zM4 5.5v16M8 7h8m-8 4h8" /> @break
        @case('briefcase') <path d="M4 7h16v13H4zM8 7V5h8v2M2 12h20M10 12v2h4v-2" /> @break
        @case('building') <path d="M4 21V4h10v17M14 9h6v12M7 8h3m-3 4h3m-3 4h3m9-3h1m-1 4h1M2 21h20" /> @break
        @case('camera') <path d="M4 7h4l1.5-2h5L16 7h4v12H4zM12 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" /> @break
        @case('compass') <circle cx="12" cy="12" r="9" /><path d="m15.5 8.5-2 5-5 2 2-5z" /> @break
        @case('document') <path d="M6 3h8l4 4v14H6zM14 3v5h5M9 12h6m-6 4h6" /> @break
        @case('heart') <path d="M20.8 8.7c0 5.4-8.8 10.3-8.8 10.3S3.2 14.1 3.2 8.7A4.7 4.7 0 0 1 12 6a4.7 4.7 0 0 1 8.8 2.7Z" /> @break
        @case('health') <path d="M4 12h4l1.5-4 3 8 1.5-4H20" /><path d="M12 21s-8-4.4-8-10.3A4.7 4.7 0 0 1 12 8a4.7 4.7 0 0 1 8 2.7C20 16.6 12 21 12 21Z" /> @break
        @case('island') <path d="M3 18c4-2 7-2 9 0 2-2 5-2 9 0M5 15c1.3-4 3.6-6 7-6s5.7 2 7 6M12 9V5m0 0-2 2m2-2 2 2" /> @break
        @case('leaf') <path d="M20 4C9 4 4 9 4 20c5-1 11-2 13-8 1-3 1-5 3-8Z" /><path d="M4 20c2-4 5-7 10-9" /> @break
        @case('mail') <rect x="3" y="5" width="18" height="14" rx="2" /><path d="m3 7 9 6 9-6" /> @break
        @case('message') <path d="M20 11.5a7 7 0 0 1-7.5 7 8 8 0 0 1-3.2-.7L4 19l1.3-4A7 7 0 1 1 20 11.5Z" /><path d="M8 11.5h.01M12 11.5h.01M16 11.5h.01" /> @break
        @case('newspaper') <path d="M4 4h16v16H4zM8 8h8M8 12h8M8 16h5" /> @break
        @case('people') <circle cx="9" cy="8" r="3" /><circle cx="17" cy="9" r="2.5" /><path d="M3 19a6 6 0 0 1 12 0M15 16a5 5 0 0 1 6 3" /> @break
        @case('pin') <path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" /><circle cx="12" cy="10" r="2.3" /> @break
        @case('search') <circle cx="10.8" cy="10.8" r="6.3" /><path d="m16 16 4.5 4.5" /> @break
        @case('shield') <path d="M12 3 20 6v5c0 5-3.2 8.3-8 10-4.8-1.7-8-5-8-10V6zM9 12l2 2 4-4" /> @break
        @case('spark') <path d="m12 2 1.8 6.2L20 10l-6.2 1.8L12 18l-1.8-6.2L4 10l6.2-1.8zM19 16l.7 2.3L22 19l-2.3.7L19 22l-.7-2.3L16 19l2.3-.7z" /> @break
        @case('utensils') <path d="M7 3v8M4 3v5a3 3 0 0 0 6 0V3M7 11v10M16 3v18M16 3c3 2 3 6 0 8" /> @break
        @case('waves') <path d="M3 9c3-3 6-3 9 0s6 3 9 0M3 15c3-3 6-3 9 0s6 3 9 0" /> @break
        @case('weave') <path d="M4 5h16v14H4zM4 9h16M4 15h16M8 5v14m8-14v14" /> @break
        @default <path d="M12 3v18M3 12h18M5.6 5.6l12.8 12.8M18.4 5.6 5.6 18.4" />
    @endswitch
</svg>
