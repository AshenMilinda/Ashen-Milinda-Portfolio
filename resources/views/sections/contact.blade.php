<section id="contact" class="contact-section">
    <div class="contact-container">
        <div class="contact-header" data-aos="fade-up">
            <span class="contact-tag">05. GET IN TOUCH</span>
            <h2 class="contact-title">Let's Work <span>Together</span></h2>
            <p class="contact-subtitle">Have a project in mind or just want to say hi? My inbox is always open.</p>
        </div>

        <div class="contact-content">
            <!-- Contact Info -->
            <div class="contact-info" data-aos="fade-right">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h3>Email Me</h3>
                        <a href="mailto:milindaashen08@gmail.com">milindaashen08@gmail.com</a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Call Me</h3>
                        <a href="tel:+94770892528">+94 770 892 528</a>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Location</h3>
                        <p>Colombo, Sri Lanka</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container" data-aos="fade-left">
                @if(session('success'))
                    <div class="success-message">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    .contact-section {
        background-color: #0b0f1a;
        padding: 120px 10%;
        color: #fff;
    }

    .contact-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 70px;
    }

    .contact-tag {
        color: #3b82f6;
        font-weight: 700;
        letter-spacing: 4px;
        font-size: 12px;
        margin-bottom: 15px;
        display: block;
    }

    .contact-title {
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 800;
        margin-bottom: 20px;
    }

    .contact-title span {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .contact-subtitle {
        color: #8892b0;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-content {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 60px;
        align-items: start;
    }

    /* Info Side */
    .info-item {
        display: flex;
        gap: 20px;
        margin-bottom: 40px;
    }

    .info-icon {
        width: 60px;
        height: 60px;
        background: rgba(59, 130, 246, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #3b82f6;
    }

    .info-text h3 {
        font-size: 18px;
        margin-bottom: 5px;
        color: #fff;
    }

    .info-text a, .info-text p {
        color: #8892b0;
        text-decoration: none;
        transition: 0.3s;
    }

    .info-text a:hover {
        color: #3b82f6;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 50px;
    }

    .social-links a {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #8892b0;
        text-decoration: none;
        transition: 0.3s;
    }

    .social-links a:hover {
        background: #3b82f6;
        color: #fff;
        transform: translateY(-5px);
    }

    /* Form Side */
    .contact-form-container {
        background: rgba(255, 255, 255, 0.02);
        padding: 40px;
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .success-message {
        background: rgba(16, 185, 129, 0.1);
        color: #10b981;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group input, .form-group textarea {
        width: 100%;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 15px 20px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transition: 0.3s;
    }

    .form-group textarea {
        height: 150px;
        resize: none;
    }

    .form-group input:focus, .form-group textarea:focus {
        outline: none;
        border-color: #3b82f6;
        background: rgba(255, 255, 255, 0.08);
    }

    .submit-btn {
        width: 100%;
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        color: #fff;
        border: none;
        padding: 15px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: 0.3s;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .contact-content {
            grid-template-columns: 1fr;
            gap: 50px;
        }
    }

    @media (max-width: 768px) {
        .contact-section { padding: 80px 5%; }
        .form-row { grid-template-columns: 1fr; }
        .contact-form-container { padding: 30px 20px; }
    }
</style>
