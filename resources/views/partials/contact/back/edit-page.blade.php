@extends('layout.backLayout')
@section('content')
    <div class="admin-form-container">
        <h1>Edit Contact Information</h1>
        <form action="{{ route('backContact.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" value="{{ $contact->location }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $contact->email }}">
            </div>
            <div class="form-group">
                <label for="call">Call</label>
                <input type="text" name="call" id="call" value="{{ $contact->call }}">
            </div>
            <button type="submit" class