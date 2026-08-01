<header class="topbar">
    <div class="topbar-left">
        <button class="mobile-toggle" id="mobile-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="page-title">
            <h2><?php echo isset($pageTitle) ? $pageTitle : 'Dashboard'; ?></h2>
            <div class="breadcrumb">
                Home <span>&gt;</span> <?php echo isset($pageTitle) ? $pageTitle : 'Dashboard'; ?>
            </div>
        </div>
    </div>
    
    <div class="topbar-right">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search here...">
            <i class="fa-solid fa-command search-icon-right"></i>
        </div>

        <div class="notification-bell">
            <i class="fa-regular fa-bell"></i>
            <span class="badge">3</span>
        </div>
        
        <div class="admin-profile">
            <div class="avatar">
                <?php
                if (isset($_SESSION['admin_id']) && isset($conn)) {
                    $curr_id = $_SESSION['admin_id'];
                    $q = $conn->query("SELECT profile_image, email FROM admin_users WHERE id = '$curr_id'");
                    if ($q && $q->num_rows > 0) {
                        $u = $q->fetch_assoc();
                        if (!empty($u['profile_image'])) {
                            echo '<img src="../uploads/profiles/' . htmlspecialchars($u['profile_image']) . '" alt="Admin">';
                        } else {
                            echo '<div style="width: 100%; height: 100%; background: var(--primary-color); color: white; display: flex; justify-content: center; align-items: center; font-size: 16px;"><i class="fa-solid fa-user"></i></div>';
                        }
                    }
                } else {
                    echo '<img src="https://i.pravatar.cc/150?img=11" alt="Admin">';
                }
                ?>
            </div>
            <div class="admin-info">
                <span class="name">Admin User</span>
                <span class="role">Administrator</span>
            </div>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </div>
</header>
