@extends('layouts.app')

@section('title', trans('app.edit'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.edit') }}</div>
                <div class="panel-body">

                    {!! Form::open(['route' => ['task.update', $task->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}

                        {{ Form::bsErrors($errors) }}

                        {{ Form::bsText('name', $task->name) }}

                        {{ Form::bsText('description', $task->description) }}

                        {{ Form::bsSubmit('update') }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
