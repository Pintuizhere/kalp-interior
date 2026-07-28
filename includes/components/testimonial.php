<!-- Testimonial Section -->
<style>
    @media (max-width: 992px) {
        .testi-slide { min-width: calc(50% - 15px) !important; }
        .testi-stats-bar { flex-wrap: wrap !important; justify-content: center !important; gap: 30px !important; }
        .testi-stats-bar > div[style*="width: 1px"] { display: none !important; }
    }
    @media (max-width: 768px) {
        .testimonial-section.new-testi-design { padding: 60px 0 !important; }
        .testi-top-area { flex-direction: column !important; align-items: flex-start !important; gap: 15px !important; }
        .testi-top-area > div { max-width: 100% !important; }
        .testi-top-area h2.section-title { font-size: 2.2rem !important; }
        .testi-top-area p { font-size: 1rem !important; }
        .testi-slider-wrapper { margin-bottom: 40px !important; }
        .testi-slide { min-width: 100% !important; padding: 25px !important; }
        .testi-slide p { font-size: 14px !important; margin-bottom: 20px !important; }
        .testi-stats-bar { flex-direction: column !important; padding: 30px 20px !important; gap: 30px !important; }
        .stat-item { flex-direction: column !important; text-align: center !important; gap: 12px !important; width: 100% !important; }
        .testi-nav-arrow { width: 40px !important; height: 40px !important; }
    }
