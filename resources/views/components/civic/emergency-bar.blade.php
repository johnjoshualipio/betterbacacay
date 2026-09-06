@php($hotline = config('civic.hotlines.0'))

<div class="civic-emergency-bar">
    <div class="civic-container civic-emergency-bar__inner">
        <span class="civic-emergency-bar__pulse" aria-hidden="true"></span>
        <span><strong>Need urgent help?</strong> For immediate emergencies, call {{ $hotline['number'] ?? '911' }}.</span>
        <a href="{{ route('emergency') }}">View emergency contacts <span aria-hidden="true">→</span></a>
    </div>
</div>
