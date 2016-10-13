@extends('layouts.app')

@section('title', trans('app.create'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            {!! Breadcrumbs::render('task', 'create') !!}

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.create') }}</div>
                <div class="panel-body">

                    {!! Form::open(['route' => 'task.store', 'class' => 'form-horizontal']) !!}

                        {{ Form::bsErrors($errors) }}

                        {{ Form::bsText('name') }}

                        {{ Form::bsText('description') }}

                        {{ Form::bsSubmit('create') }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
