<section id="services" class="services-section">
    <h2 class="services-title">Services</h2>
    
    <p class="services-subtitle">
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
    </p>
    
    <div class="services-grid">
        @foreach ($services as $service)
            <div class="service-item">
                <div class="service-icon">
                    <i class="{{ $service->icon }}"></i>
                </div>
                <h3 class="service-title">{{ $service->title }}</h3>
                <p class="service-text">{{ $service->text }}</p>
            </div>
        @endforeach
    </div>
</section>