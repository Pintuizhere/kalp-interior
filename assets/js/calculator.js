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
                
                // Handle sub-options toggling if applicable
                const targetId = this.getAttribute('data-target');
                if (targetId) {
                    const stepGroup = this.closest('.calc-step-group');
                    if (stepGroup) {
                        const allSubGroups = stepGroup.querySelectorAll('.sub-options-group');
                        allSubGroups.forEach(group => group.style.display = 'none');
                        const targetGroup = document.getElementById(targetId);
                        if (targetGroup) {
                            targetGroup.style.display = 'grid';
                            // Automatically select the first option of the new group
                            const firstCard = targetGroup.querySelector('.calc-option-card');
                            const firstInput = targetGroup.querySelector('input[type="radio"]');
                            if (firstCard && firstInput) {
                                // Deactivate all in target group first
                                const allTargetCards = targetGroup.querySelectorAll('.calc-option-card');
                                allTargetCards.forEach(c => c.classList.remove('active'));
                                firstCard.classList.add('active');
                                firstInput.checked = true;
                            }
                        }
                    }
                }
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

    // Handle property type selection to show/hide custom sqft input
    const propertyTypeCards = document.querySelectorAll('.type-options .calc-option-card');
    const sqftStepGroup = document.getElementById('sqft-step-group');
    const sqftInput = document.getElementById('sqft-input');

    propertyTypeCards.forEach(card => {
        card.addEventListener('click', function() {
            const input = this.querySelector('input[type="radio"]');
            if(input) {
                if(input.getAttribute('data-custom') === 'true' || input.value === 'custom') {
                    sqftStepGroup.style.display = 'block';
                    sqftInput.value = ''; // clear or leave as is
                } else {
                    sqftStepGroup.style.display = 'none';
                    sqftInput.value = input.value; // set the predefined value
                }
            }
        });
    });

    // Handle Square Footage Input display update
    const sqftBadge = document.getElementById('calc-sqft-badge');
    const badgeSqftText = document.getElementById('badge-sqft-text');
    
    if(sqftInput && sqftBadge && badgeSqftText) {
        sqftInput.addEventListener('input', function() {
            if(this.value && parseInt(this.value) > 0) {
                sqftBadge.style.display = 'inline-block';
                badgeSqftText.innerText = `${this.value} sq.ft`;
            } else {
                sqftBadge.style.display = 'none';
            }
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
                
                // Generate actual numbers based on inputs
                let sqft = parseInt(document.getElementById('sqft-input').value);
                if (!sqft) {
                    const selectedProp = document.querySelector('input[name="property_type"]:checked');
                    if(selectedProp && selectedProp.value !== 'custom') {
                        sqft = parseInt(selectedProp.value);
                    }
                }
                sqft = sqft || 0;
                
                if(sqft <= 0) {
                    alert("Please enter a valid area.");
                    return;
                }
                
                // Get selected rate (Package)
                const rate = parseInt(document.querySelector('input[name="finish_level"]:checked').value);
                let baseCost = sqft * rate;
                
                // Get Design Style percentage
                const designStylePct = parseInt(document.querySelector('input[name="design_style"]:checked').value || 0);
                const designStyleCost = baseCost * (designStylePct / 100);
                
                // Get Addons percentages and individual costs
                let addonsCost = 0;
                
                // Reset all addon list items to hidden
                ['8', '10', '4'].forEach(val => {
                    const li = document.getElementById(`li-addon-${val}`);
                    if(li) li.style.display = 'none';
                });
                
                const checkedAddons = document.querySelectorAll('input[name="addons"]:checked');
                if (checkedAddons) {
                    checkedAddons.forEach(addon => {
                        const val = parseInt(addon.value || 0);
                        const cost = baseCost * (val / 100);
                        addonsCost += cost;
                        
                        // Show in breakdown
                        const li = document.getElementById(`li-addon-${val}`);
                        const span = document.getElementById(`bd-addon-${val}`);
                        if (li && span) {
                            li.style.display = 'flex'; // because breakdown list items are typically flex
                            span.innerText = `₹${cost.toLocaleString('en-IN')}`;
                        }
                    });
                }
                
                const subtotal = Math.round(baseCost + designStyleCost);
                const totalCost = Math.round(subtotal + addonsCost);
                
                // Format numbers with Indian formatting
                const formatNum = (num) => '₹' + num.toLocaleString('en-IN');
                
                // Update total
                document.getElementById('calc-total-range').innerText = `${formatNum(totalCost)}`;
                document.getElementById('bd-total').innerText = `${formatNum(totalCost)}`;
                
                // Update breakdown with new percentages based on subtotal
                const furnitureCost = Math.round(subtotal * 0.29);
                const wardrobesCost = Math.round(subtotal * 0.21);
                const kitchenCost = Math.round(subtotal * 0.15);
                const falseCeilingCost = Math.round(subtotal * 0.10);
                const electricalCost = Math.round(subtotal * 0.09);
                const designCost = Math.round(subtotal * 0.06);
                const paintCost = Math.round(subtotal * 0.04);
                // Make sure decorative sums to exactly the remainder to avoid rounding issues
                const decorativeCost = subtotal - (furnitureCost + wardrobesCost + kitchenCost + falseCeilingCost + electricalCost + designCost + paintCost);
                
                document.getElementById('bd-furniture').innerText = `${formatNum(furnitureCost)}`;
                document.getElementById('bd-wardrobes').innerText = `${formatNum(wardrobesCost)}`;
                document.getElementById('bd-kitchen').innerText = `${formatNum(kitchenCost)}`;
                document.getElementById('bd-false-ceiling').innerText = `${formatNum(falseCeilingCost)}`;
                document.getElementById('bd-electrical').innerText = `${formatNum(electricalCost)}`;
                document.getElementById('bd-design').innerText = `${formatNum(designCost)}`;
                document.getElementById('bd-paint').innerText = `${formatNum(paintCost)}`;
                document.getElementById('bd-decorative').innerText = `${formatNum(decorativeCost)}`;
                
                // Update sqft price text
                document.getElementById('calc-sqft-price').innerText = `(${formatNum(rate)} per sq.ft)`;

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
