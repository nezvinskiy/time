@extends('layouts.app')

@section('title', trans('app.show'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.show') }}</div>
                <div class="panel-body">

                    @include('components.alert')

                    <div class="btn-control">
                        {{ link_to_route('task.edit', trans('app.edit'), ['id' => $task->id], ['class' => 'btn btn-primary']) }}
                    </div>

                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>{{ trans('app.id') }}</strong>
                                </td>
                                <td>
                                    {{ $task->id }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>{{ trans('app.name') }}</strong>
                                </td>
                                <td>
                                    {{ $task->name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>{{ trans('app.description') }}</strong>
                                </td>
                                <td>
                                    {{ $task->description }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection