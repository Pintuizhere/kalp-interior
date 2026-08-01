    <!-- About Intro Section -->
    <style>
        @media (max-width: 992px) {
            .about-content-row { grid-template-columns: 1fr !important; gap: 40px !important; }
            .experience-card { min-height: 400px !important; padding: 0 !important; }
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
            .experience-card { min-height: 380px !important; }
        }
        @media (max-width: 480px) {
            .stats-grid { grid-template-columns: 1fr !important; gap: 20px !important; }
            .experience-card { min-height: 350px !important; }
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
                    
                    <style>
                        .award-capsule {
                            position: relative; z-index: 2; margin-bottom: 30px; 
                            padding: 12px 28px; display: flex; align-items: center; justify-content: center; 
                            gap: 15px; background: rgba(0, 0, 0, 0.4); 
                            backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); 
                            border: 1px solid rgba(255, 255, 255, 0.2); 
                            border-radius: 50px; box-shadow: 0 8px 20px rgba(0,0,0,0.3); 
                            max-width: 95%; margin-left: auto; margin-right: auto;
                        }
                        .award-capsule i {
                            color: #ffcc00; font-size: 28px; filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.4));
                        }
                        .award-capsule h3 {
                            font-size: 14px; color: white; margin: 0; font-weight: 700; 
                            text-transform: uppercase; letter-spacing: 1px; 
                            text-shadow: 1px 1px 3px rgba(0,0,0,0.8); white-space: nowrap;
                        }
                        @media (max-width: 768px) {
                            .award-capsule {
                                padding: 8px 16px;
                                gap: 8px;
                                margin-bottom: 20px;
                            }
                            .award-capsule i {
                                font-size: 18px;
                            }
                            .award-capsule h3 {
                                font-size: 10px;
                                letter-spacing: 0.5px;
                            }
                        }
                    </style>
                    <div class="award-capsule">
                        <i class="fa-solid fa-trophy"></i>
                        <h3>Best Interior Designer 2025</h3>
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="about-text-content">
                    <p class="section-subtitle" style="letter-spacing: 2px; font-weight: 600; text-transform: uppercase;">ABOUT US</p>
                    <h2 class="section-title" style="font-size: 42px; margin-bottom: 20px; line-height: 1.2;"><?php echo isset($about_content['main_heading']) ? htmlspecialchars($about_content['main_heading']) : 'Turning Your Dream Home into Reality'; ?></h2>
                    <h3 style="font-size: 18px; margin-bottom: 20px; font-weight: 500; color: var(--text-dark);"><?php echo isset($about_content['sub_heading']) ? htmlspecialchars($about_content['sub_heading']) : ''; ?></h3>
                    <p style="color: var(--text-muted); margin-bottom: 40px; line-height: 1.8; font-size: 15px; white-space: pre-wrap;"><?php echo isset($about_content['main_text']) ? htmlspecialchars($about_content['main_text']) : 'Kalp Interiors description goes here.'; ?></p>
                    
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
                        <span class="founder-signature" style="font-family: var(--font-accent); font-size: 2.5rem; color: var(--text-dark); opacity: 0.8; font-style: italic;">Reedam Kumar</span>
                        <p style="font-size: 13px; color: var(--text-muted); margin: 0; padding-left: 5px;">Interior Designer <span style="color: var(--accent-color);">•</span> Founder</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
