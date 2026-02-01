<section id="services" class="services-section">
    <!-- Background Accents -->
    <div class="services-glow"></div>
    
    <div class="services-container">
        <div class="services-header" data-aos="fade-up">
            <span class="services-tag">02. EXPERTISE</span>
            <h2 class="services-title">My Professional <span>Services</span></h2>
            <p class="services-subtitle">Delivering high-performance digital solutions and precision-crafted physical products.</p>
        </div>

        <div class="services-grid">
            <!-- Service 1: Web Development -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-top">
                    <div class="s-icon"><i class="fas fa-code"></i></div>
                    <span class="s-number">01</span>
                </div>
                <h3>Web Development</h3>
                <p>Building high-performance, secure, and scalable web applications. From custom dashboards to complex enterprise systems.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> ASP.NET (C#) & Laravel</li>
                    <li><i class="fas fa-check"></i> React & Modern JavaScript</li>
                    <li><i class="fas fa-check"></i> SQL Database Optimization</li>
                    <li><i class="fas fa-check"></i> API Integration & Security</li>
                </ul>
                <div class="s-card-bg"></div>
            </div>

            <!-- Service 2: Graphic & UI/UX Design -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-top">
                    <div class="s-icon"><i class="fas fa-bezier-curve"></i></div>
                    <span class="s-number">02</span>
                </div>
                <h3>Creative Design</h3>
                <p>Crafting visual identities that leave a lasting impression. Combining aesthetic beauty with functional user journeys.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Logo & Visual Identity</li>
                    <li><i class="fas fa-check"></i> UI/UX Design (Figma)</li>
                    <li><i class="fas fa-check"></i> Social Media Branding</li>
                    <li><i class="fas fa-check"></i> Marketing Collateral</li>
                </ul>
                <div class="s-card-bg"></div>
            </div>

            <!-- Service 3: Print & Production -->
            <div class="service-card highlight-s" data-aos="fade-up" data-aos-delay="300">
                <div class="service-top">
                    <div class="s-icon"><i class="fas fa-print"></i></div>
                    <span class="s-number">03</span>
                </div>
                <h3>Print Production</h3>
                <p>End-to-end printing solutions with deep technical knowledge of materials, CMYK workflows, and high-end finishing.</p>
                <ul class="service-list">
                    <li><i class="fas fa-check"></i> Professional Pre-press</li>
                    <li><i class="fas fa-check"></i> Product Packaging Design</li>
                    <li><i class="fas fa-check"></i> Commercial Print Media</li>
                    <li><i class="fas fa-check"></i> Material & Color Strategy</li>
                </ul>
                <div class="s-card-bg"></div>
            </div>
        </div>

        <div class="services-footer" data-aos="fade-up">
            <p>Need a custom solution for your business?</p>
            <a href="#contact" class="btn-services">Start a Project <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<style>
    .services-section {
        background-color: #0b0f1a;
        padding: 120px 10%;
        position: relative;
        overflow: hidden;
        color: #fff;
    }

    .services-glow {
        position: absolute;
        bottom: -10%;
        left: 50%;
        transform: translateX(-50%);
        width: 800px;
        height: 400px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
        z-index: 1;
        pointer-events: none;
    }

    .services-container {
        max-width: 1300px;
        margin: 0 auto;
        position: relative;
        z-index: 5;
    }

    .services-header {
        text-align: center;
        margin-bottom: 80px;
    }

    .services-tag {
        color: #3b82f6;
        font-weight: 700;
        letter-spacing: 4px;
        font-size: 12px;
        margin-bottom: 15px;
        display: block;
    }

    .services-title {
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 800;
        margin-bottom: 20px;
    }

    .services-title span {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .services-subtitle {
        color: #8892b0;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Grid & Cards */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 60px;
    }

    .service-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 24px;
        padding: 45px 35px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .service-card:hover {
        transform: translateY(-12px);
        border-color: rgba(59, 130, 246, 0.3);
        background: rgba(255, 255, 255, 0.04);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .service-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .s-icon {
        font-size: 32px;
        color: #3b82f6;
        transition: 0.3s;
    }

    .service-card:hover .s-icon {
        transform: scale(1.1);
        color: #60a5fa;
    }

    .s-number {
        font-size: 14px;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.1);
        font-family: 'Space Mono', monospace;
    }

    .service-card h3 {
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .service-card p {
        color: #8892b0;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .service-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-list li {
        color: #ccd6f6;
        font-size: 14px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .service-list li i {
        font-size: 12px;
        color: #3b82f6;
    }

    .highlight-s {
        border-color: rgba(59, 130, 246, 0.2);
        background: rgba(59, 130, 246, 0.03);
    }

    /* Footer Action */
    .services-footer {
        text-align: center;
        padding-top: 40px;
    }

    .services-footer p {
        color: #8892b0;
        margin-bottom: 25px;
        font-size: 17px;
    }

    .btn-services {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: #3b82f6;
        color: #fff;
        padding: 16px 40px;
        border-radius: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.3s;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
    }

    .btn-services:hover {
        background: #2563eb;
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(59, 130, 246, 0.3);
    }

    /* Responsive */
    @media (max-width: 1100px) {
        .services-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
        .services-section { padding: 100px 5%; }
        .services-grid { grid-template-columns: 1fr; }
        .services-title { font-size: 36px; }
        .service-card { padding: 35px 25px; }
    }
</style>
