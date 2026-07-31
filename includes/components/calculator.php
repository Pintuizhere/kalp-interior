<style>
    @media (max-width: 768px) {
        .calculator-section { padding: 60px 15px !important; }
        .calc-title { font-size: 2rem !important; line-height: 1.3 !important; }
        .calc-form-col, .calc-results-col { padding: 25px 15px !important; border-radius: 15px !important; }
        
        /* Make form elements stack gracefully */
        .calc-options-grid { grid-template-columns: 1fr !important; gap: 10px !important; }
        
        /* Exception: keep 2 columns for primary choices if they fit, or let them stack on very small screens */
        .main-category-options { grid-template-columns: repeat(2, 1fr) !important; }
        
        .calc-header { margin-bottom: 30px; text-align: center; }
        .calc-title-box p { font-size: 1rem !important; }
        .calc-header-features { gap: 15px; }
        
        /* Result column tweaks */
        .results-amount h2 { font-size: 36px !important; }
        .breakdown-row { font-size: 14px !important; }
        .results-cta { padding: 15px !important; flex-direction: column; text-align: center; }
        .results-cta .cta-arrow { align-self: center; margin-top: 10px; }
        
        .cf-badge { width: 100% !important; margin-bottom: 10px; }
        .calc-footer-badges { padding: 20px 0 !important; }
    }
    
    @media (max-width: 480px) {
        .calculator-section { padding: 40px 10px !important; }
        .calc-title { font-size: 1.6rem !important; }
        .calc-form-col, .calc-results-col { padding: 20px 15px !important; }
        
        /* Force 1 column on tiny screens to avoid cramped text */
        .main-category-options, .type-options, .style-options, .finish-options { 
            grid-template-columns: 1fr !important; 
        }
        
        .results-amount h2 { font-size: 28px !important; }
        .results-cta .cta-text strong { font-size: 14px !important; }
        .wi-text p { font-size: 12px !important; }
    }
