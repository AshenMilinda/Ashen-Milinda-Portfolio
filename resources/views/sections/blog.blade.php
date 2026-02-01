<section id="blog" class="blog-section">
    <div class="blog-container">
        <div class="blog-header" data-aos="fade-up">
            <span class="blog-tag">06. INSIGHTS</span>
            <h2 class="blog-title">Latest <span>Stories</span></h2>
            <p class="blog-subtitle">Sharing my thoughts on design, technology, and the future of the web.</p>
        </div>

        <div class="blog-grid">
            <!-- Blog Post 1 -->
            <article class="blog-card" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&q=80&w=800" alt="Tech Trends">
                    <div class="blog-date">
                        <span class="day">15</span>
                        <span class="month">JAN</span>
                    </div>
                </div>
                <div class="blog-content">
                    <span class="blog-category">Technology</span>
                    <h3 class="blog-post-title">The Future of Minimalist Web Design in 2026</h3>
                    <p class="blog-excerpt">Exploring how simplicity and high performance are shaping the next generation of digital experiences...</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Blog Post 2 -->
            <article class="blog-card" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&q=80&w=800" alt="UI Design">
                    <div class="blog-date">
                        <span class="day">10</span>
                        <span class="month">JAN</span>
                    </div>
                </div>
                <div class="blog-content">
                    <span class="blog-category">Design</span>
                    <h3 class="blog-post-title">Mastering Color Theory for Modern UI/UX</h3>
                    <p class="blog-excerpt">A deep dive into how color psychology affects user behavior and conversion rates in e-commerce...</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Blog Post 3 -->
            <article class="blog-card" data-aos="fade-up" data-aos-delay="300">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=800" alt="Development">
                    <div class="blog-date">
                        <span class="day">05</span>
                        <span class="month">JAN</span>
                    </div>
                </div>
                <div class="blog-content">
                    <span class="blog-category">Development</span>
                    <h3 class="blog-post-title">Why Laravel is Still the Best Framework</h3>
                    <p class="blog-excerpt">Examining the power of Laravel's ecosystem and why it remains the top choice for developers in 2026...</p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>

        <div class="blog-cta" data-aos="fade-up">
            <a href="#" class="btn-outline-blog">View All Posts</a>
        </div>
    </div>
</section>

<style>
    .blog-section {
        background-color: #080a10;
        padding: 120px 10%;
        color: #fff;
    }

    .blog-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .blog-header {
        text-align: center;
        margin-bottom: 70px;
    }

    .blog-tag {
        color: #3b82f6;
        font-weight: 700;
        letter-spacing: 4px;
        font-size: 12px;
        margin-bottom: 15px;
        display: block;
    }

    .blog-title {
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 800;
        margin-bottom: 20px;
    }

    .blog-title span {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .blog-subtitle {
        color: #8892b0;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 60px;
    }

    .blog-card {
        background: rgba(255, 255, 255, 0.02);
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.4s ease;
    }

    .blog-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.04);
        border-color: rgba(59, 130, 246, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    .blog-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .blog-card:hover .blog-image img {
        transform: scale(1.1);
    }

    .blog-date {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: #3b82f6;
        padding: 5px 15px;
        border-radius: 10px;
        text-align: center;
        display: flex;
        flex-direction: column;
        line-height: 1.2;
        box-shadow: 0 5px 15px rgba(59, 130, 246, 0.4);
    }

    .blog-date .day {
        font-weight: 800;
        font-size: 18px;
    }

    .blog-date .month {
        font-size: 10px;
        font-weight: 700;
    }

    .blog-content {
        padding: 30px;
    }

    .blog-category {
        color: #3b82f6;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 15px;
        display: block;
    }

    .blog-post-title {
        font-size: 20px;
        line-height: 1.4;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .blog-card:hover .blog-post-title {
        color: #3b82f6;
    }

    .blog-excerpt {
        color: #8892b0;
        font-size: 15px;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .read-more {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
    }

    .read-more i {
        font-size: 12px;
    }

    .read-more:hover {
        gap: 15px;
        color: #3b82f6;
    }

    .blog-cta {
        text-align: center;
    }

    .btn-outline-blog {
        padding: 15px 40px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-outline-blog:hover {
        background: #fff;
        color: #080a10;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .blog-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
        .blog-section { padding: 80px 5%; }
        .blog-grid { grid-template-columns: 1fr; }
        .blog-title { font-size: 36px; }
    }
</style>
