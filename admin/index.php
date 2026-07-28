<?php
$pageTitle = 'Dashboard Overview';
$currentPage = 'dashboard';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="main-wrapper">
    <?php include 'includes/topbar.php'; ?>
    
    <div class="main-content">
        <!-- Dashboard Statistics -->
        <div class="stat-cards">
            <div class="stat-card">
                <div class="stat-info">
                    <h3>Total Projects</h3>
                    <div class="number">24</div>
                </div>
                <div class="stat-icon">
                    <i class="fa-solid fa-building"></i>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-info">
                    <h3>Active Services</h3>
                    <div class="number">6</div>
                </div>
                <div class="stat-icon">
                    <i class="fa-solid fa-list-check"></i>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-info">
                    <h3>Total Inquiries</h3>
                    <div class="number">128</div>
                </div>
                <div class="stat-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-info">
                    <h3>Blog Posts</h3>
                    <div class="number">15</div>
                </div>
                <div class="stat-icon">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
            </div>
        </div>

        <!-- Dashboard Main Area -->
        <div style="background: var(--card-bg); padding: 40px; border-radius: 12px; border: 1px solid var(--border-color); min-height: 400px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
            <div style="width: 80px; height: 80px; border-radius: 50%; background: rgba(193, 155, 118, 0.1); display: flex; align-items: center; justify-content: center; color: var(--sidebar-active); font-size: 32px; margin-bottom: 24px;">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <h2 style="font-size: 24px; color: var(--text-main); margin-bottom: 12px; font-weight: 600;">Welcome to Kalp Interior Admin</h2>
            <p style="color: #64748b; font-size: 15px; max-width: 400px; line-height: 1.6;">
                This is your central hub for managing projects, services, and inquiries. The content area is ready for data tables and charts.
            </p>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
