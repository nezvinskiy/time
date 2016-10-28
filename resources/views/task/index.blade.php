@extends('layouts.app')

@section('title', Helpers::title([
    trans('app.tasks'),
    trans('app.manage')
]))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            {!! Breadcrumbs::render('task', 'manage') !!}

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.tasks') }}</div>
                <div class="panel-body">

                    @include('components.alert')

                    <div class="btn-control">
                        {{ link_to_route('task.create', trans('app.create'), [], ['class' => 'btn btn-primary']) }}
                        <a id="js-btn-search" href="#" class="btn btn-default">{{ trans('app.advanced_search') }}</a>
                    </div>

                    <div id="js-form-search" class="well well-sm" style="display: none; padding-top: 25px;">
                        @include('task._search')
                    </div>

                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="col-md-1">
                                    <a class="{{ Helpers::sortClass('id') }}" href="{!! Helpers::sortRoute(Route::currentRouteName(), 'id') !!}">
                                        {{ trans('app.id') }}
                                    </a>
                                </th>
                                <th class="col-md-4">
                                    <a class="{{ Helpers::sortClass('name') }}" href="{!! Helpers::sortRoute(Route::currentRouteName(), 'name') !!}">
                                        {{ trans('app.name') }}
                                    </a>
                                </th>
                                <th class="col-md-4">
                                    <a class="{{ Helpers::sortClass('description') }}" href="{!! Helpers::sortRoute(Route::currentRouteName(), 'description') !!}">
                                        {{ trans('app.description') }}
                                    </a>
                                </th>
                                <th class="col-md-3">
                                    {{ trans('app.actions') }}
                                </th>
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
                                    <a class="btn btn-success btn-xs" href="{{ route('task.show', $task->id) }}">
                                        {{ trans('app.show') }}
                                    </a>
                                    <a class="btn btn-primary btn-xs" href="{{ route('task.edit', $task->id) }}">
                                        {{ trans('app.edit') }}
                                    </a>
                                    {{ Form::open(['method' => 'delete', 'route' => ['task.destroy', $task->id], 'class' => 'form-delete']) }}
                                    {{ Form::submit(trans('app.delete'), ['class' => 'btn btn-danger btn-xs', 'data-confirm' => trans('app.confirm_delete')]) }}
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

                    {{ $tasks->appends(Helpers::getInputAll())->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $("#js-btn-search").click(function(event) {
            $('#js-form-search').toggle();
            event.preventDefault();
        });
    });
</script>
@endpush
