<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">

    {{ Form::label($name, trans('app.' . $name), ['class' => 'col-md-4 control-label']) }}

    <div class="col-md-6">

        {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}

        @if ($errors->has($name))
        <div class="help-block{{ $errors->has($name) ? ' help-block-error' : '' }}">
            {{ $errors->first($name) }}
        </div>
        @endif

    </div>
</div>
