@extends('layout.backLayout')
@section('content')
    <div class="admin-form-container">
        <h1>Edit Skill</h1>
        <form action="{{ route('backSkill.update', $skill->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="skill">Skill Name</label>
                <input type="text" name="skill" id="skill" value="{{ $skill->skill }}">
            </div>
            <div class="form-group">
                <label for="pourcentage">Proficiency (%)</label>
                <input type="number" name="pourcentage" id="pourcentage" value="{{ $skill->pourcentage }}" min="0" max="100">
            </div>
            <button type="submit" class="btn-back-submit">Update Skill</button>
        </form>
    </div>
@endsection