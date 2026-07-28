<!-- Projects Stripe -->
<style>
@keyframes scrollProjectsStripe {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 30px)); } /* 50% shift minus half the gap */
}
.projects-marquee-wrapper {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    position: relative;
    -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
}
.projects-marquee-content {
    display: inline-flex;
    align-items: center;
    gap: 60px;
    animation: scrollProjectsStripe 25s linear infinite;
}
.projects-marquee-content:hover {
    animation-play-state: paused;
}
.projects-stripe-img {
    height: 40px; 
    width: auto; 
    border-radius: 4px;
    object-fit: cover;
    transition: transform 0.3s;
}
</style>
<section class="projects-stripe" style="background-color: transparent; padding: 25px 0; overflow: hidden;">
    <div class="container" style="display: flex; align-items: center; gap: 40px;">
        
        <!-- Text area replicating the Stripe UI style -->
        <div class="projects-text" style="flex-shrink: 0; position: relative; z-index: 2; border-left: 5px solid var(--accent-color); padding-left: 15px;">
            <p style="color: black; font-family: var(--font-primary); font-size: 15px; margin: 0; line-height: 1.4; font-weight: 700; text-transform: uppercase;">
                OUR<br>PROJECTS
            </p>
        </div>
        
        <!-- Images Area with Smooth Continuous Scroll -->
        <div class="projects-marquee-wrapper">
            <div class="projects-marquee-content">
                <!-- Set 1 -->
                <img src="assets/images/brand-logo1.webp" alt="Brand 1" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo2.webp" alt="Brand 2" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo3.png" alt="Brand 3" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo4.png" alt="Brand 4" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo5.png" alt="Brand 5" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo1.webp" alt="Brand 1" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo2.webp" alt="Brand 2" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo3.png" alt="Brand 3" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo4.png" alt="Brand 4" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo5.png" alt="Brand 5" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <!-- Set 2 (Duplicate for continuous loop) -->
                <img src="assets/images/brand-logo1.webp" alt="Brand 1" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo2.webp" alt="Brand 2" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo3.png" alt="Brand 3" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo4.png" alt="Brand 4" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo5.png" alt="Brand 5" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo1.webp" alt="Brand 1" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo2.webp" alt="Brand 2" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo3.png" alt="Brand 3" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo4.png" alt="Brand 4" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                <img src="assets/images/brand-logo5.png" alt="Brand 5" class="projects-stripe-img" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
            </div>
        </div>
        
    </div>
</section>
