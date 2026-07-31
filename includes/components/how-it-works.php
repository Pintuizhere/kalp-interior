<!-- How It Works Section -->
<section class="how-it-works-section" style="padding: 100px 0; background-color: var(--bg-white);">
    <div class="container">
        
        <div class="text-center" style="margin-bottom: 60px;">
            <p class="section-subtitle" style="justify-content: center; margin-bottom: 15px;">HOW IT WORK</p>
            <h2 class="section-title" style="text-transform: uppercase;">HOW WE HANDLE YOUR HOME'S<br>RENOVATIONS</h2>
        </div>

        <style>
            .hiw-pane {
                position: relative;
                overflow: hidden;
                border-radius: 0 0 20px 20px;
            }
            .hiw-desc-overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                background: rgba(26, 36, 33, 0.9);
                backdrop-filter: blur(8px);
                color: white;
                padding: 30px 40px;
                transform: translateY(10px);
                opacity: 0;
                transition: all 0.5s ease 0.2s;
                text-align: left;
                border-top: 2px solid var(--accent-color);
            }
            .hiw-pane.active .hiw-desc-overlay {
                transform: translateY(0);
                opacity: 1;
            }
            .hiw-desc-overlay h4 {
                color: var(--accent-color);
                font-size: 1.6rem;
                margin-bottom: 10px;
                font-family: var(--font-primary);
            }
            .hiw-desc-overlay p {
                margin: 0;
                font-size: 1.05rem;
                line-height: 1.6;
                color: #e0e0e0;
            }
            @media (max-width: 768px) {
                .hiw-desc-overlay {
                    padding: 20px;
                }
                .hiw-desc-overlay h4 {
                    font-size: 1.3rem;
                }
                .hiw-desc-overlay p {
                    font-size: 0.9rem;
                }
            }
        </style>

        <div class="how-it-works-container">
            <!-- Tabs -->
            <div class="hiw-tabs">
                <button class="hiw-tab active" data-tab="1">
                    <span class="hiw-num">01.</span> Consultation
                </button>
                <button class="hiw-tab" data-tab="2">
                    <span class="hiw-num">02.</span> Design
                </button>
                <button class="hiw-tab" data-tab="3">
                    <span class="hiw-num">03.</span> Construction
                </button>
                <button class="hiw-tab" data-tab="4">
                    <span class="hiw-num">04.</span> Final Touch
                </button>
            </div>

            <!-- Tab Content (Images) -->
            <div class="hiw-content">
                <div class="hiw-pane active" id="hiw-pane-1">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&q=80" alt="Consultation">
                    <div class="hiw-desc-overlay">
                        <h4>Consultation</h4>
                        <p>We begin with a detailed discussion to deeply understand your vision, functional requirements, style preferences, and budget constraints.</p>
                    </div>
                </div>
                <div class="hiw-pane" id="hiw-pane-2">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200&q=80" alt="Design">
                    <div class="hiw-desc-overlay">
                        <h4>Design & Planning</h4>
                        <p>Our experts create comprehensive 2D layouts and 3D renderings, bringing your ideas to life with precise material and lighting detailing.</p>
                    </div>
                </div>
                <div class="hiw-pane" id="hiw-pane-3">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1200&q=80" alt="Construction">
                    <div class="hiw-desc-overlay">
                        <h4>Construction & Execution</h4>
                        <p>Our skilled contractors and project managers execute the build with premium materials, rigorous quality control, and strict timelines.</p>
                    </div>
                </div>
                <div class="hiw-pane" id="hiw-pane-4">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?w=1200&q=80" alt="Final Touch">
                    <div class="hiw-desc-overlay">
                        <h4>The Final Touch</h4>
                        <p>We add the perfect styling, artwork, and décor elements, handing over a beautifully finished space that is ready for you to enjoy.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.hiw-tab');
        const panes = document.querySelectorAll('.hiw-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active state from all tabs and panes
                tabs.forEach(t => t.classList.remove('active'));
                panes.forEach(p => p.classList.remove('active'));

                // Add active state to the clicked tab
                tab.classList.add('active');
                
                // Show the corresponding pane
                const targetId = 'hiw-pane-' + tab.getAttribute('data-tab');
                document.getElementById(targetId).classList.add('active');
            });
        });
    });
</script>
