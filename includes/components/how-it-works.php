<!-- How It Works Section -->
<section class="how-it-works-section" style="padding: 100px 0; background-color: var(--bg-white);">
    <div class="container">
        
        <div class="text-center" style="margin-bottom: 60px;">
            <p class="section-subtitle" style="justify-content: center; margin-bottom: 15px;">HOW IT WORK</p>
            <h2 class="section-title" style="text-transform: uppercase;">HOW WE HANDLE YOUR HOME'S<br>RENOVATIONS</h2>
        </div>

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
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745a872f?w=1200&q=80" alt="Consultation">
                </div>
                <div class="hiw-pane" id="hiw-pane-2">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1200&q=80" alt="Design">
                </div>
                <div class="hiw-pane" id="hiw-pane-3">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200&q=80" alt="Construction">
                </div>
                <div class="hiw-pane" id="hiw-pane-4">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1200&q=80" alt="Final Touch">
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
