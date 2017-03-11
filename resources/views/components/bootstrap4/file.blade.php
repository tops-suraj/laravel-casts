@if($isHorizontal)
<div class="col-sm-{{ $fieldWidth }}">
@endif

    <div>
        <label class="custom-file">
            {!! $controlHtml !!}
            <span class="custom-file-control"></span>
        </label>
    </div>

    @if(! $errors->isEmpty() && $errors->has($name))
        <small class="form-text text-danger">{{ implode(' ', $errors->get($name)) }}</small>
    @endif

@if($isHorizontal)
</div>
@endif
