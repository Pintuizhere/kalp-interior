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
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Blog</span>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px; text-align: center;">
                <p class="section-subtitle" style="justify-content: center;">NEWS & BLOG</p>
                <h2 class="section-title">Our Latest <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">News & Blogs</span></h2>
            </div>
            
            <div class="blog-filters-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 50px; flex-wrap: wrap; gap: 20px;">
                <div class="filter-tags" style="display: flex; justify-content: flex-start; gap: 10px; flex-wrap: wrap;">
                    <span class="filter-tag active" style="background-color: var(--accent-color); color: var(--text-dark); border: none; padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; display: inline-flex; align-items: center; cursor: pointer; transition: all 0.3s ease;"><i class="fa-solid fa-border-all" style="margin-right: 8px;"></i> All Posts</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Design Tips</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Trends</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Ideas & Inspiration</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">News</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Projects</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Lifestyle</span>
                </div>
                
                <div class="blog-search-form" style="position: relative; max-width: 250px; width: 100%;">
                    <input type="text" placeholder="Search blogs..." style="width: 100%; padding: 10px 45px 10px 20px; border-radius: 30px; border: 1px solid rgba(0,0,0,0.1); outline: none; font-size: 13px; background: white; color: var(--text-dark); font-family: inherit;">
                    <button type="submit" style="position: absolute; right: 4px; top: 50%; transform: translateY(-50%); background-color: #23352A; color: white; width: 32px; height: 32px; border-radius: 50%; border: none; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 12px;"></i>
                    </button>
                </div>
            </div>
            
            <div class="blog-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 50px;">
                <!-- Blog Card 1 -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Living Room">
                        <div class="blog-tags">
                            <span>05 March 2024</span>
                            <span>Living Room</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Modern Living Room Design: Sleek and Stylish...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kitchen">
                        <div class="blog-tags">
                            <span>05 March 2024</span>
                            <span>Kitchen</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Kitchen Layout Ideas: Optimizing Space and Fu...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Bedroom">
                        <div class="blog-tags">
                            <span>04 March 2024</span>
                            <span>Bedroom</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Master Bedroom Design Tips: Creating Your Pers...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                
                <!-- Blog Card 4 -->
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

                <!-- Blog Card 5 -->
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

                <!-- Blog Card 6 -->
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

                <!-- Blog Card 7 -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Office Design">
                        <div class="blog-tags">
                            <span>29 February 2024</span>
                            <span>Office</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Modern Office Design Trends: Sleek and Funct...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 8 -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Remote Work Office">
                        <div class="blog-tags">
                            <span>28 February 2024</span>
                            <span>Office</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Remote Work Design: Creating Home Offices f...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>

                <!-- Blog Card 9 -->
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Salon Design">
                        <div class="blog-tags">
                            <span>27 February 2024</span>
                            <span>Salon</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>Salon Interior Design Trends: Creating Stylish a...</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <a href="#" class="page-nav"><i class="fa-solid fa-angle-left"></i></a>
                <a href="#" class="page-num active">1</a>
                <a href="#" class="page-num">2</a>
                <a href="#" class="page-num">3</a>
                <span class="page-dots">...</span>
                <a href="#" class="page-num">10</a>
                <a href="#" class="page-nav"><i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <!-- First Marquee -->


    <!-- CTA Section -->
    <section class="cta-section" style="padding: 100px 0; background-color: var(--bg-white); text-align: center;">
        <div class="container">
            <h2 style="font-size: 42px; margin-bottom: 50px;">The Dream Project: <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">Your<br>Journey Begins Here!</span></h2>
            
            <a href="contact.php" class="rotating-badge">
                <svg viewBox="0 0 150 150" class="rotating-text">
                    <path id="badge-curve" d="M 25, 75 a 50,50 0 1,1 100,0 a 50,50 0 1,1 -100,0" fill="transparent" />
                    <text font-size="16" letter-spacing="4" fill="var(--text-light)" font-weight="500">
                        <textPath href="#badge-curve">GET IN TOUCH • GET IN TOUCH • </textPath>
                    </text>
                </svg>
                <div class="badge-icon">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </a>
        </div>
    </section>

    <!-- Second Marquee -->


</main>

<?php include 'includes/footer.php'; ?>
