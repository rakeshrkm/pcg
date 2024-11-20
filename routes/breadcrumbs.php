<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;





Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('index'));
});

Breadcrumbs::for('Permanent_Staffing', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Permanent Staffing', route('permanentStaffing'));
});

Breadcrumbs::for('Temporary_Staffing', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Temporary Staffing', route('temporaryStaffing'));
});


Breadcrumbs::for('executiveSearch', function (BreadcrumbTrail $trail) {
    $trail->parent('Permanent_Staffing');
    $trail->push('Executive Search', route('executiveSearch'));
});



Breadcrumbs::for('leadershipHiring', function (BreadcrumbTrail $trail) {
    $trail->parent('Permanent_Staffing');
    $trail->push('Leadership Hiring', route('leadershipHiring'));
});


Breadcrumbs::for('headHunting', function (BreadcrumbTrail $trail) {
    $trail->parent('Permanent_Staffing');
    $trail->push('Head Hunting', route('headHunting'));
});


Breadcrumbs::for('ItNonIthiring', function (BreadcrumbTrail $trail) {
    $trail->parent('Permanent_Staffing');
    $trail->push('IT/NON-IT Hiring', route('ItNonIthiring'));
});

Breadcrumbs::for('contractStaffing', function (BreadcrumbTrail $trail) {
    $trail->parent('Temporary_Staffing');
    $trail->push('Contract Staffing', route('contractStaffing'));
});

Breadcrumbs::for('contractToHire', function (BreadcrumbTrail $trail) {
    $trail->parent('Temporary_Staffing');
    $trail->push('Contract-to-Hire (C2H) Hiring', route('contractToHire'));
});

Breadcrumbs::for('payrollProcessing', function (BreadcrumbTrail $trail) {
    $trail->parent('Temporary_Staffing');
    $trail->push('Payroll Processing', route('payrollProcessing'));
});