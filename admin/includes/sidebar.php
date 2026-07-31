<aside class="sidebar">
    <div class="sidebar-header">
        <img src="../assets/images/logo.png" alt="Kalp Interior" class="sidebar-logo">
    </div>
    
    <div class="sidebar-menu-wrapper">
        <ul class="menu-list">
            <li>
                <a href="index.php" class="dashboard-link <?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            </li>
        </ul>

        <p class="menu-label">MANAGEMENT</p>
        <ul class="menu-list">
            <li>
                <a href="projects.php" class="<?php echo ($currentPage == 'projects') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-briefcase"></i> Projects
                </a>
            </li>
            <li>
                <a href="services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-layer-group"></i> Services
                </a>
            </li>
            <li>
                <a href="leads.php" class="<?php echo ($currentPage == 'leads') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-users-line"></i> Leads
                </a>
            </li>
            <li>
                <a href="estimate_requests.php" class="<?php echo ($currentPage == 'estimate_requests') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-file-invoice-dollar"></i> Estimate Requests
                </a>
            </li>
            <li>
                <a href="testimonials.php" class="<?php echo ($currentPage == 'testimonials') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-star"></i> Testimonials
                </a>
            </li>
        </ul>
        
        <p class="menu-label">CONTENT</p>
        <ul class="menu-list">
            <li>
                <a href="#" class="<?php echo ($currentPage == 'blog') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-pen-to-square"></i> Blog Posts
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'categories') ? 'active' : ''; ?>">
                    <i class="fa-regular fa-folder-open"></i> Categories
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'media') ? 'active' : ''; ?>">
                    <i class="fa-regular fa-image"></i> Media Library
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'pages') ? 'active' : ''; ?>">
                    <i class="fa-regular fa-file-lines"></i> Pages
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'menus') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-list-ul"></i> Menus
                </a>
            </li>
        </ul>

        <p class="menu-label">OTHERS</p>
        <ul class="menu-list">
            <li>
                <a href="#" class="<?php echo ($currentPage == 'users') ? 'active' : ''; ?>">
                    <i class="fa-regular fa-user"></i> Users
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'settings') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-gear"></i> Settings
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'notifications') ? 'active' : ''; ?>">
                    <i class="fa-regular fa-bell"></i> Notifications
                </a>
            </li>
            <li>
                <a href="#" class="<?php echo ($currentPage == 'profile') ? 'active' : ''; ?>">
                    <i class="fa-regular fa-circle-user"></i> Profile
                </a>
            </li>
        </ul>

        <div class="upgrade-card">
            <i class="fa-solid fa-crown"></i>
            <h4>Upgrade to Pro</h4>
            <p>Unlock exclusive features</p>
            <a href="#" class="upgrade-btn">Upgrade Now</a>
        </div>
    </div>
</aside>
