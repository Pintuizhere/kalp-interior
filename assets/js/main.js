document.addEventListener("DOMContentLoaded", function() {
    console.log("Kalp Interior Studio Main JS loaded.");
    
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.faq-header');
        if (header) {
            header.addEventListener('click', () => {
                // Close other active items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.faq-body').style.display = 'none';
                        otherItem.querySelector('.faq-icon i').className = 'fa-solid fa-plus';
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
                const body = item.querySelector('.faq-body');
                const icon = item.querySelector('.faq-icon i');
                
                if (item.classList.contains('active')) {
                    body.style.display = 'block';
                    icon.className = 'fa-solid fa-minus';
                } else {
                    body.style.display = 'none';
                    icon.className = 'fa-solid fa-plus';
                }
            });
        }
    });

    // Before/After Slider Logic
    const baSlider = document.getElementById('ba-slider');
    if (baSlider) {
        const beforeImage = document.querySelector('.ba-image-before');
        const sliderHandle = document.getElementById('ba-slider-handle');
        
        baSlider.addEventListener('input', function(e) {
            const sliderValue = e.target.value;
            // Update the width of the before image
            beforeImage.style.width = sliderValue + "%";
            // Move the custom handle position
            sliderHandle.style.left = sliderValue + "%";
        });
    }
});
