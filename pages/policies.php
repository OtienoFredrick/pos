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
    
    <title>Kya's Academy - K-12 Literacy, K-2 Homework Assistance, and Adult Online Learning</title>
    
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
<body style="opacity: 1; transition: opacity 0.5s ease-in-out;">
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
                                    <a href="about-us.php" class="" title="About Us">
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
    <title>Kya's Academy - Online reading, Comprehension Skills and K-2 homework assistant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        

/* ========================================
   POLICIES.PHP CSS
   ======================================== */

:root {
    --kya-primary-color: #4a4a4a;
    --kya-secondary-color: #2c2c2c;
    --text-dark: #1a1a1a;
    --text-light: #6c757d;
    --bg-light: #f5f5f5;
    --white: #ffffff;
    --shadow: 0 2px 15px rgba(74, 74, 74, 0.1);
    --border-radius: 12px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: var(--text-dark);
    background-color: var(--bg-light);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    background: linear-gradient(135deg, var(--kya-primary-color), var(--kya-secondary-color));
    color: white;
    padding: 2rem 0;
    text-align: center;
    box-shadow: var(--shadow);
}

.header-content h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    font-weight: 700;
}

.header-content p {
    font-size: 1.2rem;
    opacity: 0.9;
}

.main-content {
    padding: 3rem 0;
}

.section-card {
    background: var(--white);
    margin-bottom: 2rem;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(74, 74, 74, 0.15);
}

