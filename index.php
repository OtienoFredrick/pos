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
    
    <title>Home - Kya's Academy - K12 and Adult Learning</title>
    
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
<style>
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
<link rel="stylesheet" href="/ripple.style.css">

<link rel="stylesheet" href="/scrollToTopButton.style.css">

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">

<script src="/scrollToTopButton.js"></script>
    </style></head>
<body class="loaded">
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
                                    <a href="/index.php" class="kya-active" title="Home">
                                        <span class="kya-nav-icon">🏠</span>
                                        Home                                    </a>
                                </li>
                                                            <li>
                                    <a href="/about-founder.php" class="" title="About the Founder">
                                        <span class="kya-nav-icon">👨‍🏫</span>
                                        About the Founder                                    </a>
                                </li>
                                                            <li>
                                    <a href="/about-us.php" class="" title="About Us">
                                        <span class="kya-nav-icon">🏢</span>
                                        About Us                                    </a>
                                </li>
                                                            <li>
                                    <a href="/fees.php" class="" title="Fees">
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


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
        overflow-x: hidden;
    }

    /* Hero Section with Background Image */
    .hero {
        min-height: 100vh;
        background: url('assets/HeroBack-ground.png');
        background-size: 100% auto;
        background-position: top center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    /* Content container with white background */
    .hero-content {
        background-color: rgba(201, 201, 201, 0.95);
        backdrop-filter: blur(10px);
        padding: 4rem 3rem;
        border-radius: 20px;
        text-align: center;
        max-width: 600px;
        margin: 0 2rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        animation: slideInUp 1s ease;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #E91E63;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .unlock-text {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 2.5rem;
        font-weight: 500;
    }

    .hero-list {
        list-style: none;
        padding: 0;
        margin: 0 0 2rem 0;
        text-align: left;
    }

    .hero-list li {
        color: #333;
        line-height: 2;
        padding-left: 1.5rem;
        position: relative;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .hero-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #333;
        font-weight: bold;
        font-size: 1.3rem;
    }

    .online-highlight {
        color: #E91E63;
        font-weight: 700;
    }

    .hero-buttons {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        justify-content: center;
    }

    .btn {
        display: inline-block;
        padding: 1rem 1.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        border: none;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }

    .btn:hover::before {
        left: 100%;
    }

    .btn-k12 {
        background: #E91E63;
        color: white;
        box-shadow: 0 8px 25px rgba(233, 30, 99, 0.3);
    }

    .btn-k12:hover {
        background: #C2185B;
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(233, 30, 99, 0.4);
    }

    @keyframes slideInUp {
        from { 
            opacity: 0; 
            transform: translateY(50px) scale(0.9); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0) scale(1); 
        }
    }

    /* Mission Section with Background Images */
    .mission-vision {
        padding: 8rem 0;
        background: linear-gradient(135deg,rgba(44, 44, 44, 0.69) 0%, #1a1a1a 100%);
        position: relative;
        overflow: hidden;
    }

    .mission-vision-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }

    .section-header {
        text-align: center;
        margin-bottom: 5rem;
    }

    .section-header h2 {
        font-size: 3rem;
        font-weight: 700;
        color: #E91E63;
        margin-bottom: 1rem;
    }

    .mission-vision-content {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mission-card {
        background-color: rgba(201, 201, 201, 0.95);
        backdrop-filter: blur(10px);
        padding: 0;
        border-radius: 25px;
        box-shadow: 0 20px 60px rgba(233, 30, 99, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.8);
        transition: all 0.4s ease;
        overflow: hidden;
        position: relative;
        max-width: 700px;
        display: flex;
        flex-direction: column;
    }

    .mission-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 30px 80px rgba(233, 30, 99, 0.25);
    }

    .card-image {
        width: 100%;
        height: 250px;
        overflow: hidden;
        border-radius: 25px 25px 0 0;
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    .mission-vision-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .mission-card:hover .mission-vision-img {
        transform: scale(1.05);
    }

    .card-content {
        padding: 2.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .card-content h3 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #E91E63;
        margin-bottom: 1.5rem;
    }

    .card-content p {
        color: #555;
        line-height: 1.8;
        font-size: 1.1rem;
        text-align: left;
        flex: 1;
    }

    /* Features Section - Modified */
    .features {
        padding: 8rem 0;
        background:rgb(51, 50, 50); /* Dark grey background */
    }

    .features-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .section-header p {
        color: #f0f0f0; /* Light text for dark background */
        font-size: 1.1rem;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .feature-card:last-child {
        grid-column: 2 / 3;
    }

    @supports not (grid-template-columns: subgrid) {
        .features-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .feature-card {
            flex: 1 1 300px;
            max-width: 400px;
        }
        
        .feature-card:last-child {
            grid-column: auto;
        }
    }

    .feature-card {
        background:rgba(201, 201, 201, 0.95); /* Light grey background for cards */
        padding: 2rem;
        border-radius: 20px;
      
        text-align: center;
       
     
    }



    .feature-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #E91E63, #C2185B);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: white;
    }

    .feature-card h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #E91E63;
        margin-bottom: 1rem;
    }

    .feature-card p {
        color: #666;
        line-height: 1.6;
    }

    .feature-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .feature-card ul li {
        color: #666;
        line-height: 1.8;
        padding-left: 1.5rem;
        position: relative;
        margin-bottom: 0.5rem;
    }

    .feature-card ul li::before {
        content: "•";
        position: absolute;
        left: 0;
        color:rgb(0, 0, 0);
        font-weight: bold;
    }

    /* CTA Section */
    .cta-section {
        padding: 8rem 0;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .cta-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 2rem;
        position: relative;
        z-index: 1;
    }

    .cta-section h2 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .cta-section p {
        font-size: 1.2rem;
        margin-bottom: 3rem;
        opacity: 0.9;
    }

    .cta-buttons-large {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-white {
        background: white;
        color: #667eea;
        border: 2px solid white;
    }

    .btn-white:hover {
        background: transparent;
        color: white;
        border-color: white;
    }

    .btn-outline {
        background: transparent;
        border: 2px solid white;
        color: white;
    }

    .btn-outline:hover {
        background: white;
        color: #667eea;
    }

    .btn-large {
        padding: 1.2rem 3rem;
        font-size: 1.1rem;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .hero-content {
            padding: 3rem 2rem;
            margin: 0 1rem;
        }

        .hero-content h1 {
            font-size: 2rem;
        }

        .unlock-text {
            font-size: 1.1rem;
        }

        .hero-buttons {
            grid-template-columns: 1fr;
        }

        .mission-vision-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .section-header h2 {
            font-size: 2.2rem;
        }

        .cta-section h2 {
            font-size: 2rem;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }
        
        .feature-card:last-child {
            grid-column: auto;
        }
    }

    @media (max-width: 480px) {
        .hero-content {
            padding: 2.5rem 1.5rem;
        }

        .hero-content h1 {
            font-size: 1.8rem;
        }

        .unlock-text {
            font-size: 1rem;
        }

        .mission-vision,
        .features,
        .cta-section {
            padding: 4rem 0;
        }

        .card-content {
            padding: 1.5rem;
        }

        .section-header h2 {
            font-size: 1.8rem;
        }
        
        .feature-card {
            padding: 1.5rem;
        }
    }

    /* Page load animation */
    body {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    body.loaded {
        opacity: 1;
    }
</style>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <ul class="hero-list">
            <li>K-2nd Grade Literacy and Math</li>
            <li>K-2nd Grade Homework Assistance</li>
            <li>3rd-12th Grade Literacy</li>
            <li>Adult Literacy</li>
        </ul>
        
        <p class="unlock-text">Unlock potential with <span class="online-highlight">ONLINE</span> certified teachers today.</p>
        
        <!--<div class="hero-buttons">
            <a href="#k12" class="btn btn-k12">K-2nd Grade Literacy and Math</a>
            <a href="#k12-homework" class="btn btn-k12">K-2nd Grade Homework Help</a>
            <a href="#3rd-12" class="btn btn-k12">3rd-12th Grade Literacy</a>
            <a href="#adult" class="btn btn-k12">Adult Literacy</a>
        </div>-->
    </div>
</section>

<!-- Mission Section -->
<section class="mission-vision" id="mission">
    <div class="mission-vision-container">
        <div class="section-header">
            <h2>Our Mission</h2>
        </div>
        
        <div class="mission-vision-content">
            <div class="mission-card" style="opacity: 0; transform: translateY(50px) scale(0.9); transition: 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);">
                <div class="card-image">
                    <img src="assets/OurMission.png" alt="Our Mission - Empowering learners through inclusive literacy experiences" class="mission-vision-img">
                </div>
                <div class="card-content">
                    <h3>Our Mission</h3>
                    <p>Kya's Academy is dedicated to empowering learners of all ages through engaging, inclusive, and transformative literacy online experiences. We cultivate a lifelong love for reading, critical thinking, and self-expression by providing high-quality instruction, supportive learning environments, and culturally responsive teaching. Whether nurturing the imagination of a child or reigniting the aspirations of an adult, Kya's Academy inspires every learner to grow with confidence, achieve with purpose, and lead with knowledge.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="features-container">
        <div class="section-header">
            <h2>Why Choose Kya's Academy?</h2>
            <p>We provide comprehensive, personalized learning experiences designed to help every student succeed!</p>
        </div>

        <div class="features-grid">
            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">📚</div>
                <h3>K-2</h3>
                <ul>
                    <li>Literacy</li>
                    <li>Math</li>
                    <li>Homework Assistance</li>
                </ul>
            </div>

            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">📖</div>
                <h3>3rd to 12th Grade</h3>
                <ul>
                    <li>Assistance in reading skills and strategies</li>
                </ul>
            </div>

            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">📕</div>
                <h3>Adult Learners</h3>
                <ul>
                    <li>Assistance in reading skills and strategies</li>
                </ul>
            </div>

            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">👨‍🏫</div>
                <h3>Expert Tutoring</h3>
                <p>Learn from qualified educators with years of experience in K-12 and adult education</p>
            </div>

            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">📱</div>
                <h3>Flexible Learning</h3>
                <p>Study at your own pace with our flexible scheduling and online learning platform</p>
            </div>

            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">🎯</div>
                <h3>Personalized</h3>
                <p>Customized learning plans tailored to your specific needs and learning style</p>
            </div>

            <div class="feature-card" style="opacity: 0; transform: translateY(30px); transition: 0.6s;">
                <div class="feature-icon">🏆</div>
                <h3>Proven Results</h3>
                <p>Join thousands of successful students who have achieved their academic goals with us</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-container">
        <h2>Ready to Start Your Learning Journey?</h2>
        <p>Join thousands of students who have transformed their education with our personalized learning approach.</p>
        
        <div class="cta-buttons-large">
            <a href="../portal/signup.php" class="btn btn-white btn-large">Create Free Account</a>
           <!-- <a href="mailto:info@kyasacademy.com" class="btn btn-outline btn-large">Contact Us</a>-->
        </div>
    </div>
</section>

<!-- Schema.org structured data for SEO -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Kya's Academy",
    "description": "Personalized learning for K-12 students and adult learners",
    "url": "https://kyasacademy.com",
    "logo": "https://kyasacademy.com/logo.png",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+254-123-456-789",
        "contactType": "customer service",
        "email": "info@kyasacademy.com"
    },
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Nairobi",
        "addressCountry": "Kenya"
    }
}
</script>

