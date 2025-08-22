<h2 id='about' class="about-title">About</h2>

<p class="about-subtitle">{{ $about->subtitle }}</p>

<div class="about-container">
    <img src="{{ asset('storage/' . $about->avatar->image) }}" class="about-img" width="300" height="300" alt="Profile">
    <div class="about-info">
        <h4 class="about-role">UI/UX Designer & Web Developer.</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta iure omnis modi maxime voluptates, dignissimos maiores. Magni, dolor. Sint.</p>
        <ul class="about-details">
            <li><strong>Birthday:</strong> {{ \Carbon\Carbon::parse($about->birthdate)->format('d F Y') }}</li>
            <li><strong>Website:</strong> <a href="http://{{ $about->website }}" target="_blank">{{ $about->website }}</a></li>
            <li><strong>Phone:</strong> {{ $about->phone }}</li>
            <li><strong>City:</strong> {{ $about->city }}</li>
            <li><strong>Age:</strong> {{ $about->age }}</li>
            <li><strong>Degree:</strong> {{ $about->degree }}</li>
            <li><strong>Email:</strong> <a href="mailto:{{ $about->email }}">{{ $about->email }}</a></li>
            <li><strong>Freelance:</strong> {{ $about->freelance }}</li>
        </ul>
        <p class="about-desc">{{ $about->subtext }}</p>
    </div>
</div>