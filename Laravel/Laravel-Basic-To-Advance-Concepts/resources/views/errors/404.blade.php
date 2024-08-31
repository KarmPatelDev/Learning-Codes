<!-- use ===> php artisan vendon:publish  <===more moving this in views -->

@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
