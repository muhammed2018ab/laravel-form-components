
<div class="form-group row">
    <label class="col-md-2 col-form-label" for="{{ $name }}">{{ $label }}</label>
    <div class="col-md-10 {{ $inputClass ?? '' }}">
        {{ $slot }}
        @unless($skipInvalid)
            @include('fc::invalid-feedback')
        @endunless
        <small class="form-text text-muted">
            {{ $help ?? '' }}
        </small>
    </div>
</div>
