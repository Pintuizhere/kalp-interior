<section class="calculator-section" style="padding: 100px 0; background-color: var(--primary-color);">
    <div class="container" style="max-width: 1400px;">
        
        <!-- Calculator Header -->
        <div class="calc-header">
            <div class="calc-title-box">
                <h1 class="calc-title" style="color: white; font-size: 2.5rem; margin-bottom: 10px;">Interior Design Estimate Calculator</h1>
                <p style="color: rgba(255,255,255,0.7); font-size: 1.1rem;">Get an instant estimate for your dream space</p>
            </div>
            
            <div class="calc-header-features">
                <div class="calc-h-feature">
                    <div class="calc-h-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="calc-h-text">
                        <strong>Instant Estimate</strong>
                        <span>Get results in seconds</span>
                    </div>
                </div>
                <div class="calc-h-feature">
                    <div class="calc-h-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="calc-h-text">
                        <strong>Accurate Pricing</strong>
                        <span>Real-time market rates</span>
                    </div>
                </div>
                <div class="calc-h-feature">
                    <div class="calc-h-icon"><i class="fa-solid fa-magnifying-glass-dollar"></i></div>
                    <div class="calc-h-text">
                        <strong>Transparent</strong>
                        <span>No hidden charges</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calculator Body -->
        <div class="calc-body">
            
            <!-- Left Column: Form -->
            <div class="calc-form-col">
                <div class="calc-form-header">
                    <h3>Configure Your Project</h3>
                    <p>Fill in the details below to get your estimated cost range</p>
                </div>
                
                <form id="estimate-calculator-form">
                    
                    <div class="calc-row">
                        <!-- Step 1: Property Type -->
                        <div class="calc-step-group" style="flex: 2;">
                            <div class="calc-step-label">
                                <span class="step-num">1</span>
                                <label>Select Property Type</label>
                            </div>
                            <div class="calc-options-grid type-options">
                                <label class="calc-option-card active">
                                    <input type="radio" name="property_type" value="apartment" checked>
                                    <i class="fa-regular fa-building"></i>
                                    <span>Apartment</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="villa">
                                    <i class="fa-solid fa-house"></i>
                                    <span>Villa</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="penthouse">
                                    <i class="fa-solid fa-city"></i>
                                    <span>Penthouse</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="studio">
                                    <i class="fa-solid fa-border-all"></i>
                                    <span>Studio</span>
                                </label>
                            </div>
                        </div>

                        <!-- Step 2: Square Footage -->
                        <div class="calc-step-group" style="flex: 1;">
                            <div class="calc-step-label">
                                <span class="step-num">2</span>
                                <label>Select Square Footage</label>
                            </div>
                            <div class="calc-select-wrapper">
                                <select name="sqft" id="sqft-select" class="calc-select">
                                    <option value="1000">1000 - 1200 sq.ft</option>
                                    <option value="1200" selected>1200 - 1500 sq.ft</option>
                                    <option value="1500">1500 - 2000 sq.ft</option>
                                    <option value="2000">2000+ sq.ft</option>
                                </select>
                                <p class="calc-select-hint">Super Built-up Area</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Design Style -->
                    <div class="calc-step-group">
                        <div class="calc-step-label">
                            <span class="step-num">3</span>
                            <label>Select Design Style</label>
                        </div>
                        <div class="calc-options-grid style-options">
                            <label class="calc-option-card active">
                                <input type="radio" name="design_style" value="modern" checked>
                                <i class="fa-solid fa-couch"></i>
                                <span>Modern</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="contemporary">
                                <i class="fa-solid fa-chair"></i>
                                <span>Contemporary</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="minimalist">
                                <i class="fa-solid fa-leaf"></i>
                                <span>Minimalist</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="classic">
                                <i class="fa-solid fa-building-columns"></i>
                                <span>Classic</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="luxury">
                                <i class="fa-solid fa-crown"></i>
                                <span>Luxury</span>
                            </label>
                        </div>
                    </div>

                    <div class="calc-row">
                        <!-- Step 4: Finishing Level -->
                        <div class="calc-step-group" style="flex: 1.5;">
                            <div class="calc-step-label">
                                <span class="step-num">4</span>
                                <label>Select Finishing Level</label>
                            </div>
                            <div class="calc-options-grid finish-options">
                                <label class="calc-option-card active" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="standard" checked>
                                    <i class="fa-solid fa-layer-group" style="margin-bottom: 0; margin-right: 15px; font-size: 20px;"></i>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Standard</span>
                                        <span style="font-size: 11px; opacity: 0.7;">Good Quality</span>
                                    </div>
                                </label>
                                <label class="calc-option-card" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="premium">
                                    <i class="fa-solid fa-gem" style="margin-bottom: 0; margin-right: 15px; font-size: 20px;"></i>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Premium</span>
                                        <span style="font-size: 11px; opacity: 0.7;">Better Quality</span>
                                    </div>
                                </label>
                                <label class="calc-option-card" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="luxury">
                                    <i class="fa-regular fa-gem" style="margin-bottom: 0; margin-right: 15px; font-size: 20px;"></i>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Luxury</span>
                                        <span style="font-size: 11px; opacity: 0.7;">Top Quality</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Step 5: Rooms -->
                        <div class="calc-step-group" style="flex: 1;">
                            <div class="calc-step-label">
                                <span class="step-num">5</span>
                                <label>Select Rooms</label>
                            </div>
                            <div class="calc-checkbox-grid">
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="rooms" value="living_room" checked>
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Living Room
                                </label>
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="rooms" value="bedrooms" checked>
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Bedrooms
                                </label>
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="rooms" value="kitchen" checked>
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Kitchen
                                </label>
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="rooms" value="bathrooms" checked>
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Bathrooms
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6: Add-ons -->
                    <div class="calc-step-group">
                        <div class="calc-step-label">
                            <span class="step-num">6</span>
                            <label>Add-ons (Optional)</label>
                        </div>
                        <div class="calc-checkbox-grid addons">
                            <label class="calc-checkbox active">
                                <input type="checkbox" name="addons" value="false_ceiling" checked>
                                <span class="chk-box"><i class="fa-solid fa-check"></i></span> False Ceiling
                            </label>
                            <label class="calc-checkbox active">
                                <input type="checkbox" name="addons" value="wardrobes" checked>
                                <span class="chk-box"><i class="fa-solid fa-check"></i></span> Wardrobes
                            </label>
                            <label class="calc-checkbox active">
                                <input type="checkbox" name="addons" value="modular_kitchen" checked>
                                <span class="chk-box"><i class="fa-solid fa-check"></i></span> Modular Kitchen
                            </label>
                            <label class="calc-checkbox">
                                <input type="checkbox" name="addons" value="study">
                                <span class="chk-box"><i class="fa-solid fa-check"></i></span> Study / Home Office
                            </label>
                            <label class="calc-checkbox">
                                <input type="checkbox" name="addons" value="balcony">
                                <span class="chk-box"><i class="fa-solid fa-check"></i></span> Balcony Design
                            </label>
                        </div>
                    </div>

                    <button type="button" id="calc-estimate-btn" class="calc-submit-btn">
                        <i class="fa-solid fa-calculator"></i> Calculate Estimate
                    </button>
                    
                    <p class="calc-disclaimer">
                        <i class="fa-solid fa-circle-info"></i> This is an estimated range. Final cost may vary based on design, material selection & site conditions.
                    </p>

                </form>
            </div>
            
            <!-- Right Column: Results -->
            <div class="calc-results-col">
                <div class="calc-results-card">
                    <h3 class="results-main-title">Your Estimated Cost Range</h3>
                    
                    <div class="results-highlight">
                        <p class="results-subtitle">Estimated Investment</p>
                        <h2 class="results-price" id="calc-total-range">$24,500 - $32,800</h2>
                        <p class="results-sqft-price" id="calc-sqft-price">($20 - $27 per sq.ft)</p>
                        <div class="results-sqft-badge" id="calc-sqft-badge">
                            <i class="fa-regular fa-square-check"></i> 1200 - 1500 sq.ft
                        </div>
                    </div>

                    <div class="results-breakdown">
                        <h4 class="breakdown-title">Estimate Breakdown</h4>
                        <ul class="breakdown-list">
                            <li>
                                <span>Design & Planning</span>
                                <span id="bd-design">$2,500 - $3,200</span>
                            </li>
                            <li>
                                <span>Civil & Carpentry</span>
                                <span id="bd-civil">$10,000 - $13,500</span>
                            </li>
                            <li>
                                <span>Electrical & Lighting</span>
                                <span id="bd-electrical">$3,200 - $4,200</span>
                            </li>
                            <li>
                                <span>Modular Kitchen</span>
                                <span id="bd-kitchen">$4,000 - $5,500</span>
                            </li>
                            <li>
                                <span>Finishes & Furnishing</span>
                                <span id="bd-finishes">$4,800 - $6,800</span>
                            </li>
                        </ul>
                        <div class="breakdown-total">
                            <span>Total Estimated Range</span>
                            <span id="bd-total">$24,500 - $32,800</span>
                        </div>
                    </div>

                    <div class="results-whats-included">
                        <div class="wi-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                        <div class="wi-text">
                            <strong>What's Included?</strong>
                            <p>Complete interior design, materials, labour, installation & project management.</p>
                        </div>
                    </div>

                    <a href="contact.php" class="results-cta">
                        <div class="cta-icon"><i class="fa-regular fa-calendar-check"></i></div>
                        <div class="cta-text">
                            <strong>Book a Free Consultation</strong>
                            <span>Speak with our design expert</span>
                        </div>
                        <i class="fa-solid fa-chevron-right cta-arrow"></i>
                    </a>
                </div>
            </div>
            
        </div>
        
        <!-- Calculator Footer Badges -->
        <div class="calc-footer-badges">
            <div class="cf-badge">
                <i class="fa-solid fa-medal"></i>
                <div class="cf-text">
                    <strong>10+ Years Experience</strong>
                    <span>Expert interior designers</span>
                </div>
            </div>
            <div class="cf-badge">
                <i class="fa-regular fa-clock"></i>
                <div class="cf-text">
                    <strong>On-time Delivery</strong>
                    <span>We value your time</span>
                </div>
            </div>
            <div class="cf-badge">
                <i class="fa-solid fa-certificate"></i>
                <div class="cf-text">
                    <strong>Quality Assurance</strong>
                    <span>Premium materials only</span>
                </div>
            </div>
            <div class="cf-badge">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <div class="cf-text">
                    <strong>Custom Designs</strong>
                    <span>Tailored to your lifestyle</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Include Javascript for logic -->
<script src="assets/js/calculator.js"></script>
