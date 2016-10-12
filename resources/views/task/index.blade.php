@extends('layouts.app')

@section('title', trans('app.index'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.index') }}</div>
                <div class="panel-body">

                    @include('components.alert')

                    <div class="btn-control">
                        {{ link_to_route('task.create', trans('app.create'), [], ['class' => 'btn btn-primary']) }}
                    </div>

                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>{{ trans('app.id') }}</th>
                                <th>{{ trans('app.name') }}</th>
                                <th>{{ trans('app.description') }}</th>
                                <th>{{ trans('app.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($tasks->count())
                            @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    {{ $task->id }}
                                </td>
                                <td>
                                    {{ $task->name }}
                                </td>
                                <td>
                                    {{ $task->description }}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('task.show', $task->id) }}">
                                        {{ trans('app.show') }}
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('task.edit', $task->id) }}">
                                        {{ trans('app.edit') }}
                                    </a>
                                    {{ Form::open(['method' => 'delete', 'route' => ['task.destroy', $task->id], 'style' => 'display: inline;']) }}
                                    {{ Form::submit(trans('app.delete'), ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">
                                    {{ trans('app.no_records') }}
                                </td>
                            </tr>
                            @endif

                        </tbody>
                    </table>

                    {{ $tasks->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
