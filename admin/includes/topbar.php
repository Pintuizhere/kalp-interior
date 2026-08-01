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
            <?php
            $u_name = 'Admin User';
            $u_role = 'Administrator';
            
            if (isset($_SESSION['admin_id']) && isset($conn)) {
                $curr_id = $_SESSION['admin_id'];
                $q = $conn->query("SELECT profile_image, email, full_name, role, job_title FROM admin_users WHERE id = '$curr_id'");
                if ($q && $q->num_rows > 0) {
                    $u = $q->fetch_assoc();
                    
                    if (!empty($u['full_name'])) {
                        $u_name = htmlspecialchars($u['full_name']);
                    } else {
                        $u_name = htmlspecialchars(explode('@', $u['email'])[0]);
                    }
                    
                    if (!empty($u['job_title'])) {
                        $u_role = htmlspecialchars($u['job_title']);
                    } elseif (!empty($u['role'])) {
                        $u_role = htmlspecialchars(strtoupper($u['role']));
                    }
                }
            }
            ?>
            <div class="avatar">
                <?php
                if (isset($u) && !empty($u['profile_image'])) {
                    echo '<img src="../uploads/profiles/' . htmlspecialchars($u['profile_image']) . '" alt="Admin">';
                } else {
                    echo '<div style="width: 100%; height: 100%; background: var(--primary-color); color: white; display: flex; justify-content: center; align-items: center; font-size: 16px;"><i class="fa-solid fa-user"></i></div>';
                }
                ?>
            </div>
            <div class="admin-info">
                <span class="name"><?php echo $u_name; ?></span>
                <span class="role"><?php echo $u_role; ?></span>
            </div>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </div>
</header>
