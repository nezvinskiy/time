{!! Form::open(['route' => ['task.index'], 'method' => 'get', 'class' => 'form-horizontal']) !!}

    {{ Form::bsText('id', app('request')->input('id')) }}

    {{ Form::bsText('name', app('request')->input('name')) }}

    {{ Form::bsText('description', app('request')->input('description')) }}

    {{ Form::bsSubmit('search') }}

{!! Form::close() !!}
