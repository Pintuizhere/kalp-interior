    <!-- Before & After Section -->
    <section class="before-after-section" style="background-color: var(--primary-color); padding: 100px 0; color: white;">
        <div class="container">
            
            <!-- Header -->
            <div class="ba-top-header">
                <div class="ba-title-area">
                    <p class="section-subtitle" style="color: white; font-weight: 600; letter-spacing: 2px;">BEFORE & AFTER</p>
                    <h2 class="section-title ba-section-title">
                        See Our <span class="accent-text">Design</span><br>Transformations
                    </h2>
                </div>
                
                <a href="projects.php" class="view-all-pill ba-view-all">
                    <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                    <span class="text-pill">View All</span>
                </a>
            </div>
            
            <!-- Slider Area -->
            <div class="ba-slider-area">
                
                <button class="ba-nav-arrow" style="position: absolute; left: 0; z-index: 10;"><i class="fa-solid fa-arrow-left"></i></button>
                
                <div class="ba-slider-container">
                    <!-- After Image (Background) -->
                    <div class="ba-image ba-image-after" style="background-image: url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');">
                        <span class="ba-label">After</span>
                    </div>
                    
                    <!-- Before Image (Foreground overlay) -->
                    <div class="ba-image ba-image-before" style="background-image: url('https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');">
                        <span class="ba-label">Before</span>
                    </div>
                    
                    <!-- Slider Input -->
                    <input type="range" min="0" max="100" value="50" class="ba-slider-input" id="ba-slider">
                    
                    <!-- Slider Handle -->
                    <div class="ba-slider-handle" id="ba-slider-handle">
                        <i class="fa-solid fa-angle-left"></i>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
                
                <button class="ba-nav-arrow" style="position: absolute; right: 0; z-index: 10;"><i class="fa-solid fa-arrow-right"></i></button>
                
            </div>
            
        </div>
    </section>
