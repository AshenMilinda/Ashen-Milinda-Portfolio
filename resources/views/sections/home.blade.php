<section id="home" class="hero-section">
    <!-- Clean IT Neural Network Background -->
    <canvas id="neuralCanvas"></canvas>

    <div class="hero-container">
        <!-- Left Side: Professional Intro -->
        <div class="hero-info">
            <span class="tech-tag">INNOVATIVE DESIGNER</span>
            <h4 class="hi-text">Hi.</h4>
            <h1 class="main-title">I Am <span>Ashen Milinda.</span></h1>
            <h2 class="role-text">I Am Creative <span id="changing-text">Graphic Designer</span></h2>
            
            <p class="summary-text">
                Specializing in cutting-edge <b>Graphic Design</b> and modern <b>Web Development</b>. 
                I turn complex ideas into elegant digital solutions.
            </p>

            <div class="cta-group">
                <a href="#portfolio" class="primary-btn">View My Portfolio</a>
                <a href="#contact" class="secondary-btn">Contact Me</a>
            </div>
        </div>

        <!-- Right Side: Clean Profile Image -->
        <div class="hero-image-box">
            <img src="{{ asset('images/ashen.png') }}" alt="Ashen Milinda" class="profile-image" loading="eager" fetchpriority="high">
        </div>
    </div>
</section>

<style>
    .hero-section {
        background-color: #080a10 !important;
        height: 100vh; /* Use fixed height for desktop to prevent stretching */
        min-height: 600px; /* Minimum height for small desktop screens */
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        padding: 0 10%;
    }

    #neuralCanvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0.8;
    }

    .hero-container {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        z-index: 5;
        gap: 20px;
        height: 100%; /* Fill the 100vh section */
    }

    .hero-info {
        flex: 1.5; /* Give more space to text */
        text-align: left; /* Change back to left for clarity */
        padding-right: 20px;
    }

    .tech-tag {
        color: #3b82f6;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 20px;
        display: block;
        opacity: 0.8;
    }

    .hi-text {
        color: #fff;
        font-size: 28px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .main-title {
        color: #fff;
        font-size: 72px; /* Slightly smaller to prevent overlap */
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 20px;
        letter-spacing: -2px;
    }

    .main-title span {
        color: #3b82f6;
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .role-text {
        font-size: 32px;
        color: #94a3b8;
        font-weight: 400;
        margin-bottom: 25px;
    }

    #changing-text {
        color: #fff;
        font-weight: 600;
        position: relative;
    }

    .summary-text {
        color: #64748b;
        font-size: 17px;
        max-width: 500px;
        line-height: 1.7;
        margin-bottom: 35px;
        margin-left: 0; /* Align left */
        margin-right: 0;
    }

    .cta-group {
        display: flex;
        gap: 20px;
        justify-content: flex-start; /* Align buttons left */
    }

    .primary-btn {
        background-color: #3b82f6;
        color: #fff;
        padding: 16px 36px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
        transition: all 0.3s ease;
    }

    .primary-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(59, 130, 246, 0.4);
        background-color: #2563eb;
    }

    .secondary-btn {
        padding: 16px 36px;
        border: 2px solid rgba(148, 163, 184, 0.3);
        border-radius: 8px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .secondary-btn:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: #fff;
    }

    .hero-image-box {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-self: flex-end; /* Push to the very bottom */
        position: relative;
    }

    .profile-image {
        max-width: 100%;
        height: auto;
        max-height: 90vh;
        z-index: 10;
        display: block;
        vertical-align: bottom;
        margin-bottom: -5px;
    }

    .profile-image:hover {
        transform: scale(1.03);
    }

    /* Tablet & iPad Air Optimization */
    @media (max-width: 1024px) {
        .hero-section { padding: 0 5%; }
        .hero-container { 
            gap: 20px; 
            flex-direction: row; 
            align-items: center;
        }
        .hero-info { flex: 1.4; }
        .main-title { font-size: 52px; }
        .role-text { font-size: 26px; }
        .summary-text { font-size: 16px; margin-bottom: 30px; }
        .profile-image { max-height: 65vh; }
    }

    /* iPad Air Portfolio Specific */
    @media (max-width: 820px) {
        .main-title { font-size: 46px; }
        .role-text { font-size: 24px; }
        .hero-container { gap: 15px; }
        .profile-image { max-height: 60vh; }
    }

    /* Tablet Portrait / Small Tablet */
    @media (max-width: 768px) {
        .hero-section {
            padding: 100px 5% 0 5%;
            height: auto;
            min-height: 100vh;
        }
        .hero-container {
            flex-direction: column-reverse; /* Image at Top for mobile */
            text-align: center;
            gap: 30px;
        }
        .hero-info {
            width: 100%;
            padding-right: 0;
            padding-bottom: 40px;
            text-align: center;
        }
        .main-title { font-size: 42px; }
        .summary-text { margin: 0 auto 30px; }
        .cta-group { justify-content: center; }
        .hero-image-box { width: 100%; justify-content: center; }
        .profile-image { max-height: 45vh; }
    }

    /* Mobile Devices */
    @media (max-width: 576px) {
        .hero-section { padding-top: 80px; }
        .main-title { font-size: 38px; }
        .role-text { font-size: 22px; }
        .summary-text { font-size: 15px; }
        .cta-group { 
            flex-direction: column; 
            width: 100%; 
            align-items: center;
            gap: 15px;
        }
        .primary-btn, .secondary-btn { 
            width: 100%; 
            max-width: 280px; 
            padding: 14px;
        }
        .profile-image { max-height: 40vh; }
    }

    /* Extra Small Devices */
    @media (max-width: 380px) {
        .main-title { font-size: 32px; }
        .role-text { font-size: 18px; }
        .hi-text { font-size: 22px; }
    }
