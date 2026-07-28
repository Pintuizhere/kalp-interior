    <!-- Press & Achievements Accordion Section -->
    <style>
        @media (max-width: 768px) {
            .awards-section { padding: 60px 15px !important; }
            .awards-header .section-title { font-size: 2.2rem !important; margin-bottom: 30px !important; }
            .awards-header .section-subtitle { font-size: 13px !important; margin-bottom: 15px !important; }
            .press-panel-content { padding: 20px !important; }
            .press-title { font-size: 1.4rem !important; }
            .press-brand { font-size: 14px !important; }
            .press-date { font-size: 12px !important; }
        }
    </style>
    <section class="awards-section" style="background-color: #111111; padding: 100px 0;">
        <div class="container" style="max-width: 1400px;">
            <div class="awards-header">
                <p class="section-subtitle" style="justify-content: center; margin-bottom: 20px; color: rgba(255,255,255,0.5);">
                    PRESS & ACHIEVEMENTS
                    <span style="display: inline-block; width: 40px; height: 1px; background-color: var(--accent-color); margin-left: 15px;"></span>
                </p>
                <h2 class="section-title" style="text-align: center; color: white; margin-bottom: 50px;">Featured <span class="accent-text">In The Press</span></h2>
            </div>
            
            <div class="press-accordion-container">
                <!-- Panel 1 (Active by default) -->
                <div class="press-panel active" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
                    <div class="press-panel-overlay"></div>
                    <div class="press-panel-content">
                        <div class="press-brand">
                            <i class="fa-solid fa-award" style="color: var(--accent-color);"></i> Design Excellence
                        </div>
                        <div class="press-bottom">
                            <h3 class="press-title">Interior Design of the Year 2025</h3>
                            <div class="press-date">
                                <span>Tuesday</span>
                                <span>Nov 04, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel 2 -->
                <div class="press-panel" style="background-image: url('https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
                    <div class="press-panel-overlay"></div>
                    <div class="press-panel-content">
                        <div class="press-brand">
                            <i class="fa-solid fa-newspaper" style="color: var(--accent-color);"></i> ArchDigest
                        </div>
                        <div class="press-bottom">
                            <h3 class="press-title">Featured: Luxury Mumbai Apartment</h3>
                            <div class="press-date">
                                <span>Monday</span>
                                <span>Nov 10, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel 3 -->
                <div class="press-panel" style="background-image: url('https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
                    <div class="press-panel-overlay"></div>
                    <div class="press-panel-content">
                        <div class="press-brand">
                            <i class="fa-solid fa-trophy" style="color: var(--accent-color);"></i> Best Materials
                        </div>
                        <div class="press-bottom">
                            <h3 class="press-title">Sustainable Sourcing Award</h3>
                            <div class="press-date">
                                <span>Wednesday</span>
                                <span>Oct 15, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel 4 -->
                <div class="press-panel" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
                    <div class="press-panel-overlay"></div>
                    <div class="press-panel-content">
                        <div class="press-brand">
                            <i class="fa-solid fa-star" style="color: var(--accent-color);"></i> 5-Star Rated
                        </div>
                        <div class="press-bottom">
                            <h3 class="press-title">Top 10 Studios in India</h3>
                            <div class="press-date">
                                <span>Tuesday</span>
                                <span>Oct 21, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel 5 -->
                <div class="press-panel" style="background-image: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
                    <div class="press-panel-overlay"></div>
                    <div class="press-panel-content">
                        <div class="press-brand">
                            <i class="fa-solid fa-medal" style="color: var(--accent-color);"></i> Recognition
                        </div>
                        <div class="press-bottom">
                            <h3 class="press-title">Kalp Interior Global Expansion</h3>
                            <div class="press-date">
                                <span>Wednesday</span>
                                <span>Aug 27, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Accordion Interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const panels = document.querySelectorAll('.press-panel');
            
            panels.forEach(panel => {
                panel.addEventListener('click', () => {
                    // Remove active class from all panels
                    panels.forEach(p => p.classList.remove('active'));
                    // Add active class to the clicked panel
                    panel.classList.add('active');
                });
            });
        });
    </script>
