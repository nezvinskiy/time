@extends('layouts.app')

@section('title', trans('app.dashboard'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('app.dashboard') }}</div>

                <div class="panel-body">
                    {{ trans('app.you_are_logged_in') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('styles')
<style>
    .panel-body {
        text-align: center;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Your code here.
    });
</script>
@endpush