</style>

<script>
    // Role Switcher
    const roles = ["Graphic Designer", "Web Developer", "UI/UX Expert"];
    let roleIdx = 0;
    const roleElem = document.getElementById('changing-text');

    setInterval(() => {
        roleElem.style.opacity = 0;
        setTimeout(() => {
            roleIdx = (roleIdx + 1) % roles.length;
            roleElem.innerText = roles[roleIdx];
            roleElem.style.opacity = 1;
        }, 400);
    }, 2000);

    // Modern Neural Network Animation
    const canvas = document.getElementById('neuralCanvas');
    const ctx = canvas.getContext('2d');
    let nodes = [];
    const maxDist = 180;
    const mouseNode = { x: null, y: null, radius: 200 };

    window.addEventListener('mousemove', (e) => {
        mouseNode.x = e.clientX;
        mouseNode.y = e.clientY;
    });

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    class Node {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.vX = (Math.random() - 0.5) * 0.7;
            this.vY = (Math.random() - 0.5) * 0.7;
            this.size = Math.random() * 2 + 1;
        }

        update() {
            this.x += this.vX;
            this.y += this.vY;

            if (this.x < 0 || this.x > canvas.width) this.vX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.vY *= -1;

            // Interaction with mouse
            const dx = mouseNode.x - this.x;
            const dy = mouseNode.y - this.y;
            const dist = Math.sqrt(dx*dx + dy*dy);
            if (dist < mouseNode.radius) {
                const force = (mouseNode.radius - dist) / mouseNode.radius;
                this.x -= dx * force * 0.03;
                this.y -= dy * force * 0.03;
            }
        }

        draw() {
            ctx.fillStyle = 'rgba(59, 130, 246, 0.7)';
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function initNetwork() {
        nodes = [];
        // Reduce density for better performance - from 8000 to 15000 pixels per node
        const count = Math.min(Math.floor((canvas.width * canvas.height) / 15000), 100); 
        for (let i = 0; i < count; i++) nodes.push(new Node());
    }

    function drawLines() {
        ctx.lineWidth = 0.5;
        for (let i = 0; i < nodes.length; i++) {
            for (let j = i + 1; j < nodes.length; j++) {
                const dx = nodes[i].x - nodes[j].x;
                const dy = nodes[i].y - nodes[j].y;
                // Avoid Math.sqrt for initial distance check
                const distSq = dx*dx + dy*dy;

                if (distSq < maxDist * maxDist) {
                    const dist = Math.sqrt(distSq);
                    const opacity = 1 - (dist / maxDist);
                    ctx.strokeStyle = `rgba(59, 130, 246, ${opacity * 0.2})`;
                    ctx.beginPath();
                    ctx.moveTo(nodes[i].x, nodes[i].y);
                    ctx.lineTo(nodes[j].x, nodes[j].y);
                    ctx.stroke();
                }
            }
        }
    }

    let isVisible = true;
    document.addEventListener('visibilitychange', () => {
        isVisible = !document.hidden;
    });

    function animateNetwork() {
        if (!isVisible) {
            requestAnimationFrame(animateNetwork);
            return;
        }
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        nodes.forEach(n => {
            n.update();
            n.draw();
        });
        drawLines();
        requestAnimationFrame(animateNetwork);
    }

    initNetwork();
    animateNetwork();
</script>
