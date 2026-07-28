<aside class="sidebar">
    <div class="sidebar-header">
        <img src="../assets/images/logo.png" alt="Kalp Interior" class="sidebar-logo">
    </div>
    
    <div class="sidebar-menu">
        <p class="menu-label">Menu</p>
        <ul class="menu-list">
            <li>
                <a href="index.php" class="<?php echo ($currentPage == 'dashboard') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="pages/projects.php" class="<?php echo ($currentPage == 'projects') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-building"></i> Projects
                </a>
            </li>
            <li>
                <a href="pages/services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-list-check"></i> Services
                </a>
            </li>
            <li>
                <a href="pages/blog.php" class="<?php echo ($currentPage == 'blog') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-newspaper"></i> Blog Posts
                </a>
            </li>
            <li>
                <a href="pages/inquiries.php" class="<?php echo ($currentPage == 'inquiries') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-envelope"></i> Inquiries
                </a>
            </li>
        </ul>
        
        <p class="menu-label">Settings</p>
        <ul class="menu-list">
            <li>
                <a href="pages/settings.php" class="<?php echo ($currentPage == 'settings') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-gear"></i> General Settings
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</aside>
