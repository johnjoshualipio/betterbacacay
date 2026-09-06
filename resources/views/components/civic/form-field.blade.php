@props([
    'label',
    'name',
    'type' => 'text',
    'required' => false,
    'value' => null,
])

<div class="civic-form-field">
    <label for="{{ $name }}">{{ $label }} @if ($required)<span aria-hidden="true">*</span>@endif</label>
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" value="{{ old($name, $value) }}" @required($required) {{ $attributes->merge(['class' => 'civic-input']) }}>
    @error($name)
        <p class="civic-form-error">{{ $message }}</p>
    @enderror
</div>
