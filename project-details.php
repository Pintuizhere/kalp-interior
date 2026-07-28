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
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Project Details</span>
            </div>
        </div>
    </section>

    <!-- Project Details Redesign -->
    <section class="project-details-redesign" style="padding: 60px 0 0px; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1200px;">
            
            <!-- 1. Hero Split Section -->
            <div class="project-hero-split">
                <!-- Left: Image Slider -->
                <div class="hero-left-slider">
                    <div class="hero-main-img-wrapper">
                        <span class="hero-tag"><i class="fa-solid fa-house" style="margin-right: 5px;"></i> Residential Design</span>
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&q=80" alt="Main Room" class="hero-main-img">
                        <button class="nav-arrow prev"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="nav-arrow next"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    <div class="hero-thumbnails">
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=300&q=80" class="active" alt="Thumb 1">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=300&q=80" alt="Thumb 2">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=300&q=80" alt="Thumb 3">
                        <img src="https://images.unsplash.com/photo-1556910103-1c02745a8728?w=300&q=80" alt="Thumb 4">
                        <img src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?w=300&q=80" alt="Thumb 5">
                    </div>
                </div>

                <!-- Right: Details Box -->
                <div class="hero-right-details">
                    <div class="hero-details-header">
                        <h2 class="project-title">MODERN 4 BHK<br>APARTMENT</h2>
                        <div class="project-actions">
                            <button class="icon-btn"><i class="fa-regular fa-heart"></i></button>
                            <button class="icon-btn"><i class="fa-solid fa-share-nodes"></i></button>
                        </div>
                    </div>
                    <p class="location-pin"><i class="fa-solid fa-location-dot" style="color: var(--accent-color); margin-right: 8px;"></i> Mumbai, India</p>
                    
                    <p class="short-desc">A perfect blend of modern aesthetics and functional luxury. This 4 BHK apartment is designed to reflect warmth, simplicity, and sophisticated living.</p>
                    
                    <div class="project-meta-list">
                        <div class="meta-row">
                            <span class="meta-icon"><i class="fa-solid fa-building-user"></i></span>
                            <span class="meta-key">Project Type</span>
                            <span class="meta-value">Residential</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-icon"><i class="fa-solid fa-house-chimney"></i></span>
                            <span class="meta-key">Property Type</span>
                            <span class="meta-value">Apartment</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-icon"><i class="fa-solid fa-expand"></i></span>
                            <span class="meta-key">Area</span>
                            <span class="meta-value">2,350 sq. ft.</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-icon"><i class="fa-regular fa-calendar-check"></i></span>
                            <span class="meta-key">Year of Completion</span>
                            <span class="meta-value">2024</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-icon"><i class="fa-solid fa-pen-ruler"></i></span>
                            <span class="meta-key">Design Style</span>
                            <span class="meta-value">Modern Minimal</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-icon"><i class="fa-solid fa-list-check"></i></span>
                            <span class="meta-key">Scope of Work</span>
                            <span class="meta-value">Full Interior Design</span>
                        </div>
                    </div>

                    <div class="hero-cta-buttons">
                        <a href="contact.php" class="btn btn-primary" style="display: flex; align-items: center; justify-content: space-between; gap: 15px;">Get Estimate <span class="icon-circle" style="background: var(--text-dark); color: var(--accent-color); width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i></span></a>
                        <a href="#" class="btn btn-outline" style="border: 1px solid #ccc; background: white; color: var(--text-dark); padding: 12px 30px; border-radius: 30px; display: flex; align-items: center; gap: 10px; font-weight: 500; text-decoration: none;">Share Project <i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                </div>
            </div>

            <!-- 2. Top Features Row -->
            <div class="feature-row-grid">
                <div class="feature-col">
                    <div class="feature-icon-circle"><i class="fa-solid fa-compass-drafting"></i></div>
                    <h4>Thoughtful Design</h4>
                    <p>Every space is planned with purpose and precision.</p>
                </div>
                <div class="feature-col">
                    <div class="feature-icon-circle"><i class="fa-solid fa-gem"></i></div>
                    <h4>Premium Materials</h4>
                    <p>We use high-quality finishes and durable materials.</p>
                </div>
                <div class="feature-col">
                    <div class="feature-icon-circle"><i class="fa-regular fa-clock"></i></div>
                    <h4>Timely Delivery</h4>
                    <p>On-time completion with attention to every detail.</p>
                </div>
                <div class="feature-col">
                    <div class="feature-icon-circle"><i class="fa-solid fa-handshake"></i></div>
                    <h4>Client Satisfaction</h4>
                    <p>Designs that reflect our client's lifestyle and vision.</p>
                </div>
            </div>

            <!-- 3. About The Project Section -->
            <div class="project-about-split">
                <div class="about-left">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <span style="display: block; width: 40px; height: 2px; background: var(--accent-color);"></span>
                        <p class="section-subtitle" style="margin-bottom: 0;">ABOUT THE PROJECT</p>
                    </div>
                    <h2 class="section-title">Crafted for Comfort.<br><span class="accent-text signature-text" style="color: var(--accent-color); font-weight: 400; text-transform: none;">Designed for Living.</span></h2>
                    
                    <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">This modern 4 BHK apartment is designed for a young family seeking a balance between style and functionality.</p>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">The interiors feature a neutral palette, clean lines, and custom elements that create a calm and cohesive environment.</p>
                    <p style="color: #666; line-height: 1.8;">From the spacious living area to the cozy bedrooms, each space is crafted to enhance everyday living.</p>
                </div>
                <div class="about-right">
                    <div class="project-highlight-card">
                        <div class="highlight-item">
                            <div class="hi-icon"><i class="fa-solid fa-maximize"></i></div>
                            <div class="hi-text">
                                <h5>Spacious Layout</h5>
                                <p>Optimized floor plan for natural light and ventilation.</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="hi-icon"><i class="fa-solid fa-couch"></i></div>
                            <div class="hi-text">
                                <h5>Elegant Interiors</h5>
                                <p>Modern furniture, soft textures, and warm tones.</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="hi-icon"><i class="fa-solid fa-box-archive"></i></div>
                            <div class="hi-text">
                                <h5>Smart Storage</h5>
                                <p>Intelligent storage solutions for a clutter-free home.</p>
                            </div>
                        </div>
                        <div class="highlight-item">
                            <div class="hi-icon"><i class="fa-solid fa-palette"></i></div>
                            <div class="hi-text">
                                <h5>Personalized Touch</h5>
                                <p>Custom décor and design elements that reflect the client's personality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Project Gallery -->
            <div class="project-gallery-section">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
                    <span style="display: block; width: 40px; height: 2px; background: var(--accent-color);"></span>
                    <p class="section-subtitle" style="margin-bottom: 0;">PROJECT GALLERY</p>
                </div>
                <div class="project-gallery-horizontal">
                    <div class="pg-item"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80" alt="Gallery 1"></div>
                    <div class="pg-item"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=800&q=80" alt="Gallery 2"></div>
                    <div class="pg-item"><img src="https://images.unsplash.com/photo-1556910103-1c02745a8728?w=800&q=80" alt="Gallery 3"></div>
                    <div class="pg-item has-nav">
                        <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?w=800&q=80" alt="Gallery 4">
                        <button class="gallery-next-arrow"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- 5. Dark CTA Banner -->
            <div class="project-dark-cta">
                <div class="cta-content">
                    <div class="cta-icon-wrapper"><i class="fa-solid fa-pen-ruler"></i></div>
                    <div class="cta-text">
                        <h3>Have a project in mind?</h3>
                        <p>Let's create a space that's uniquely yours.</p>
                    </div>
                </div>
                <a href="contact.php" class="btn btn-primary" style="display: flex; align-items: center; gap: 10px;">Book a Consultation <span class="icon-circle" style="background: transparent; border: 1px solid rgba(0,0,0,0.3); color: var(--text-dark); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 10px;"></i></span></a>
            </div>

            <!-- 6. Bottom Features Row -->
            <div class="feature-row-grid bottom-features" style="margin-bottom: 40px;">
                <div class="feature-col">
                    <div class="feature-icon-square"><i class="fa-solid fa-medal"></i></div>
                    <h4>10+ Years Experience</h4>
                    <p>Delivering excellence in interior design.</p>
                </div>
                <div class="feature-col">
                    <div class="feature-icon-square"><i class="fa-solid fa-check-double"></i></div>
                    <h4>100+ Projects Completed</h4>
                    <p>Successfully completed residential & commercial projects.</p>
                </div>
                <div class="feature-col">
                    <div class="feature-icon-square"><i class="fa-solid fa-gears"></i></div>
                    <h4>End-to-End Solutions</h4>
                    <p>From concept to completion, we handle it all.</p>
                </div>
                <div class="feature-col">
                    <div class="feature-icon-square"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    <h4>Custom Design Approach</h4>
                    <p>Tailored designs that suit your lifestyle and needs.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- More Projects Section -->
    <section class="more-projects-section" style="padding: 40px 0 20px; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1200px;">
            <div class="more-projects-header">
                <div class="mp-header-left">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="display: block; width: 40px; height: 2px; background: var(--accent-color);"></span>
                        <p class="section-subtitle" style="margin-bottom: 0;">MORE PROJECTS</p>
                    </div>
                    <h2 class="section-title">Explore More <span class="accent-text signature-text" style="color: var(--accent-color); font-weight: 400; text-transform: none;">Inspiring Spaces</span></h2>
                </div>
                <div class="mp-header-right">
                    <a href="projects.php" class="btn btn-dark-pill">
                        <span class="icon-circle-yellow"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 14px;"></i></span> View All Projects
                    </a>
                </div>
            </div>

            <div class="more-projects-grid">
                <!-- Card 1 -->
                <div class="mp-card">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" alt="Villa" class="mp-card-bg">
                    <div class="mp-card-top">
                        <div class="mp-tag"><i class="fa-solid fa-house"></i> Residential Design</div>
                        <div class="mp-like"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="mp-card-bottom">
                        <div class="mp-card-title-row">
                            <a href="#" class="mp-link-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            <div class="mp-title-col">
                                <h3>LUXURY 5 BHK VILLA</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Pune, India</p>
                            </div>
                        </div>
                        <div class="mp-tags-row">
                            <span class="mp-pill">Villa</span>
                            <span class="mp-pill">Residential Design</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="mp-card">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Office" class="mp-card-bg">
                    <div class="mp-card-top">
                        <div class="mp-tag"><i class="fa-solid fa-building"></i> Commercial Design</div>
                        <div class="mp-like"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="mp-card-bottom">
                        <div class="mp-card-title-row">
                            <a href="#" class="mp-link-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            <div class="mp-title-col">
                                <h3>CORPORATE OFFICE SPACE</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Bangalore, India</p>
                            </div>
                        </div>
                        <div class="mp-tags-row">
                            <span class="mp-pill">Offices</span>
                            <span class="mp-pill">Commercial Design</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="mp-card">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=800&q=80" alt="Apartment" class="mp-card-bg">
                    <div class="mp-card-top">
                        <div class="mp-tag"><i class="fa-solid fa-house"></i> Residential Design</div>
                        <div class="mp-like"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="mp-card-bottom">
                        <div class="mp-card-title-row">
                            <a href="#" class="mp-link-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            <div class="mp-title-col">
                                <h3>MINIMALIST 3 BHK HOME</h3>
                                <p><i class="fa-solid fa-location-dot"></i> Delhi, India</p>
                            </div>
                        </div>
                        <div class="mp-tags-row">
                            <span class="mp-pill">Apartment</span>
                            <span class="mp-pill">Residential Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Form -->
    <?php include 'includes/components/contact.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>
