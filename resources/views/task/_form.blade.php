{!! Form::open(array_merge(['class' => 'form-horizontal'], $form)) !!}

    {{ Form::bsErrors($errors) }}

    {{ Form::bsText('name', (isset($task->name)) ? $task->name : null) }}

    {{ Form::bsText('description', (isset($task->description)) ? $task->description : null) }}

    {{ Form::bsSubmit((isset($task->id)) ? 'update' : 'create') }}

{!! Form::close() !!}
