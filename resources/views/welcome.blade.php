<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ashen Milinda | Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --primary-bg: #131826;
            --accent-color: #3b82f6;
            --accent-gradient: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            --text-white: #ffffff;
            --text-gray: #94a3b8;
            --section-bg: #0b0f1a;
            --card-bg: rgba(30, 41, 59, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        body {
            background-color: var(--section-bg);
            color: var(--text-white);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Performance Optimizations */
        .card, .blog-card, .project-card, .hero-info, .hero-image-box {
            will-change: transform, opacity;
        }

        img {
            content-visibility: auto;
        }

        /* Navbar */
        nav {
            background-color: var(--primary-bg);
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            transition: all 0.3s ease;
        }

        .logo {
            font-size: 26px;
            font-weight: 800;
            color: var(--text-white);
            letter-spacing: -1px;
            cursor: pointer;
            text-decoration: none;
        }

        .logo span {
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 35px;
        }

        .nav-links li a {
            text-decoration: none;
            color: var(--text-white);
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-gradient);
            transition: width 0.3s ease;
        }

        .nav-links li a:hover::after {
            width: 100%;
        }

        .nav-links li a:hover {
            color: #3b82f6;
        }

        /* Hero Section */
        section {
            min-height: 100vh;
            padding: 100px 10%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero {
            background: radial-gradient(circle at 0% 0%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 100% 100%, rgba(139, 92, 246, 0.15) 0%, transparent 50%);
        }

        .hero h1 {
            font-size: 84px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 25px;
            letter-spacing: -2px;
        }

        .hero h1 span {
            display: block;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 22px;
            color: var(--text-gray);
            max-width: 700px;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .btn {
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary {
            background: var(--accent-gradient);
            color: white;
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.4);
        }

        /* Section Titles */
        .section-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--accent-gradient);
            border-radius: 2px;
        }

        /* Other Sections */
        #about, #portfolio, #blog {
            background-color: #0d121f;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            width: 100%;
        }

        .card {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.05);
            transition: all 0.3s ease;
            text-align: left;
        }

        .card:hover {
            transform: translateY(-10px);
            background: rgba(30, 41, 59, 0.8);
            border-color: rgba(59, 130, 246, 0.3);
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
            z-index: 1001;
        }

        .hamburger span {
            display: block;
            width: 28px;
            height: 3px;
            background-color: var(--text-white);
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 { font-size: 56px; }
            nav { padding: 0 5%; }
            
            .nav-links { 
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: var(--primary-bg);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 40px;
                transition: all 0.4s cubic-bezier(0.77, 0, 0.175, 1);
                padding: 40px 0;
                z-index: 999;
                border-top: 1px solid rgba(255,255,255,0.05);
            }

            .nav-links.active {
                left: 0;
            }

            .hamburger {
                display: flex;
            }

            /* Hamburger Animation */
            .hamburger.active span:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }
            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }
            .hamburger.active span:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            .hero h1 { font-size: 48px; }
            .hero p { font-size: 18px; }
            section { padding: 80px 5%; }
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav id="navbar">
        <a href="#home" class="logo">Ashen <span>Milinda</span></a>
        <ul class="nav-links" id="nav-links">
            <li><a href="#home" onclick="toggleMenu()">Home</a></li>
            <li><a href="#about" onclick="toggleMenu()">About me</a></li>
            <li><a href="#services" onclick="toggleMenu()">Service</a></li>
            <li><a href="#portfolio" onclick="toggleMenu()">Portfolio</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
            <li><a href="#blog" onclick="toggleMenu()">Blog</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Sections -->
    @include('sections.home')
    @include('sections.about')
    @include('sections.services')
    @include('sections.portfolio')
    @include('sections.contact')
    @include('sections.blog')
    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-brand" data-aos="fade-up">
                    <a href="#home" class="logo">Ashen <span>Milinda</span></a>
                    <p class="footer-bio">Crafting digital excellence through modern design and robust development. Let's build something extraordinary together.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Me</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-contact-info" data-aos="fade-up" data-aos-delay="200">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-phone-alt"></i> +94 770 892 528</p>
                    <p><i class="fas fa-envelope"></i> milindaashen08@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka</p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Ashen Milinda. All rights reserved.</p>
                <div class="footer-admin">
                    <a href="{{ route('admin.index') }}">Admin Access</a>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .main-footer {
            background-color: #0b0f1a;
            padding: 80px 10% 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            color: #fff;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1.5fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-brand .logo {
            font-size: 28px;
            text-decoration: none;
            color: #fff;
            font-weight: 700;
            display: block;
            margin-bottom: 20px;
        }

        .footer-brand .logo span { color: #3b82f6; }

        .footer-bio {
            color: #8892b0;
            line-height: 1.8;
            margin-bottom: 25px;
            max-width: 350px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8892b0;
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-social a:hover {
            background: #3b82f6;
            color: #fff;
            transform: translateY(-5px);
        }

        .footer-links h3, .footer-contact-info h3 {
            font-size: 20px;
            margin-bottom: 25px;
            position: relative;
        }

        .footer-links h3::after, .footer-contact-info h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 30px;
            height: 2px;
            background: #3b82f6;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a {
            color: #8892b0;
            text-decoration: none;
            transition: 0.3s;
            display: block;
        }

        .footer-links ul li a:hover {
            color: #3b82f6;
            padding-left: 10px;
        }

        .footer-contact-info p {
            color: #8892b0;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-contact-info i {
            color: #3b82f6;
            width: 20px;
        }

        .footer-bottom {
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #64748b;
            font-size: 14px;
        }

        .footer-admin a {
            color: #334155;
            text-decoration: none;
            font-size: 12px;
            transition: 0.3s;
        }

        .footer-admin a:hover { color: #8892b0; }

        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }
            .footer-brand { grid-column: span 2; }
        }

        @media (max-width: 768px) {
            .footer-content { grid-template-columns: 1fr; }
            .footer-brand { grid-column: span 1; }
            .footer-bottom {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>

    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('nav-links');

        function toggleMenu() {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
            
            if(navLinks.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = ''; // Empty string lets CSS or default take over
            }
        }

        // Close menu and restore scroll when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Throttled Scroll logic
        let isThrottled = false;
        window.addEventListener('scroll', function() {
            if (isThrottled) return;
            isThrottled = true;
            
            setTimeout(() => {
                const nav = document.getElementById('navbar');
                if (window.scrollY > 50) {
                    nav.style.backgroundColor = 'rgba(13, 17, 28, 0.98)';
                    nav.style.backdropFilter = 'blur(15px)';
                    nav.style.height = '70px';
                    nav.style.boxShadow = '0 10px 30px rgba(0,0,0,0.3)';
                } else {
                    nav.style.backgroundColor = '#0b0f1a';
                    nav.style.backdropFilter = 'none';
                    nav.style.height = '80px';
                    nav.style.boxShadow = 'none';
                }
                isThrottled = false;
            }, 100);
        });

        // Ensure scroll is restored on resize
        window.addEventListener('resize', () => {
            if(window.innerWidth > 992) {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    </script>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>

</body>
</html>
