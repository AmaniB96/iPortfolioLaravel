@extends('layout.backLayout')

@section('title', 'Edit Portfolio')

@section('content')
    <div class="admin-form-container">
        <h1>Edit Portfolio Item</h1>
        <form action="{{ route('backPortfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="portfolio-back-form">
            @csrf
            @method('PUT') {{-- Important for updates --}}
            
            <div class="form-group">
                <label for="filter">Category</label>
                <input type="text" name="filter" id="filter" class="form-control" value="{{ $portfolio->filter }}" required>
            </div>
            
            <div class="form-group">
                <label for="img">New Image (optional)</label>
                <input type="file" name="img" id="img" class="form-control">
                <p>Current Image:</p>
                <img src="{{ asset($portfolio->img) }}" width="150" alt="Current portfolio image">
            </div>
            
            <button type="submit" class="btn-back-submit">Update Item</button>
            <a href="{{ route('backHome.index') }}" class="btn-cancel">Cancel</a>
        </form>
    </div>
@endsection