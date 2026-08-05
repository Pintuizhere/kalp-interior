<?php 
$currentPage = 'blog';
include 'includes/header.php'; 
require_once 'admin/config/db.php';
?>

<main>
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1 class="banner-title">Blog</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a> <span class="divider">/</span> <span class="current">Blog</span>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section" style="padding: 80px 0; background-color: var(--bg-white);">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px; text-align: center;">
                <p class="section-subtitle" style="justify-content: center;">NEWS & BLOG</p>
                <h2 class="section-title">Our Latest <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">News & Blogs</span></h2>
            </div>
            
            <div class="blog-filters-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 50px; flex-wrap: wrap; gap: 20px;">
                <div class="filter-tags" style="display: flex; justify-content: flex-start; gap: 10px; flex-wrap: wrap;">
                    <span class="filter-tag active" style="background-color: var(--accent-color); color: var(--text-dark); border: none; padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; display: inline-flex; align-items: center; cursor: pointer; transition: all 0.3s ease;"><i class="fa-solid fa-border-all" style="margin-right: 8px;"></i> All Posts</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Design Tips</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Trends</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Ideas & Inspiration</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">News</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Projects</span>
                    <span class="filter-tag" style="background-color: white; border: 1px solid rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 25px; font-weight: 500; font-size: 14px; color: var(--text-dark); cursor: pointer; transition: all 0.3s ease;">Lifestyle</span>
                </div>
                
                <div class="blog-search-form" style="position: relative; max-width: 250px; width: 100%;">
                    <input type="text" placeholder="Search blogs..." style="width: 100%; padding: 10px 45px 10px 20px; border-radius: 30px; border: 1px solid rgba(0,0,0,0.1); outline: none; font-size: 13px; background: white; color: var(--text-dark); font-family: inherit;">
                    <button type="submit" style="position: absolute; right: 4px; top: 50%; transform: translateY(-50%); background-color: #23352A; color: white; width: 32px; height: 32px; border-radius: 50%; border: none; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease;">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 12px;"></i>
                    </button>
                </div>
            </div>
            
            <div class="blog-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 50px;">
                <?php
                $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
                if ($page < 1) $page = 1;
                $limit = 12;
                $offset = ($page - 1) * $limit;

                // Count total
                $count_query = "SELECT COUNT(id) as total FROM blogs WHERE status = 'Published'";
                $count_result = $conn->query($count_query);
                $total_posts = $count_result->fetch_assoc()['total'];
                $total_pages = ceil($total_posts / $limit);

                $blog_query = "SELECT * FROM blogs WHERE status = 'Published' ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
                $blog_result = $conn->query($blog_query);
                
                if($blog_result && $blog_result->num_rows > 0):
                    while($row = $blog_result->fetch_assoc()):
                        // Format date
                        $date = date("d F Y", strtotime($row['created_at']));
                        // Clean up excerpt
                        $excerpt = substr(strip_tags($row['content']), 0, 80) . '...';
                        $image_path = !empty($row['image']) ? 'uploads/blogs/' . htmlspecialchars($row['image']) : 'assets/images/placeholder.jpg';
                ?>
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <img src="<?php echo $image_path; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" style="width: 100%; height: 250px; object-fit: cover;">
                        <div class="blog-tags">
                            <span><?php echo $date; ?></span>
                            <span><?php echo htmlspecialchars($row['category']); ?></span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><?php echo htmlspecialchars(substr($row['title'], 0, 50)); ?><?php echo strlen($row['title']) > 50 ? '...' : ''; ?></h3>
                        <p><?php echo htmlspecialchars($excerpt); ?></p>
                        <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="read-more">Read More</a>
                    </div>
                </div>
                <?php 
                    endwhile;
                else:
                ?>
                    <p style="grid-column: 1 / -1; text-align: center; color: var(--text-muted);">No blog posts found.</p>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
            <div class="pagination">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>" class="page-nav"><i class="fa-solid fa-angle-left"></i></a>
                <?php else: ?>
                    <span class="page-nav disabled" style="opacity:0.5; cursor:not-allowed;"><i class="fa-solid fa-angle-left"></i></span>
                <?php endif; ?>

                <?php
                $start = max(1, $page - 1);
                $end = min($total_pages, $page + 1);
                
                if ($start > 1) {
                    echo '<a href="?page=1" class="page-num">1</a>';
                    if ($start > 2) {
                        echo '<span class="page-dots" style="margin: 0 10px; color: var(--text-muted);">...</span>';
                    }
                }
                
                for ($i = $start; $i <= $end; $i++) {
                    $activeClass = ($i == $page) ? 'active' : '';
                    echo '<a href="?page='.$i.'" class="page-num '.$activeClass.'">'.$i.'</a>';
                }
                
                if ($end < $total_pages) {
                    if ($end < $total_pages - 1) {
                        echo '<span class="page-dots" style="margin: 0 10px; color: var(--text-muted);">...</span>';
                    }
                    echo '<a href="?page='.$total_pages.'" class="page-num">'.$total_pages.'</a>';
                }
                ?>

                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?php echo $page + 1; ?>" class="page-nav"><i class="fa-solid fa-angle-right"></i></a>
                <?php else: ?>
                    <span class="page-nav disabled" style="opacity:0.5; cursor:not-allowed;"><i class="fa-solid fa-angle-right"></i></span>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- First Marquee -->


    <!-- CTA Section -->
    <section class="cta-section" style="padding: 100px 0; background-color: var(--bg-white); text-align: center;">
        <div class="container">
            <h2 style="font-size: 42px; margin-bottom: 50px;">The Dream Project: <span class="accent-text" style="font-family: var(--font-accent); font-style: italic; font-weight: 400;">Your<br>Journey Begins Here!</span></h2>
            
            <a href="calculator.php" class="rotating-badge">
                <svg viewBox="0 0 150 150" class="rotating-text">
                    <path id="badge-curve" d="M 25, 75 a 50,50 0 1,1 100,0 a 50,50 0 1,1 -100,0" fill="transparent" />
                    <text font-size="16" letter-spacing="4" fill="var(--text-light)" font-weight="500">
                        <textPath href="#badge-curve">GET ESTIMATE • GET ESTIMATE • </textPath>
                    </text>
                </svg>
                <div class="badge-icon">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </div>
            </a>
        </div>
    </section>

    <!-- Second Marquee -->


</main>

<?php include 'includes/footer.php'; ?>
