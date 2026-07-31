<?php
$pageTitle = 'Estimate Requests';
$currentPage = 'estimate_requests';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="page-header">
            <h1>Estimate Requests</h1>
        </div>

        <div class="tabs-header">
            <button class="tab-btn active" id="tab-manage" onclick="switchTab('manage')">All Requests</button>
            <button class="tab-btn" id="tab-view-request" style="display:none;" onclick="switchTab('view-request')">View Details</button>
        </div>

        <!-- ALL REQUESTS LIST -->
        <div class="tab-content active" id="view-manage">
            <div class="table-wrapper">
                <div class="table-toolbar">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search requests...">
                    </div>
                    <div>
                        <select class="form-control" style="padding: 8px 15px; width: 150px;">
                            <option>All Status</option>
                            <option>New</option>
                            <option>Reviewed</option>
                            <option>Converted</option>
                        </select>
                    </div>
                </div>

                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Client Info</th>
                            <th>Property Type</th>
                            <th>Design Package</th>
                            <th>Est. Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Sanjay Kumar</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">sanjay.k@email.com • +91 9876543210</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 13px; color: var(--text-main); font-weight:600;">Residential</div>
                                <div style="font-size: 11px; color: var(--text-muted);">3 BHK (1500 sqft)</div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main);"><i class="fa-solid fa-crown" style="color:#F4B41A; margin-right:5px;"></i> Luxury Package</div>
                                <div style="font-size: 11px; color: var(--text-muted);">Modern Style</div>
                            </td>
                            <td><strong style="color:var(--sidebar-active);">₹26,73,000</strong></td>
                            <td><span class="pill new">New</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="btn-icon" onclick="openDetails('REQ-001')"><i class="fa-regular fa-eye"></i></button>
                                    <button class="btn-icon delete"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-details">
                                        <h4 style="font-size: 14px; margin-bottom: 2px;">Meera Reddy</h4>
                                        <p style="color: var(--text-muted); font-size: 11px;">meera.r@email.com • +91 9988776655</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 13px; color: var(--text-main); font-weight:600;">Commercial</div>
                                <div style="font-size: 11px; color: var(--text-muted);">Office (2000 sqft)</div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: var(--text-main);"><i class="fa-solid fa-gem" style="color:#9B59B6; margin-right:5px;"></i> Premium Package</div>
                                <div style="font-size: 11px; color: var(--text-muted);">Minimalist Style</div>
                            </td>
                            <td><strong style="color:var(--sidebar-active);">₹26,68,000</strong></td>
                            <td><span class="pill contacted">Reviewed</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="btn-icon" onclick="openDetails('REQ-002')"><i class="fa-regular fa-eye"></i></button>
                                    <button class="btn-icon delete"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- VIEW REQUEST DETAILS -->
        <div class="tab-content" id="view-view-request">
            
            <div class="form-panel">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px; border-bottom:1px solid var(--border-color); padding-bottom:15px;">
                    <div>
                        <h2 style="font-size:20px; font-weight:700; color:var(--text-main); margin-bottom:5px;">Estimate Request #REQ-001</h2>
                        <span style="font-size:12px; color:var(--text-muted);">Submitted on June 18, 2025 at 10:30 AM</span>
                    </div>
                    <div>
                        <span class="pill new">New Request</span>
                    </div>
                </div>

                <div class="dashboard-grid">
                    <!-- Left: Client & Configuration -->
                    <div style="display:flex; flex-direction:column; gap:20px;">
                        
                        <!-- Client Info Box -->
                        <div style="background:#f8fafc; border:1px solid var(--border-color); border-radius:10px; padding:20px;">
                            <h3 style="font-size:14px; font-weight:700; margin-bottom:15px; color:var(--text-main);">Client Details</h3>
                            <div class="form-grid">
                                <div>
                                    <div style="font-size:11px; color:var(--text-muted); margin-bottom:3px;">Full Name</div>
                                    <div style="font-size:14px; font-weight:600; color:var(--text-main);">Sanjay Kumar</div>
                                </div>
                                <div>
                                    <div style="font-size:11px; color:var(--text-muted); margin-bottom:3px;">Email Address</div>
                                    <div style="font-size:14px; font-weight:600; color:var(--text-main);">sanjay.k@email.com</div>
                                </div>
                                <div>
                                    <div style="font-size:11px; color:var(--text-muted); margin-bottom:3px;">Phone Number</div>
                                    <div style="font-size:14px; font-weight:600; color:var(--text-main);">+91 9876543210</div>
                                </div>
                                <div>
                                    <div style="font-size:11px; color:var(--text-muted); margin-bottom:3px;">City/Location</div>
                                    <div style="font-size:14px; font-weight:600; color:var(--text-main);">Bangalore, Karnataka</div>
                                </div>
                            </div>
                        </div>

                        <!-- Configuration Box -->
                        <div style="background:#f8fafc; border:1px solid var(--border-color); border-radius:10px; padding:20px;">
                            <h3 style="font-size:14px; font-weight:700; margin-bottom:15px; color:var(--text-main);">Project Configuration</h3>
                            
                            <table style="width:100%; font-size:13px; line-height:2.5;">
                                <tr style="border-bottom:1px dashed var(--border-color);">
                                    <td style="color:var(--text-muted);">Property Category</td>
                                    <td style="font-weight:600; text-align:right;">Residential</td>
                                </tr>
                                <tr style="border-bottom:1px dashed var(--border-color);">
                                    <td style="color:var(--text-muted);">Specific Type</td>
                                    <td style="font-weight:600; text-align:right;">3 BHK (1500 sq.ft)</td>
                                </tr>
                                <tr style="border-bottom:1px dashed var(--border-color);">
                                    <td style="color:var(--text-muted);">Design Style</td>
                                    <td style="font-weight:600; text-align:right;">Modern (+8%)</td>
                                </tr>
                                <tr style="border-bottom:1px dashed var(--border-color);">
                                    <td style="color:var(--text-muted);">Selected Package</td>
                                    <td style="font-weight:600; text-align:right; color:#F4B41A;"><i class="fa-solid fa-crown"></i> Luxury (₹1650/sqft)</td>
                                </tr>
                                <tr>
                                    <td style="color:var(--text-muted); vertical-align:top;">Selected Add-ons</td>
                                    <td style="font-weight:600; text-align:right; line-height:1.5; padding-top:10px;">
                                        <span class="pill" style="background:#e2e8f0; margin-bottom:5px; display:inline-block;">Civil Work (+8%)</span><br>
                                        <span class="pill" style="background:#e2e8f0; margin-bottom:5px; display:inline-block;">Flooring (+10%)</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>

                    <!-- Right: Breakdown Estimate -->
                    <div>
                        <div style="background:var(--primary); color:white; border-radius:12px; padding:25px;">
                            <h3 style="font-size:16px; font-weight:700; margin-bottom:20px; color:var(--sidebar-active); text-transform:uppercase; letter-spacing:1px;">Cost Breakdown</h3>
                            
                            <div style="font-size:12px; line-height:2.5;">
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Furniture</span>
                                    <span style="font-weight:600;">₹7,75,170</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Wardrobes & Storage</span>
                                    <span style="font-weight:600;">₹5,61,330</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Modular Kitchen</span>
                                    <span style="font-weight:600;">₹4,00,950</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>False Ceiling</span>
                                    <span style="font-weight:600;">₹2,67,300</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Electrical & Lighting</span>
                                    <span style="font-weight:600;">₹2,40,570</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Paint & Finishes</span>
                                    <span style="font-weight:600;">₹1,06,920</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Decorative Lights</span>
                                    <span style="font-weight:600;">₹1,60,380</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; border-bottom:1px solid rgba(255,255,255,0.1);">
                                    <span>Design & Management</span>
                                    <span style="font-weight:600;">₹1,60,380</span>
                                </div>
                                
                                <!-- Addons -->
                                <div style="display:flex; justify-content:space-between; border-top:1px dashed rgba(234,177,54,0.5); padding-top:10px; margin-top:10px; color:var(--sidebar-active);">
                                    <span>+ Civil Work</span>
                                    <span style="font-weight:600;">₹2,13,840</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; color:var(--sidebar-active);">
                                    <span>+ Flooring</span>
                                    <span style="font-weight:600;">₹2,67,300</span>
                                </div>
                            </div>
                            
                            <div style="margin-top:25px; padding-top:15px; border-top:2px solid rgba(255,255,255,0.2); display:flex; justify-content:space-between; align-items:center;">
                                <div style="font-size:14px; font-weight:700;">Total Estimated Cost</div>
                                <div style="font-size:24px; font-weight:800; color:var(--sidebar-active);">₹31,54,140</div>
                            </div>

                        </div>
                        
                        <div style="margin-top:20px; display:flex; gap:15px; flex-direction:column;">
                            <div class="form-group" style="margin-bottom:0;">
                                <label class="form-label">Update Request Status</label>
                                <select class="form-control" style="background:#f8fafc;">
                                    <option>New</option>
                                    <option>Reviewed</option>
                                    <option>Contacted</option>
                                    <option>Converted to Lead</option>
                                    <option>Closed / Lost</option>
                                </select>
                            </div>
                            <div style="display:flex; gap:10px; justify-content:flex-end;">
                                <button class="btn-primary" style="background:#f1f5f9; color:var(--text-main);" onclick="switchTab('manage')">Back to List</button>
                                <button class="btn-primary" onclick="alert('Status updated!')">Save Changes</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="admin-footer">
        <div>© 2025 Kalp Interior Design Studio. All rights reserved.</div>
    </div>
</div>

<script>
function switchTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    document.getElementById('view-' + tabId).classList.add('active');
    
    // Handle tab buttons visibility if needed
    if(tabId === 'view-request') {
        document.getElementById('tab-view-request').style.display = 'block';
        document.getElementById('tab-view-request').classList.add('active');
        document.getElementById('tab-manage').classList.remove('active');
    } else {
        document.getElementById('tab-view-request').style.display = 'none';
        document.getElementById('tab-view-request').classList.remove('active');
        document.getElementById('tab-manage').classList.add('active');
    }
}

function openDetails(reqId) {
    // In a real app, you would fetch the data via AJAX here and populate the view
    // For now, just switch the tab
    switchTab('view-request');
}
</script>

<?php include 'includes/footer.php'; ?>
