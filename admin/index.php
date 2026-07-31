<?php
$pageTitle = 'Dashboard';
$currentPage = 'dashboard';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        
        <div class="date-picker">
            <button class="date-picker-btn">
                <i class="fa-regular fa-calendar"></i>
                May 20, 2025 - June 18, 2025
                <i class="fa-solid fa-chevron-down" style="font-size: 10px; margin-left: 5px;"></i>
            </button>
        </div>

        <!-- Dashboard Statistics -->
        <div class="stat-cards">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon projects"><i class="fa-solid fa-table-cells-large"></i></div>
                    <div class="stat-title">Total Projects</div>
                </div>
                <div class="stat-info-right">
                    <div class="stat-value">32</div>
                    <div class="stat-trend trend-up"><i class="fa-solid fa-arrow-trend-up"></i> 12.5% <span style="color:var(--text-muted); font-weight:400;">from last month</span></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon leads"><i class="fa-solid fa-user-group"></i></div>
                    <div class="stat-title">Total Leads</div>
                </div>
                <div class="stat-info-right">
                    <div class="stat-value">128</div>
                    <div class="stat-trend trend-up"><i class="fa-solid fa-arrow-trend-up"></i> 18.7% <span style="color:var(--text-muted); font-weight:400;">from last month</span></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon estimates"><i class="fa-solid fa-file-lines"></i></div>
                    <div class="stat-title">Estimate Requests</div>
                </div>
                <div class="stat-info-right">
                    <div class="stat-value">45</div>
                    <div class="stat-trend trend-up"><i class="fa-solid fa-arrow-trend-up"></i> 8.3% <span style="color:var(--text-muted); font-weight:400;">from last month</span></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon blogs"><i class="fa-solid fa-pen-to-square"></i></div>
                    <div class="stat-title">Blog Posts</div>
                </div>
                <div class="stat-info-right">
                    <div class="stat-value">24</div>
                    <div class="stat-trend trend-up"><i class="fa-solid fa-arrow-trend-up"></i> 5.2% <span style="color:var(--text-muted); font-weight:400;">from last month</span></div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon users"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-title">Total Users</div>
                </div>
                <div class="stat-info-right">
                    <div class="stat-value">6</div>
                    <div class="stat-trend trend-up"><i class="fa-solid fa-arrow-trend-up"></i> 3.1% <span style="color:var(--text-muted); font-weight:400;">from last month</span></div>
                </div>
            </div>
        </div>

        <!-- Middle Grid -->
        <div class="dashboard-grid">
            
            <!-- Overview Chart -->
            <div class="card-panel">
                <div class="card-header">
                    <h3 class="card-title">Overview</h3>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background: #334C40;"></div> Projects
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: #EAB136;"></div> Leads
                        </div>
                        <select class="chart-select">
                            <option>This Month</option>
                        </select>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="overviewChart"></canvas>
                </div>
            </div>

            <!-- Recent Leads -->
            <div class="card-panel">
                <div class="card-header">
                    <h3 class="card-title">Recent Leads</h3>
                    <a href="#" class="card-action">View All</a>
                </div>
                <div class="list-container">
                    <div class="list-item">
                        <div class="user-info">
                            <img src="https://i.pravatar.cc/150?img=12" class="user-avatar" alt="User">
                            <div class="user-details">
                                <h4>Rahul Sharma</h4>
                                <p>rahul.sharma@email.com</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span class="pill new">New</span>
                            <span class="time-ago">2 mins ago</span>
                        </div>
                    </div>
                    
                    <div class="list-item">
                        <div class="user-info">
                            <img src="https://i.pravatar.cc/150?img=5" class="user-avatar" alt="User">
                            <div class="user-details">
                                <h4>Priya Mehta</h4>
                                <p>priya.mehta@email.com</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span class="pill contacted">Contacted</span>
                            <span class="time-ago">1 hour ago</span>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="user-info">
                            <img src="https://i.pravatar.cc/150?img=13" class="user-avatar" alt="User">
                            <div class="user-details">
                                <h4>Amit Verma</h4>
                                <p>amit.verma@email.com</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span class="pill progress">In Progress</span>
                            <span class="time-ago">3 hours ago</span>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="user-info">
                            <img src="https://i.pravatar.cc/150?img=9" class="user-avatar" alt="User">
                            <div class="user-details">
                                <h4>Neha Kapoor</h4>
                                <p>neha.kapoor@email.com</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span class="pill qualified">Qualified</span>
                            <span class="time-ago">5 hours ago</span>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="user-info">
                            <img src="https://i.pravatar.cc/150?img=14" class="user-avatar" alt="User">
                            <div class="user-details">
                                <h4>Vikram Singh</h4>
                                <p>vikram.singh@email.com</p>
                            </div>
                        </div>
                        <div class="item-meta">
                            <span class="pill closed">Closed</span>
                            <span class="time-ago">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Grid -->
        <div class="dashboard-bottom-grid">
            
            <!-- Project Status -->
            <div class="card-panel">
                <div class="card-header">
                    <h3 class="card-title">Project Status</h3>
                </div>
                <div class="donut-container" style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                    <div style="position: relative; width: 140px; height: 140px;">
                        <canvas id="statusChart"></canvas>
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                            <div style="font-size: 20px; font-weight: 700; color: var(--text-main); font-family: var(--font-primary);">32</div>
                            <div style="font-size: 11px; color: var(--text-muted);">Total</div>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 12px; font-size: 11px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; width: 120px;">
                            <div style="display: flex; align-items: center; gap: 6px;"><div style="width: 8px; height: 8px; border-radius: 50%; background: #334C40;"></div> Completed</div>
                            <span style="color: var(--text-muted);">10 (31.3%)</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; width: 120px;">
                            <div style="display: flex; align-items: center; gap: 6px;"><div style="width: 8px; height: 8px; border-radius: 50%; background: #EAB136;"></div> In Progress</div>
                            <span style="color: var(--text-muted);">14 (43.8%)</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; width: 120px;">
                            <div style="display: flex; align-items: center; gap: 6px;"><div style="width: 8px; height: 8px; border-radius: 50%; background: #f97316;"></div> On Hold</div>
                            <span style="color: var(--text-muted);">4 (12.5%)</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; width: 120px;">
                            <div style="display: flex; align-items: center; gap: 6px;"><div style="width: 8px; height: 8px; border-radius: 50%; background: #cbd5e1;"></div> Upcoming</div>
                            <span style="color: var(--text-muted);">4 (12.5%)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Projects -->
            <div class="card-panel">
                <div class="card-header">
                    <h3 class="card-title">Latest Projects</h3>
                    <a href="#" class="card-action">View All</a>
                </div>
                <div class="list-container">
                    <div class="list-item">
                        <div class="project-item">
                            <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=100&h=80&fit=crop" class="project-thumb" alt="Project">
                            <div class="user-details">
                                <h4>Modern Luxury Villa</h4>
                                <p>Bangalore, Karnataka</p>
                            </div>
                        </div>
                        <div class="progress-meta">
                            <span class="pill new">In Progress</span>
                            <span>60%</span>
                        </div>
                    </div>

                    <div class="list-item">
                        <div class="project-item">
                            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?w=100&h=80&fit=crop" class="project-thumb" alt="Project">
                            <div class="user-details">
                                <h4>Minimalist Apartment</h4>
                                <p>Mumbai, Maharashtra</p>
                            </div>
                        </div>
                        <div class="progress-meta">
                            <span class="pill contacted">In Progress</span>
                            <span>40%</span>
                        </div>
                    </div>
                    
                    <div class="list-item">
                        <div class="project-item">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=100&h=80&fit=crop" class="project-thumb" alt="Project">
                            <div class="user-details">
                                <h4>Contemporary Office</h4>
                                <p>Pune, Maharashtra</p>
                            </div>
                        </div>
                        <div class="progress-meta">
                            <span class="pill planning">Planning</span>
                            <span>20%</span>
                        </div>
                    </div>

                    <div class="list-item" style="padding-bottom: 0;">
                        <div class="project-item">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=100&h=80&fit=crop" class="project-thumb" alt="Project">
                            <div class="user-details">
                                <h4>Classic Home Interior</h4>
                                <p>Delhi, India</p>
                            </div>
                        </div>
                        <div class="progress-meta">
                            <span class="pill upcoming">Upcoming</span>
                            <span>0%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card-panel">
                <div class="card-header">
                    <h3 class="card-title">Quick Actions</h3>
                </div>
                <div class="quick-actions-grid">
                    <a href="#" class="action-box">
                        <i class="fa-solid fa-square-plus"></i>
                        <span>Add New Project</span>
                    </a>
                    <a href="#" class="action-box">
                        <i class="fa-solid fa-pen-to-square" style="color: #EAB136;"></i>
                        <span>Add Blog Post</span>
                    </a>
                    <a href="#" class="action-box">
                        <i class="fa-solid fa-user-plus"></i>
                        <span>Add New Lead</span>
                    </a>
                    <a href="#" class="action-box">
                        <i class="fa-solid fa-file-invoice-dollar" style="color: #EAB136;"></i>
                        <span>Estimate Request</span>
                    </a>
                    <a href="#" class="action-box">
                        <i class="fa-solid fa-image"></i>
                        <span>Media Library</span>
                    </a>
                    <a href="#" class="action-box">
                        <i class="fa-solid fa-comment-dots"></i>
                        <span>View Messages</span>
                    </a>
                </div>
            </div>
            
        </div>

    </div>

    <!-- Simple Footer inside Main Content -->
    <div class="admin-footer">
        <div>© 2025 Kalp Interior Design Studio. All rights reserved.</div>
    </div>

