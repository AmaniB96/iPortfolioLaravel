<form action="{{ route('backHome.update', $about->id) }}" method="POST" class="about-back-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="subtitle">Sous-titre</label>
        <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ $about->subtitle }}">
    </div>
    <div class="form-group">
        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate" id="birthdate" class="form-control" value="{{ $about->birthdate }}">
    </div>
    <div class="form-group">
        <label for="website">Site web</label>
        <input type="text" name="website" id="website" class="form-control" value="{{ $about->website }}">
    </div>
    <div class="form-group">
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ $about->phone }}">
    </div>
    <div class="form-group">
        <label for="city">Ville</label>
        <input type="text" name="city" id="city" class="form-control" value="{{ $about->city }}">
    </div>
    <div class="form-group">
        <label for="age">Âge</label>
        <input type="number" name="age" id="age" class="form-control" value="{{ $about->age }}">
    </div>
    <div class="form-group">
        <label for="degree">Diplôme</label>
        <input type="text" name="degree" id="degree" class="form-control" value="{{ $about->degree }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $about->email }}">
    </div>
    <div class="form-group">
        <label for="freelance">Freelance</label>
        <input type="text" name="freelance" id="freelance" class="form-control" value="{{ $about->freelance }}">
    </div>
    <div class="form-group">
        <label for="subtext">Texte supplémentaire</label>
        <textarea name="subtext" id="subtext" class="form-control">{{ $about->subtext }}</textarea>
    </div>
    <div class="form-group">
        <label for="src">Avatar</label>
        @if($about->avatar && $about->avatar->image)
            <img src="{{ asset('storage/' . $about->avatar->image) }}" alt="Avatar" style="max-width:120px; margin-bottom:10px;">
        @endif
        <input type="file" name="image" id="" class="">
    </div>
    <button type="submit" class="btn-back-submit">Enregistrer</button>
</form>