<section>
    <h2>Ajouter un Skill</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('backSkill.store') }}" method="POST" class="skill-back-form">
        @csrf
        <div class="form-group">
            <label for="skill">Nom du skill</label>
            <input type="text" name="skill" id="skill" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pourcentage">Pourcentage</label>
            <input type="number" name="pourcentage" id="pourcentage" class="form-control" min="0" max="100" required>
        </div>
        <button type="submit" class="btn-back-submit">Ajouter</button>
    </form>
</section>