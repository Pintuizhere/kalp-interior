document.addEventListener('DOMContentLoaded', function() {
    // Handling custom radio buttons (Property Type, Design Style, Finish Level)
    const radioGroups = document.querySelectorAll('.calc-options-grid');
    
    radioGroups.forEach(group => {
        const cards = group.querySelectorAll('.calc-option-card');
        
        cards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove active class from all in this group
                cards.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked
                this.classList.add('active');
                
                // The actual radio input will be checked automatically because of the label tag wrapping it
            });
        });
    });

    // Handling custom checkboxes (Rooms, Add-ons)
    const checkboxes = document.querySelectorAll('.calc-checkbox');
    
    checkboxes.forEach(cb => {
        const input = cb.querySelector('input[type="checkbox"]');
        
        // Initial state sync
        if (input.checked) {
            cb.classList.add('active');
        }
        
        // Click listener on the label triggers change on the input
        input.addEventListener('change', function() {
            if (this.checked) {
                cb.classList.add('active');
            } else {
                cb.classList.remove('active');
            }
        });
    });

    // Handle Square Footage Select display update
    const sqftSelect = document.getElementById('sqft-select');
    const sqftBadge = document.getElementById('calc-sqft-badge');
    
    if(sqftSelect && sqftBadge) {
        sqftSelect.addEventListener('change', function() {
            const selectedText = this.options[this.selectedIndex].text;
            sqftBadge.innerHTML = `<i class="fa-regular fa-square-check"></i> ${selectedText}`;
        });
    }

    // Calculation Logic Simulation
    const calcBtn = document.getElementById('calc-estimate-btn');
    
    if(calcBtn) {
        calcBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // In a real scenario, you'd fetch the selected values:
            // const type = document.querySelector('input[name="property_type"]:checked').value;
            // const style = document.querySelector('input[name="design_style"]:checked').value;
            // const sqft = parseInt(document.getElementById('sqft-select').value);
            // const finish = document.querySelector('input[name="finish_level"]:checked').value;
            // Addons and rooms would be collected similarly
            
            // For this UI demo, we will simulate a "calculation" effect
            // by adding a loading state and updating numbers slightly.
            
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Calculating...';
            this.style.pointerEvents = 'none';
            this.style.opacity = '0.8';
            
            setTimeout(() => {
                // Restore button
                this.innerHTML = originalText;
                this.style.pointerEvents = 'auto';
                this.style.opacity = '1';
                
                // Add a simple animation class to the results card to show it updated
                const resultsCard = document.querySelector('.calc-results-card');
                resultsCard.style.transition = 'transform 0.3s ease';
                resultsCard.style.transform = 'scale(1.02)';
                
                // Generate some random new numbers to simulate calculation based on inputs
                const sqft = parseInt(document.getElementById('sqft-select').value);
                
                // Very basic mock logic for visual change
                let basePrice = sqft * 15;
                
                // Randomize slightly for demo
                const r1 = 1 + (Math.random() * 0.2); 
                const r2 = 1.3 + (Math.random() * 0.2);
                
                const minTotal = Math.round(basePrice * r1);
                const maxTotal = Math.round(basePrice * r2);
                
                // Format numbers
                const formatNum = (num) => '$' + num.toLocaleString();
                
                // Update total
                document.getElementById('calc-total-range').innerText = `${formatNum(minTotal)} - ${formatNum(maxTotal)}`;
                document.getElementById('bd-total').innerText = `${formatNum(minTotal)} - ${formatNum(maxTotal)}`;
                
                // Update breakdown (approximate percentages)
                document.getElementById('bd-design').innerText = `${formatNum(Math.round(minTotal*0.1))} - ${formatNum(Math.round(maxTotal*0.1))}`;
                document.getElementById('bd-civil').innerText = `${formatNum(Math.round(minTotal*0.4))} - ${formatNum(Math.round(maxTotal*0.4))}`;
                document.getElementById('bd-electrical').innerText = `${formatNum(Math.round(minTotal*0.13))} - ${formatNum(Math.round(maxTotal*0.13))}`;
                document.getElementById('bd-kitchen').innerText = `${formatNum(Math.round(minTotal*0.17))} - ${formatNum(Math.round(maxTotal*0.17))}`;
                document.getElementById('bd-finishes').innerText = `${formatNum(Math.round(minTotal*0.2))} - ${formatNum(Math.round(maxTotal*0.2))}`;
                
                // Update sqft price text
                document.getElementById('calc-sqft-price').innerText = `($${Math.round(minTotal/sqft)} - $${Math.round(maxTotal/sqft)} per sq.ft)`;

                setTimeout(() => {
                    resultsCard.style.transform = 'scale(1)';
                }, 300);
                
                // Scroll to results on mobile
                if (window.innerWidth <= 1200) {
                    resultsCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
                
            }, 800);
        });
    }
});