</style>
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
                                    <i class="fa-solid fa-house" style="color: #F4B41A;"></i>
                                    <span>Residential</span>
                                </label>
                                <label class="calc-option-card" data-target="commercial-options">
                                    <input type="radio" name="property_category" value="commercial">
                                    <i class="fa-solid fa-building" style="color: #4B95C4;"></i>
                                    <span>Commercial</span>
                                </label>
                                <label class="calc-option-card" data-target="kitchen-options" id="cat-kitchen">
                                    <input type="radio" name="property_category" value="kitchen">
                                    <i class="fa-solid fa-kitchen-set" style="color: #E74C3C;"></i>
                                    <span>Modular Kitchen</span>
                                </label>
                            </div>

                            <div class="calc-step-label">
                                <span class="step-num"><i class="fa-solid fa-arrow-right"></i></span>
                                <label>Select Specific Type</label>
                            </div>
                            
                            <div id="residential-options" class="calc-options-grid type-options sub-options-group">
                                <label class="calc-option-card active">
                                    <input type="radio" name="property_type" value="900" checked>
                                    <i class="fa-solid fa-house-chimney" style="color: #E67E22;"></i>
                                    <span>1 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 900 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1300">
                                    <i class="fa-solid fa-building" style="color: #D35400;"></i>
                                    <span>2 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 1300 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1500">
                                    <i class="fa-solid fa-building-user" style="color: #C0392B;"></i>
                                    <span>3 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 1500 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="2000">
                                    <i class="fa-solid fa-city" style="color: #8E44AD;"></i>
                                    <span>4 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 2000 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="2500">
                                    <i class="fa-solid fa-tree-city" style="color: #2980B9;"></i>
                                    <span>5 BHK</span>
                                    <span style="font-size: 11px; opacity: 0.7;">less than 2500 sqft</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="custom" data-custom="true">
                                    <i class="fa-solid fa-pen-ruler" style="color: #16A085;"></i>
                                    <span>Custom</span>
                                </label>
                            </div>

                            <div id="commercial-options" class="calc-options-grid type-options sub-options-group" style="display: none;">
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1000">
                                    <i class="fa-solid fa-briefcase" style="color: #27AE60;"></i>
                                    <span>Office</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="1500">
                                    <i class="fa-solid fa-store" style="color: #F39C12;"></i>
                                    <span>Retail Shop</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="2000">
                                    <i class="fa-solid fa-utensils" style="color: #D35400;"></i>
                                    <span>Restaurant</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="800">
                                    <i class="fa-solid fa-stethoscope" style="color: #E74C3C;"></i>
                                    <span>Clinic</span>
                                </label>
                                <label class="calc-option-card">
                                    <input type="radio" name="property_type" value="custom" data-custom="true">
                                    <i class="fa-solid fa-pen-ruler" style="color: #16A085;"></i>
                                    <span>Custom</span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- Step 2: Square Footage -->
                    <div class="calc-step-group" id="sqft-step-group" style="display: none; margin-bottom: 30px;">
                        <div class="calc-step-label">
                            <span class="step-num">2</span>
                            <label>Enter Square Foot</label>
                        </div>
                        <div class="calc-input-wrapper">
                            <input type="number" name="sqft" id="sqft-input" class="calc-input" placeholder="Enter Exact Area (sqft)" style="width: 100%; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.05); color: white; font-family: inherit; font-size: 16px; outline: none; box-sizing: border-box;" min="1">
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
                                <input type="radio" name="design_style" value="0" checked>
                                <i class="fa-solid fa-chair" style="color: #F1C40F;"></i>
                                <span>Contemporary</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="8">
                                <i class="fa-solid fa-couch" style="color: #3498DB;"></i>
                                <span>Modern (+8%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="-8">
                                <i class="fa-solid fa-leaf" style="color: #2ECC71;"></i>
                                <span>Minimalist (-8%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="-5">
                                <i class="fa-solid fa-snowflake" style="color: #A9CCE3;"></i>
                                <span>Scandinavian (-5%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="20">
                                <i class="fa-brands fa-pagelines" style="color: #1ABC9C;"></i>
                                <span>Japandi (+20%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="15">
                                <i class="fa-solid fa-campground" style="color: #E67E22;"></i>
                                <span>Boho (+15%)</span>
                            </label>
                            <label class="calc-option-card">
                                <input type="radio" name="design_style" value="10">
                                <i class="fa-solid fa-chess-rook" style="color: #9B59B6;"></i>
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
                                    <svg width="32" height="32" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 0; margin-right: 15px; flex-shrink: 0;">
                                        <path d="M 15 20 L 50 10 L 85 20 L 85 50 C 85 75 50 90 50 90 C 50 90 15 75 15 50 Z" fill="#E67E22" stroke="#0F3D64" stroke-width="4" stroke-linejoin="round"/>
                                        <path d="M 50 10 L 85 20 L 85 50 C 85 75 50 90 50 90 Z" fill="#D35400"/>
                                        <path d="M 15 20 L 50 10 L 85 20 L 85 50 C 85 75 50 90 50 90 C 50 90 15 75 15 50 Z" fill="none" stroke="#0F3D64" stroke-width="4" stroke-linejoin="round"/>
                                        <path d="M 35 50 L 45 60 L 65 40" fill="none" stroke="#FFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Essential</span>
                                        <span style="font-size: 11px; opacity: 0.7;">₹1200/sqft</span>
                                    </div>
                                </label>
                                <label class="calc-option-card" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="1450">
                                    <svg width="32" height="32" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 0; margin-right: 15px; flex-shrink: 0;">
                                        <!-- Diamond from old Luxury -->
                                        <polygon points="20,25 35,40 5,40" fill="#E8DAEF"/>
                                        <polygon points="20,25 50,25 35,40" fill="#C39BD3"/>
                                        <polygon points="35,40 50,25 65,40" fill="#E8DAEF"/>
                                        <polygon points="50,25 80,25 65,40" fill="#9B59B6"/>
                                        <polygon points="80,25 95,40 65,40" fill="#6C3483"/>
                                        <polygon points="5,40 35,40 50,80" fill="#C39BD3"/>
                                        <polygon points="35,40 65,40 50,80" fill="#9B59B6"/>
                                        <polygon points="65,40 95,40 50,80" fill="#6C3483"/>
                                        <g stroke="#0F3D64" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="20,25 80,25 95,40 50,80 5,40" fill="none"/>
                                            <line x1="5" y1="40" x2="95" y2="40"/>
                                            <polyline points="20,25 35,40 50,25 65,40 80,25" fill="none"/>
                                            <line x1="35" y1="40" x2="50" y2="80"/>
                                            <line x1="65" y1="40" x2="50" y2="80"/>
                                        </g>
                                    </svg>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Premium</span>
                                        <span style="font-size: 11px; opacity: 0.7;">₹1450/sqft</span>
                                    </div>
                                </label>
                                <label class="calc-option-card" style="flex-direction: row; text-align: left; align-items: center; justify-content: flex-start; padding: 15px;">
                                    <input type="radio" name="finish_level" value="1650">
                                    <svg width="32" height="32" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 0; margin-right: 15px; flex-shrink: 0;">
                                        <!-- Crown from old Luxury Plus -->
                                        <path d="M 32 38 L 22 12 L 38 24 L 50 6 L 62 24 L 78 12 L 68 38 Z" fill="#F4B41A" stroke="#7A5214" stroke-width="4" stroke-linejoin="round"/>
                                        <!-- Diamond Fills -->
                                        <polygon points="20,40 35,55 5,55" fill="#C5E1F5"/>
                                        <polygon points="20,40 50,40 35,55" fill="#8ECAE6"/>
                                        <polygon points="35,55 50,40 65,55" fill="#C5E1F5"/>
                                        <polygon points="50,40 80,40 65,55" fill="#4B95C4"/>
                                        <polygon points="80,40 95,55 65,55" fill="#28699E"/>
                                        <polygon points="5,55 35,55 50,95" fill="#8ECAE6"/>
                                        <polygon points="35,55 65,55 50,95" fill="#4B95C4"/>
                                        <polygon points="65,55 95,55 50,95" fill="#28699E"/>
                                        <!-- Diamond Strokes -->
                                        <g stroke="#0F3D64" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="20,40 80,40 95,55 50,95 5,55" fill="none"/>
                                            <line x1="5" y1="55" x2="95" y2="55"/>
                                            <polyline points="20,40 35,55 50,40 65,55 80,40" fill="none"/>
                                            <line x1="35" y1="55" x2="50" y2="95"/>
                                            <line x1="65" y1="55" x2="50" y2="95"/>
                                        </g>
                                    </svg>
                                    <div>
                                        <span style="display: block; font-weight: 600;">Luxury</span>
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

                <!-- Modular Kitchen Wizard Form -->
                <form id="kitchen-calculator-form" style="display: none;">
                    
                    <!-- Progress Bar for Kitchen -->
                    <div class="kitchen-progress-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; position: relative;">
                        <div style="position: absolute; top: 15px; left: 10%; right: 10%; height: 2px; background: rgba(255,255,255,0.2); z-index: 1;">
                            <div id="kitchen-progress-fill" style="height: 100%; width: 0%; background: #2ECC71; transition: width 0.3s ease;"></div>
                        </div>
                        
                        <div class="k-step-indicator active" data-step="1" style="position: relative; z-index: 2; text-align: center; width: 20%;">
                            <div class="k-step-circle" style="width: 32px; height: 32px; border-radius: 50%; background: #2ECC71; color: white; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; font-weight: bold; border: 2px solid #2ECC71;">1</div>
                            <span style="font-size: 12px; color: white;">Kitchen Layout</span>
                        </div>
                        <div class="k-step-indicator" data-step="2" style="position: relative; z-index: 2; text-align: center; width: 20%;">
                            <div class="k-step-circle" style="width: 32px; height: 32px; border-radius: 50%; background: #334C40; color: rgba(255,255,255,0.5); display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; font-weight: bold; border: 2px solid rgba(255,255,255,0.2);">2</div>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.5);">Measurements</span>
                        </div>
                        <div class="k-step-indicator" data-step="3" style="position: relative; z-index: 2; text-align: center; width: 20%;">
                            <div class="k-step-circle" style="width: 32px; height: 32px; border-radius: 50%; background: #334C40; color: rgba(255,255,255,0.5); display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; font-weight: bold; border: 2px solid rgba(255,255,255,0.2);">3</div>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.5);">Package</span>
                        </div>
                        <div class="k-step-indicator" data-step="4" style="position: relative; z-index: 2; text-align: center; width: 20%;">
                            <div class="k-step-circle" style="width: 32px; height: 32px; border-radius: 50%; background: #334C40; color: rgba(255,255,255,0.5); display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; font-weight: bold; border: 2px solid rgba(255,255,255,0.2);">4</div>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.5);">Accessories</span>
                        </div>
                        <div class="k-step-indicator" data-step="5" style="position: relative; z-index: 2; text-align: center; width: 20%;">
                            <div class="k-step-circle" style="width: 32px; height: 32px; border-radius: 50%; background: #334C40; color: rgba(255,255,255,0.5); display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; font-weight: bold; border: 2px solid rgba(255,255,255,0.2);">5</div>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.5);">Get Quote</span>
                        </div>
                    </div>

                    <!-- Kitchen Step 1: Layout -->
                    <div id="kitchen-step-1" class="kitchen-step-content active">
                        <h3 style="text-align: center; color: white; margin-bottom: 25px;">Select the layout of your kitchen</h3>
                        <div class="calc-options-grid" style="grid-template-columns: repeat(3, 1fr); gap: 15px;">
                            
                            <label class="calc-option-card kitchen-layout-card">
                                <input type="radio" name="k_layout" value="straight">
                                <div style="width: 100%; height: 120px; background: #FFFFFF; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative; overflow: hidden;">
                                    <svg width="100%" height="100%" viewBox="0 0 160 120">
                                        <path d="M 10 90 L 10 10 L 150 10 L 150 90" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                                        <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <g transform="translate(20, 14)"><rect width="20" height="20" fill="#fff" stroke="#000" stroke-width="1"/><circle cx="6" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="6" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/></g>
                                        <g transform="translate(68, 14)"><rect width="24" height="20" rx="2" fill="#fff" stroke="#000" stroke-width="1"/><rect x="2" y="2" width="20" height="12" rx="1" fill="none" stroke="#000" stroke-width="1"/><path d="M 12 14 L 12 18" stroke="#000" stroke-width="1"/></g>
                                        <text x="130" y="27" font-size="20" fill="#000" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">*</text>
                                    </svg>
                                </div>
                                <span>Single Wall</span>
                            </label>

                            <label class="calc-option-card kitchen-layout-card">
                                <input type="radio" name="k_layout" value="parallel">
                                <div style="width: 100%; height: 120px; background: #FFFFFF; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative; overflow: hidden;">
                                    <svg width="100%" height="100%" viewBox="0 0 160 120">
                                        <path d="M 10 40 L 10 10 L 150 10 L 150 40 M 10 80 L 10 110 L 150 110 L 150 80" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                                        <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="12" y="83" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <g transform="translate(20, 14)"><rect width="20" height="20" fill="#fff" stroke="#000" stroke-width="1"/><circle cx="6" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="6" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/></g>
                                        <g transform="translate(68, 14)"><rect width="24" height="20" rx="2" fill="#fff" stroke="#000" stroke-width="1"/><rect x="2" y="2" width="20" height="12" rx="1" fill="none" stroke="#000" stroke-width="1"/><path d="M 12 14 L 12 18" stroke="#000" stroke-width="1"/></g>
                                        <text x="130" y="98" font-size="20" fill="#000" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">*</text>
                                    </svg>
                                </div>
                                <span>Double Galley</span>
                            </label>

                            <label class="calc-option-card active kitchen-layout-card">
                                <input type="radio" name="k_layout" value="l-shaped" checked>
                                <div style="width: 100%; height: 120px; background: #FFFFFF; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative; overflow: hidden;">
                                    <svg width="100%" height="100%" viewBox="0 0 160 120">
                                        <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                                        <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <g transform="translate(20, 14)"><rect width="20" height="20" fill="#fff" stroke="#000" stroke-width="1"/><circle cx="6" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="6" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/></g>
                                        <g transform="translate(68, 14)"><rect width="24" height="20" rx="2" fill="#fff" stroke="#000" stroke-width="1"/><rect x="2" y="2" width="20" height="12" rx="1" fill="none" stroke="#000" stroke-width="1"/><path d="M 12 14 L 12 18" stroke="#000" stroke-width="1"/></g>
                                        <text x="135" y="80" font-size="20" fill="#000" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">*</text>
                                    </svg>
                                </div>
                                <span>L-Shape</span>
                            </label>
                            
                            <label class="calc-option-card kitchen-layout-card">
                                <input type="radio" name="k_layout" value="u-shaped">
                                <div style="width: 100%; height: 120px; background: #FFFFFF; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative; overflow: hidden;">
                                    <svg width="100%" height="100%" viewBox="0 0 160 120">
                                        <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                                        <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="12" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <g transform="translate(45, 14)"><rect width="20" height="20" fill="#fff" stroke="#000" stroke-width="1"/><circle cx="6" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="6" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/></g>
                                        <g transform="translate(90, 14)"><rect width="24" height="20" rx="2" fill="#fff" stroke="#000" stroke-width="1"/><rect x="2" y="2" width="20" height="12" rx="1" fill="none" stroke="#000" stroke-width="1"/><path d="M 12 14 L 12 18" stroke="#000" stroke-width="1"/></g>
                                        <text x="135" y="80" font-size="20" fill="#000" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">*</text>
                                    </svg>
                                </div>
                                <span>U-Shape</span>
                            </label>

                            <label class="calc-option-card kitchen-layout-card">
                                <input type="radio" name="k_layout" value="peninsula">
                                <div style="width: 100%; height: 120px; background: #FFFFFF; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative; overflow: hidden;">
                                    <svg width="100%" height="100%" viewBox="0 0 160 120">
                                        <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                                        <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="12" y="83" width="70" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <g transform="translate(20, 14)"><rect width="20" height="20" fill="#fff" stroke="#000" stroke-width="1"/><circle cx="6" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="6" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/></g>
                                        <g transform="translate(68, 14)"><rect width="24" height="20" rx="2" fill="#fff" stroke="#000" stroke-width="1"/><rect x="2" y="2" width="20" height="12" rx="1" fill="none" stroke="#000" stroke-width="1"/><path d="M 12 14 L 12 18" stroke="#000" stroke-width="1"/></g>
                                        <text x="135" y="80" font-size="20" fill="#000" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">*</text>
                                    </svg>
                                </div>
                                <span>Peninsula</span>
                            </label>

                            <label class="calc-option-card kitchen-layout-card">
                                <input type="radio" name="k_layout" value="island">
                                <div style="width: 100%; height: 120px; background: #FFFFFF; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative; overflow: hidden;">
                                    <svg width="100%" height="100%" viewBox="0 0 160 120">
                                        <path d="M 10 110 L 10 10 L 150 10 L 150 110" stroke="#BDBDBD" stroke-width="4" fill="none" stroke-linecap="square"/>
                                        <rect x="12" y="12" width="136" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="123" y="37" width="25" height="71" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <rect x="35" y="70" width="50" height="25" fill="#C2E7F3" stroke="#000" stroke-width="2"/>
                                        <g transform="translate(20, 14)"><rect width="20" height="20" fill="#fff" stroke="#000" stroke-width="1"/><circle cx="6" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="6" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="6" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/><circle cx="14" cy="14" r="3" fill="none" stroke="#000" stroke-width="1"/></g>
                                        <g transform="translate(68, 14)"><rect width="24" height="20" rx="2" fill="#fff" stroke="#000" stroke-width="1"/><rect x="2" y="2" width="20" height="12" rx="1" fill="none" stroke="#000" stroke-width="1"/><path d="M 12 14 L 12 18" stroke="#000" stroke-width="1"/></g>
                                        <text x="135" y="80" font-size="20" fill="#000" font-family="sans-serif" text-anchor="middle" dominant-baseline="central">*</text>
                                    </svg>
                                </div>
                                <span>Island</span>
                            </label>

                        </div>
                        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                            <button type="button" class="calc-submit-btn k-back-to-main-btn" style="width: auto; padding: 10px 30px; background: rgba(255,255,255,0.1);"><i class="fa-solid fa-arrow-left"></i> Back</button>
                            <button type="button" class="calc-submit-btn k-next-btn" style="width: auto; padding: 10px 30px;">Next <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <!-- Kitchen Step 2: Measurements -->
                    <div id="kitchen-step-2" class="kitchen-step-content" style="display: none;">
                        <h3 style="text-align: center; color: white; margin-bottom: 25px;">Now review the measurements for accuracy</h3>
                        
                        <div id="k-measure-diagram" style="background: #FAF0E6; padding: 30px; border-radius: 12px; display: flex; justify-content: center; margin-bottom: 30px;">
                            <!-- Diagram drawn dynamically based on layout -->
                        </div>

                        <div style="background: rgba(244, 180, 26, 0.2); color: #F4B41A; padding: 10px; text-align: center; border-radius: 5px; margin-bottom: 20px; font-size: 14px;">
                            Standard size has been set for your convenience
                        </div>

                        <div id="k-measure-inputs" style="max-width: 400px; margin: 0 auto;">
                            <!-- Inputs added dynamically -->
                        </div>

                        <div style="display: flex; justify-content: space-between; margin-top: 30px;">
                            <button type="button" class="calc-submit-btn k-prev-btn" style="width: auto; padding: 10px 30px; background: rgba(255,255,255,0.1);"><i class="fa-solid fa-arrow-left"></i> Back</button>
                            <button type="button" class="calc-submit-btn k-next-btn" style="width: auto; padding: 10px 30px;">Next <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <!-- Kitchen Step 3: Package -->
                    <div id="kitchen-step-3" class="kitchen-step-content" style="display: none;">
                        <h3 style="text-align: center; color: white; margin-bottom: 25px;">Pick your package</h3>
                        
                        <div class="calc-options-grid" style="grid-template-columns: repeat(2, 1fr); gap: 20px;">
                            <label class="calc-option-card active k-package-card" style="padding: 20px; text-align: left; display: block;">
                                <input type="radio" name="k_package" value="1500" checked>
                                <div style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;">
                                    <div class="k-pkg-radio" style="width:16px; height:16px; border-radius:50%; border:2px solid white; display:inline-block; margin-right:10px;"></div>
                                    Essentials
                                </div>
                                <p style="font-size: 12px; margin-bottom: 15px; text-align: center; opacity: 0.8;">A range of basic units and accessories for a comfortable kitchen.</p>
                                <ul style="font-size: 11px; padding-left: 15px; opacity: 0.9; margin-bottom: 0;">
                                    <li style="margin-bottom: 5px;">Century Sainik BWP 710 Grade Ply</li>
                                    <li style="margin-bottom: 5px;">1mm Premium Quality Laminate</li>
                                    <li style="margin-bottom: 5px;">Hettich Innotech Tandem Boxes</li>
                                </ul>
                            </label>
                            
                            <label class="calc-option-card k-package-card" style="padding: 20px; text-align: left; display: block;">
                                <input type="radio" name="k_package" value="2000">
                                <div style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: flex; align-items: center; justify-content: center;">
                                    <div class="k-pkg-radio" style="width:16px; height:16px; border-radius:50%; border:2px solid rgba(255,255,255,0.3); display:inline-block; margin-right:10px;"></div>
                                    Premium
                                </div>
                                <p style="font-size: 12px; margin-bottom: 15px; text-align: center; opacity: 0.8;">An exquisite offering with sleek fixtures and hardware.</p>
                                <ul style="font-size: 11px; padding-left: 15px; opacity: 0.9; margin-bottom: 0;">
                                    <li style="margin-bottom: 5px;">Century Bond BWP 710 Grade Ply</li>
                                    <li style="margin-bottom: 5px;">1.5mm Acrylic (Color of choice)</li>
                                    <li style="margin-bottom: 5px;">Hettich Innotech Tandem Boxes (8pcs)</li>
                                </ul>
                            </label>
                        </div>

                        <div style="display: flex; justify-content: space-between; margin-top: 30px;">
                            <button type="button" class="calc-submit-btn k-prev-btn" style="width: auto; padding: 10px 30px; background: rgba(255,255,255,0.1);"><i class="fa-solid fa-arrow-left"></i> Back</button>
                            <button type="button" class="calc-submit-btn k-next-btn" style="width: auto; padding: 10px 30px;">Next <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>

                    <!-- Kitchen Step 4: Accessories -->
                    <div id="kitchen-step-4" class="kitchen-step-content" style="display: none;">
                        <h3 style="text-align: center; color: white; margin-bottom: 10px;">Additional Accessories</h3>
                        <p style="text-align: center; color: rgba(255,255,255,0.7); font-size: 13px; margin-bottom: 25px;">The prices are indicative only, actual cost will be provided after hardware finalization</p>
                        
                        <div class="calc-options-grid k-accessories-grid" style="grid-template-columns: repeat(2, 1fr); gap: 15px;">
                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="15000" data-name="Wicker Basket" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Wicker Basket</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹15,000/-</div>
                                </div>
                            </label>
                            
                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="20000" data-name="Corner Solution" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Corner Solution</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹20,000/-</div>
                                </div>
                            </label>

                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="39000" data-name="Pantry Unit" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Pantry Unit</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹39,000/-</div>
                                </div>
                            </label>

                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="3000" data-name="Pan Hanger Pack & Lid Holder" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Pan Hanger Pack & Lid Holder</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹3,000/-</div>
                                </div>
                            </label>

                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="5000" data-name="Kitchen Midway Pack" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Kitchen Midway Pack</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹5,000/-</div>
                                </div>
                            </label>

                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="2000" data-name="Wire Glass Holder" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Wire Glass Holder</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹2,000/-</div>
                                </div>
                            </label>

                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="1500" data-name="Shelf Tray" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Shelf Tray</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹1,500/-</div>
                                </div>
                            </label>

                            <label class="calc-checkbox-card" style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: flex-start; cursor: pointer; transition: 0.3s;">
                                <input type="checkbox" name="k_accessories" value="4000" data-name="Pull Out / Swing Out Waste Bin" style="margin-right: 15px; margin-top: 5px;">
                                <div>
                                    <div style="font-weight: bold; font-size: 14px; margin-bottom: 5px;">Pull/Swing Out Waste Bin</div>
                                    <div style="color: #E74C3C; font-weight: bold; font-size: 13px;">₹4,000/-</div>
                                </div>
                            </label>
                        </div>

                        <div style="display: flex; justify-content: space-between; margin-top: 30px;">
                            <button type="button" class="calc-submit-btn k-prev-btn" style="width: auto; padding: 10px 30px; background: rgba(255,255,255,0.1);"><i class="fa-solid fa-arrow-left"></i> Back</button>
                            <button type="button" id="kitchen-calculate-btn" class="calc-submit-btn" style="width: auto; padding: 10px 30px;"><i class="fa-solid fa-calculator"></i> Get Quote</button>
                        </div>
                    </div>

                </form>
            </div>
            
            <!-- Right Column: Results -->
            <div class="calc-results-col">
                <div class="calc-results-card" id="quotation-content">
                    <!-- PDF Only Header -->
                    <div id="pdf-header" style="display: none; text-align: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #e0e0e0;">
                        <h2 style="margin: 0; color: #334C40; font-size: 24px;">Kalp Interior Studio</h2>
                        <p style="margin: 5px 0 0 0; color: #666; font-size: 14px;">Official Quotation Estimate</p>
                    </div>

                    <h3 class="results-main-title">Your Estimated Cost Range</h3>
                    
                    <div class="results-highlight">
                        <p class="results-subtitle">Estimated Cost</p>
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
                                <span>Paint & Wall Finishes</span>
                                <span id="bd-paint">₹0</span>
                            </li>
                            <li>
                                <span>Decorative Lights & Accessories</span>
                                <span id="bd-decorative">₹0</span>
                            </li>
                            <li>
                                <span>Design, Project Management & Site Supervision</span>
                                <span id="bd-design">₹0</span>
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
                            <!-- Kitchen Accessories -->
                            <div id="kitchen-accessories-list" style="display: none; border-top: 1px dashed rgba(255,255,255,0.2); padding-top: 10px; margin-top: 10px; color: #F4B41A;">
                                <!-- Dynamically populated -->
                            </div>
                        </ul>
                        <div class="breakdown-total">
                            <span>Total Estimated Cost</span>
                            <span id="bd-total">₹0</span>
                        </div>
                    </div>

                    <button id="download-pdf-btn" type="button" class="results-pdf-btn" style="margin-bottom: 20px; width: 100%; padding: 12px 15px; background: linear-gradient(to right, #e8591c, #d13615); border: none; color: white; border-radius: 10px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; transition: transform 0.2s ease, box-shadow 0.2s ease; box-shadow: 0 4px 10px rgba(209, 54, 21, 0.3);">
                        <svg width="34" height="34" viewBox="-4 -2 64 68" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                            <!-- Document Base (White Fill) -->
                            <path d="M16 0 C 11.5 0, 8 3.5, 8 8 V 56 C 8 60.5, 11.5 64, 16 64 H 48 C 52.5 64, 56 60.5, 56 56 V 18 L 38 0 Z" fill="white"/>
                            <!-- Document Outline -->
                            <path d="M16 0 C 11.5 0, 8 3.5, 8 8 V 56 C 8 60.5, 11.5 64, 16 64 H 48 C 52.5 64, 56 60.5, 56 56 V 18 L 38 0 Z" stroke="black" stroke-width="4" stroke-linejoin="round"/>
                            <!-- Fold -->
                            <path d="M38 0 V 18 H 56" fill="white" stroke="black" stroke-width="4" stroke-linejoin="round"/>
                            <!-- Lines -->
                            <path d="M22 36 H42 M22 45 H42 M22 54 H42" stroke="black" stroke-width="4.5" stroke-linecap="round"/>
                            <!-- PDF Badge -->
                            <rect x="-4" y="14" width="42" height="18" rx="4" fill="#ff0000"/>
                            <!-- PDF Text -->
                            <text x="17" y="27.5" fill="white" font-size="15" font-family="Arial, sans-serif" font-weight="900" text-anchor="middle" letter-spacing="0.5">PDF</text>
                        </svg>
                        <span style="font-size: 20px; font-weight: 800; letter-spacing: 0.5px; font-family: sans-serif;">DOWNLOAD PDF</span>
                    </button>

                    <div class="results-whats-included">
                        <div class="wi-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                        <div class="wi-text">
                            <strong>What's Included?</strong>
                            <p>Complete interior design, materials, labour, installation & project management.</p>
                        </div>
                    </div>

                    <a href="contact.php" class="results-cta" style="background-image: linear-gradient(rgba(15, 61, 100, 0.8), rgba(15, 61, 100, 0.9)), url('assets/images/cta_bg.png'); background-size: cover; background-position: center;">
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
<!-- Hidden PDF Export Template -->
<div id="pdf-export-template" style="display: none; width: 794px; height: 2246px; font-family: 'Inter', sans-serif; background: #ffffff; color: #333333; overflow: hidden; box-sizing: border-box;">
    <div style="display: flex; width: 100%; height: 100%;">
        <!-- Left Sidebar -->
        <div style="width: 35%; flex-shrink: 0; display: flex; flex-direction: column; background: #ffffff;">
            <!-- Brown Top Section -->
            <div style="background-color: #a49375; color: #ffffff; padding: 40px 30px; box-sizing: border-box; flex-grow: 0; min-height: 60%;">
                <!-- Logo -->
                <div style="margin-bottom: 60px;">
                    <img src="assets/images/logo.png" style="max-width: 180px; height: auto; filter: brightness(0) invert(1);" alt="KALP Logo">
                </div>

                <div style="margin-bottom: 30px;">
                    <div style="font-size: 14px; margin-bottom: 5px;">Online Quotation.</div>
                    <div style="font-size: 14px;">info@kalpinteriors.com</div>
                </div>

                <div style="margin-bottom: 40px; font-size: 14px; line-height: 1.6;">
                    KALP INTERIOR DESIGN STUDIO.<br>
                    ISM CHOWK ROAD, OPP<br>
                    SR.DAV SCHOOL , PUNDAG,<br>
                    RANCHI - 834004
                </div>

                <div style="margin-bottom: auto;">
                    <div style="font-weight: 600; font-size: 14px; margin-bottom: 15px; border-top: 2px solid white; padding-top: 15px; width: 50px;">CONTACT:</div>
                    <div style="font-size: 14px; margin-bottom: 15px;">
                        <strong>Office :</strong><br>
                        +91 9472745288
                    </div>
                    <div style="font-size: 14px;">
                        <strong>Studio Head :</strong><br>
                        +91 9234772288
                    </div>
                </div>

                <div style="margin-top: 40px;">
                    <div style="font-weight: 600; font-size: 14px; margin-bottom: 15px;">BUDGET DISCLAIMER</div>
                    <div style="font-size: 11px; line-height: 1.5; opacity: 0.9;">
                        The cost mentioned in this quotation is an estimated budget based on the current project scope and preliminary requirements. It is not the final project cost. The actual project budget will be finalized only after the design is approved, detailed measurements are completed, material selections are confirmed, and the final BOQ (Bill of Quantities) is prepared. Any changes in design, specifications, materials, finishes, or scope of work may result in a revision of the final project cost.
                    </div>
                </div>
            </div>
            
            <!-- Our Clients White Section -->
            <div style="padding: 10px 10px; background-color: #ffffff; box-sizing: border-box; flex-grow: 1; text-align: center;">
                <img src="assets/images/our_clients_collage.png" style="width: 100%; height: auto; object-fit: contain;">
            </div>
        </div>

        <!-- Right Content Area -->
        <div style="width: 65%; padding: 40px 50px; box-sizing: border-box; display: flex; flex-direction: column; position: relative;">
            
            <div style="position: absolute; top: 40px; right: 50px; text-align: left; font-size: 14px; color: #a49375; font-family: sans-serif; letter-spacing: 1px;">
                <div style="margin-bottom: 8px;">DATE : <span id="pdf-export-date" style="color: #666; font-weight: 300;"></span></div>
                <div>TIME : <span id="pdf-export-time" style="color: #666; font-weight: 300;"></span></div>
            </div>

            <h1 style="color: #a49375; font-size: 42px; font-weight: 500; letter-spacing: 2px; line-height: 1.2; margin: 0 0 40px 0;">ONLINE<br>QUOTATION</h1>

        <!-- User Selections -->
        <div style="margin-bottom: 30px; border-bottom: 1px solid #eeeeee; padding-bottom: 20px;">
            <h2 style="font-size: 16px; color: #a49375; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Project Details</h2>
            <table style="width: 100%; font-size: 14px; line-height: 1.8; border-collapse: collapse;">
                <tr><td style="font-weight: 600; width: 40%;">Property Category</td><td id="pdf-category">...</td></tr>
                <tr><td style="font-weight: 600;">Specific Type</td><td id="pdf-type">...</td></tr>
                <tr><td style="font-weight: 600;">Design Style</td><td id="pdf-style">...</td></tr>
                <tr><td style="font-weight: 600;">Selected Package</td><td id="pdf-package">...</td></tr>
            </table>
        </div>

        <!-- Quotation Breakdown -->
        <div style="margin-bottom: 30px; background: #f9f9f9; padding: 20px; border-radius: 8px;">
            <h2 style="font-size: 16px; color: #a49375; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Cost Breakdown</h2>
            <table style="width: 100%; font-size: 12px; line-height: 1.6; border-collapse: collapse;">
                <tr><td style="padding-bottom: 4px;">Furniture</td><td id="pdf-bd-furniture" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">Wardrobes & Storage</td><td id="pdf-bd-wardrobes" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">Modular Kitchen</td><td id="pdf-bd-kitchen" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">False Ceiling</td><td id="pdf-bd-false-ceiling" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">Electrical & Lighting</td><td id="pdf-bd-electrical" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">Paint & Finishes</td><td id="pdf-bd-paint" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">Decorative Lights</td><td id="pdf-bd-decorative" style="text-align: right;">...</td></tr>
                <tr><td style="padding-bottom: 4px;">Design & Management</td><td id="pdf-bd-design" style="text-align: right;">...</td></tr>
                
                <tr id="pdf-row-addon-8" style="display: none;"><td style="padding-bottom: 4px; color:#e8591c;">+ Civil work</td><td id="pdf-bd-addon-8" style="text-align: right; color:#e8591c;">...</td></tr>
                <tr id="pdf-row-addon-10" style="display: none;"><td style="padding-bottom: 4px; color:#e8591c;">+ Flooring</td><td id="pdf-bd-addon-10" style="text-align: right; color:#e8591c;">...</td></tr>
                <tr id="pdf-row-addon-4" style="display: none;"><td style="padding-bottom: 4px; color:#e8591c;">+ Curtain/Soft Furnishing</td><td id="pdf-bd-addon-4" style="text-align: right; color:#e8591c;">...</td></tr>
                
                <tbody id="pdf-kitchen-accessories-list"></tbody>

                <tr>
                    <td style="padding-top: 10px; border-top: 1px solid #ddd; font-weight: 700; font-size: 14px; color: #0F3D64;">Total Estimated Cost</td>
                    <td id="pdf-cost-total" style="padding-top: 10px; border-top: 1px solid #ddd; font-weight: 700; font-size: 16px; color: #4CAF50; text-align: right;">...</td>
                </tr>
            </table>
        </div>

        <!-- Spacer to push content exactly to the start of Page 2 -->
        <div style="height: 450px;"></div>

        <!-- Material Specification -->
        <div style="flex-grow: 1;">
            <h2 id="pdf-material-specs-title" style="font-size: 16px; color: #a49375; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Material Specifications</h2>
            <div id="pdf-material-specs" style="font-size: 11px; line-height: 1.6;">
                <!-- Filled dynamically -->
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Hidden Material Specs Data -->
<div id="specs-1200" style="display:none;">
    <strong>Material Composition:</strong> 90% Non-Branded + 10% Branded<br>
    <strong>Plywood:</strong> Euro, Grain Touch, Wood Touch, Mount Black, Tree Lab (MDF)<br>
    <strong>Laminate:</strong> 0.8 mm &ndash; Trends, Skydecor, Black Cobra<br>
    <strong>Adhesive:</strong> Fevicol SH<br>
    <strong>Hardware:</strong> Godrej, Ozone, Equivalent Brands<br>
    <strong>Handles:</strong> Local Aluminium<br>
    <strong>Locks:</strong> Godrej<br>
    <strong>Kitchen:</strong> Laminate Finish, Wire Basket System, Godrej Accessories<br>
    <strong>Sink:</strong> Levistone<br>
    <strong>Faucets:</strong> Jaquar, Parryware, Cera<br>
    <strong>Paint:</strong> Asian Paints Tractor Emulsion (Matte)<br>
    <strong>Switches:</strong> Anchor Roma, Siya, Goldmedal<br>
    <strong>Wire:</strong> Polycab<br>
    <strong>Lighting:</strong> Orient, Surya, Nortus, Nortek<br>
    <strong>Mirror:</strong> Saint-Gobain<br>
    <strong>Accessories:</strong> Ozone<br>
    <div style="margin-top: 10px;"><strong>Includes:</strong> Bed, TV Unit, Dressing/Study, Wardrobes, False Ceiling, Lighting, Door Panelling, Wall Panelling, Side Tables, Modular Kitchen</div>
    <div style="margin-top: 5px;"><strong>Does Not Include:</strong> Hydraulic Bed, Fans & Appliances, Sofa Set, Dining Table & Chairs, Home Automation</div>
