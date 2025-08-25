@extends('layout.backLayout')
@section('title', 'Admin Dashboard')
@section('content')

    @if(session('success'))
        <div class="alert alert-success" style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    @include('partials.about.back.about')
    <hr>
    @include('partials.portfolio.back.create')
    @include('partials.portfolio.back.list')
    <hr>
    @include('partials.skill.back.create')
    @include('partials.skill.back.list')
    <hr>
    @include('partials.services.back.create')
    @include('partials.services.back.list')
    <hr>
    @include('partials.testimonials.back.create')
    @include('partials.testimonials.back.list')
    <hr>
    @include('partials.contact.back.edit')
    <hr>
    @include('partials.messages.back.list')
@endsection
