    <!-- About Intro Section -->
    <style>
        @media (max-width: 992px) {
            .about-content-row { grid-template-columns: 1fr !important; gap: 40px !important; }
            .experience-card { min-height: 300px !important; padding: 40px !important; }
            .about-text-content { text-align: left; }
            .stats-grid { justify-content: flex-start; text-align: left; }
            .signature-block { align-items: center; }
        }
        @media (max-width: 768px) {
            .about-intro-section { padding: 60px 20px !important; }
            .about-text-content .section-title { font-size: 2.2rem !important; }
            .exp-number-mask { font-size: 120px !important; }
            .stats-grid { grid-template-columns: repeat(2, 1fr) !important; gap: 30px 15px !important; padding-bottom: 30px !important; }
            .stat-item h3 { font-size: 28px !important; }
            .experience-card { min-height: 250px !important; }
        }
        @media (max-width: 480px) {
            .stats-grid { grid-template-columns: 1fr !important; gap: 20px !important; }
        }
    </style>
    <section class="about-intro-section" style="padding: 100px 0; background-color: var(--bg-white);">
        <div class="container" style="max-width: 1100px;">
            
            <!-- About Content Row -->
            <div class="about-content-row" style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 60px; align-items: center;">
                
                <!-- Left: 18 Years Experience -->
                <div class="experience-card" style="border: 2px solid var(--primary-color); border-radius: 80px 20px 80px 20px; text-align: center; background: white; display: flex; flex-direction: column; justify-content: flex-end; align-items: center; min-height: 400px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); position: relative; overflow: hidden; padding: 0;">
                    <!-- Image from the user's workspace -->
                    <img src="assets/images/awards.jpeg" alt="Awards Ceremony" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                    
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 60%; background: linear-gradient(to top, rgba(26, 38, 30, 0.9), transparent); z-index: 1;"></div>
                    
                    <div style="position: relative; z-index: 2; padding: 40px 20px;">
                        <h2 style="font-size: 80px; font-weight: 800; line-height: 1; color: white; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">18</h2>
                        <h3 class="exp-text" style="font-size: 20px; color: rgba(255,255,255,0.9); margin: 0; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Years of Experience</h3>
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="about-text-content">
                    <p class="section-subtitle" style="letter-spacing: 2px; font-weight: 600; text-transform: uppercase;">ABOUT US</p>
                    <h2 class="section-title" style="font-size: 42px; margin-bottom: 20px; line-height: 1.2;">Turning <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400; color: var(--accent-color);">Your Dream<br>Home</span> into Reality</h2>
                    <p style="color: var(--text-muted); margin-bottom: 40px; line-height: 1.8; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    
                    <div class="stats-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 40px; border-bottom: 1px solid #eaeaea; padding-bottom: 40px;">
                        <div class="stat-item">
                            <h3 style="font-size: 32px; margin-bottom: 5px; color: var(--text-dark); font-weight: 700;">250+</h3>
                            <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Project Completed</p>
                        </div>
                        <div class="stat-item">
                            <h3 style="font-size: 32px; margin-bottom: 5px; color: var(--text-dark); font-weight: 700;">35+</h3>
                            <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Awards Gained</p>
                        </div>
                        <div class="stat-item">
                            <h3 style="font-size: 32px; margin-bottom: 5px; color: var(--text-dark); font-weight: 700;">99%</h3>
                            <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Satisfied Customer</p>
                        </div>
                    </div>

                    <div class="signature-block" style="display: flex; flex-direction: column; gap: 5px;">
                        <span class="founder-signature" style="font-family: var(--font-accent); font-size: 2.5rem; color: var(--text-dark); opacity: 0.8; font-style: italic;">Reedam</span>
                        <p style="font-size: 13px; color: var(--text-muted); margin: 0; padding-left: 5px;">Reedam <span style="color: var(--accent-color);">•</span> Founder</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
