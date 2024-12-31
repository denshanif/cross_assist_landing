<section class="section-padding mt-5 mb-5" id="portfolio">
    <div class="container-xl">
        <!-- Section Header -->
        <div class="text-center mb-xl">
            <h2 class="section-title">Portfolio Kami</h2>
            <p class="section-subtitle">Karya nyata yang telah kami lakukan dalam mendukung transformasi digital bisnis Klien kami</p>
        </div>

        <!-- Portfolio Filter -->
        <div class="filter-wrapper text-center mb-xl">
            <div class="button-group filter-buttons">
                <button class="btn btn-outline active" data-filter="all">Semua</button>
                <button class="btn btn-outline" data-filter="landing-page">Landing Page</button>
                <button class="btn btn-outline" data-filter="company-profile">Company Profile</button>
                <button class="btn btn-outline" data-filter="system">Sistem Informasi</button>
            </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-3 gap-lg">
            <div class="portfolio-item" data-category="landing-page">
                <div class="card">
                    <div class="card-image portfolio-image">
                        <img src="{{ asset('assets/img/landing-page.png') }}"
                             alt="Project Name 1"
                             class="img-fluid">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h3 class="h4 text-white mb-md">Landing Page PT XYZ</h3>
                                <p class="text-white-50 mb-lg">Landing Page</p>
                                <div class="button-group">
                                    <a href="#" class="btn btn-light btn-sm" target="_blank">
                                        <i class="fas fa-link"></i>
                                        Live Preview
                                    </a>
                                    <button class="btn btn-light btn-sm" data-modal="portfolio-1">
                                        <i class="fas fa-search"></i>
                                        Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="tech-stack">
                            <span class="badge badge-gradient">Laravel</span>
                            <span class="badge badge-gradient">Bootstrap</span>
                            <span class="badge badge-gradient">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5">
            <button class="btn btn-primary" id="load-more">
                Lihat Lebih Banyak
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
    </div>
</section>
