@extends('layout.backLayout')
@section('title', 'Home')
@section('content')

    @include('partials.about.back.about')
    @include('partials.portfolio.back.create')
    @include('partials.portfolio.back.list')
    @include('partials.skill.back.create')
@endsection
