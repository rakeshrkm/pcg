<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;





Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('index'));
});


Breadcrumbs::for('executiveSearch', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Executive Search', route('executiveSearch'));
});