</div>

<div id="specs-1450" style="display:none;">
    <strong>Material Composition:</strong> 50% Non-Branded + 50% Branded<br>
    <strong>Plywood:</strong> Century Sainik 710, Green Ecotec, Austin, Green HDHMR<br>
    <strong>Laminate:</strong> 0.8 mm &amp; 1.0 mm<br>
    <strong>Brands:</strong> Advance, Century Laminates, Greenlam, Skydecor<br>
    <strong>Adhesive:</strong> Fevicol MR<br>
    <strong>Hardware:</strong> Ebco, Hettich, Godrej<br>
    <strong>Handles:</strong> Ebco<br>
    <strong>Locks:</strong> Godrej, Hettich<br>
    <strong>Kitchen:</strong> Acrylic Finish, Tandem Drawers, Hettich<br>
    <strong>Sink:</strong> Carysil<br>
    <strong>Faucets:</strong> Jaquar, Grohe (if required)<br>
    <strong>Paint:</strong> Asian Paints Premium Emulsion (Matte)<br>
    <strong>Switches:</strong> Havells, Legrand, Crabtree<br>
    <strong>Wire:</strong> Polycab, KEI<br>
    <strong>Lighting:</strong> Havells, Polycab<br>
    <strong>Mirror:</strong> Saint-Gobain<br>
    <strong>Accessories:</strong> Hettich<br>
    <div style="margin-top: 10px;"><strong>Includes:</strong> Hydraulic Bed, TV Unit, Dressing/Study, Wardrobes, False Ceiling, Lighting, Door Panelling, Wall Panelling, Side Tables, Modular Kitchen, Sofa Set, Dining Table</div>
    <div style="margin-top: 5px;"><strong>Does Not Include:</strong> Fans & Appliances, Mattress, Home Automation</div>
