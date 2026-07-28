<!-- Projects Section -->
<style>
    /* Projects Section Mobile Styles */
    .mobile-view-all { display: none; }
    @media (max-width: 992px) {
        .projects-grid { grid-template-columns: repeat(2, 1fr) !important; }
        .portfolio-features { flex-wrap: wrap; justify-content: center !important; gap: 30px; }
    }
    @media (max-width: 768px) {
        .projects-section { padding: 60px 0 !important; }
        .projects-header { flex-direction: column !important; align-items: flex-start !important; }
        .projects-header .section-title { font-size: 2.2rem !important; }
        .projects-header p { font-size: 1rem !important; margin-bottom: 20px; }
        .desktop-view-all { display: none !important; }
        .mobile-view-all { display: flex; justify-content: center; margin-top: 40px; }
        
        .filter-tags { 
            flex-wrap: nowrap !important; 
            overflow-x: auto; 
            padding-bottom: 15px; 
            justify-content: flex-start !important;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* Firefox */
        }
        .filter-tags::-webkit-scrollbar { display: none; /* Chrome/Safari */ }
        .filter-tag { white-space: nowrap; }
        
        .projects-grid { grid-template-columns: 1fr !important; gap: 20px !important; margin-top: 30px !important; }
        
        .portfolio-features { flex-direction: column !important; padding: 30px 20px !important; gap: 25px !important; align-items: flex-start !important; }
        .portfolio-features > div[style*="width: 1px"] { display: none !important; }
        .pf-item { width: 100%; justify-content: flex-start; }
    }
