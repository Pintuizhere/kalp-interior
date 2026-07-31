<?php 
$currentPage = 'blog';
include 'includes/header.php'; 
?>

<main>
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="banner-title">Blog</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Blog Details</span>
            </div>
        </div>
    </section>

    <!-- Blog Details Content -->
    <section class="blog-details-section" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1100px;">
            
            <!-- Hero Header -->
            <div class="blog-hero" style="text-align: center; margin-bottom: 50px;">
                <div class="blog-feature-wrapper" style="margin-bottom: 30px;">
                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Remote Work Office" style="width: 100%; height: 500px; object-fit: cover; border-radius: 80px 20px 80px 20px; display: block;">
                </div>
                
                <div class="blog-header-tags" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 25px;">
                    <span class="tag-pill">Office</span>
                    <span class="tag-pill">Home Office</span>
                    <span class="tag-pill">Interior Design</span>
                </div>
                
                <h1 style="font-size: 36px; line-height: 1.3; margin-bottom: 25px; max-width: 900px; margin-left: auto; margin-right: auto;">Remote Work Design: Creating Home Offices<br>for Maximum Comfort and Productivity</h1>
                
                <div class="author-meta" style="display: flex; align-items: center; justify-content: center; gap: 15px;">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Jenny Alexander" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                    <div style="text-align: left;">
                        <div style="font-weight: 600; font-size: 14px; color: var(--text-dark);">Written by Jenny Alexander</div>
                        <div style="font-size: 13px; color: var(--text-muted);">28 February 2024 | 12 min Read</div>
                    </div>
                </div>
            </div>

            <!-- Content Grid Layout -->
            <div class="blog-content-layout" style="display: grid; grid-template-columns: 80px 1fr 300px; gap: 40px;">
                
                <!-- Left Sidebar (Share) -->
                <div class="blog-share-sidebar">
                    <div style="position: sticky; top: 100px;">
                        <h4 style="font-size: 12px; letter-spacing: 2px; color: var(--text-muted); margin-bottom: 20px; text-transform: uppercase;">Share</h4>
                        <div class="share-icons-vertical" style="display: flex; flex-direction: column; gap: 15px;">
                            <a href="#" class="share-icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="share-icon"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="share-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="blog-main-content">
                    <div class="drop-cap-paragraph" style="margin-bottom: 20px;">
                        <span class="drop-cap" style="float: left; width: 45px; height: 45px; background-color: var(--accent-color); color: var(--text-dark); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 20px; font-weight: 700; margin-right: 15px; margin-top: 5px;">L</span>
                        <p style="display: inline;">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    
                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    
                    <h3>Introduction to Remote Work Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

                    <h3>Importance of ergonomic furniture</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                    
                    <!-- Split Images -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 35px 0;">
                        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Office 1" style="width: 100%; height: 300px; object-fit: cover; border-radius: 40px 15px 40px 15px;">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Office 2" style="width: 100%; height: 300px; object-fit: cover; border-radius: 40px 15px 40px 15px;">
                    </div>

                    <h3>Importance of lighting in a office</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

                    <!-- Also Read Block -->
                    <div class="also-read-block">
                        <span style="color: var(--primary-color); font-weight: 600; display: block; margin-bottom: 5px;">Also Read :</span>
                        <a href="#" style="color: rgba(255,255,255,0.9); text-decoration: none; font-size: 14px;">"Productive Office Layouts: Designing Spaces for Efficiency"</a>
                    </div>

                    <h3>Tips for organizing furniture</h3>
                    <ul class="custom-bullet-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
                    </ul>

                    <h3>Integrating technology into home office setup</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>


                </div>

                <!-- Right Sidebar -->
                <div class="blog-right-sidebar">
                    <div style="position: sticky; top: 100px;">
                        
                        <div class="sidebar-widget">
                            <h4 class="widget-title">Filter by Categories</h4>
                            <div class="category-pills">
                                <a href="#">Interior</a>
                                <a href="#">Exterior</a>
                                <a href="#">Residence</a>
                                <a href="#">Offices</a>
                                <a href="#">Kitchen</a>
                                <a href="#">Living Room</a>
                                <a href="#">Bed Room</a>
                                <a href="#">Hospitality Design</a>
                                <a href="#">Office</a>
                                <a href="#">Commercial Design</a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h4 class="widget-title">Table of Content</h4>
                            <ul class="toc-list">
                                <li><a href="#">Introduction to Remote Work Design</a></li>
                                <li><a href="#">Importance of ergonomic furniture</a></li>
                                <li><a href="#">Importance of lighting in a office</a></li>
                                <li><a href="#">Tips for organizing furniture</a></li>
                                <li><a href="#">Integrating technology into home office setup</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-promo" style="background-image: url('assets/images/sidebar_promo_bg.png');">
                            <div class="promo-overlay"></div>
                            <div class="promo-content">
                                <h4>— Get A Quote</h4>
                                <h3>Celebrate <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400; color: var(--accent-color);">Your Dream<br>Project</span> with Our Expertise</h3>
                                <a href="contact.php" class="btn-primary" style="padding: 10px 25px; font-size: 13px;">Get A Quote</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- First Marquee -->


    <!-- Related News & Blog Section -->
    <section class="related-blog-section" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px; text-align: center;">
                <p class="section-subtitle" style="justify-content: center;">RELATED NEWS & BLOG</p>
                <h2 class="section-title">Latest Related <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">News & Blogs</span></h2>
            </div>
            
            <div class="blog-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                <!-- Reused Blog Cards -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Small Kitchen">
                        <div class="blog-tags">
                            <span>03 March 2024</span>
                            <span>Kitchen</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Small Kitchen Design Tips: Making the Most of Lim...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Minimalist Bedroom">
                        <div class="blog-tags">
                            <span>02 March 2024</span>
                            <span>Bedroom</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Minimalist Bedroom Design: Streamlined Simplicity f...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Living Room Light">
                        <div class="blog-tags">
                            <span>01 March 2024</span>
                            <span>Living Room</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Maximizing Natural Light: Brightening Your Living R...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Marquee -->

    
    <!-- Contact Form -->
    <?php include 'includes/components/contact.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>
