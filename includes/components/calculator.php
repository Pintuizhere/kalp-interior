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
                                <label>Select Property Category</label>
                            </div>
                            <div class="calc-options-grid main-category-options" style="grid-template-columns: repeat(2, 1fr); margin-bottom: 20px;">
                                <label class="calc-option-card active" data-target="residential-options">
                                    <input type="radio" name="property_category" value="residential" checked>
                                    <i class="fa-solid fa-house"></i>
                                    <span>Residential</span>
                                </label>
                                <label class="calc-option-card" data-target="commercial-options">
                                    <input type="radio" name="property_category" value="commercial">
                                    <i class="fa-solid fa-building"></i>
                                    <span>Commercial</span>
                                </label>
                            </div>

                            <div class="calc-step-label">
                                <span class="step-num"><i class="fa-solid fa-arrow-right"></i></span>
                                <label>Select Specific Type</label>
                            </div>
                            
                            <div id="residential-options" class="calc-options-grid type-options sub-options-group">
                                <label class="calc-option-card active">
                                    <input type="radio" name="property_type" value="900" checked>
                                    <i class="fa-solid fa-house-chimney"></i>
                                    <span>1 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 900 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1300">
                                    <i class="fa-solid fa-building"></i>
                                    <span>2 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 1300 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1500">
                                    <i class="fa-solid fa-building-user"></i>
                                    <span>3 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 1500 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="2000">
                                    <i class="fa-solid fa-city"></i>
                                    <span>4 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 2000 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="2500">
                                    <i class="fa-solid fa-tree-city"></i>
                                    <span>5 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 2500 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="custom" data-custom="true">
                                    <i class="fa-solid fa-pen-ruler"></i>
                                    <span>Custom</span>
                                </label>
                            </div>

                            <div id="commercial-options" class="calc-options-grid type-options sub-options-group" style="display: none;">
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1000">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <span>Office</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1500">
                                    <i class="fa-solid fa-store"></i>
                                    <span>Retail Shop</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="2000">
                                    <i class="fa-solid fa-utensils"></i>
                                    <span>Restaurant</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="800">
                                    <i class="fa-solid fa-stethoscope"></i>
                                    <span>Clinic</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="custom" data-custom="true">
                                    <i class="fa-solid fa-pen-ruler"></i>
                                    <span>Custom</span>
                                </label>
                            </div>
                        </div>

                        <!-- Step 2: Square Footage -->
                        <div class="calc-step-group" id="sqft-step-group" style="flex: 1; display: none;">
                            <div class="calc-step-label">
                                <span class="step-num">2</span>
                                <label>Enter Square Footage</label>
                            </div>
                            <div class="calc-input-wrapper">
                                <input type="number" name="sqft" id="sqft-input" class="calc-input" placeholder="Enter Exact Area (sqft)" style="width: 100%; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: white; font-family: inherit; font-size: 16px; outline: none; box-sizing: border-box;" min="1">
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
                                <input type="radio" name="design_style" value="8" checked>
                                <i class="fa-solid fa-couch"></i>
                                <span>Modern (+8%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="0">
                                <i class="fa-solid fa-chair"></i>
                                <span>Contemporary</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="-8">
                                <i class="fa-solid fa-leaf"></i>
                                <span>Minimalist (-8%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="-5">
                                <i class="fa-solid fa-snowflake"></i>
                                <span>Scandinavian (-5%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="20">
                                <i class="fa-brands fa-pagelines"></i>
                                <span>Japandi (+20%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="15">
                                <i class="fa-solid fa-campground"></i>
                                <span>Boho (+15%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="10">
                                <i class="fa-solid fa-chess-rook"></i>
                                <span>Traditional (+10%)</span>
                            </label>
                        </div>
                    </div>

                    <div class="calc-row">
                        <!-- Step 4: Finishing Level -->
                        <div class="calc-step-group" style="flex: 1.5;">
                            <div class="calc-step-label">
                                <span class="step-num">4</span>
                                <label>Select Package</label>
                            </div>
                            <div class="calc-options-grid finish-options">
                                <label class="calc-option-card active" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="1200" checked>
                                    <i class="fa-solid fa-layer-group" style="margin-bottom: 0; margin-right: 15px; font-size: 20px;"></i>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Essential</span>
                                        <span style="font-size: 11px; opacity: 0.7;">₹1200/sqft</span>
                                    </div>
                                </label>
                                <label class="calc-option-card" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="1450">
                                    <i class="fa-solid fa-gem" style="margin-bottom: 0; margin-right: 15px; font-size: 20px;"></i>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Premium</span>
                                        <span style="font-size: 11px; opacity: 0.7;">₹1450/sqft</span>
                                    </div>
                                </label>
                                <label class="calc-option-card" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="1650">
                                    <i class="fa-regular fa-gem" style="margin-bottom: 0; margin-right: 15px; font-size: 20px;"></i>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Luxury Plus</span>
                                        <span style="font-size: 11px; opacity: 0.7;">₹1650/sqft</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Step 5: Add-ons -->
                        <div class="calc-step-group" style="flex: 1;">
                            <div class="calc-step-label">
                                <span class="step-num">5</span>
                                <label>Add-ons (Optional)</label>
                            </div>
                            <div class="calc-checkbox-grid addons">
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="addons" value="8">
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Civil work (+8%)
                                </label>
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="addons" value="10">
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Flooring (+10%)
                                </label>
                                <label class="calc-checkbox">
                                    <input type="checkbox" name="addons" value="4">
                                    <span class="chk-box"><i class="fa-solid fa-check"></i></span> Curtain/Soft Furnishing (+4%)
                                </label>
                            </div>
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
                        <h2 class="results-price" id="calc-total-range">₹0</h2>
                        <p class="results-sqft-price" id="calc-sqft-price">(₹0 per sq.ft)</p>
                        <div class="results-sqft-badge" id="calc-sqft-badge" style="display: none;">
                            <i class="fa-regular fa-square-check"></i> <span id="badge-sqft-text">0 sq.ft</span>
                        </div>
                    </div>

                    <div class="results-breakdown">
                        <h4 class="breakdown-title">Estimate Breakdown</h4>
                        <ul class="breakdown-list">
                            <li>
                                <span>TV Unit, Crockery, Vanity & Other Furniture</span>
                                <span id="bd-furniture">₹0</span>
                            </li>
                            <li>
                                <span>Wardrobes & Storage</span>
                                <span id="bd-wardrobes">₹0</span>
                            </li>
                            <li>
                                <span>Modular Kitchen</span>
                                <span id="bd-kitchen">₹0</span>
                            </li>
                            <li>
                                <span>False Ceiling</span>
                                <span id="bd-false-ceiling">₹0</span>
                            </li>
                            <li>
                                <span>Electrical & Lighting</span>
                                <span id="bd-electrical">₹0</span>
                            </li>
                            <li>
                                <span>Design, Project Management & Site Supervision</span>
                                <span id="bd-design">₹0</span>
                            </li>
                            <li>
                                <span>Paint & Wall Finishes</span>
                                <span id="bd-paint">₹0</span>
                            </li>
                            <li>
                                <span>Decorative Lights & Accessories</span>
                                <span id="bd-decorative">₹0</span>
                            </li>
                            <!-- Add-ons -->
                            <li id="li-addon-8" style="display: none; border-top: 1px dashed rgba(255,255,255,0.2); padding-top: 10px; margin-top: 10px; color: var(--accent-color);">
                                <span>+ Civil work</span>
                                <span id="bd-addon-8">₹0</span>
                            </li>
                            <li id="li-addon-10" style="display: none; color: var(--accent-color);">
                                <span>+ Flooring</span>
                                <span id="bd-addon-10">₹0</span>
                            </li>
                            <li id="li-addon-4" style="display: none; color: var(--accent-color);">
                                <span>+ Curtain/Soft Furnishing</span>
                                <span id="bd-addon-4">₹0</span>
                            </li>
                        </ul>
                        <div class="breakdown-total">
                            <span>Total Estimated Cost</span>
                            <span id="bd-total">₹0</span>
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
