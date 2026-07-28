<?php 
$currentPage = 'services';
include 'includes/header.php'; 
?>

<main class="sd-page" style="background-color: var(--bg-white);">
    
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="banner-title">SERVICES</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Services</span>
            </div>
        </div>
    </section>

    <!-- 1. Hero Section -->
    <section class="sd-redesign-hero" style="padding: 60px 0; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1200px;">
            
            <div class="sd-hero-split">
                <div class="sd-hero-text">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="display: block; width: 40px; height: 2px; background: var(--accent-color);"></span>
                        <p class="section-subtitle" style="margin-bottom: 0;">OUR SERVICE</p>
                    </div>
                    <h1 class="sd-hero-title">INTERIOR DESIGN</h1>
                    <h2 class="sd-hero-signature signature-text">Designed Around You</h2>
                    
                    <p class="sd-hero-desc">
                        We create beautiful, functional interiors that reflect your personality and lifestyle. From concept to completion, we handle every detail to deliver spaces that inspire.
                    </p>
                    
                    <div class="sd-hero-buttons">
                        <a href="contact.php" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 10px;">Book a Consultation <span class="icon-circle" style="background: var(--text-dark); color: white; width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 10px;"></i></span></a>
                        
                        <a href="projects.php" class="btn btn-outline" style="display: inline-flex; align-items: center; gap: 10px; border: 1px solid #ccc; border-radius: 30px; padding: 12px 25px; color: var(--text-dark); text-decoration: none;">View Our Projects <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i></a>
                    </div>
                </div>
                <div class="sd-hero-img-box">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Interior Design Living Room">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Features Grid Row -->
    <section class="sd-features-grid-new" style="background-color: var(--bg-white); padding-bottom: 60px;">
        <div class="container" style="max-width: 1200px;">
            <div class="sd-features-wrapper">
                <div class="sd-f-col">
                    <div class="sd-f-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                    <h4>Personalized Approach</h4>
                    <p>Tailored designs that reflect your style and needs.</p>
                </div>
                <div class="sd-f-col">
                    <div class="sd-f-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <h4>Smart Space Planning</h4>
                    <p>Maximizing space, functionality and natural flow.</p>
                </div>
                <div class="sd-f-col">
                    <div class="sd-f-icon"><i class="fa-solid fa-couch"></i></div>
                    <h4>Premium Materials</h4>
                    <p>High-quality finishes and carefully curated materials.</p>
                </div>
                <div class="sd-f-col">
                    <div class="sd-f-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <h4>End-to-End Service</h4>
                    <p>From concept and design to execution and styling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Why Choose Us Split -->
    <section class="sd-why-choose-split" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1200px;">
            <div class="sd-why-grid">
                <div class="sd-why-left">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="display: block; width: 40px; height: 2px; background: var(--accent-color);"></span>
                        <p class="section-subtitle" style="margin-bottom: 0;">WHY CHOOSE US</p>
                    </div>
                    <h2 class="sd-why-title">What Makes Our<br><span class="signature-text" style="color: var(--accent-color); font-weight: 400; text-transform: none;">Interior Design Unique?</span></h2>
                    
                    <p class="sd-why-desc">
                        We blend creativity with functionality to design interiors that are not only beautiful but also practical and timeless. Every project is managed with attention to detail, ensuring seamless execution and complete client satisfaction.
                    </p>
                    
                    <div class="sd-why-img">
                        <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Detail interior">
                    </div>
                </div>
                <div class="sd-why-right">
                    <div class="why-list-item">
                        <div class="why-check"><i class="fa-solid fa-check"></i></div>
                        <div class="why-text">
                            <h4>Creative & Functional Designs</h4>
                            <p>Spaces that look stunning and work beautifully for everyday living.</p>
                        </div>
                    </div>
                    <div class="why-list-item">
                        <div class="why-check"><i class="fa-solid fa-check"></i></div>
                        <div class="why-text">
                            <h4>Client-Centric Process</h4>
                            <p>Your vision is our priority. We listen, collaborate and deliver.</p>
                        </div>
                    </div>
                    <div class="why-list-item">
                        <div class="why-check"><i class="fa-solid fa-check"></i></div>
                        <div class="why-text">
                            <h4>Timely Delivery</h4>
                            <p>On-time project completion with transparency at every step.</p>
                        </div>
                    </div>
                    <div class="why-list-item">
                        <div class="why-check"><i class="fa-solid fa-check"></i></div>
                        <div class="why-text">
                            <h4>Quality You Can Trust</h4>
                            <p>We use top-grade materials and partner with skilled craftsmen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Our Process -->
    <section class="sd-process-timeline" style="padding: 100px 0; background-color: #F8F5F0;">
        <div class="container" style="max-width: 1200px; text-align: center;">
            <p class="section-subtitle" style="margin-bottom: 10px; justify-content: center;">OUR PROCESS</p>
            <h2 class="sd-process-title">Simple Steps to Your <span class="signature-text" style="color: var(--accent-color); font-weight: 400; text-transform: none;">Dream Space</span></h2>
            
            <div class="timeline-horizontal">
                <!-- Step 1 -->
                <div class="timeline-step">
                    <div class="tl-icon-box">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span class="tl-number">1</span>
                    </div>
                    <h4>Consultation</h4>
                    <p>We understand your needs, style, and budget.</p>
                </div>
                
                <div class="tl-arrow"><i class="fa-solid fa-arrow-right-long" style="color: #df916b; opacity: 0.5;"></i></div>
                
                <!-- Step 2 -->
                <div class="timeline-step">
                    <div class="tl-icon-box">
                        <i class="fa-solid fa-compass-drafting"></i>
                        <span class="tl-number">2</span>
                    </div>
                    <h4>Concept & Planning</h4>
                    <p>Our team creates layouts, mood boards & 3D visuals.</p>
                </div>
                
                <div class="tl-arrow"><i class="fa-solid fa-arrow-right-long" style="color: #df916b; opacity: 0.5;"></i></div>
                
                <!-- Step 3 -->
                <div class="timeline-step">
                    <div class="tl-icon-box">
                        <i class="fa-solid fa-pen-nib"></i>
                        <span class="tl-number">3</span>
                    </div>
                    <h4>Design Development</h4>
                    <p>Finalizing materials, colors, furniture & finishes.</p>
                </div>
                
                <div class="tl-arrow"><i class="fa-solid fa-arrow-right-long" style="color: #df916b; opacity: 0.5;"></i></div>
                
                <!-- Step 4 -->
                <div class="timeline-step">
                    <div class="tl-icon-box">
                        <i class="fa-solid fa-hammer"></i>
                        <span class="tl-number">4</span>
                    </div>
                    <h4>Execution</h4>
                    <p>We manage the entire process with precision.</p>
                </div>
                
                <div class="tl-arrow"><i class="fa-solid fa-arrow-right-long" style="color: #df916b; opacity: 0.5;"></i></div>
                
                <!-- Step 5 -->
                <div class="timeline-step">
                    <div class="tl-icon-box">
                        <i class="fa-solid fa-star"></i>
                        <span class="tl-number">5</span>
                    </div>
                    <h4>Final Styling</h4>
                    <p>Adding the perfect finishing touches to bring it all together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. More Interior Design Projects -->
    <section class="more-projects-section" style="padding: 80px 0 20px; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1200px;">
            <div class="more-projects-header">
                <div class="mp-header-left">
                    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="display: block; width: 40px; height: 2px; background: var(--accent-color);"></span>
                        <p class="section-subtitle" style="margin-bottom: 0;">EXPLORE OUR WORK</p>
                    </div>
                    <h2 class="section-title">More Interior Design <span class="accent-text signature-text" style="color: var(--accent-color); font-weight: 400; text-transform: none;">Projects</span></h2>
                </div>
                <div class="mp-header-right">
                    <a href="projects.php" class="btn btn-dark-pill">
                        <span class="icon-circle-yellow"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 14px;"></i></span> View All Projects
                    </a>
                </div>
            </div>

            <div class="more-projects-grid sd-three-cols">
                <!-- Card 1 -->
                <div class="mp-card">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" alt="Living Room" class="mp-card-bg">
                    <div class="mp-card-top">
                        <div class="mp-tag">Residential Design</div>
                        <div class="mp-like"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="mp-card-bottom">
                        <div class="mp-card-title-row" style="margin-bottom: 10px;">
                            <a href="#" class="mp-link-btn" style="width: 35px; height: 35px;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i></a>
                            <div class="mp-title-col">
                                <h3 style="font-size: 14px;">MODERN LIVING ROOM</h3>
                                <p style="font-size: 11px;"><i class="fa-solid fa-location-dot"></i> Mumbai, India</p>
                            </div>
                        </div>
                        <div class="mp-tags-row">
                            <span class="mp-pill" style="font-size: 10px; padding: 4px 10px;">Living Room</span>
                            <span class="mp-pill" style="font-size: 10px; padding: 4px 10px;">Residential</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="mp-card">
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745a8728?w=800&q=80" alt="Kitchen" class="mp-card-bg">
                    <div class="mp-card-top">
                        <div class="mp-tag">Interior Design</div>
                        <div class="mp-like"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="mp-card-bottom">
                        <div class="mp-card-title-row" style="margin-bottom: 10px;">
                            <a href="#" class="mp-link-btn" style="width: 35px; height: 35px;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i></a>
                            <div class="mp-title-col">
                                <h3 style="font-size: 14px;">LUXKRR MODULAR KITCHEN</h3>
                                <p style="font-size: 11px;"><i class="fa-solid fa-location-dot"></i> Pune, India</p>
                            </div>
                        </div>
                        <div class="mp-tags-row">
                            <span class="mp-pill" style="font-size: 10px; padding: 4px 10px;">Kitchen</span>
                            <span class="mp-pill" style="font-size: 10px; padding: 4px 10px;">Interior Design</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="mp-card">
                    <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?w=800&q=80" alt="Bedroom" class="mp-card-bg">
                    <div class="mp-card-top">
                        <div class="mp-tag">Residential Design</div>
                        <div class="mp-like"><i class="fa-regular fa-heart"></i></div>
                    </div>
                    <div class="mp-card-bottom">
                        <div class="mp-card-title-row" style="margin-bottom: 10px;">
                            <a href="#" class="mp-link-btn" style="width: 35px; height: 35px;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i></a>
                            <div class="mp-title-col">
                                <h3 style="font-size: 14px;">CONTEMPORARY BEDROOM</h3>
                                <p style="font-size: 11px;"><i class="fa-solid fa-location-dot"></i> Bengaluru, India</p>
                            </div>
                        </div>
                        <div class="mp-tags-row">
                            <span class="mp-pill" style="font-size: 10px; padding: 4px 10px;">Bedroom</span>
                            <span class="mp-pill" style="font-size: 10px; padding: 4px 10px;">Residential</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Dark CTA Banner -->
    <div class="container" style="max-width: 1200px; padding-bottom: 60px;">
        <div class="project-dark-cta" style="margin-top: 20px;">
            <div class="cta-content">
                <div class="cta-icon-wrapper"><i class="fa-solid fa-pen-ruler"></i></div>
                <div class="cta-text">
                    <h3>Have a project in mind?</h3>
                    <p>Let's create a space that's uniquely yours.</p>
                </div>
            </div>
            <a href="contact.php" class="btn btn-primary" style="display: flex; align-items: center; gap: 10px;">Book a Consultation <span class="icon-circle" style="background: transparent; border: 1px solid rgba(0,0,0,0.3); color: var(--text-dark); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 10px;"></i></span></a>
        </div>
    </div>ion>

</main>

<?php include 'includes/footer.php'; ?>

