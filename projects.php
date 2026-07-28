<?php 
$currentPage = 'projects';
include 'includes/header.php'; 
?>

<main>
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="banner-title">Projects</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Projects</span>
            </div>
        </div>
    </section>

    <!-- Projects Portfolio Section -->
    <section class="projects-portfolio-section" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 40px; text-align: center;">
                <p class="section-subtitle" style="justify-content: center;">OUR PROJECTS</p>
                <h2 class="section-title">Explore <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">Our Portfolio</span><br>of Featured Projects</h2>
            </div>
            
            <div class="portfolio-filters">
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Interior</button>
                <button class="filter-btn">Exterior</button>
                <button class="filter-btn">Residence</button>
                <button class="filter-btn">Offices</button>
                <button class="filter-btn">Kitchen</button>
                <button class="filter-btn">Living Room</button>
                <button class="filter-btn">Bed Room</button>
                <button class="filter-btn">Hospitality Design</button>
            </div>
            
            <div class="projects-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
                <!-- Project 1 (Active) -->
                <div class="project-card active">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern 4 BHK Apartment">
                        <div class="project-info">
                            <h3>Modern 4 BHK Apartment<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Apartment</span>
                                <span>Residential Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern and Luxurious 6 BHK">
                        <div class="project-info">
                            <h3>Modern and Luxurious 6 BHK<br>Bungalow Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Bungalow</span>
                                <span>Residential Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern Hair Salon">
                        <div class="project-info">
                            <h3>Modern Hair Salon<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Salon</span>
                                <span>Commercial Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern Restaurant">
                        <div class="project-info">
                            <h3>Modern Restaurant<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Restaurant</span>
                                <span>Commercial Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern 2 BHK Apartment">
                        <div class="project-info">
                            <h3>Modern 2 BHK Apartment<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Apartment</span>
                                <span>Residential Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Digital Agency Office">
                        <div class="project-info">
                            <h3>Digital Agency Office<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Agency</span>
                                <span>Commercial Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 7 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern 6 BHK Bungalow">
                        <div class="project-info">
                            <h3>Modern 6 BHK Bungalow<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2023</span>
                                <span>Bungalow</span>
                                <span>Residential Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 8 -->
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern Coffee Cafe">
                        <div class="project-info">
                            <h3>Modern Coffee Cafe<br>Interior Design</h3>
                            <div class="project-tags">
                                <span>2024</span>
                                <span>Agency</span>
                                <span>Commercial Design</span>
                            </div>
                        </div>
                        <div class="project-btn-container">
                            <a href="#" class="project-btn"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Marquee and Contact from components -->
    <?php include 'includes/components/contact.php'; ?>


</main>

<?php include 'includes/footer.php'; ?>
