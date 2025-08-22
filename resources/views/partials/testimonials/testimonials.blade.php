<section id="testimonials" class="testimonials-section">
    <h2 class="testimonials-title">Ils m'ont fait confiance...</h2>
    
    <p class="testimonials-subtitle">
        J'ai eu l'occasion de mettre ma créativité au service de plusieurs projets, c'est ainsi que j'ai réaliser mes première expériences dont voici.
    </p>
    
    <div class="testimonials-grid">
        @foreach ($testimonials as $testimonial)
            <div class="testimonial-item">
                <div class="testimonial-content">
                    <div class="quote-start">&ldquo;</div>
                    <p class="testimonial-text">{{ $testimonial->comment }}</p>
                    <div class="quote-end">&rdquo;</div>
                </div>
                
                <div class="testimonial-person">
                    <img src="{{ $testimonial->img }}" alt="{{ $testimonial->name }}" class="testimonial-img">
                    <h3 class="testimonial-name">{{ $testimonial->name }}</h3>
                    <p class="testimonial-position">{{ $testimonial->position }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>