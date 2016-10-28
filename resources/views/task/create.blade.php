@extends('layouts.app')

@section('title', Helpers::title([
    trans('app.tasks'),
    trans('app.create')
]))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            {!! Breadcrumbs::render('task', 'create') !!}

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.create') }}</div>
                <div class="panel-body">

                    @include('task._form', ['form' => ['route' => ['task.store']]])

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
