@extends('layout.app')
@section('title', 'Home')
@section('content')
@include('partials.about.about')
@include('partials.skill.skill')
@include('partials.portfolio.portfolio')
@include('partials.services.services')
@include('partials.testimonials.testimonials')
@endsection