</style>
<section class="projects-section" style="background-color: #F6F6F6; padding: 100px 0;">
    <div class="container" style="max-width: 1300px;">
        <div class="projects-header" style="display: flex; justify-content: space-between; align-items: flex-start;">
            <div>
                <p class="section-subtitle" style="justify-content: flex-start; margin-bottom: 20px;">OUR PROJECTS</p>
                <h2 class="section-title" style="font-size: 3.5rem; color: var(--text-dark);">Explore <span class="accent-text">Our Portfolio</span></h2>
                <p style="color: var(--text-muted); max-width: 500px; font-size: 1.1rem; line-height: 1.6; margin-top: 15px;">Discover a selection of our finest interior design projects crafted with creativity, functionality, and elegance.</p>
            </div>
            <a href="#" class="btn hero-btn desktop-view-all" style="background: var(--text-dark); padding: 8px 30px 8px 8px; border-radius: 40px; align-self: center;">
                <span class="btn-icon" style="background: var(--accent-color); color: var(--text-dark); width: 40px; height: 40px;"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></span>
                <span class="btn-text" style="background: transparent; color: white; padding: 0 10px; font-weight: 500;">View All Projects</span>
            </a>
        </div>
        
        <div class="filter-tags" style="justify-content: flex-start; gap: 15px; margin-bottom: 50px;">
            <span class="filter-tag active" style="background-color: #fcebdc; color: var(--text-dark); border: none; padding: 12px 25px;"><i class="fa-solid fa-border-all" style="margin-right: 8px;"></i> All</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-solid fa-chair" style="margin-right: 8px;"></i> Interior</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-solid fa-house" style="margin-right: 8px;"></i> Exterior</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-regular fa-building" style="margin-right: 8px;"></i> Residence</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-solid fa-briefcase" style="margin-right: 8px;"></i> Offices</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-solid fa-kitchen-set" style="margin-right: 8px;"></i> Kitchen</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-solid fa-couch" style="margin-right: 8px;"></i> Living Room</span>
            <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 12px 25px;"><i class="fa-solid fa-bed" style="margin-right: 8px;"></i> Bed Room</span>
        </div>
        
        <div class="projects-grid" style="grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <!-- Project 1 -->
            <div class="project-card new-design" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Modern 4 BHK Apartment">
                <div class="project-top-badges" style="position: absolute; top: 20px; left: 20px; right: 20px; display: flex; justify-content: space-between; align-items: center; z-index: 2;">
                    <span class="project-badge left" style="background: white; color: var(--text-dark); padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);"><i class="fa-solid fa-house" style="color: #24352a;"></i> Residential Design</span>
                </div>
                <div class="project-bottom-content">
                    <div class="project-bottom-main">
                        <a href="#" class="project-action-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <div class="project-bottom-info">
                            <h3>Modern 4 BHK Apartment</h3>
                            <p><i class="fa-solid fa-location-dot"></i> Mumbai, India</p>
                        </div>
                    </div>
                    <div class="project-bottom-tags">
                        <span class="p-tag">Apartment</span>
                        <span class="p-tag">Residential Design</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card new-design" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Luxury 6 BHK Bungalow">
                <div class="project-top-badges" style="position: absolute; top: 20px; left: 20px; right: 20px; display: flex; justify-content: space-between; align-items: center; z-index: 2;">
                    <span class="project-badge left" style="background: white; color: var(--text-dark); padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);"><i class="fa-solid fa-house" style="color: #24352a;"></i> Residential Design</span>
                </div>
                <div class="project-bottom-content">
                    <div class="project-bottom-main">
                        <a href="#" class="project-action-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <div class="project-bottom-info">
                            <h3>Luxury 6 BHK Bungalow</h3>
                            <p><i class="fa-solid fa-location-dot"></i> Pune, India</p>
                        </div>
                    </div>
                    <div class="project-bottom-tags">
                        <span class="p-tag">Bungalow</span>
                        <span class="p-tag">Residential Design</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card new-design" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Corporate Office Space">
                <div class="project-top-badges" style="position: absolute; top: 20px; left: 20px; right: 20px; display: flex; justify-content: space-between; align-items: center; z-index: 2;">
                    <span class="project-badge left" style="background: white; color: var(--text-dark); padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);"><i class="fa-solid fa-building" style="color: #24352a;"></i> Commercial Design</span>
                </div>
                <div class="project-bottom-content">
                    <div class="project-bottom-main">
                        <a href="#" class="project-action-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <div class="project-bottom-info">
                            <h3>Corporate Office Space</h3>
                            <p><i class="fa-solid fa-location-dot"></i> Bengaluru, India</p>
                        </div>
                    </div>
                    <div class="project-bottom-tags">
                        <span class="p-tag">Offices</span>
                        <span class="p-tag">Commercial Design</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card new-design" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Minimalist Kitchen Design">
                <div class="project-top-badges" style="position: absolute; top: 20px; left: 20px; right: 20px; display: flex; justify-content: space-between; align-items: center; z-index: 2;">
                    <span class="project-badge left" style="background: white; color: var(--text-dark); padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);"><i class="fa-solid fa-kitchen-set" style="color: #24352a;"></i> Interior Design</span>
                </div>
                <div class="project-bottom-content">
                    <div class="project-bottom-main">
                        <a href="#" class="project-action-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <div class="project-bottom-info">
                            <h3>Minimalist Kitchen Design</h3>
                            <p><i class="fa-solid fa-location-dot"></i> Delhi, India</p>
                        </div>
                    </div>
                    <div class="project-bottom-tags">
                        <span class="p-tag">Kitchen</span>
                        <span class="p-tag">Interior</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card new-design" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Contemporary Living Room">
                <div class="project-top-badges" style="position: absolute; top: 20px; left: 20px; right: 20px; display: flex; justify-content: space-between; align-items: center; z-index: 2;">
                    <span class="project-badge left" style="background: white; color: var(--text-dark); padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);"><i class="fa-solid fa-couch" style="color: #24352a;"></i> Interior Design</span>
                </div>
                <div class="project-bottom-content">
                    <div class="project-bottom-main">
                        <a href="#" class="project-action-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <div class="project-bottom-info">
                            <h3>Contemporary Living Room</h3>
                            <p><i class="fa-solid fa-location-dot"></i> Hyderabad, India</p>
                        </div>
                    </div>
                    <div class="project-bottom-tags">
                        <span class="p-tag">Living Room</span>
                        <span class="p-tag">Interior</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card new-design" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Elegant Master Bedroom">
                <div class="project-top-badges" style="position: absolute; top: 20px; left: 20px; right: 20px; display: flex; justify-content: space-between; align-items: center; z-index: 2;">
                    <span class="project-badge left" style="background: white; color: var(--text-dark); padding: 8px 15px; border-radius: 20px; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);"><i class="fa-solid fa-bed" style="color: #24352a;"></i> Interior Design</span>
                </div>
                <div class="project-bottom-content">
                    <div class="project-bottom-main">
                        <a href="#" class="project-action-btn"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <div class="project-bottom-info">
                            <h3>Elegant Master Bedroom</h3>
                            <p><i class="fa-solid fa-location-dot"></i> Chennai, India</p>
                        </div>
                    </div>
                    <div class="project-bottom-tags">
                        <span class="p-tag">Bed Room</span>
                        <span class="p-tag">Interior</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View All Button -->
        <div class="mobile-view-all">
            <a href="#" class="btn hero-btn" style="background: var(--text-dark); padding: 8px 30px 8px 8px; border-radius: 40px;">
                <span class="btn-icon" style="background: var(--accent-color); color: var(--text-dark); width: 40px; height: 40px;"><i class="fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></span>
                <span class="btn-text" style="background: transparent; color: white; padding: 0 10px; font-weight: 500;">View All Projects</span>
            </a>
        </div>
        <!-- Portfolio Footer Features -->
        <div class="portfolio-features" style="display: flex; justify-content: space-between; align-items: center; background-color: var(--text-light); padding: 35px 50px; border-radius: 20px; margin-top: 50px;">
            <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                <div class="pf-icon" style="width: 50px; height: 50px; background-color: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                    <i class="fa-solid fa-award"></i>
                </div>
                <div class="pf-text">
                    <strong style="display: block; font-size: 15px; color: var(--text-dark);">Quality & Craftsmanship</strong>
                    <span style="font-size: 13px; color: var(--text-muted);">Precision in every detail</span>
                </div>
            </div>
            
            <div style="width: 1px; height: 40px; background-color: rgba(0,0,0,0.1);"></div>
            
            <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                <div class="pf-icon" style="width: 50px; height: 50px; background-color: var(--accent-color); color: var(--text-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                    <i class="fa-regular fa-lightbulb"></i>
                </div>
                <div class="pf-text">
                    <strong style="display: block; font-size: 15px; color: var(--text-dark);">Innovative Design</strong>
                    <span style="font-size: 13px; color: var(--text-muted);">Creative solutions for every space</span>
                </div>
            </div>

            <div style="width: 1px; height: 40px; background-color: rgba(0,0,0,0.1);"></div>

            <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                <div class="pf-icon" style="width: 50px; height: 50px; background-color: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <div class="pf-text">
                    <strong style="display: block; font-size: 15px; color: var(--text-dark);">Client Focused</strong>
                    <span style="font-size: 13px; color: var(--text-muted);">Your vision, our priority</span>
                </div>
            </div>

            <div style="width: 1px; height: 40px; background-color: rgba(0,0,0,0.1);"></div>

            <div class="pf-item" style="display: flex; align-items: center; gap: 15px;">
                <div class="pf-icon" style="width: 50px; height: 50px; background-color: var(--accent-color); color: var(--text-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                    <i class="fa-regular fa-calendar-check"></i>
                </div>
                <div class="pf-text">
                    <strong style="display: block; font-size: 15px; color: var(--text-dark);">On-Time Delivery</strong>
                    <span style="font-size: 13px; color: var(--text-muted);">Committed to timelines</span>
                </div>
            </div>
        </div>
    </div>
</section>