</div>

<!-- Chart Initialization Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    
    // Overview Line Chart
    const ctxOverview = document.getElementById('overviewChart');
    if(ctxOverview) {
        new Chart(ctxOverview, {
            type: 'line',
            data: {
                labels: ['20 May', '25 May', '30 May', '04 Jun', '09 Jun', '14 Jun', '18 Jun'],
                datasets: [
                    {
                        label: 'Projects',
                        data: [10, 32, 40, 32, 45, 35, 50],
                        borderColor: '#334C40',
                        backgroundColor: 'rgba(51, 76, 64, 0.05)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#334C40',
                        pointRadius: 3
                    },
                    {
                        label: 'Leads',
                        data: [30, 50, 65, 55, 68, 60, 85],
                        borderColor: '#EAB136',
                        backgroundColor: 'rgba(234, 177, 54, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#EAB136',
                        pointRadius: 3
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        grid: { borderDash: [4, 4], color: '#f1f5f9' },
                        border: { display: false }
                    },
                    x: {
                        grid: { display: false },
                        border: { display: false }
                    }
                }
            }
        });
    }

    // Project Status Donut Chart
    const ctxStatus = document.getElementById('statusChart');
    if(ctxStatus) {
        new Chart(ctxStatus, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'In Progress', 'On Hold', 'Upcoming'],
                datasets: [{
                    data: [31.3, 43.8, 12.5, 12.5],
                    backgroundColor: ['#334C40', '#EAB136', '#f97316', '#cbd5e1'],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: true }
                }
            }
        });
    }
});
</script>

<?php include 'includes/footer.php'; ?>
