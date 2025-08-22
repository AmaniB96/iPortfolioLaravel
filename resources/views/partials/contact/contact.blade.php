<section id="contact" class="contact-section">
    <h2 class="contact-title">Contact</h2>
    
    <p class="contact-subtitle">
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
    </p>
    
    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="contact-text">
                    <h3>Location:</h3>
                    <p>place de la minoterie 10,1080 Bruxelles</p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-text">
                    <h3>Email:</h3>
                    <p>info@molengeek.com</p>
                </div>
            </div>
            
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="contact-text">
                    <h3>Call:</h3>
                    <p>+32 486 68 54 21</p>
                </div>
            </div>
            
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.698633006706!2d4.336936!3d50.8593741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xb7dba143389bd82!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1692735365039!5m2!1sfr!2sbe" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
        <div class="contact-form">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Your Name</label>
                        <input type="text" name="nom" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="sujet">Subject</label>
                    <input type="text" name="sujet" id="subject" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="6" class="form-control" required></textarea>
                </div>
                
                <div class="form-submit">
                    <button type="submit" class="send-message-btn">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>