</style>
<section class="testimonial-section new-testi-design" style="background-color: #F6F6F6; padding: 100px 0;">
    <div class="container" style="max-width: 1200px;">
        <div class="testi-top-area" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 30px;">
            <div style="max-width: 50%;">
                <p class="section-subtitle" style="justify-content: flex-start; margin-bottom: 15px;"><span style="display: inline-block; width: 40px; height: 1px; background-color: var(--accent-color); margin-right: 15px;"></span> TESTIMONIAL</p>
                <h2 class="section-title" style="font-size: 3rem; color: var(--text-dark); line-height: 1.2; margin: 0;">Real experiences from<br>satisfied homeowners.</h2>
            </div>
            <div style="max-width: 35%;">
                <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.6; margin: 0;">We take pride in delivering renovation and construction projects that exceed expectations from start to finish.</p>
            </div>
        </div>

        <div style="display: flex; justify-content: flex-end; gap: 15px; margin-bottom: 30px;">
            <button class="testi-nav-arrow prev-slide" style="width: 45px; height: 45px; background-color: white; color: var(--text-dark); border-radius: 50%; border: 1px solid rgba(0,0,0,0.1); cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: var(--transition);"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="testi-nav-arrow next-slide" style="width: 45px; height: 45px; background-color: var(--text-dark); color: white; border-radius: 50%; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: var(--transition);"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        
        <div class="testi-slider-wrapper" style="position: relative; overflow: hidden; margin-bottom: 80px;">
            <div class="testi-slides" style="display: flex; gap: 30px; transition: transform 0.6s ease-in-out;">
                
                <!-- Slide 1 -->
                <div class="testi-slide" style="min-width: calc(33.333% - 20px); background: white; border-radius: 10px; padding: 40px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Sarah Mitchell" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <span style="font-weight: 700; color: var(--text-dark); font-size: 16px; display: flex; align-items: center; gap: 5px;"><i class="fa-solid fa-fan" style="color: #4f46e5;"></i> Logoipsum</span>
                    </div>
                    <div style="font-size: 45px; color: #334C40; line-height: 1; margin-bottom: 20px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 30px; font-size: 15px;">
                        The entire process was seamless from start to finish. The team delivered exceptional craftsmanship, stayed on schedule, and transformed our home into a space we truly love.
                    </p>
                    <div style="border-left: 3px solid #334C40; padding-left: 15px;">
                        <h4 style="color: var(--text-dark); margin: 0 0 3px 0; font-size: 16px;">Sarah Mitchell</h4>
                        <p style="color: var(--text-muted); font-size: 13px; margin: 0;">Home Renovation Client</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="testi-slide" style="min-width: calc(33.333% - 20px); background: white; border-radius: 10px; padding: 40px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Robert Fox" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <span style="font-weight: 700; color: var(--text-dark); font-size: 16px; display: flex; align-items: center; gap: 5px;"><i class="fa-solid fa-gem" style="color: #EAB136;"></i> Logoipsum</span>
                    </div>
                    <div style="font-size: 45px; color: #334C40; line-height: 1; margin-bottom: 20px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 30px; font-size: 15px;">
                        The attention to detail and ability to capture our brand identity was phenomenal. It has completely transformed our working environment and boosted employee morale.
                    </p>
                    <div style="border-left: 3px solid #334C40; padding-left: 15px;">
                        <h4 style="color: var(--text-dark); margin: 0 0 3px 0; font-size: 16px;">Robert Fox</h4>
                        <p style="color: var(--text-muted); font-size: 13px; margin: 0;">CEO, Tech Innovators</p>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="testi-slide" style="min-width: calc(33.333% - 20px); background: white; border-radius: 10px; padding: 40px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Eleanor Pena" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <span style="font-weight: 700; color: var(--text-dark); font-size: 16px; display: flex; align-items: center; gap: 5px;"><i class="fa-solid fa-leaf" style="color: #4CAF50;"></i> Logoipsum</span>
                    </div>
                    <div style="font-size: 45px; color: #334C40; line-height: 1; margin-bottom: 20px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 30px; font-size: 15px;">
                        We wanted our home to feel like a luxurious retreat, and they absolutely delivered. The color palettes, furniture selection, and lighting design were simply impeccable.
                    </p>
                    <div style="border-left: 3px solid #334C40; padding-left: 15px;">
                        <h4 style="color: var(--text-dark); margin: 0 0 3px 0; font-size: 16px;">Eleanor Pena</h4>
                        <p style="color: var(--text-muted); font-size: 13px; margin: 0;">Homeowner</p>
                    </div>
                </div>

                <!-- Slide 4 (For scrolling effect) -->
                <div class="testi-slide" style="min-width: calc(33.333% - 20px); background: white; border-radius: 10px; padding: 40px; box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Michael Chen" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        <span style="font-weight: 700; color: var(--text-dark); font-size: 16px; display: flex; align-items: center; gap: 5px;"><i class="fa-solid fa-cube" style="color: #00bcd4;"></i> Logoipsum</span>
                    </div>
                    <div style="font-size: 45px; color: #334C40; line-height: 1; margin-bottom: 20px;">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 30px; font-size: 15px;">
                        Working with this team was an absolute pleasure. They took our vague ideas and turned them into a stunning, modern workspace that our team loves coming to every day.
                    </p>
                    <div style="border-left: 3px solid #334C40; padding-left: 15px;">
                        <h4 style="color: var(--text-dark); margin: 0 0 3px 0; font-size: 16px;">Michael Chen</h4>
                        <p style="color: var(--text-muted); font-size: 13px; margin: 0;">Startup Founder</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="testi-pagination" style="display: flex; justify-content: center; gap: 10px; margin-bottom: 50px;">
            <div class="dot active" data-index="0" style="width: 10px; height: 10px; border-radius: 50%; background: var(--text-dark); cursor: pointer; transition: 0.3s;"></div>
            <div class="dot" data-index="1" style="width: 10px; height: 10px; border-radius: 50%; background: #ddd; cursor: pointer; transition: 0.3s;"></div>
            <div class="dot" data-index="2" style="width: 10px; height: 10px; border-radius: 50%; background: #ddd; cursor: pointer; transition: 0.3s;"></div>
            <div class="dot" data-index="3" style="width: 10px; height: 10px; border-radius: 50%; background: #ddd; cursor: pointer; transition: 0.3s;"></div>
        </div>

        <!-- Testimonial Stats Bar -->
        <div class="testi-stats-bar" style="background: white; border-radius: 20px; padding: 30px 50px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
            
            <div class="stat-item" style="display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 50px; height: 50px; background: #fbf3ec; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fa-solid fa-users"></i></div>
                <div>
                    <h3 style="font-size: 24px; margin: 0 0 5px 0; color: var(--text-dark);">250+</h3>
                    <p style="margin: 0; color: var(--text-muted); font-size: 13px;">Happy Clients</p>
                </div>
            </div>
            
            <div style="width: 1px; height: 50px; background: rgba(0,0,0,0.1);"></div>

            <div class="stat-item" style="display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 50px; height: 50px; background: #fbf3ec; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fa-solid fa-comment-dots"></i></div>
                <div>
                    <h3 style="font-size: 24px; margin: 0 0 5px 0; color: var(--text-dark);">4.9/5</h3>
                    <p style="margin: 0; color: var(--text-muted); font-size: 13px;">Average Rating</p>
                </div>
            </div>

            <div style="width: 1px; height: 50px; background: rgba(0,0,0,0.1);"></div>

            <div class="stat-item" style="display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 50px; height: 50px; background: #fbf3ec; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fa-solid fa-medal"></i></div>
                <div>
                    <h3 style="font-size: 24px; margin: 0 0 5px 0; color: var(--text-dark);">150+</h3>
                    <p style="margin: 0; color: var(--text-muted); font-size: 13px;">5 Star Reviews</p>
                </div>
            </div>

            <div style="width: 1px; height: 50px; background: rgba(0,0,0,0.1);"></div>

            <div class="stat-item" style="display: flex; align-items: center; gap: 20px;">
                <div class="stat-icon" style="width: 50px; height: 50px; background: #fbf3ec; color: #EAB136; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px;"><i class="fa-regular fa-face-smile"></i></div>
                <div>
                    <h3 style="font-size: 24px; margin: 0 0 5px 0; color: var(--text-dark);">98%</h3>
                    <p style="margin: 0; color: var(--text-muted); font-size: 13px;">Client Satisfaction</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Slider Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slidesContainer = document.querySelector('.testi-slides');
    const slides = document.querySelectorAll('.testi-slide');
    const dots = document.querySelectorAll('.testi-pagination .dot');
    const prevBtn = document.querySelector('.testi-nav-arrow.prev-slide');
    const nextBtn = document.querySelector('.testi-nav-arrow.next-slide');
    const sliderWrapper = document.querySelector('.testi-slider-wrapper');
    
    let currentIndex = 0;
    
    function getVisibleSlides() {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 992) return 2;
        return 3;
    }
    
    function getMaxIndex() {
        return Math.max(0, slides.length - getVisibleSlides());
    }

    function goToSlide(index) {
        const maxIndex = getMaxIndex();
        
        if (index < 0) index = maxIndex;
        if (index > maxIndex) index = 0;
        
        currentIndex = index;
        
        // Calculate offset based on a single slide's width + gap
        const slideWidth = slides[0].offsetWidth;
        const gap = 30; // 30px gap defined in CSS
        const offset = currentIndex * (slideWidth + gap);
        
        slidesContainer.style.transform = `translateX(-${offset}px)`;
        
        // Update dots
        dots.forEach(dot => {
            dot.style.background = '#ddd';
            dot.classList.remove('active');
        });
        
        // Safety check for dots in case of resize changing maxIndex
        if(dots[currentIndex]) {
            dots[currentIndex].style.background = 'var(--text-dark)';
            dots[currentIndex].classList.add('active');
        } else if (dots[0]) {
            dots[0].style.background = 'var(--text-dark)';
            dots[0].classList.add('active');
        }
    }

    // Manual Controls
    prevBtn.addEventListener('click', () => {
        goToSlide(currentIndex - 1);
        resetAutoScroll();
    });

    nextBtn.addEventListener('click', () => {
        goToSlide(currentIndex + 1);
        resetAutoScroll();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            resetAutoScroll();
        });
    });

    // Auto Scroll Logic (2 seconds as requested)
    let autoScrollInterval;
    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            goToSlide(currentIndex + 1);
        }, 2000);
    }

    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }

    function resetAutoScroll() {
        stopAutoScroll();
        startAutoScroll();
    }

    // Pause on hover
    sliderWrapper.addEventListener('mouseenter', stopAutoScroll);
    sliderWrapper.addEventListener('mouseleave', startAutoScroll);

    // Initialize
    startAutoScroll();
    
    // Handle window resize
    window.addEventListener('resize', () => {
        goToSlide(currentIndex);
    });
});
</script>

