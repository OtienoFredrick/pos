<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kya's Academy offers comprehensive K-12 and adult learning programs. Expert tutoring, homework help, and personalized education solutions.">
    <meta name="keywords" content="education, K-12, adult learning, tutoring, homework help, online courses, Kya Academy">
    <meta name="author" content="Kya's Academy">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Kya's Academy">
    <meta property="og:description" content="Kya's Academy offers comprehensive K-12 and adult learning programs. Expert tutoring, homework help, and personalized education solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kyasacademy.com">
    
    <!-- Favicon -->
    
    <title>About Us - Kya's Academy - K12 and Adult Learning</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Header Styles -->
    <style>
        :root {
            --kya-primary-color: #7C3AED;
            --kya-secondary-color: #5B21B6;
            --kya-accent-color: #f093fb;
            --kya-text-color: #333333;
            --kya-background-color: #ccc6c6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--kya-text-color);
         
             background: linear-gradient(135deg, rgb(51, 50, 50) 0%, rgb(51, 50, 50) 50%, rgb(51, 50, 50) 100%);
            padding-top: 0;
        }

        /* Main Header */
        .kya-header {
            background: linear-gradient(135deg, var(--kya-primary-color) 0%, var(--kya-secondary-color) 100%);
            color: white;
            padding: 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1000;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .kya-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .kya-header-main {
            padding: 1.5rem 0;
        }

        .kya-header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .kya-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .kya-contact-info {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .kya-header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .kya-auth-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .kya-btn-signup,
        .kya-btn-login {
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.3);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .kya-btn-signup {
            background: rgba(255,255,255,0.15);
            color: white;
        }

        .kya-btn-login {
            background: white;
            color: var(--kya-primary-color);
        }

        .kya-btn-signup:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-1px);
        }

        .kya-btn-login:hover {
            background: #f8f9fa;
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .kya-logo-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            width: 100%;
        }

        .kya-logo {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            backdrop-filter: blur(10px);
        }

        .kya-brand-text {
            text-align: center;
        }

        .kya-brand-text h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 5.5rem;
            font-weight: 700;
            margin-bottom: 0.1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            letter-spacing: -0.5px;
        }

        .kya-brand-text p {
            font-size: 2.25rem;
            opacity: 0.9;
            font-weight: 400;
            letter-spacing: 0.5px;
            font-style: italic;
        }

        .kya-nav-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            position: relative;
        }

        .kya-nav-menu {
            display: flex;
            list-style: none;
            gap: 0.3rem;
            align-items: center;
        }

        .kya-nav-menu li {
            position: relative;
        }

        .kya-nav-menu a {
            color: white;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 30px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
        }

        .kya-nav-menu a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .kya-nav-menu a:hover::before {
            left: 100%;
        }

        .kya-nav-menu a:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        .kya-nav-menu a.kya-active {
            background: rgba(255,255,255,0.25);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            font-weight: 600;
        }

        /* Creative Mobile Menu Toggle */
        .kya-mobile-menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            cursor: pointer;
            padding: 12px;
            transition: all 0.4s cubic-bezier(0.68, -0.6, 0.32, 1.6);
            position: relative;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .kya-mobile-menu-toggle:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .kya-mobile-menu-toggle span {
            display: block;
            width: 22px;
            height: 2px;
            background: white;
            margin: 2px 0;
            transition: all 0.4s cubic-bezier(0.68, -0.6, 0.32, 1.6);
            transform-origin: center;
        }

        .kya-mobile-menu-toggle span:nth-child(1) {
            width: 22px;
        }

        .kya-mobile-menu-toggle span:nth-child(2) {
            width: 18px;
        }

        .kya-mobile-menu-toggle span:nth-child(3) {
            width: 14px;
        }

        /* Active state animation */
        .kya-mobile-menu-toggle.kya-active {
            transform: rotate(180deg);
            background: rgba(255, 255, 255, 0.25);
        }

        .kya-mobile-menu-toggle.kya-active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
            width: 22px;
        }

        .kya-mobile-menu-toggle.kya-active span:nth-child(2) {
            opacity: 0;
            transform: translateX(-10px);
        }

        .kya-mobile-menu-toggle.kya-active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
            width: 22px;
        }

        /* Ripple animation */
        @keyframes kyaRipple {
            to {
                transform: scale(2.5);
                opacity: 0;
            }
        }

        /* Mobile Menu Styles */
        @media (max-width: 768px) {
            .kya-top-bar {
                flex-direction: column;
                gap: 10px;
                margin-bottom: 10px;
            }

            .kya-contact-info {
                font-size: 0.75rem;
            }

            .kya-auth-buttons {
                gap: 8px;
            }

            .kya-btn-signup,
            .kya-btn-login {
                padding: 6px 12px;
                font-size: 0.75rem;
            }

            .kya-brand-text h1 {
                font-size: 3rem;
            }

            .kya-brand-text p {
                font-size: 2.05rem;
            }

            .kya-header-content {
                gap: 1rem;
                position: relative;
            }

            .kya-logo-section {
                order: 2;
            }

            .kya-nav-container {
                order: 3;
                position: relative;
            }

            .kya-mobile-menu-toggle {
                display: flex;
                position: absolute;
                top: -80px;
                right: 0;
                z-index: 1001;
            }

            .kya-nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: linear-gradient(135deg, rgba(124, 58, 237, 0.95) 0%, rgba(91, 33, 182, 0.95) 100%);
                backdrop-filter: blur(20px);
                flex-direction: column;
                gap: 0;
                margin-top: 15px;
                border-radius: 20px;
                padding: 15px;
                box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
                border: 1px solid rgba(255, 255, 255, 0.2);
                width: 100%;
                z-index: 1000;
                transform-origin: top center;
            }

            .kya-nav-menu.kya-active {
                display: flex;
                animation: kyaMenuSlideDown 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            @keyframes kyaMenuSlideDown {
                0% {
                    opacity: 0;
                    transform: translateY(-20px) scale(0.95);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .kya-nav-menu li {
                width: 100%;
                margin-bottom: 5px;
            }

            .kya-nav-menu a {
                padding: 15px 20px;
                border-radius: 12px;
                text-align: left;
                width: 100%;
                justify-content: flex-start;
                font-size: 1rem;
                transition: all 0.3s ease;
                border: 1px solid transparent;
            }

            .kya-nav-menu a:hover {
                background: rgba(255, 255, 255, 0.25);
                transform: translateX(10px);
                border-color: rgba(255, 255, 255, 0.3);
            }

            .kya-nav-menu a.kya-active {
                background: rgba(255, 255, 255, 0.3);
                border-color: rgba(255, 255, 255, 0.4);
                transform: translateX(5px);
            }
        }

        /* Small Mobile Styles */
        @media (max-width: 480px) {
            .kya-top-bar {
                gap: 8px;
            }

            .kya-contact-info span {
                font-size: 0.7rem;
            }

            .kya-logo-section {
                gap: 10px;
            }

            .kya-logo {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .kya-brand-text h1 {
                font-size: 2.6rem;
            }

            .kya-brand-text p {
                font-size: 1.8rem;
            }

            .kya-container {
                padding: 0 15px;
            }

            .kya-header-main {
                padding: 1rem 0;
            }

            .kya-mobile-menu-toggle {
                width: 45px;
                height: 45px;
            }

            .kya-nav-menu {
                padding: 10px;
            }

            .kya-nav-menu a {
                padding: 12px 15px;
                font-size: 0.9rem;
            }
        }

        /* Tablet Styles */
        @media (min-width: 769px) and (max-width: 1024px) {
            .kya-nav-menu {
                gap: 0.2rem;
            }

            .kya-nav-menu a {
                padding: 10px 14px;
                font-size: 0.85rem;
            }

            .kya-brand-text h1 {
                font-size: 3.2rem;
            }
        }

        /* Small Screen Reordering */
        @media (max-width: 600px) {
            .kya-top-bar {
                order: 1;
            }

            .kya-contact-info {
                order: 1;
            }

            .kya-auth-buttons {
                order: 2;
            }
        }

        /* Extra Small Devices */
        @media (max-width: 360px) {
            .kya-brand-text h1 {
                font-size: 2.2rem;
            }

            .kya-brand-text p {
                font-size: 1.5rem;
            }

            .kya-logo {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }

            .kya-mobile-menu-toggle {
                width: 40px;
                height: 40px;
            }

            .kya-mobile-menu-toggle span {
                width: 18px;
                height: 2px;
            }

            .kya-mobile-menu-toggle span:nth-child(2) {
                width: 14px;
            }

            .kya-mobile-menu-toggle span:nth-child(3) {
                width: 10px;
            }
        }
    </style>
<link rel="stylesheet" href="/ripple.style.css">

<link rel="stylesheet" href="/scrollToTopButton.style.css">

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">

<script src="/scrollToTopButton.js"></script>
</head>
<body>
    <!-- Main Header -->
    <header class="kya-header">
        <div class="kya-header-main">
            <div class="kya-container">
                <div class="kya-header-content">
                    <div class="kya-top-bar">
                        <div class="kya-contact-info">
                            <span><i class="fas fa-envelope"></i> info@kyasacademy.com</span>
                        </div>
                        
                        <div class="kya-header-actions">
                            <div class="kya-auth-buttons">
                                <a href="../portal/signup.php" class="kya-btn-signup">
                                    <i class="fas fa-user-plus"></i> Sign Up
                                </a>
                                <a href="../portal/login.php" class="kya-btn-login">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="kya-logo-section">
                        <div class="kya-logo">K</div>
                        <div class="kya-brand-text">
                            <h1>Kya's Academy</h1>
                            <p>K-12 Literacy, K-2 Homework Assistance, and Adult Online Learning</p>
                        </div>
                    </div>
                    
                    <nav class="kya-nav-container">
                        <button class="kya-mobile-menu-toggle" onclick="kyaToggleMobileMenu()" aria-label="Toggle mobile menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="kya-nav-menu" id="kyaNavMenu">
                                                            <li>
                                    <a href="index.php" class="" title="Home">
                                        <span class="kya-nav-icon">🏠</span>
                                        Home                                    </a>
                                </li>
                                                            <li>
                                    <a href="about-founder.php" class="" title="About the Founder">
                                        <span class="kya-nav-icon">👨‍🏫</span>
                                        About the Founder                                    </a>
                                </li>
                                                            <li>
                                    <a href="about-us.php" class="kya-active" title="About Us">
                                        <span class="kya-nav-icon">🏢</span>
                                        About Us                                    </a>
                                </li>
                                                            <li>
                                    <a href="fees.php" class="" title="Fees">
                                        <span class="kya-nav-icon">💰</span>
                                        Fees                                    </a>
                                </li>
                                                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle function
        function kyaToggleMobileMenu() {
            const navMenu = document.getElementById('kyaNavMenu');
            const toggle = document.querySelector('.kya-mobile-menu-toggle');
            
            if (navMenu && toggle) {
                navMenu.classList.toggle('kya-active');
                toggle.classList.toggle('kya-active');
                
                // Add ripple effect
                createRippleEffect(toggle);
            }
        }

        // Create ripple effect for mobile toggle
        function createRippleEffect(element) {
            if (!element) return;
            
            const ripple = document.createElement('span');
            const diameter = Math.max(element.clientWidth, element.clientHeight);
            
            ripple.style.width = ripple.style.height = diameter + 'px';
            ripple.style.left = '0px';
            ripple.style.top = '0px';
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'kyaRipple 0.6s linear';
            ripple.style.pointerEvents = 'none';
            ripple.style.zIndex = '-1';
            
            element.style.position = 'relative';
            element.appendChild(ripple);
            
            setTimeout(() => {
                if (ripple.parentNode === element) {
                    element.removeChild(ripple);
                }
            }, 600);
        }

        // Close mobile menu when clicking on links
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.kya-nav-menu a');
            const navMenu = document.getElementById('kyaNavMenu');
            const toggle = document.querySelector('.kya-mobile-menu-toggle');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768 && navMenu && toggle) {
                        navMenu.classList.remove('kya-active');
                        toggle.classList.remove('kya-active');
                    }
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (window.innerWidth > 768) return;
                
                const navContainer = document.querySelector('.kya-nav-container');
                if (navContainer && !navContainer.contains(e.target)) {
                    if (navMenu && toggle) {
                        navMenu.classList.remove('kya-active');
                        toggle.classList.remove('kya-active');
                    }
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && navMenu && toggle) {
                    navMenu.classList.remove('kya-active');
                    toggle.classList.remove('kya-active');
                }
            });

            // Smooth scrolling for anchor links
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            anchorLinks.forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });

            console.log('🎓 Kya\'s Academy Header Loaded Successfully!');
        });
    </script>





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Kya's Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Poppins:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #424242;
            --secondary-color: #363334;
            --accent-color: #141314;
            --text-dark: #2d3748;
            --text-light: #4a5568;
            --light-gray: rgba(201, 201, 201, 0.95);
            --white: #ffffff;
            --light-bg: #f8fafc;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
     
        }

        /* Hero Section - Static */
        .hero-section {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--accent-color) 100%);
            overflow: hidden;
        }

        .hero-content {
            text-align: center;
            color: var(--white);
            z-index: 10;
            position: relative;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
        }

        .hero-title {
            font-family: 'Poppins', sans-serif;
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 25px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.95;
            line-height: 1.5;
        }

        /* Main Content */
        .main-content {
            background: var(--white);
            position: relative;
            z-index: 5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .content-section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: var(--white);
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .section-description {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .features-section {
            padding: 100px 0;
            background: rgb(51, 50, 50);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: var(--light-gray);
            padding: 40px;
            border-radius: 20px;
           
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        

        .feature-icon {
            width: 70px;
            height: 70px;
            background: none;
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 25px;
        }

        .feature-title {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .feature-description {
            color: var(--text-light);
            line-height: 1.7;
        }

        .stats-section {
            background: linear-gradient(135deg, var(--text-dark) 0%, #1a202c 100%);
            color: var(--white);
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 60px;
            position: relative;
            z-index: 2;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 10px;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 500;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .feature-card {
                padding: 30px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>


    <!-- Hero Section 
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-star"></i> Welcome to Excellence
            </div>
            <h1 class="hero-title">Kya's Academy</h1>
            <p class="hero-subtitle">Empowering Lives Through Accessible Online Education</p>
        </div>
    </section>-->

    <!-- Main Content -->
    <main class="main-content">
        <!-- Features Section -->
        <!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <div class="section-badge">Why Choose Us</div>
            <h2 class="section-title" style="color: white;">Boost Your Knowledge with kyasacademy.com</h2>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <h6 class="emoji-icon">👨‍🎓</h6>
                </div>
                <h3 class="feature-title">Expert Instructors</h3>
                <p class="feature-description">
                    Our experienced instructors are passionate about teaching, reading, comprehension skills and K-2 homework assistance. They are dedicated to helping you develop strong literacy foundations through personalized attention and support, guiding you every step of the way in your reading journey.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <h6 class="emoji-icon">⏰</h6>
                </div>
                <h3 class="feature-title">Flexible Learning Options</h3>
                <p class="feature-description">
                    Live online sessions, specifically for reading skill development - all accessible from the comfort of your home.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <h6 class="emoji-icon">💰</h6>
                </div>
                <h3 class="feature-title">Affordable Tuition</h3>
                <p class="feature-description">
                    We believe that quality reading education should be accessible to everyone. That's why we offer affordable tuition rates and flexible payment options to make literacy skill development more accessible for learners of all backgrounds.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <h6 class="emoji-icon">🎓</h6>
                </div>
                <h3 class="feature-title">Online Programs</h3>
                <p class="feature-description">
                    Our online programs are designed to build essential reading and comprehension skills that serve as the foundation for academic and professional success. Strengthen your literacy abilities with our structured, easy-to-follow online programs.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <h6 class="emoji-icon">📚</h6>
                </div>
                <h3 class="feature-title">Engaging Reading Materials</h3>
                <p class="feature-description">
                    We use engaging and interactive online reading materials to make reading skill development enjoyable and effective. Our digital resources are designed to help you retain reading strategies and apply comprehension techniques in everyday situations.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <h6 class="emoji-icon">🤝</h6>
                </div>
                <h3 class="feature-title">Dedicated Student Support</h3>
                <p class="feature-description">
                    We're here to support you throughout your online learning experience. Our dedicated student support team is available to answer your questions, provide reading guidance, and offer encouragement throughout your literacy development journey.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .emoji-icon {
        font-size: 3.5rem;
        margin: 0;
        line-height: 1;
        font-weight: normal;
    }
</style>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title" style="color: white; margin-bottom: 20px;">Our Impact</h2>
                    <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 0; color: white;">Building stronger readers, one student at a time</p>
                </div>

                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">517+</span>
                        <div class="stat-label">Students Helped</div>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">96.7%</span>
                        <div class="stat-label">Success Rate</div>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <div class="stat-label">Online Learning</div>
                    </div>
                </div>
            </div>
        </section>
    </main>



<footer class="kya-footer">
    <!-- Animated background -->
    <div class="kya-footer-bg"></div>
    
    <!-- Main Footer Content -->
    <div class="kya-footer-main">
        <div class="kya-container">
            <div class="kya-footer-content">
                <!-- Brand Section -->
                <div class="kya-footer-brand">
                    <div class="kya-footer-logo-section">
                        <div class="kya-footer-logo">K</div>
                        <div class="kya-footer-brand-text">
                            <h3>Kya's Academy</h3>
                            <p>K-12 Literacy, K-2 Homework Assistance, and Adult Online Learning</p>
                        </div>
                    </div>
                    <p class="kya-footer-description">
                        Empowering learners of all ages through accessible, high-quality online education. We specialize in developing essential reading and comprehension skills that form the foundation of lifelong learning success.
                    </p>
                    <div class="kya-footer-contact">
                        <div class="kya-contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@kyasacademy.com">info@kyasacademy.com</a>
                        </div>
                        <div class="kya-contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        
                    </div>
                    <div class="kya-footer-social">
                                                    <a href="https://facebook.com/kyasacademy" target="_blank" rel="noopener" title="Facebook" class="kya-social-link">
                                <i class="fab fa-facebook-f"></i>                            </a>
                                                    <a href="https://twitter.com/kyasacademy" target="_blank" rel="noopener" title="Twitter" class="kya-social-link">
                                <i class="fab fa-twitter"></i>                            </a>
                                                    <a href="https://instagram.com/kyasacademy" target="_blank" rel="noopener" title="Instagram" class="kya-social-link">
                                <i class="fab fa-instagram"></i>                            </a>
                                                    <a href="https://linkedin.com/company/kyasacademy" target="_blank" rel="noopener" title="Linkedin" class="kya-social-link">
                                <i class="fab fa-linkedin-in"></i>                            </a>
                                            </div>
                </div>
                
                <!-- Main Navigation -->
                <div class="kya-footer-nav">
                    <h4>Main Navigation</h4>
                    <ul>
                                                    <li>
                                <a href="index.php" class="" title="Home">
                                    Home                                </a>
                            </li>
                                                    <li>
                                <a href="about-founder.php" class="" title="About the Founder">
                                    About the Founder                                </a>
                            </li>
                                                    <li>
                                <a href="about-us.php" class="kya-featured" title="About Us">
                                    About Us                                </a>
                            </li>
                                                    <li>
                                <a href="fees.php" class="" title="Fees">
                                    Fees                                </a>
                            </li>
                                            </ul>
                </div>
                
                <!-- Support & Policies -->
                <div class="kya-footer-nav">
                    <h4>Support &amp; Policies</h4>
                    <ul>
                        <li><a href="../pages/policies.php" title="Policy &amp; Procedures">Policy &amp; Procedures</a></li>
                        <li><a href="../pages/refund-policy.php" title="Refund Policy">Refund Policy</a></li>
                        <li><a href="../pages/contact.php" title="Contact Us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="kya-footer-bottom">
        <div class="kya-container">
            <div class="kya-footer-bottom-content">
                <div class="kya-copyright">
                    © 2026 Kya's Academy. All rights reserved. Transforming lives through education.
                </div>
                <div class="kya-footer-bottom-links">
                   <!--  <a href="../pages/privacy.php" title="Privacy Policy">Privacy Policy</a>
                    <span class="kya-divider">|</span>
                   <a href="../pages/terms.php" title="Terms of Service">Terms of Service</a>
                    <span class="kya-divider">|</span>
                    <a href="../pages/accessibility.php" title="Accessibility">Accessibility</a>-->
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
/* Footer Styles - Violet Theme */
.kya-footer {
    background: linear-gradient(135deg,rgba(255, 255, 255, 0.6) 0%,rgb(160, 157, 157) 100%);
    color:rgb(0, 0, 0);
    position: relative;
    overflow: hidden;
    margin-top: 80px;
    border-top: 3px solid #7C3AED;
}

.kya-footer-bg {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: 
        radial-gradient(circle at 20% 20%, rgba(124, 58, 237, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(91, 33, 182, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 40% 60%, rgba(124, 58, 237, 0.03) 0%, transparent 50%);
    animation: kyaFloatBg 12s ease-in-out infinite;
}

@keyframes kyaFloatBg {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-15px) rotate(120deg); }
    66% { transform: translateY(-10px) rotate(240deg); }
}

.kya-footer-main {
    padding: 60px 0 40px;
    position: relative;
    z-index: 2;
}

.kya-footer-content {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 60px;
    margin-bottom: 50px;
}

.kya-footer-brand {
    position: relative;
}

.kya-footer-logo-section {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.kya-footer-logo {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #7C3AED 0%, #5B21B6 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
    color: white;
    box-shadow: 0 4px 15px rgba(124, 58, 237, 0.2);
}

.kya-footer-brand-text h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0.1rem;
    color: #7C3AED;
    letter-spacing: -0.5px;
}

.kya-footer-brand-text p {
    font-size: 0.9rem;
    color: #718096;
    font-weight: 500;
    letter-spacing: 0.5px;
    font-style: italic;
}

.kya-footer-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #4a5568;
    margin-bottom: 30px;
    text-align: justify;
}

.kya-footer-contact {
    margin-bottom: 30px;
}

.kya-contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    color: #2d3748;
    transition: color 0.3s ease;
}

.kya-contact-item:hover {
    color: #7C3AED;
}

.kya-contact-item i {
    margin-right: 12px;
    width: 20px;
    font-size: 1.1rem;
    color: #7C3AED;
}

.kya-contact-item a {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s ease;
}

.kya-contact-item a:hover {
    color: #7C3AED;
    text-decoration: underline;
}

.kya-footer-social {
    display: flex;
    gap: 15px;
}

.kya-social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    background: #ffffff;
    border-radius: 50%;
    color: #4a5568;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border: 2px solid #e2e8f0;
    position: relative;
    overflow: hidden;
}

.kya-social-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(124, 58, 237, 0.1), transparent);
    transition: left 0.6s;
}

.kya-social-link:hover::before {
    left: 100%;
}

.kya-social-link:hover {
    color: white;
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    border-color: #7C3AED;
}

.kya-social-link[title*="Facebook"]:hover {
    background: linear-gradient(135deg, #1877f2, #42a5f5);
}

.kya-social-link[title*="Twitter"]:hover,
.kya-social-link[title*="X"]:hover {
    background: linear-gradient(135deg, #1da1f2, #0d8bd9);
}

.kya-social-link[title*="Instagram"]:hover {
    background: linear-gradient(135deg, #e4405f, #f093fb);
}

.kya-social-link[title*="Linkedin"]:hover {
    background: linear-gradient(135deg, #0077b5, #00a0dc);
}

.kya-footer-nav {
    position: relative;
}

.kya-footer-nav h4 {
    font-size: 1.3rem;
    margin-bottom: 25px;
    color: #7C3AED;
    font-weight: 600;
    position: relative;
    font-family: 'Poppins', sans-serif;
}

.kya-footer-nav h4::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #7C3AED, #5B21B6);
    border-radius: 1px;
}

.kya-footer-nav ul {
    list-style: none;
}

.kya-footer-nav li {
    margin-bottom: 12px;
}

.kya-footer-nav a {
    color: #4a5568;
    text-decoration: none;
    font-size: 1rem;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    padding-left: 20px;
}

.kya-footer-nav a::before {
    content: '›';
    position: absolute;
    left: 0;
    color: #7C3AED;
    font-weight: bold;
    transition: transform 0.3s ease;
}

.kya-footer-nav a:hover::before {
    transform: translateX(3px);
}

.kya-footer-nav a:hover {
    color: #7C3AED;
    padding-left: 25px;
}

.kya-footer-nav a.kya-featured {
    font-weight: 600;
    color: #7C3AED;
}

.kya-footer-nav a.kya-featured::before {
    color: #5B21B6;
}

.kya-footer-bottom {
    border-top: 1px solid #e2e8f0;
    padding: 30px 0;
    text-align: center;
    position: relative;
    z-index: 2;
    background: rgba(154, 156, 158, 0.65);
    backdrop-filter: blur(10px);
}

.kya-footer-bottom-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;

    gap: 20px;
}

.kya-copyright {
    color:rgb(66, 5, 116);
    font-size: 1.1395rem;
    font-weight: 500;
}

.kya-footer-bottom-links {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.kya-footer-bottom-links a {
    color: #4a5568;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.kya-footer-bottom-links a:hover {
    color: #7C3AED;
}

.kya-divider {
    color: #a0aec0;
    margin: 0 10px;
}

/* Mobile Responsiveness */
@media (max-width: 992px) {
    .kya-footer-content {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }
    
    .kya-footer-brand {
        grid-column: 1 / -1;
        text-align: center;
        margin-bottom: 20px;
    }
    
    .kya-footer-logo-section {
        justify-content: center;
    }
    
    .kya-footer-social {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .kya-footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
        text-align: center;
    }
    
    .kya-footer-description {
        text-align: center;
    }
    
    .kya-footer-nav h4 {
        text-align: center;
    }
    
    .kya-footer-nav h4::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .kya-footer-bottom-content {
        flex-direction: column;
        text-align: center;
    }
    
    .kya-footer-bottom-links {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .kya-footer-main {
        padding: 40px 0 30px;
    }
    
    .kya-footer-brand-text h3 {
        font-size: 1.5rem;
    }
    
    .kya-footer-logo {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
    
    .kya-footer-logo-section {
        gap: 10px;
    }
    
    .kya-footer-bottom-links {
        flex-direction: column;
        gap: 15px;
    }
    
    .kya-divider {
        display: none;
    }
}

@media (max-width: 480px) {
    .kya-footer-content {
        gap: 25px;
    }
    
    .kya-footer-brand-text h3 {
        font-size: 1.3rem;
    }
    
    .kya-footer-description {
        font-size: 1rem;
    }
    
    .kya-social-link {
        width: 40px;
        height: 40px;
    }
}

/* Scroll animations */
@media (prefers-reduced-motion: no-preference) {
    .kya-footer-brand,
    .kya-footer-nav {
        opacity: 0;
        transform: translateY(30px);
        animation: kyaFadeInUp 0.8s ease forwards;
    }
    
    .kya-footer-nav:nth-child(2) {
        animation-delay: 0.2s;
    }
    
    .kya-footer-nav:nth-child(3) {
        animation-delay: 0.4s;
    }
    
    @keyframes kyaFadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
}
</style>

<script>
// Intersection Observer for footer animations
document.addEventListener('DOMContentLoaded', function() {
    const footerElements = document.querySelectorAll('.kya-footer-brand, .kya-footer-nav');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    footerElements.forEach(element => {
        observer.observe(element);
    });
    
    // Smooth scroll for footer links
    document.querySelectorAll('.kya-footer a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script></body></html>