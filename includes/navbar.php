<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Header -->
<header class="header">
    <div class="nav-container">
        <a href="beranda.php" class="logo">
            <img src="assets/rdmlogo.png" alt="Revolutek Logo">
        </a>
        <nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu">
                <li><a href="beranda.php" <?php echo ($current_page == 'beranda.php') ? 'class="active"' : ''; ?>>Beranda</a></li>
                <li><a href="tentang-kami.php" <?php echo ($current_page == 'tentang-kami.php') ? 'class="active"' : ''; ?>>Tentang Kami</a></li>
                <li><a href="layanan.php" <?php echo ($current_page == 'layanan.php') ? 'class="active"' : ''; ?>>Layanan</a></li>
                <li><a href="produk.php" <?php echo ($current_page == 'produk.php') ? 'class="active"' : ''; ?>>Produk</a></li>
                <li><a href="karir.php" <?php echo ($current_page == 'karir.php') ? 'class="active"' : ''; ?>>Karir</a></li>
                <li><a href="kontak.php" <?php echo ($current_page == 'kontak.php') ? 'class="active"' : ''; ?>>Kontak</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
    .header {
    position: fixed;
    top: 0;
    width: 100%;
    background: transparent !important;
    backdrop-filter: none;
    z-index: 1000;
    padding: 1rem 0;
    box-shadow: none;
    transition: all 0.3s ease;
    }

    .header.scrolled {
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 30px rgba(0,0,0,0.15);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    .logo {
        height: 40px;
        display: flex;
        align-items: center;
    }

    .logo img {
        height: 140%;
        width: auto;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 0.5rem;
        margin: 0;
        padding: 0;
        flex-wrap: wrap;
        align-items: center;
    }

    .nav-menu a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
        padding: 8px 12px;
        position: relative;
        transition: all 0.3s ease;
        border-radius: 15px;
        background: transparent;
        border: 2px solid transparent;
        display: block;
        white-space: nowrap;
        font-size: 1.1rem;
    }

    .nav-menu a:hover {
        background-color: rgba(0, 0, 0, 0.05);
        transform: translateY(-2px);
    }

    .nav-menu a.active {
        color: black;
        background: white;
        border: 2px solid black;
        transform: translateY(-2px);
    }

    /* Logo filter untuk visibility saat belum scroll */
    .header:not(.scrolled) .logo img {
        filter: brightness(0) invert(1);
        transition: filter 0.3s ease;
    }

    .header.scrolled .logo img {
        filter: none;
    }

    /* Hamburger menu warna putih saat belum scroll */
    .header:not(.scrolled) .menu-toggle span {
        background-color: white;
    }

    .header.scrolled .menu-toggle span {
        background-color: #333;
    }

    /* Warna teks putih saat belum scroll */
    .header:not(.scrolled) .nav-menu a {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }

    .header:not(.scrolled) .nav-menu a.active {
        color: white;
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid white;
        text-shadow: none;
    }

    /* Warna normal saat sudah scroll */
    .header.scrolled .nav-menu a {
        color: #333;
        text-shadow: none;
    }

    .header.scrolled .nav-menu a.active {
        color: black;
        background: white;
        border: 2px solid black;
    }

    /* Hamburger menu for mobile */
    .menu-toggle {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
        cursor: pointer;
        z-index: 1000;
        padding: 0;
        background: none;
        border: none;
    }

    .menu-toggle span {
        height: 3px;
        width: 100%;
        background-color: #333;
        border-radius: 3px;
        transition: all 0.3s ease;
        transform-origin: center;
    }

    .menu-toggle.active span:first-child {
        transform: translateY(9px) rotate(45deg);
    }

    .menu-toggle.active span:nth-child(2) {
        opacity: 0;
        transform: translateX(-10px);
    }

    .menu-toggle.active span:last-child {
        transform: translateY(-9px) rotate(-45deg);
    }

    /* Tablet and Mobile Responsive */
    @media (max-width: 900px) {
    .menu-toggle {
        display: flex;
    }

    nav {
        position: relative;
    }

    .nav-menu {
        display: none;
        position: absolute;
        top: calc(100% + 1rem);
        right: 0;
        width: 280px;
        flex-direction: column;
        background: white;
        padding: 1rem 0;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        text-align: left;
        transform: translateY(-10px);
        opacity: 0;
        transition: all 0.3s ease;
        gap: 0.5rem;
        border: 1px solid rgba(0, 0, 0, 0.1);
        flex-wrap: nowrap;
    }

    .nav-menu.active {
        display: flex;
        transform: translateY(0);
        opacity: 1;
    }

    .nav-menu li {
        padding: 0;
        opacity: 0;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }

    .nav-menu.active li {
        opacity: 1;
        transform: translateY(0);
    }

    .nav-menu a {
        display: block;
        padding: 12px 20px;
        font-size: 0.95rem;
        margin: 0 1rem;
        border-radius: 12px;
        text-align: center;
        border: 1px solid transparent;
        color: #333 !important;
        text-shadow: none !important;
    }

    .nav-menu a:hover {
        background-color: rgba(0, 0, 0, 0.05);
        border-color: rgba(0, 0, 0, 0.1);
        transform: translateX(5px);
    }

    .nav-menu a.active {
        background: white !important;
        border: 2px solid #333 !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transform: translateX(5px) scale(1.02);
        color: black !important;
    }
}

    @media (max-width: 480px) {
        .nav-container {
            padding: 0 1rem;
        }

        .logo {
            height: 35px;
        }

        .nav-menu {
            width: 250px;
        }
        
        .nav-menu a {
            padding: 10px 15px;
            font-size: 0.9rem;
        }
    }
