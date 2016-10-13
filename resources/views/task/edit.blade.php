@extends('layouts.app')

@section('title', trans('app.edit'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            {!! Breadcrumbs::render('task', 'edit') !!}

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.id') }} {{ $task->id }}</div>
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
