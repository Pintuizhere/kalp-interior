<?php 
$currentPage = 'services';
include 'includes/header.php'; 
?>

<main>
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="banner-title">Services</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Services</span>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="services-page-section" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px; text-align: center;">
                <p class="section-subtitle" style="justify-content: center;">OUR SERVICES</p>
                <h2 class="section-title">Explore Our Services:<br><span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">Your Path to Success</span></h2>
            </div>
            
                        <div class="new-services-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 50px;">
                
                <!-- Service 1: Interior Design -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Interior Design">
                        <div class="hp-sc-icon"><i class="fa-solid fa-couch"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">01</div>
                        <h3>INTERIOR DESIGN</h3>
                        <p>Beautiful interiors that reflect your personality and enhance everyday living.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 2: Residential Design -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Residential Design">
                        <div class="hp-sc-icon"><i class="fa-solid fa-house-chimney"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">02</div>
                        <h3>RESIDENTIAL DESIGN</h3>
                        <p>Thoughtful designs for homes that combine comfort, style, and functionality.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 3: Commercial Design -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Commercial Design">
                        <div class="hp-sc-icon"><i class="fa-solid fa-building"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">03</div>
                        <h3>COMMERCIAL DESIGN</h3>
                        <p>Innovative spaces for businesses that inspire productivity and leave a lasting impression.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 4: Furniture Design -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Furniture Design">
                        <div class="hp-sc-icon"><i class="fa-solid fa-chair"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">04</div>
                        <h3>FURNITURE DESIGN</h3>
                        <p>Custom furniture designs that blend aesthetics, comfort, and durability.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 5: Architectural Design -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Architectural Design">
                        <div class="hp-sc-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">05</div>
                        <h3>ARCHITECTURAL DESIGN</h3>
                        <p>Architectural solutions that are functional, sustainable, and timeless.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 6: Kitchen Design -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1556910103-1c02745a8728?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kitchen Design">
                        <div class="hp-sc-icon"><i class="fa-solid fa-kitchen-set"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">06</div>
                        <h3>KITCHEN DESIGN</h3>
                        <p>Ergonomic and elegant kitchen designs that make cooking a delightful experience.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 7: 3D Rendering -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1617806118233-18e1c0945594?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="3D Rendering">
                        <div class="hp-sc-icon"><i class="fa-solid fa-cube"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">07</div>
                        <h3>3D RENDERING</h3>
                        <p>High-quality 3D visualizations that help you see your space before it's built.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 8: Space Planning -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Space Planning">
                        <div class="hp-sc-icon"><i class="fa-solid fa-border-all"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">08</div>
                        <h3>SPACE PLANNING</h3>
                        <p>Smart space planning to optimize flow, function, and comfort.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 9: Home Automation -->
                <div class="hp-service-card">
                    <div class="hp-sc-image">
                        <img src="https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Home Automation">
                        <div class="hp-sc-icon"><i class="fa-solid fa-wifi"></i></div>
                    </div>
                    <div class="hp-sc-content">
                        <div class="hp-sc-number">09</div>
                        <h3>HOME AUTOMATION</h3>
                        <p>Intelligent automation solutions for modern, convenient, and secure living.</p>
                        <a href="service-details.php" class="hp-sc-link">Explore Service <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
    </section>
    <section class="services-features" style="background-color: var(--bg-light); padding-bottom: 80px;">
        <div class="container" style="max-width: 1300px;">
            <!-- Features block -->
            <div class="portfolio-features new-features-bar" style="display: flex; justify-content: space-between; align-items: center; padding: 30px 40px; background-color: white; border-radius: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.03);">
                <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                    <div class="pf-icon" style="width: 50px; height: 50px; background-color: #fcf1db; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <div class="pf-text">
                        <strong style="display: block; font-size: 16px; color: var(--text-dark); margin-bottom: 2px;">Client Focused</strong>
                        <span style="font-size: 13px; color: var(--text-muted);">Your vision, our priority.</span>
                    </div>
                </div>
                
                <div style="width: 1px; height: 40px; background-color: rgba(0,0,0,0.05);"></div>
                
                <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                    <div class="pf-icon" style="width: 50px; height: 50px; background-color: #fcf1db; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                        <i class="fa-regular fa-lightbulb"></i>
                    </div>
                    <div class="pf-text">
                        <strong style="display: block; font-size: 16px; color: var(--text-dark); margin-bottom: 2px;">Innovative Solutions</strong>
                        <span style="font-size: 13px; color: var(--text-muted);">Creative ideas for unique spaces.</span>
                    </div>
                </div>

                <div style="width: 1px; height: 40px; background-color: rgba(0,0,0,0.05);"></div>

                <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                    <div class="pf-icon" style="width: 50px; height: 50px; background-color: #fcf1db; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="pf-text">
                        <strong style="display: block; font-size: 16px; color: var(--text-dark); margin-bottom: 2px;">Quality & Excellence</strong>
                        <span style="font-size: 13px; color: var(--text-muted);">Commitment to highest standards.</span>
                    </div>
                </div>

                <div style="width: 1px; height: 40px; background-color: rgba(0,0,0,0.05);"></div>

                <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                    <div class="pf-icon" style="width: 50px; height: 50px; background-color: #fcf1db; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px;">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="pf-text">
                        <strong style="display: block; font-size: 16px; color: var(--text-dark); margin-bottom: 2px;">On-Time Delivery</strong>
                        <span style="font-size: 13px; color: var(--text-muted);">Reliable service, every time.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Include Contact and Marquee from components -->
    <?php include 'includes/components/contact.php'; ?>


</main>

<?php include 'includes/footer.php'; ?>
