<section id="portfolio" class="portfolio-section">
    <div class="portfolio-container">
        <div class="portfolio-header" data-aos="fade-up">
            <span class="portfolio-tag">03. MY WORK</span>
            <h2 class="portfolio-title">Featured <span>Projects</span></h2>
            <p class="portfolio-subtitle">A collection of digital experiences and physical products I've crafted with precision.</p>
        </div>

        <!-- Portfolio Filter -->
        <div class="portfolio-filter" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
            <button class="filter-btn" data-filter="design">Graphic Design</button>
            <button class="filter-btn" data-filter="print">Print Media</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid" data-aos="fade-up">
            @forelse($projects as $index => $project)
                <div class="portfolio-item {{ $project->category }}" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <div class="portfolio-card">
                        <img src="{{ $project->image ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800' }}" alt="{{ $project->title }}">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span class="p-category">
                                    @if($project->category == 'web') Web Development
                                    @elseif($project->category == 'design') Graphic Design
                                    @elseif($project->category == 'print') Print Media
                                    @else {{ ucfirst($project->category) }} @endif
                                </span>
                                <h3>{{ $project->title }}</h3>
                                <div class="p-links">
                                    @if($project->link)
                                        <a href="{{ $project->link }}" target="_blank"><i class="fas fa-link"></i></a>
                                    @endif
                                    @if($project->github_link)
                                        <a href="{{ $project->github_link }}" target="_blank"><i class="fab fa-github"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Fallback Static Projects if DB is empty -->
                <div class="portfolio-item web" data-aos="zoom-in">
                    <div class="portfolio-card">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Work 1">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <span class="p-category">Web Development</span>
                                <h3>E-Commerce Enterprise</h3>
                                <div class="p-links">
                                    <a href="#"><i class="fas fa-link"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ... other static items could stay for now or just one -->
            @endforelse
        </div>

        <div class="portfolio-cta" data-aos="fade-up">
            <a href="#" class="btn-more">Explore All Works</a>
        </div>
    </div>
</section>

<style>
    .portfolio-section {
        background-color: #080a10;
        padding: 120px 10%;
        color: #fff;
        position: relative;
    }

    .portfolio-container {
        max-width: 1400px;
        margin: 0 auto;
    }

    .portfolio-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .portfolio-tag {
        color: #3b82f6;
        font-weight: 700;
        letter-spacing: 4px;
        font-size: 12px;
        margin-bottom: 15px;
        display: block;
    }

    .portfolio-title {
        font-size: clamp(32px, 5vw, 48px);
        font-weight: 800;
        margin-bottom: 20px;
    }

    .portfolio-title span {
        background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .portfolio-subtitle {
        color: #8892b0;
        font-size: 18px;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Filtering System */
    .portfolio-filter {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 50px;
        flex-wrap: wrap;
    }

    .filter-btn {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #8892b0;
        padding: 10px 25px;
        border-radius: 30px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .filter-btn:hover, .filter-btn.active {
        background: #3b82f6;
        color: #fff;
        border-color: #3b82f6;
        box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
    }

    /* Grid Layout */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-bottom: 60px;
    }

    .portfolio-card {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        aspect-ratio: 4/3;
        background: #112240;
    }

    .portfolio-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(8, 10, 16, 0.95) 0%, rgba(59, 130, 246, 0.4) 100%);
        display: flex;
        align-items: flex-end;
        padding: 30px;
        opacity: 0;
        transition: 0.4s;
        backdrop-filter: blur(4px);
    }

    .portfolio-card:hover img {
        transform: scale(1.1);
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .overlay-content h3 {
        font-size: 20px;
        margin-bottom: 15px;
        transform: translateY(20px);
        transition: 0.4s 0.1s;
    }

    .p-category {
        color: #3b82f6;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        display: block;
        margin-bottom: 5px;
        transform: translateY(20px);
        transition: 0.4s;
    }

    .p-links {
        display: flex;
        gap: 15px;
        transform: translateY(20px);
        transition: 0.4s 0.2s;
    }

    .portfolio-card:hover .overlay-content h3,
    .portfolio-card:hover .p-category,
    .portfolio-card:hover .p-links {
        transform: translateY(0);
    }

    .p-links a {
        width: 40px;
        height: 40px;
        background: #fff;
        color: #080a10;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        transition: 0.3s;
    }

    .p-links a:hover {
        background: #3b82f6;
        color: #fff;
        transform: scale(1.1);
    }

    .portfolio-cta {
        text-align: center;
    }

    .btn-more {
        display: inline-block;
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #fff;
        padding: 15px 40px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-more:hover {
        background: #fff;
        color: #080a10;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .portfolio-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
        .portfolio-section { padding: 80px 5%; }
        .portfolio-grid { grid-template-columns: 1fr; }
        .portfolio-title { font-size: 36px; }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                        setTimeout(() => item.style.opacity = '1', 10);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => item.style.display = 'none', 300);
                    }
                });
            });
        });
    });
</script>
