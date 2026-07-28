<?php
session_start();

// Handle login logic here if needed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Example logic - customize as needed
    // if ($username === 'admin' && $password === 'admin123') {
    //     $_SESSION['admin_logged_in'] = true;
    //     header('Location: index.php');
    //     exit;
    // }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Kalp Interior Studio</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-darker: #020617;
            --primary: #c19b76; /* Accent color matching interior theme */
            --primary-hover: #d4b499;
            --text-light: #f8fafc;
            --text-muted: #94a3b8;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.08);
            --input-bg: rgba(0, 0, 0, 0.2);
            --input-focus-bg: rgba(0, 0, 0, 0.4);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: var(--bg-darker);
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 50% -20%, #1e293b 0%, var(--bg-darker) 80%);
            position: relative;
            overflow: hidden;
        }

        /* Abstract Background Elements */
        .bg-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.15;
            z-index: -1;
        }

        .bg-shape-1 {
            width: 400px;
            height: 400px;
            background: var(--primary);
            top: -100px;
            right: -100px;
        }

        .bg-shape-2 {
            width: 300px;
            height: 300px;
            background: #3b82f6; /* Subtle cool contrast */
            bottom: -50px;
            left: -50px;
        }
        
        .login-container {
            width: 100%;
            max-width: 440px;
            padding: 48px 40px;
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            backdrop-filter: blur(20px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        
        .login-container:hover {
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.6);
            border-color: rgba(255, 255, 255, 0.12);
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 32px;
        }
        
        .logo-container img {
            max-width: 180px;
            height: auto;
            /* Invert if the original logo is dark */
            filter: brightness(0) invert(1);
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .login-header h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
            color: var(--text-light);
        }
        
        .login-header p {
            color: var(--text-muted);
            font-size: 15px;
            font-weight: 400;
        }
        
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: 500;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .input-wrapper {
            position: relative;
        }
        
        .form-control {
            width: 100%;
            padding: 16px 16px 16px 48px;
            background: var(--input-bg);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--text-light);
            font-size: 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(193, 155, 118, 0.1);
            background: var(--input-focus-bg);
        }
        
        .form-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            font-size: 16px;
            transition: color 0.3s ease;
            pointer-events: none;
        }
        
        .form-control:focus + .form-icon {
            color: var(--primary);
        }
        
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            font-size: 14px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: var(--text-muted);
            user-select: none;
        }
        
        .remember-me input {
            accent-color: var(--primary);
            width: 16px;
            height: 16px;
            cursor: pointer;
        }
        
        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .forgot-password:hover {
            color: var(--primary-hover);
            text-shadow: 0 0 8px rgba(193, 155, 118, 0.4);
        }
        
        .btn-login {
            width: 100%;
            padding: 16px;
            background: var(--primary);
            color: #000;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
        }
        
        .btn-login i {
            transition: transform 0.3s ease;
        }
        
        .btn-login:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -10px rgba(193, 155, 118, 0.6);
        }
        
        .btn-login:hover i {
            transform: translateX(4px);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        /* Error message styling */
        .error-message {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #f87171;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
    </style>
</head>
<body>
    
    <div class="bg-shape bg-shape-1"></div>
    <div class="bg-shape bg-shape-2"></div>

    <div class="login-container">
        
        <div class="logo-container">
            <img src="../assets/images/logo.png" alt="Kalp Interior Studio">
        </div>
        
        <div class="login-header">
            <h1>Admin Panel</h1>
            <p>Enter your credentials to continue</p>
        </div>
        
        <?php if(isset($error)): ?>
            <div class="error-message">
                <i class="fa-solid fa-circle-exclamation"></i>
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-wrapper">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required autocomplete="username">
                    <i class="fa-regular fa-user form-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="current-password">
                    <i class="fa-solid fa-lock form-icon"></i>
                </div>
            </div>
            
            <div class="options-row">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            
            <button type="submit" class="btn-login">
                Sign In
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
    </div>

</body>
</html>
