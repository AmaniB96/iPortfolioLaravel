@extends('layout.backLayout')
@section('content')
    <div class="admin-form-container">
        <h1>Edit Service</h1>
        <form action="{{ route('backService.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="service">Service Name</label>
                <input type="text" name="service" id="service" value="{{ $service->service }}">
            </div>
            <button type="submit" class="btn-back-submit">Update Service</button>
        </form>
    </div>
@endsection