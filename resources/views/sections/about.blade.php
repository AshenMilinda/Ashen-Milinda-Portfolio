<section id="about" class="about-section">
    <!-- Subtle Tech Background Effect -->
    <div class="about-bg-overlay"></div>
    <div class="glow-sphere"></div>

    <div class="about-container">
        <div class="about-main" data-aos="fade-up">
            <div class="about-header">
                <span class="about-tag">01. THE JOURNEY</span>
                <h2 class="about-title">Engineering Solutions. <br><span>Designing Visions.</span></h2>
            </div>
            
            <div class="about-intro-box">
                <p>
                    I am a multi-disciplinary <b>Full-Stack Web Developer</b>, <b>Graphic Designer</b>, and <b>Print Production Specialist</b>. 
                    With a rare blend of technical logic and creative flair, I bridge the gap between complex backend systems and pixel-perfect visual identities.
                </p>
            </div>

            <div class="about-grid">
                <!-- Dev & Design Card -->
                <div class="about-card glass-morph">
                    <div class="card-icon-minimal"><i class="fas fa-terminal"></i></div>
                    <h3>The Developer & Designer</h3>
                    <p>
                        Specializing in <b>ASP.NET (C#)</b>, <b>Laravel (PHP)</b>, and <b>React</b>. 
                        I build robust web applications with clean code and efficient <b>SQL</b> management. 
                        Leveraging <b>Photoshop</b> and <b>Illustrator</b>, I craft visuals that resonate.
                    </p>
                </div>

                <!-- Print Advantage Card -->
                <div class="about-card glass-morph highlight-card">
                    <div class="card-icon-minimal"><i class="fas fa-microchip"></i></div>
                    <h3>The Printing Advantage</h3>
                    <p>
                        As a partner in a professional printing press, I design with the physical product in mind. 
                        I master <b>CMYK workflows</b> and material selection, delivering end-to-end solutions from screen to doorstep.
                    </p>
                </div>
            </div>

            <div class="toolkit-wrapper">
                <h3 class="toolkit-title">Technical <span class="text-blue">Toolkit</span></h3>
                <div class="toolkit-grid">
                    <div class="tool-column">
                        <span class="tool-label">Infrastructure</span>
                        <div class="tool-pills">
                            <span>ASP.NET (C#)</span><span>Laravel</span><span>React</span><span>SQL</span><span>WordPress</span>
                        </div>
                    </div>
                    <div class="tool-column">
                        <span class="tool-label">Creative & Pre-press</span>
                        <div class="tool-pills">
                            <span>Photoshop</span><span>Illustrator</span><span>UI/UX</span><span>Pre-press</span><span>Branding</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-footer">
                <p class="quote">"Transforming complex logic into human-centric experiences."</p>
                <div class="about-actions">
                    <a href="#contact" class="btn-primary-tech">Let's Collaborate</a>
                    <a href="/cv.pdf" class="btn-outline-tech">View CV <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .about-section {
        background-color: #080a10;
        padding: 120px 10%;
        position: relative;
        overflow: hidden;
        color: #fff;
    }

    /* Tech Background Effects */
    .about-bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(circle at 2px 2px, rgba(59, 130, 246, 0.05) 1px, transparent 0);
        background-size: 40px 40px;
        z-index: 1;
    }

    .glow-sphere {
        position: absolute;
        top: 20%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
        z-index: 1;
        pointer-events: none;
    }

    .about-container {
        max-width: 1100px;
        margin: 0 auto;
        position: relative;
        z-index: 5;
    }

    .about-tag {
        color: #3b82f6;
        font-weight: 700;
        letter-spacing: 4px;
        font-size: 12px;
        margin-bottom: 20px;
        display: block;
    }

    .about-title {
        font-size: clamp(36px, 6vw, 56px);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 45px;
        letter-spacing: -2px;
    }

    .about-title span {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-intro-box {
        font-size: 20px;
        line-height: 1.8;
        color: #ccd6f6;
        margin-bottom: 70px;
        max-width: 850px;
    }

    /* Clean Glassmorphism Cards */
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 50px;
    }

    .glass-morph {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 24px;
        padding: 40px;
        position: relative;
        transition: all 0.4s ease;
    }

    .about-card:hover {
        transform: translateY(-8px);
        border-color: rgba(59, 130, 246, 0.3);
        background: rgba(255, 255, 255, 0.04);
    }

    .card-icon-minimal {
        font-size: 32px;
        color: #3b82f6;
        margin-bottom: 20px;
        filter: drop-shadow(0 0 10px rgba(59, 130, 246, 0.3));
    }

    .highlight-card .card-icon-minimal {
        color: #8b5cf6;
        filter: drop-shadow(0 0 10px rgba(139, 92, 246, 0.3));
    }

    .about-card h3 {
        font-size: 22px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .about-card p {
        color: #8892b0;
        line-height: 1.7;
        font-size: 15px;
    }

    /* Toolkit Section - Simplified */
    .toolkit-wrapper {
        margin-bottom: 60px;
        padding: 20px 0;
    }

    .toolkit-title {
        font-size: 24px;
        margin-bottom: 35px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .toolkit-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .tool-label {
        color: #64748b;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 15px;
    }

    .tool-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .tool-pills span {
        background: rgba(59, 130, 246, 0.05);
        border: 1px solid rgba(59, 130, 246, 0.1);
        color: #ccd6f6;
        padding: 8px 18px;
        border-radius: 10px; /* Slightly more square look */
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s;
    }

    .tool-pills span:hover {
        background: #3b82f6;
        color: #fff;
        border-color: #3b82f6;
    }

    .about-footer {
        text-align: center;
        padding-top: 40px;
    }

    .quote {
        color: #8892b0;
        font-style: italic;
        font-size: 18px;
        margin-bottom: 35px;
    }

    .about-actions {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn-primary-tech {
        background: #3b82f6;
        color: #fff;
        padding: 16px 36px;
        border-radius: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.3s;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
    }

    .btn-outline-tech {
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
        padding: 16px 36px;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .btn-outline-tech:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: #fff;
    }

    .text-blue { color: #3b82f6; }

    @media (max-width: 1024px) {
        .about-section { padding: 100px 5%; }
        .about-grid { grid-template-columns: 1fr; }
        .toolkit-grid { grid-template-columns: 1fr; gap: 30px; }
    }

    @media (max-width: 480px) {
        .about-title { font-size: 32px; }
        .about-actions { flex-direction: column; }
        .btn-primary-tech, .btn-outline-tech { text-align: center; justify-content: center; }
        .glass-morph { padding: 30px 20px; }
    }
</style>
