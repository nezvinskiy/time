@extends('layouts.app')

@section('title', Helpers::title([
    trans('app.tasks'),
    trans('app.edit')
]))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            {!! Breadcrumbs::render('task', 'edit') !!}

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.id') }} {{ $task->id }}</div>
                <div class="panel-body">

                    @include('task._form', ['form' => ['route' => ['task.update', $task->id], 'method' => 'put']])

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