<script>
    // Add smooth hover effects
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.02)';
        });
        
        btn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Add click ripple effect
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Add ripple animation styles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.feature-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });

    // Mission card animation
    function initMissionAnimation() {
        const missionCard = document.querySelector('.mission-card');

        const missionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) scale(1)';
                }
            });
        }, { threshold: 0.2 });

        if (missionCard) {
            missionCard.style.opacity = '0';
            missionCard.style.transform = 'translateY(50px) scale(0.9)';
            missionCard.style.transition = 'all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            missionObserver.observe(missionCard);
        }
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
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

    // Add loading animation
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });

    // Add scroll-to-top functionality
    let scrollToTopButton;
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            if (!scrollToTopButton) {
                scrollToTopButton = document.createElement('button');
                scrollToTopButton.innerHTML = '↑';
                    position: fixed;
                    bottom: 30px;
                    right: 30px;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background: linear-gradient(135deg, #E91E63, #C2185B);
                    color: white;
                    border: none;
                    font-size: 1.5rem;
                    cursor: pointer;
                    z-index: 1000;
                    box-shadow: 0 4px 20px rgba(233, 30, 99, 0.3);
                    transition: all 0.3s ease;
                `;
                scrollToTopButton.onclick = () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                };
                document.body.appendChild(scrollToTopButton);
            }
            scrollToTopButton.style.transform = 'scale(1)';
            scrollToTopButton.style.opacity = '1';
        } else if (scrollToTopButton) {
            scrollToTopButton.style.transform = 'scale(0)';
            scrollToTopButton.style.opacity = '0';
        }
    });

    // Add hover effects for cards
    document.querySelectorAll('.feature-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = '';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Initialize all functionality
    document.addEventListener('DOMContentLoaded', () => {
        initMissionAnimation();
    });

    console.log('🎓 Kya\'s Academy homepage loaded successfully!');
</script>


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
                                <a href="/index.php" class="kya-featured" title="Home">
                                    Home                                </a>
                            </li>
                                                    <li>
                                <a href="/about-founder.php" class="" title="About the Founder">
                                    About the Founder                                </a>
                            </li>
                                                    <li>
                                <a href="/about-us.php" class="" title="About Us">
                                    About Us                                </a>
                            </li>
                                                    <li>
                                <a href="/fees.php" class="" title="Fees">
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