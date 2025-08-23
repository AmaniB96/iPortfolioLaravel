@extends('layout.backLayout')
@section('content')
    <div class="admin-form-container">
        <h1>Edit Testimonial</h1>
        <form action="{{ route('backTestimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Name</label>
                <input type="text" name="nom" id="nom" value="{{ $testimonial->nom }}">
            </div>
            <div class="form-group">
                <label for="text">Quote</label>
                <textarea name="text" id="text" rows="3">{{ $testimonial->text }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">New Image</label>
                <input type="file" name="image" id="image">
                <p>Current: <img src="{{ asset($testimonial->image) }}" width="80" alt=""></p>
            </div>
            <button type="submit" class="btn-back-submit">Update Testimonial</button>
        </form>
    </div>
@endsection