.section-header {
    background: linear-gradient(135deg, var(--kya-primary-color), var(--kya-secondary-color));
    color: white;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.section-header .emoji {
    font-size: 1.5rem;
}

.section-header h2 {
    font-size: 1.5rem;
    font-weight: 600;
}

.section-content {
    padding: 2rem;
}

.subsection {
    margin-bottom: 2rem;
}

.subsection:last-child {
    margin-bottom: 0;
}

.subsection h3 {
    color: var(--kya-primary-color);
    font-size: 1.3rem;
    margin-bottom: 1rem;
    font-weight: 600;
    border-left: 4px solid var(--kya-primary-color);
    padding-left: 1rem;
}

.subsection h4 {
    color: var(--text-dark);
    font-size: 1.1rem;
    margin: 1.5rem 0 0.8rem 0;
    font-weight: 600;
}

.subsection p {
    margin-bottom: 1rem;
    color: var(--text-light);
    line-height: 1.7;
}

.subsection ul {
    margin: 1rem 0;
    padding-left: 0;
    list-style: none;
}

.subsection li {
    margin-bottom: 0.8rem;
    color: var(--text-light);
    line-height: 1.6;
    position: relative;
    padding-left: 2rem;
}

.subsection li:before {
    content: '✓';
    position: absolute;
    left: 0;
    top: 0;
    color: var(--kya-primary-color);
    font-weight: bold;
    font-size: 1.1rem;
}

.highlight-box {
    background: linear-gradient(135deg, rgba(74, 74, 74, 0.1), rgba(44, 44, 44, 0.1));
    border: 2px solid rgba(74, 74, 74, 0.2);
    border-radius: var(--border-radius);
    padding: 1.5rem;
    margin: 1.5rem 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.contact-item {
    background: var(--bg-light);
    padding: 1.5rem;
    border-radius: var(--border-radius);
    border: 2px solid rgba(74, 74, 74, 0.1);
    text-align: center;
    transition: all 0.3s ease;
}

.contact-item:hover {
    border-color: var(--kya-primary-color);
    background: white;
}

.contact-item .emoji {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.contact-item h4 {
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.contact-item p {
    color: var(--text-light);
}

.contact-item a {
    color: var(--kya-primary-color);
    text-decoration: none;
    font-weight: 500;
}

.contact-item a:hover {
    text-decoration: underline;
}

footer {
    background: var(--text-dark);
    color: white;
    text-align: center;
    padding: 2rem 0;
    margin-top: 3rem;
}

.footer-content p {
    opacity: 0.8;
}

@media (max-width: 768px) {
    .header-content h1 {
        font-size: 2rem;
    }

    .header-content p {
        font-size: 1rem;
    }

    .section-content {
        padding: 1.5rem;
    }

    .section-header {
        padding: 1rem;
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }

    .main-content {
        padding: 2rem 0;
    }

    .section-content {
        padding: 1rem;
    }

    .subsection h3 {
        font-size: 1.1rem;
    }

    .subsection li {
        padding-left: 1.5rem;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.section-card {
    animation: fadeInUp 0.6s ease-out;
}

.section-card:nth-child(1) { animation-delay: 0.1s; }
.section-card:nth-child(2) { animation-delay: 0.2s; }
.section-card:nth-child(3) { animation-delay: 0.3s; }
.section-card:nth-child(4) { animation-delay: 0.4s; }
.section-card:nth-child(5) { animation-delay: 0.5s; }
.section-card:nth-child(6) { animation-delay: 0.6s; }
.section-card:nth-child(7) { animation-delay: 0.7s; }
.section-card:nth-child(8) { animation-delay: 0.8s; }


    </style>


    <header>
        <div class="container">
            <div class="header-content">
                <h1>Kya's Academy</h1>
                <p>Online reading, Comprehension Skills and K-2 homework assistant</p>
            </div>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            

            <!-- Attendance & Participation Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="fas fa-clock"></i>
                    <h2>Attendance &amp; Participation Standards</h2>
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <h3>Online Session Requirements</h3>
                        <ul>
                            <li>Students must join online sessions at least 5 minutes before the scheduled start time to ensure technical readiness</li>
                            <li>Late arrivals (more than 10 minutes) may not be admitted to live sessions and will need to access recorded materials</li>
                            <li>Consistent attendance is essential for reading skill development and comprehension improvement</li>
                            <li>Students are expected to participate actively in reading discussions and comprehension activities</li>
                        </ul>
                    </div>
                    
                    <div class="subsection">
                        <h3>Engagement Expectations</h3>
                        <ul>
                            <li>Complete all assigned reading exercises between sessions</li>
                            <li>Participate in online discussion forums related to reading materials</li>
                            <li>Submit comprehension assessments within specified timeframes</li>
                            <li>Maintain regular communication with instructors regarding reading progress</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Registration & Enrollment Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="fas fa-user-plus"></i>
                    <h2>Registration &amp; Enrollment Process</h2>
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <h3>Comprehensive Registration Requirements</h3>
                        <p>All prospective students must complete a detailed online registration via kyasacademy.com</p>
                        <p>Registration includes a reading skills assessment to determine appropriate program level</p>
                        
                        <h4>Students must provide:</h4>
                        <ul>
                            <li>Accurate personal and contact information</li>
                            <li>Educational background and reading goals</li>
                            <li>Previous reading support or literacy program experience</li>
                            <li>Technology requirements verification for online learning</li>
                        </ul>
                    </div>
                    
                    <div class="subsection">
                        <h3>Enrollment Confirmation</h3>
                        <div class="highlight-box">
                            <h4>Upon successful registration, students receive a comprehensive welcome package including:</h4>
                            <ul>
                                <li>A free online website for reading and math materials</li>
                                <li>Personalized schedule with dates and times</li>
                                <li>Instructor contact information and office hours schedule</li>
                                <li>Guidelines and tips for making the most of the course and achieving learning goals.</li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Financial Policies Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="fas fa-dollar-sign"></i>
                    <h2>Financial Policies &amp; Payment Structure</h2>
                </div>
                <div class="section-content">
                    
                    
                    <div class="subsection">
                        <h3>Payment Options </h3>
                        <ul>
                            <li>Multiple payment methods accepted: Visa, Mastercard, PayPal, American Express</li>
                           
                        </ul>
                    </div>
                </div>
            </div>

            

            <!-- Learning Materials Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="fas fa-book-open"></i>
                    <h2>Learning Materials &amp; Educational Resource</h2>
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <h3>Required Reading Materials Provided by the instructor</h3>
                        <ul>
                            <li>Digital Resources: Provided by the instructor and additional free online reading platforms</li>
                            <li>Supplementary Materials: Age-appropriate reading selections tailored to individual comprehension levels</li>
                            <li>Assessment Tools: Regular reading fluency and comprehension evaluation materials</li>
                        </ul>
                    </div>
                    
                    
                </div>
            </div>

            <!-- Academic Integrity Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="fas fa-shield-alt"></i>
                    <h2>Academic Integrity &amp; Code of Conduct</h2>
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <h3>Professional Learning Environment</h3>
                        <ul>
                            <li>Respectful Communication: All interactions between students, instructors, and support staff maintain professional courtesy</li>
                            <li>Academic Honesty: Original work required for all reading assignments and comprehension assessments</li>
                            <li>Collaborative Learning: Encouraged peer support while maintaining individual accountability for reading progress</li>
                            <li>Cultural Sensitivity: Inclusive environment welcoming diverse backgrounds and reading experiences</li>
                        </ul>
                    </div>
                    
                    <div class="subsection">
                        <h3>Disciplinary Procedures</h3>
                        <ul>
                            <li>Warning System: Progressive approach to address conduct concerns with reading support and additional resources</li>
                            <li>Removal Policy: Serious violations may result in program suspension without tuition refund</li>
                            <li>Appeal Process: Students may request review of disciplinary decisions through our academic affairs department</li>
                            <li>Supportive Intervention: Focus on reading success with additional support before punitive measures</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Privacy Protection Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="fas fa-lock"></i>
                    <h2>Privacy Protection &amp; Data Security</h2>
                </div>
                <div class="section-content">
                    <div class="subsection">
                        <h3>Student Information Management</h3>
                        <ul>
                            <li>FERPA Compliance: Educational records protected according to federal privacy regulations</li>
                            <li>Limited Data Collection: Only information necessary for reading program delivery and academic support</li>
                            <li>Secure Platform: Encrypted online learning environment protecting student reading progress and personal information</li>
                            <li>Third-Party Restrictions: No sharing of student data without explicit written consent</li>
                        </ul>
                    </div>
                    
                    <div class="subsection">
                        <h3>Technology &amp; Platform Security</h3>
                        <ul>
                            <li>Regular Security Updates: Continuous platform monitoring and security enhancement</li>
                            <li>Student Data Rights: Full access to personal reading progress records and communication history</li>
                            <li>Retention Policy: Academic records maintained for educational continuity and transcript services</li>
                            <li>Privacy Training: All staff receive ongoing training in student privacy protection and data handling</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="section-card">
                <div class="section-header">
                    <i class="emoji">📞</i>
                    <h2>Contact Information</h2>
                </div>
                <div class="section-content">
                    <div class="contact-grid">
                        <div class="contact-item">
                            <i class="emoji">ℹ️</i>
                            <h4>General Inquiries</h4>
                            <p><a href="mailto:info@kyasacademy.com">info@kyasacademy.com</a></p>
                        </div>
                        
                        <div class="contact-item">
                            <i class="emoji">🎓</i>
                            <h4>Academic Support</h4>
                            <p><a href="mailto:Kyasacademy24@gmail.com">Kyasacademy24@gmail.com</a></p>
                        </div>
                        
                        
                    </div>
                    
                    <div class="highlight-box" style="margin-top: 2rem; text-align: center;">
                        <p><strong>These policies ensure a professional, supportive, and effective online learning environment focused on reading skill development and comprehension improvement for adult learners at all levels.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p>© 2026 Kya's Academy. All rights reserved.</p>
                <p>Empowering learners through comprehensive online reading and comprehension education.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add loading animation on page load
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
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
                                <a href="index.php" class="" title="Home">
                                    Home                                </a>
                            </li>
                                                    <li>
                                <a href="about-founder.php" class="" title="About the Founder">
                                    About the Founder                                </a>
                            </li>
                                                    <li>
                                <a href="about-us.php" class="" title="About Us">
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