<header class="topbar">
    <div class="topbar-left">
        <button class="mobile-toggle" id="mobile-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="page-title">
            <h2><?php echo isset($pageTitle) ? $pageTitle : 'Dashboard'; ?></h2>
        </div>
    </div>
    
    <div class="topbar-right">
        <div class="notification-bell">
            <i class="fa-regular fa-bell"></i>
            <span class="badge">3</span>
        </div>
        
        <div class="admin-profile">
            <div class="avatar">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=c19b76&color=fff" alt="Admin">
            </div>
            <div class="admin-info">
                <span class="name">Admin User</span>
                <span class="role">Super Admin</span>
            </div>
        </div>
    </div>
</header>
