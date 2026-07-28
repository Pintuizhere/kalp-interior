<?php 
$currentPage = 'contact';
include 'includes/header.php'; 
?>

<main>
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="banner-title">Contact Us</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Contact Us</span>
            </div>
        </div>
    </section>

    <!-- Main Contact Area -->
    <div style="padding: 100px 0; background-color: var(--bg-white);">
        <?php include 'includes/components/contact.php'; ?>
    </div>

    <!-- Map Section -->
    <section class="map-section" style="line-height: 0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113032.64621396342!2d-84.605993!3d37.153641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8842734c8b1953c9%3A0x771f6f4ec5ccd5c4!2sManchester%2C%20KY%2040962%2C%20USA!5e0!3m2!1sen!2sin!4v1711200000000!5m2!1sen!2sin" width="100%" height="450" style="border:0; filter: grayscale(100%) opacity(0.8);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Features Info Bar -->
    <section class="features-info-section" style="padding: 60px 0; background-color: var(--bg-white);">
        <div class="container">
            <div class="features-info-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                
                <div class="feature-info-item" style="display: flex; align-items: center; gap: 20px; justify-content: center;">
                    <div class="feature-info-icon" style="font-size: 35px; color: var(--accent-color); position: relative;">
                        <i class="fa-solid fa-box-open" style="position: relative; z-index: 2; color: var(--primary-color);"></i>
                        <span style="position: absolute; top: 10px; right: -10px; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%; z-index: 1;"></span>
                    </div>
                    <div class="feature-info-text">
                        <h4 style="font-size: 16px; margin-bottom: 5px; color: var(--text-dark);">Reasonable Prices</h4>
                        <p style="font-size: 12px; color: var(--text-muted); margin: 0;">Quality design at affordable rates.</p>
                    </div>
                </div>

                <div class="feature-info-item" style="display: flex; align-items: center; gap: 20px; justify-content: center;">
                    <div class="feature-info-icon" style="font-size: 35px; color: var(--accent-color); position: relative;">
                        <i class="fa-solid fa-wallet" style="position: relative; z-index: 2; color: var(--primary-color);"></i>
                        <span style="position: absolute; top: 10px; right: -10px; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%; z-index: 1;"></span>
                    </div>
                    <div class="feature-info-text">
                        <h4 style="font-size: 16px; margin-bottom: 5px; color: var(--text-dark);">Timely Project Delivery</h4>
                        <p style="font-size: 12px; color: var(--text-muted); margin: 0;">On-time project completion.</p>
                    </div>
                </div>

                <div class="feature-info-item" style="display: flex; align-items: center; gap: 20px; justify-content: center;">
                    <div class="feature-info-icon" style="font-size: 35px; color: var(--accent-color); position: relative;">
                        <i class="fa-solid fa-users-gear" style="position: relative; z-index: 2; color: var(--primary-color);"></i>
                        <span style="position: absolute; top: 10px; right: -10px; width: 15px; height: 15px; background: var(--accent-color); border-radius: 50%; z-index: 1;"></span>
                    </div>
                    <div class="feature-info-text">
                        <h4 style="font-size: 16px; margin-bottom: 5px; color: var(--text-dark);">Professional Team</h4>
                        <p style="font-size: 12px; color: var(--text-muted); margin: 0;">Expert architects, top results.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Marquee -->


</main>

<?php include 'includes/footer.php'; ?>