</style>

<script>
    'use strict';
    
    // Prevent double initialization
    if (window.navbarInitialized) {
        console.warn('Navbar already initialized, skipping...');
    } else {
        window.navbarInitialized = true;
        
        document.addEventListener('DOMContentLoaded', function() {
            // Safe query with null check
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('.nav-menu');
            const menuItems = document.querySelectorAll('.nav-menu li');
            
            if (!menuToggle || !navMenu) {
                console.warn('Menu elements not found');
                return;
            }
            
            // Menu toggle click
            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                
                if (menuToggle.classList && navMenu.classList) {
                    menuToggle.classList.toggle('active');
                    navMenu.classList.toggle('active');
                    
                    // Animate menu items with delay
                    if (menuItems.length > 0) {
                        menuItems.forEach((item, index) => {
                            if (item && item.style) {
                                if (navMenu.classList.contains('active')) {
                                    item.style.transitionDelay = `${index * 0.1}s`;
                                } else {
                                    item.style.transitionDelay = `${(menuItems.length - index - 1) * 0.1}s`;
                                }
                            }
                        });
                    }
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!menuToggle.contains(e.target) && !navMenu.contains(e.target)) {
                    if (menuToggle.classList && navMenu.classList) {
                        menuToggle.classList.remove('active');
                        navMenu.classList.remove('active');
                    }
                    
                    if (menuItems.length > 0) {
                        menuItems.forEach(item => {
                            if (item && item.style) {
                                item.style.transitionDelay = '0s';
                            }
                        });
                    }
                }
            });

            // Close menu when clicking a menu item
            if (menuItems.length > 0) {
                menuItems.forEach(item => {
                    if (item) {
                        item.addEventListener('click', () => {
                            if (menuToggle.classList && navMenu.classList) {
                                menuToggle.classList.remove('active');
                                navMenu.classList.remove('active');
                            }
                            
                            menuItems.forEach(item => {
                                if (item && item.style) {
                                    item.style.transitionDelay = '0s';
                                }
                            });
                        });
                    }
                });
            }

            // Add scroll effect to header
            function handleScroll() {
                const header = document.querySelector('.header');
                if (header && header.classList) {
                    if (window.scrollY > 10) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                }
            }
            
            // Throttle scroll event
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                if (scrollTimeout) {
                    clearTimeout(scrollTimeout);
                }
                scrollTimeout = setTimeout(handleScroll, 10);
            });
            
            // Initial check on page load
            window.addEventListener('load', function() {
                const header = document.querySelector('.header');
                if (header && header.classList && window.scrollY <= 10) {
                    header.classList.remove('scrolled');
                }
            });
        });
    }
</script>