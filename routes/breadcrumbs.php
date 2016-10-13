<?php

Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push(trans('app.home'), route('home'));
});

Breadcrumbs::register('task', function($breadcrumbs, $task)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('app.tasks'), route('task.index'));
    $breadcrumbs->push(trans('app.' . $task));
});