</div>

<div id="specs-1650" style="display:none;">
    <strong>Material Composition:</strong> 100% Branded Materials<br>
    <strong>Plywood:</strong> CenturyPly Club Prime, Green Club 700, Century Architect Ply, Green HDHMR<br>
    <strong>Laminate:</strong> 1.0 mm &ndash; Greenlam 1.25 mm, Century Laminates Premium, Royale Touche<br>
    <strong>Adhesive:</strong> Fevicol Hyper<br>
    <strong>Hardware:</strong> Blum, Hettich Premium<br>
    <strong>Handles:</strong> Hafele, Hettich<br>
    <strong>Locks:</strong> Godrej Premium<br>
    <strong>Kitchen:</strong> Acrylic/DUCO/PU Finish, Tandem Drawers, Hettich<br>
    <strong>Sink:</strong> Franke, Carysil Quartz<br>
    <strong>Faucets:</strong> Kohler, Grohe (if required)<br>
    <strong>Paint:</strong> Asian Paints Royale (Matte)<br>
    <strong>Switches:</strong> Legrand Arteor, Schneider Electric<br>
    <strong>Wire:</strong> Polycab FRLS, RR Kabel<br>
    <strong>Lighting:</strong> Havells, Polycab, Philips<br>
    <strong>Mirror:</strong> Saint-Gobain<br>
    <strong>Accessories:</strong> Blum, Hafele Premium<br>
    <div style="margin-top: 10px;"><strong>Includes:</strong> Fans, Hydraulic Bed, TV Unit, Dressing/Study, Wardrobes, False Ceiling, Lighting, Door Panelling, Wall Panelling, Side Tables, Modular Kitchen, Sofa Set, Dining Table, Chimney</div>
    <div style="margin-top: 5px;"><strong>Does Not Include:</strong> Appliances, Mattress, Home Automation</div>
</div>

</section>

<!-- Include Javascript for logic -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/calculator.js"></script>
