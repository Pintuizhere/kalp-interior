document.addEventListener('DOMContentLoaded', function() {
    // --- Lead Capture Modal Logic ---
    window.isLeadCaptured = false;
    window.currentCalcBtn = null;
    
    const leadModal = document.getElementById('calc-lead-modal');
    const leadForm = document.getElementById('calc-lead-form');
    const leadCloseBtn = document.getElementById('calc-lead-close');

    if (leadForm) {
        leadForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const pdfName = document.getElementById('pdf-lead-name');
            const pdfContact = document.getElementById('pdf-lead-contact');
            const pdfLocation = document.getElementById('pdf-lead-location');
            
            if (pdfName) pdfName.textContent = document.getElementById('lead-name').value;
            if (pdfContact) pdfContact.textContent = document.getElementById('lead-contact').value;
            if (pdfLocation) pdfLocation.textContent = document.getElementById('lead-location').value;
            
            window.isLeadCaptured = true;
            if (leadModal) leadModal.style.display = 'none';
            
            if (window.currentCalcBtn) {
                window.currentCalcBtn.click();
            }
        });
    }
    
    if (leadCloseBtn) {
        leadCloseBtn.addEventListener('click', function() {
            if (leadModal) leadModal.style.display = 'none';
        });
    }

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
                
                // Toggle standard steps vs kitchen steps
                if (this.closest('.main-category-options')) {
                    const standardSteps = document.getElementById('standard-calc-steps');
                    const specificTypeLabel = document.getElementById('specific-type-label');
                    const kitchenOptions = document.getElementById('kitchen-options');
                    
                    if (this.getAttribute('data-target') === 'kitchen-options' || this.id === 'cat-kitchen') {
                        if (standardSteps) standardSteps.style.display = 'none';
                        if (specificTypeLabel) specificTypeLabel.style.display = 'none';
                        if (kitchenOptions) kitchenOptions.style.display = 'block';
                    } else {
                        if (standardSteps) standardSteps.style.display = 'block';
                        if (specificTypeLabel) specificTypeLabel.style.display = 'flex';
                        if (kitchenOptions) kitchenOptions.style.display = 'none';
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

    // Handle property type selection to update sqft input
    const propertyTypeCards = document.querySelectorAll('.type-options .calc-option-card');
    const sqftStepGroup = document.getElementById('sqft-step-group');
    const sqftInput = document.getElementById('sqft-input');

    propertyTypeCards.forEach(card => {
        card.addEventListener('click', function() {
            const input = this.querySelector('input[type="radio"]');
            if(input) {
                sqftInput.value = input.value;
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

    // --- Modular Kitchen Wizard Logic ---
    const kitchenForm = document.getElementById('kitchen-options');
    if (kitchenForm) {
        let currentKStep = 1;
        const totalKSteps = 5;
        const kNextBtns = document.querySelectorAll('.k-next-btn');
        const kPrevBtns = document.querySelectorAll('.k-prev-btn');
        const kIndicators = document.querySelectorAll('.k-step-indicator');
        const kContents = document.querySelectorAll('.kitchen-step-content');
        const kProgressFill = document.getElementById('kitchen-progress-fill');
        
        function updateKStep() {
            // Update contents
            kContents.forEach((c, index) => {
                if (index + 1 === currentKStep) {
                    c.style.display = 'block';
                } else {
                    c.style.display = 'none';
                }
            });
            
            // Update indicators and progress bar
            kIndicators.forEach((ind, index) => {
                const circle = ind.querySelector('.k-step-circle');
                const text = ind.querySelector('span');
                if (index + 1 < currentKStep) {
                    circle.style.background = '#2ECC71';
                    circle.style.borderColor = '#2ECC71';
                    circle.style.color = 'white';
                    text.style.color = 'white';
                } else if (index + 1 === currentKStep) {
                    circle.style.background = '#2ECC71';
                    circle.style.borderColor = '#2ECC71';
                    circle.style.color = 'white';
                    text.style.color = 'white';
                } else {
                    circle.style.background = '#334C40';
                    circle.style.borderColor = 'rgba(255,255,255,0.2)';
                    circle.style.color = 'rgba(255,255,255,0.5)';
                    text.style.color = 'rgba(255,255,255,0.5)';
                }
            });
            
            // Update progress line
            if (currentKStep === 1) kProgressFill.style.width = '0%';
            else if (currentKStep === 2) kProgressFill.style.width = '25%';
            else if (currentKStep === 3) kProgressFill.style.width = '50%';
            else if (currentKStep === 4) kProgressFill.style.width = '75%';
            else if (currentKStep === 5) kProgressFill.style.width = '100%';
        }
        
        kNextBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentKStep < totalKSteps) {
                    currentKStep++;
                    if(currentKStep === 2) generateKMeasurements();
                    updateKStep();
                }
            });
        });
        
        kPrevBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentKStep > 1) {
                    currentKStep--;
                    updateKStep();
                }
            });
        });
        
        const kBackToMainBtn = document.querySelector('.k-back-to-main-btn');
        if (kBackToMainBtn) {
            kBackToMainBtn.addEventListener('click', () => {
                document.getElementById('kitchen-calculator-form').style.display = 'none';
                document.getElementById('estimate-calculator-form').style.display = 'block';
            });
        }

        function generateKMeasurements() {
            const layout = document.querySelector('input[name="k_layout"]:checked').value;
            const diagram = document.getElementById('k-measure-diagram');
            const inputsContainer = document.getElementById('k-measure-inputs');
            
            let htmlInputs = '';
            let htmlDiagram = '';
            
            // Common input template
            const inputTpl = (label) => `
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                    <div style="width: 20px; font-weight: bold; color: white;">${label}:</div>
                    <div style="display: flex; gap: 10px; flex: 1; margin-left: 15px;">
                        <div style="flex: 1; position: relative;">
                            <input type="number" id="k_measure_${label}_ft" value="10" min="0" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(255,255,255,0.2); background: transparent; color: white; outline: none;">
                            <span style="position: absolute; right: 10px; top: 12px; color: rgba(255,255,255,0.5); font-size: 14px;">ft.</span>
                        </div>
                        <div style="flex: 1; position: relative;">
                            <input type="number" id="k_measure_${label}_in" value="0" min="0" max="11" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid rgba(255,255,255,0.2); background: transparent; color: white; outline: none;">
                            <span style="position: absolute; right: 10px; top: 12px; color: rgba(255,255,255,0.5); font-size: 14px;">In.</span>
                        </div>
                    </div>
                </div>
            `;
            
            if (layout === 'l-shaped') {
                htmlDiagram = `
                    <div style="position: relative; width: 240px; height: 180px; margin: 0 auto;">
                        <svg width="100%" height="100%" viewBox="0 0 160 120">
                            <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                            <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <text x="80" y="24.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">A</text>
                            <text x="135.5" y="72" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">B</text>
                        </svg>
                    </div>`;
                htmlInputs = inputTpl('A') + inputTpl('B');
            } else if (layout === 'u-shaped') {
                htmlDiagram = `
                    <div style="position: relative; width: 240px; height: 180px; margin: 0 auto;">
                        <svg width="100%" height="100%" viewBox="0 0 160 120">
                            <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                            <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="12" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <text x="24.5" y="72" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">A</text>
                            <text x="80" y="24.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">B</text>
                            <text x="135.5" y="72" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">C</text>
                        </svg>
                    </div>`;
                htmlInputs = inputTpl('A') + inputTpl('B') + inputTpl('C');
            } else if (layout === 'straight') {
                htmlDiagram = `
                    <div style="position: relative; width: 240px; height: 180px; margin: 0 auto;">
                        <svg width="100%" height="100%" viewBox="0 0 160 120">
                            <path d="M 10 90 L 10 10 L 150 10 L 150 90" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                            <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <text x="80" y="24.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">A</text>
                        </svg>
                    </div>`;
                htmlInputs = inputTpl('A');
            } else if (layout === 'parallel') {
                htmlDiagram = `
                    <div style="position: relative; width: 240px; height: 180px; margin: 0 auto;">
                        <svg width="100%" height="100%" viewBox="0 0 160 120">
                            <path d="M 10 40 L 10 10 L 150 10 L 150 40 M 10 80 L 10 110 L 150 110 L 150 80" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                            <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="12" y="83" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <text x="80" y="24.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">A</text>
                            <text x="80" y="95.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">B</text>
                        </svg>
                    </div>`;
                htmlInputs = inputTpl('A') + inputTpl('B');
            } else if (layout === 'peninsula') {
                htmlDiagram = `
                    <div style="position: relative; width: 240px; height: 180px; margin: 0 auto;">
                        <svg width="100%" height="100%" viewBox="0 0 160 120">
                            <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                            <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="12" y="83" width="70" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <text x="80" y="24.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">A</text>
                            <text x="135.5" y="72" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">B</text>
                            <text x="47" y="95.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">C</text>
                        </svg>
                    </div>`;
                htmlInputs = inputTpl('A') + inputTpl('B') + inputTpl('C');
            } else if (layout === 'island') {
                htmlDiagram = `
                    <div style="position: relative; width: 240px; height: 180px; margin: 0 auto;">
                        <svg width="100%" height="100%" viewBox="0 0 160 120">
                            <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                            <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <rect x="35" y="70" width="50" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                            <text x="80" y="24.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">A</text>
                            <text x="135.5" y="72" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">B</text>
                            <text x="60" y="82.5" font-size="14" fill="#000" font-weight="bold" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">C</text>
                        </svg>
                    </div>`;
                htmlInputs = inputTpl('A') + inputTpl('B') + inputTpl('C');
            }
            
            diagram.innerHTML = htmlDiagram;
            inputsContainer.innerHTML = htmlInputs;
        }

        // Package selection visual
        const pkgCards = document.querySelectorAll('.k-package-card');
        pkgCards.forEach(card => {
            const input = card.querySelector('input[type="radio"]');
            if (input) {
                input.addEventListener('change', function() {
                    if (this.checked) {
                        pkgCards.forEach(c => {
                            c.classList.remove('active');
                            const radio = c.querySelector('.k-pkg-radio');
                            if(radio) radio.style.borderColor = 'rgba(255,255,255,0.3)';
                        });
                        card.classList.add('active');
                        const radio = card.querySelector('.k-pkg-radio');
                        if(radio) radio.style.borderColor = 'white';
                    }
                });
            }
        });
        
        // Accessory checkbox visual
        const accCards = document.querySelectorAll('.calc-checkbox-card');
        accCards.forEach(card => {
            const input = card.querySelector('input');
            if (input) {
                input.addEventListener('change', () => {
                    if(input.checked) {
                        card.style.background = 'rgba(244, 180, 26, 0.1)';
                        card.style.borderColor = '#F4B41A';
                    } else {
                        card.style.background = 'rgba(255,255,255,0.05)';
                        card.style.borderColor = 'rgba(255,255,255,0.1)';
                    }
                });
            }
        });

        const kCalcBtn = document.getElementById('kitchen-calculate-btn');
        if (kCalcBtn) {
            kCalcBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                if (!window.isLeadCaptured) {
                    window.currentCalcBtn = this;
                    const leadModal = document.getElementById('calc-lead-modal');
                    if(leadModal) leadModal.style.display = 'flex';
                    return;
                }
                
                currentKStep = 5;
                updateKStep();
                
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Calculating...';
                this.style.pointerEvents = 'none';
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.style.pointerEvents = 'auto';
                    
                    const layout = document.querySelector('input[name="k_layout"]:checked').value;
                    let totalFt = 0;
                    ['A', 'B', 'C'].forEach(label => {
                        const ftInput = document.getElementById(`k_measure_${label}_ft`);
                        const inInput = document.getElementById(`k_measure_${label}_in`);
                        if(ftInput) {
                            totalFt += parseFloat(ftInput.value || 0);
                            if(inInput) totalFt += (parseFloat(inInput.value || 0) / 12);
                        }
                    });
                    
                    const rate = parseFloat(document.querySelector('input[name="k_package"]:checked').value);
                    const baseCost = totalFt * rate;
                    
                    let addonsCost = 0;
                    const accList = document.getElementById('kitchen-accessories-list');
                    accList.innerHTML = '';
                    accList.style.display = 'block';
                    
                    const checkedAccs = document.querySelectorAll('input[name="k_accessories"]:checked');
                    if(checkedAccs.length === 0) accList.style.display = 'none';
                    
                    const formatNum = (num) => '₹' + Math.round(num).toLocaleString('en-IN');
                    
                    checkedAccs.forEach(acc => {
                        const ratePerFt = parseFloat(acc.value);
                        const cost = ratePerFt * totalFt; // Calculate based on rft!
                        addonsCost += cost;
                        accList.innerHTML += `
                            <div style="display:flex; justify-content:space-between; margin-bottom:5px;">
                                <span>+ ${acc.getAttribute('data-name')}</span>
                                <span>${formatNum(cost)}</span>
                            </div>
                        `;
                    });
                    
                    const totalCost = baseCost + addonsCost;
                    
                    // Reset all other breakdowns
                    ['bd-furniture', 'bd-wardrobes', 'bd-false-ceiling', 'bd-electrical', 'bd-design', 'bd-paint', 'bd-decorative'].forEach(id => {
                        document.getElementById(id).innerText = '₹0';
                        document.getElementById(id).closest('li').style.display = 'none';
                    });
                    ['8', '10', '4'].forEach(val => {
                        const li = document.getElementById(`li-addon-${val}`);
                        if(li) li.style.display = 'none';
                    });
                    
                    document.getElementById('bd-kitchen').closest('li').style.display = 'flex';
                    document.getElementById('bd-kitchen').innerText = formatNum(baseCost);
                    
                    document.getElementById('calc-total-range').innerText = formatNum(totalCost);
                    document.getElementById('bd-total').innerText = formatNum(totalCost);
                    document.getElementById('calc-sqft-price').style.display = 'none';
                    
                    document.getElementById('estimate-breakdown-section').style.display = 'block';                    
                    document.getElementById('download-pdf-btn').style.display = 'flex';
                    document.getElementById('calc-sqft-badge').style.display = 'inline-block';
                    document.getElementById('badge-sqft-text').innerText = `${totalFt.toFixed(1)} rft`;

                    const resultsCard = document.querySelector('.calc-results-card');
                    if (window.innerWidth <= 1200) {
                        resultsCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }, 800);
            });
        }
    }

    // Calculation Logic Simulation (Standard)
    const calcBtn = document.getElementById('calc-estimate-btn');
    
    if(calcBtn) {
        calcBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (!window.isLeadCaptured) {
                window.currentCalcBtn = this;
                const leadModal = document.getElementById('calc-lead-modal');
                if(leadModal) leadModal.style.display = 'flex';
                return;
            }
            
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
                
                const sqftInputEl = document.getElementById('sqft-input');
                const sqftErrorEl = document.getElementById('sqft-error');
                
                if(sqft < 400) {
                    if (sqftErrorEl) sqftErrorEl.style.display = 'block';
                    if (sqftInputEl) sqftInputEl.style.borderColor = '#E74C3C';
                    return;
                } else {
                    if (sqftErrorEl) sqftErrorEl.style.display = 'none';
                    if (sqftInputEl) sqftInputEl.style.borderColor = 'rgba(255,255,255,0.1)';
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
                const furnitureCost = Math.round(subtotal * 0.285);
                const wardrobesCost = Math.round(subtotal * 0.204);
                const kitchenCost = Math.round(subtotal * 0.155);
                const falseCeilingCost = Math.round(subtotal * 0.097);
                const electricalCost = Math.round(subtotal * 0.089);
                const designCost = Math.round(subtotal * 0.07);
                const paintCost = Math.round(subtotal * 0.075);
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
                
                // Hide sqft price text
                document.getElementById('calc-sqft-price').style.display = 'none';

                // Show estimate breakdown section
                document.getElementById('estimate-breakdown-section').style.display = 'block';
                document.getElementById('download-pdf-btn').style.display = 'flex';

                // Show other breakdowns
                ['bd-furniture', 'bd-wardrobes', 'bd-kitchen', 'bd-false-ceiling', 'bd-electrical', 'bd-design', 'bd-paint', 'bd-decorative'].forEach(id => {
                    document.getElementById(id).closest('li').style.display = 'flex';
                });
                
                // Hide kitchen accessories
                const kAccList = document.getElementById('kitchen-accessories-list');
                if(kAccList) kAccList.style.display = 'none';

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

    // PDF Download Logic
    const downloadPdfBtn = document.getElementById('download-pdf-btn');
    if(downloadPdfBtn) {
        downloadPdfBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const pdfTemplate = document.getElementById('pdf-export-template');
            if(!pdfTemplate) return;

            const originalText = downloadPdfBtn.innerHTML;
            downloadPdfBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Generating...';
            downloadPdfBtn.style.pointerEvents = 'none';

            setTimeout(() => {
                const typeEl = document.querySelector('input[name="property_type"]:checked');
                const sqftInput = document.getElementById('sqft-input');
                const isKitchen = document.querySelector('input[name="property_category"]:checked')?.value === 'kitchen';
                
                let ranges = [];
                if (!isKitchen && typeEl && typeEl.value !== 'custom' && !sqftInput.value) {
                    const min = typeEl.getAttribute('data-min');
                    const max = typeEl.getAttribute('data-max');
                    if (min && max) {
                        ranges = [
                            { sqft: parseInt(min), label: 'Min' },
                            { sqft: parseInt(max), label: 'Max' }
                        ];
                    }
                }

                if (ranges.length === 0) {
                    // Single PDF standard generation
                    generatePdfForRange(null, null).then(() => {
                        downloadPdfBtn.innerHTML = originalText;
                        downloadPdfBtn.style.pointerEvents = 'auto';
                    }).catch(err => {
                        console.error(err);
                        downloadPdfBtn.innerHTML = originalText;
                        downloadPdfBtn.style.pointerEvents = 'auto';
                    });
                } else {
                    // Two PDFs generation
                    generatePdfForRange(ranges[0].sqft, ranges[0].label).then(() => {
                        return generatePdfForRange(ranges[1].sqft, ranges[1].label);
                    }).then(() => {
                        downloadPdfBtn.innerHTML = originalText;
                        downloadPdfBtn.style.pointerEvents = 'auto';
                    }).catch(err => {
                        console.error(err);
                        downloadPdfBtn.innerHTML = originalText;
                        downloadPdfBtn.style.pointerEvents = 'auto';
                    });
                }

                function generatePdfForRange(customSqft, label) {
                    return new Promise((resolve, reject) => {
                        try {
                            // Inject Date and Time
                            const now = new Date();
                            const pad = (n) => (n < 10 ? '0' + n : n);
                            const monthNames = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
                            const dateStr = `${pad(now.getDate())} ${monthNames[now.getMonth()]} ${now.getFullYear()}`;
                            
                            let hours = now.getHours();
                            const ampm = hours >= 12 ? 'PM' : 'AM';
                            hours = hours % 12;
                            hours = hours ? hours : 12;
                            const timeStr = `${pad(hours)}:${pad(now.getMinutes())} ${ampm}`;
                            
                            const pdfDateEl = document.getElementById('pdf-export-date');
                            const pdfTimeEl = document.getElementById('pdf-export-time');
                            if(pdfDateEl) pdfDateEl.textContent = dateStr;
                            if(pdfTimeEl) pdfTimeEl.textContent = timeStr;

                            // Gather Selections
                            const categoryEl = document.querySelector('input[name="property_category"]:checked');
                            const finishEl = document.querySelector('input[name="finish_level"]:checked');
                            const styleEl = document.querySelector('input[name="design_style"]:checked');

                            const categoryText = categoryEl ? categoryEl.nextElementSibling.nextElementSibling.textContent.trim() : 'N/A';
                            let typeText = 'N/A';
                            let styleText = 'N/A';
                            let packageText = 'N/A';
                            let finishValue = '1200';

                            if (isKitchen) {
                                const layoutEl = document.querySelector('input[name="k_layout"]:checked');
                                if(layoutEl) typeText = layoutEl.nextElementSibling.nextElementSibling.textContent.trim();
                                
                                let totalFt = 0;
                                ['A', 'B', 'C'].forEach(lbl => {
                                    const ftInput = document.getElementById(`k_measure_${lbl}_ft`);
                                    const inInput = document.getElementById(`k_measure_${lbl}_in`);
                                    if(ftInput) {
                                        totalFt += parseFloat(ftInput.value || 0);
                                        if(inInput) totalFt += (parseFloat(inInput.value || 0) / 12);
                                    }
                                });
                                typeText += ` (${totalFt.toFixed(1)} rft)`;
                                styleText = 'Modular Kitchen Custom Design';
                                
                                const packageEl = document.querySelector('input[name="k_package"]:checked');
                                if (packageEl) {
                                    finishValue = packageEl.value;
                                    if (finishValue == 1500) packageText = 'Essentials';
                                    else if (finishValue == 2000) packageText = 'Premium';
                                    else packageText = 'Luxury';
                                }
                            } else {
                                if (typeEl) {
                                    if (typeEl.value === 'custom' || (sqftInput && sqftInput.value && sqftInput.value !== typeEl.value)) {
                                        typeText = `Custom (${sqftInput.value || 0} sqft)`;
                                    } else {
                                        typeText = typeEl.nextElementSibling.nextElementSibling.textContent.trim();
                                        if (customSqft) {
                                            typeText += ` (${label}: ${customSqft} sqft)`;
                                        } else if (sqftInput && sqftInput.value) {
                                            typeText += ` (${sqftInput.value} sqft)`;
                                        }
                                    }
                                }
                                styleText = styleEl ? styleEl.nextElementSibling.nextElementSibling.textContent.trim() : 'N/A';
                                
                                if (finishEl) {
                                    finishValue = finishEl.value;
                                    const labelDiv = finishEl.nextElementSibling.nextElementSibling;
                                    if(labelDiv) {
                                        packageText = labelDiv.querySelector('span:first-child').textContent.trim();
                                    }
                                }
                            }

                            document.getElementById('pdf-category').textContent = categoryText;
                            document.getElementById('pdf-type').textContent = typeText;
                            document.getElementById('pdf-style').textContent = styleText;
                            document.getElementById('pdf-package').textContent = packageText;

                            let computedCosts = null;
                            const formatNum = (num) => '₹' + Math.round(num).toLocaleString('en-IN');
                            
                            if (customSqft && !isKitchen) {
                                const rate = parseInt(finishValue);
                                let baseCost = customSqft * rate;
                                const designStylePct = parseInt(styleEl ? styleEl.value : 0);
                                const designStyleCost = baseCost * (designStylePct / 100);
                                let addonsCost = 0;
                                const checkedAddons = document.querySelectorAll('input[name="addons"]:checked');
                                if (checkedAddons) {
                                    checkedAddons.forEach(addon => {
                                        addonsCost += baseCost * (parseInt(addon.value || 0) / 100);
                                    });
                                }
                                const subtotal = Math.round(baseCost + designStyleCost);
                                const totalCost = Math.round(subtotal + addonsCost);
                                computedCosts = {
                                    'furniture': Math.round(subtotal * 0.285),
                                    'wardrobes': Math.round(subtotal * 0.204),
                                    'kitchen': Math.round(subtotal * 0.155),
                                    'false-ceiling': Math.round(subtotal * 0.097),
                                    'electrical': Math.round(subtotal * 0.089),
                                    'design': Math.round(subtotal * 0.07),
                                    'paint': Math.round(subtotal * 0.075),
                                    'total': totalCost
                                };
                                computedCosts['decorative'] = subtotal - (computedCosts['furniture'] + computedCosts['wardrobes'] + computedCosts['kitchen'] + computedCosts['false-ceiling'] + computedCosts['electrical'] + computedCosts['design'] + computedCosts['paint']);
                                
                                if (checkedAddons) {
                                    checkedAddons.forEach(addon => {
                                        computedCosts['addon-' + addon.value] = Math.round(baseCost * (parseInt(addon.value || 0) / 100));
                                    });
                                }
                            }

                            // Populate Quotation
                            const items = ['furniture', 'wardrobes', 'kitchen', 'false-ceiling', 'electrical', 'paint', 'decorative', 'design'];
                            items.forEach(item => {
                                const el = document.getElementById(`bd-${item}`);
                                const pdfEl = document.getElementById(`pdf-bd-${item}`);
                                const li = el ? el.closest('li') : null;
                                if(pdfEl && li) {
                                    if(li.style.display !== 'none' || computedCosts) {
                                        pdfEl.textContent = computedCosts ? formatNum(computedCosts[item]) : el.textContent;
                                        pdfEl.closest('tr').style.display = 'table-row';
                                    } else {
                                        pdfEl.closest('tr').style.display = 'none';
                                    }
                                }
                            });

                            const addonIds = ['8', '10', '4'];
                            addonIds.forEach(id => {
                                const row = document.getElementById('li-addon-' + id);
                                const pdfRow = document.getElementById('pdf-row-addon-' + id);
                                if (row && (row.style.display !== 'none' || (computedCosts && computedCosts['addon-'+id]))) {
                                    if(pdfRow) pdfRow.style.display = 'table-row';
                                    const valEl = document.getElementById('bd-addon-' + id);
                                    const pdfValEl = document.getElementById('pdf-bd-addon-' + id);
                                    if(pdfValEl) pdfValEl.textContent = computedCosts ? formatNum(computedCosts['addon-'+id]) : (valEl ? valEl.textContent : '');
                                } else {
                                    if(pdfRow) pdfRow.style.display = 'none';
                                }
                            });

                            document.getElementById('pdf-cost-total').textContent = computedCosts ? formatNum(computedCosts['total']) : document.getElementById('bd-total').textContent;

                            // Kitchen Accessories
                            const pdfKAccList = document.getElementById('pdf-kitchen-accessories-list');
                            if (pdfKAccList) {
                                pdfKAccList.innerHTML = '';
                                if (isKitchen) {
                                    const checkedAccs = document.querySelectorAll('input[name="k_accessories"]:checked');
                                    checkedAccs.forEach(acc => {
                                        const cost = parseFloat(acc.value);
                                        pdfKAccList.innerHTML += `<tr><td style="padding-bottom: 4px; color:#F4B41A;">+ ${acc.getAttribute('data-name')}</td><td style="text-align: right; color:#F4B41A;">${formatNum(cost)}</td></tr>`;
                                    });
                                }
                            }

                            // Material Specs
                            const specSource = document.getElementById('specs-' + finishValue);
                            const specDest = document.getElementById('pdf-material-specs');
                            const specTitle = document.getElementById('pdf-material-specs-title');
                            
                            if(specTitle && packageText !== 'N/A') {
                                specTitle.textContent = packageText + ' Material Specification';
                            }
                            if (specSource && specDest && !isKitchen) {
                                specDest.innerHTML = specSource.innerHTML;
                                specTitle.style.display = 'block';
                            } else {
                                if(specDest) specDest.innerHTML = "";
                                if(specTitle) specTitle.style.display = 'none';
                            }

                            // Prepare html2pdf
                            const originalParent = pdfTemplate.parentNode;
                            document.body.appendChild(pdfTemplate);
                            pdfTemplate.style.display = 'block';
                            pdfTemplate.style.position = 'absolute';
                            pdfTemplate.style.left = '0';
                            pdfTemplate.style.top = '0';
                            pdfTemplate.style.margin = '0';
                            pdfTemplate.style.zIndex = '-9999';

                            const originalScrollX = window.scrollX;
                            const originalScrollY = window.scrollY;
                            window.scrollTo(0, 0);

                            setTimeout(() => {
                                let filename = 'Kalp_Interior_Studio_Quotation.pdf';
                                if (label) {
                                    filename = `Kalp_Interior_Studio_${label}_Estimate.pdf`;
                                }

                                const opt = {
                                    margin:       0,
                                    filename:     filename,
                                    image:        { type: 'jpeg', quality: 1 },
                                    html2canvas:  { scale: 2, useCORS: true, scrollX: 0, scrollY: 0, width: 794, height: 1123 }, 
                                    jsPDF:        { unit: 'px', format: [794, 1123], orientation: 'portrait', hotfixes: ["px_scaling"] }
                                };

                                html2pdf().set(opt).from(pdfTemplate).save().then(() => {
                                    pdfTemplate.style.display = 'none';
                                    originalParent.appendChild(pdfTemplate);
                                    window.scrollTo(originalScrollX, originalScrollY);
                                    resolve();
                                }).catch(err => {
                                    console.error('PDF Generation Error:', err);
                                    pdfTemplate.style.display = 'none';
                                    originalParent.appendChild(pdfTemplate);
                                    window.scrollTo(originalScrollX, originalScrollY);
                                    reject(err);
                                });
                            }, 50);
                        } catch (error) {
                            reject(error);
                        }
                    });
                }
            }, 100);
        });
    }
});
