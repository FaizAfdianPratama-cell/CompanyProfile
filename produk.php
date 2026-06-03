<?php
// Include security headers
require_once 'includes/security-headers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - PT. Revolutek Dananjaya Mandiri</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #ffffff;
        }

        /* Hero Section */
        .products-hero {
            background: #BA1A1A;
            color: white;
            padding: 100px 20px 40px;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }

        .hero-content .subtitle {
            font-size: clamp(1rem, 2vw, 1.125rem);
            opacity: 0.9;
            line-height: 1.7;
            color: #e0e0e0;
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 60px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title {
            font-size: clamp(1.75rem, 4vw, 2rem);
            color: #1a1a1a;
            margin-bottom: 12px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            font-size: clamp(0.9375rem, 2vw, 1rem);
            color: #666;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Product Grid */
        .product-categories {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.2s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            border: 1px solid #e5e5e5;
        }

        .product-image-wrapper {
            width: 100%;
            height: 280px;
            overflow: hidden;
            background: #f8f8f8;
            position: relative;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-info {
            padding: 24px 20px;
            text-align: center;
            background: white;
        }

        .product-name {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1a1a1a;
            margin: 0;
            letter-spacing: -0.2px;
        }

        /* Fade In Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            opacity: 0;
        }

        .fade-in.visible {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .hero-content h1,
        .hero-content .subtitle {
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .hero-content .subtitle {
            animation-delay: 0.1s;
        }

        .section-header {
            opacity: 0;
        }

        .section-header.visible {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Scroll to Top */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 48px;
            height: 48px;
            background: #BA1A1A;
            color: white;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease;
            z-index: 1000;
        }

        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: #9a1515;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .product-categories {
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }
        }

        @media (max-width: 992px) {
            .products-hero {
                padding: 120px 20px 60px;
            }

            .product-categories {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .section {
                padding: 60px 0;
            }

            .product-image-wrapper {
                height: 240px;
            }

            .section-header {
                margin-bottom: 50px;
            }
        }

        @media (max-width: 768px) {
            .products-hero {
                padding: 100px 20px 50px;
            }

            .product-categories {
                grid-template-columns: repeat(3, 1fr);
                gap: 15px;
            }
            
            .product-image-wrapper {
                height: 0;
                padding-bottom: 100%; /* Makes it square (1:1 ratio) */
                position: relative;
            }
            
            .product-image {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .product-info {
                padding: 20px 16px;
            }

            .product-name {
                font-size: 1rem;
            }

            .section {
                padding: 50px 0;
            }

            .section-header {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 576px) {
            .products-hero {
                padding: 90px 15px 40px;
            }

            .container {
                padding: 0 15px;
            }

            .product-categories {
                grid-template-columns: repeat(3, 1fr);
                gap: 12px;
            }
            
            .product-image-wrapper {
                height: 0;
                padding-bottom: 100%; /* Square shape */
                position: relative;
            }
            
            .product-info {
                padding: 12px 8px;
            }
            
            .product-name {
                font-size: 0.875rem;
            }

            .section {
                padding: 40px 0;
            }
        }

        @media (max-width: 400px) {
            .product-categories {
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
            }
            
            .product-image-wrapper {
                height: 0;
                padding-bottom: 100%; /* Square shape */
                position: relative;
            }
            
            .product-info {
                padding: 10px 6px;
            }
            
            .product-name {
                font-size: 0.8125rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="products-hero">
        <div class="hero-content">
            <h1>PRODUK KAMI</h1>
            <p class="subtitle">Custom manufacturing dan wellhead systems dengan standar API untuk energy sectors</p>
        </div>
    </section>

    <!-- Main Products -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title">Produk Unggulan</h2>
                <p class="section-subtitle">Custom machining products dan wellhead systems sesuai spesifikasi customer</p>
            </div>
            
            <div class="product-categories" id="productGrid">
                <!-- X-Over -->
                <div class="product-card fade-in" data-category="connector" data-product="xover">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/X-Over.jpg" alt="X-Over" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">X-Over</h3>
                    </div>
                </div>

                <!-- Flange -->
                <div class="product-card fade-in" data-category="connector" data-product="flange">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/Flange.jpg" alt="Flange" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Flange</h3>
                    </div>
                </div>

                <!-- Gate Valve -->
                <div class="product-card fade-in" data-category="valve" data-product="gate-valve">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/GetValve.jpg" alt="Gate Valve" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Gate Valve</h3>
                    </div>
                </div>

                <!-- Bull Plug -->
                <div class="product-card fade-in" data-category="valve" data-product="bull-plug">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/BullPlug.jpg" alt="Bull Plug" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Bull Plug</h3>
                    </div>
                </div>

                <!-- Coupling -->
                <div class="product-card fade-in" data-category="connector" data-product="coupling">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/Coupling.jpg" alt="Coupling" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Coupling</h3>
                    </div>
                </div>

                <!-- BPV Plug -->
                <div class="product-card fade-in" data-category="valve" data-product="bpv-plug">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/BpvPlug.jpg" alt="BPV Plug" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">BPV Plug</h3>
                    </div>
                </div>

                <!-- X-Mass Tree -->
                <div class="product-card fade-in" data-category="wellhead" data-product="xmas-tree">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/X-MassTree.jpg" alt="X-Mass Tree" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">X-Mass Tree</h3>
                    </div>
                </div>

                <!-- Wellhead -->
                <div class="product-card fade-in" data-category="wellhead" data-product="wellhead">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/WellHead.jpg" alt="Wellhead" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Wellhead</h3>
                    </div>
                </div>

                <!-- Tubing Head Adapter -->
                <div class="product-card fade-in" data-category="wellhead" data-product="tubing-head-adapter">
                    <div class="product-image-wrapper">
                        <img src="assets/ProdukKami/TubingHeadAdapter.jpg" alt="Tubing Head Adapter" class="product-image" onerror="this.src='assets/images/products/placeholder.jpg'">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Tubing Head Adapter</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all fade-in elements
document.querySelectorAll('.fade-in').forEach((el) => {
    observer.observe(el);
});

// Handle image loading errors with SVG placeholder
document.querySelectorAll('.product-image').forEach(img => {
    img.addEventListener('error', function() {
        if (!this.dataset.errorHandled) {
            this.dataset.errorHandled = 'true'; // Prevent infinite loop
            
            // Create beautiful SVG placeholder
            const svg = `data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 400 400'%3E%3Crect width='400' height='400' fill='%23f8f8f8'/%3E%3Cg transform='translate(200, 160)'%3E%3Ccircle cx='0' cy='0' r='40' fill='%23ddd'/%3E%3Cpath d='M-20 -10 L-20 10 L20 10 L20 -10 Z M-15 -5 L-15 0 L15 0 L15 -5 Z' fill='%23fff'/%3E%3Ccircle cx='-10' cy='15' r='8' fill='%23ccc'/%3E%3C/g%3E%3Ctext x='50%25' y='240' text-anchor='middle' font-family='Inter, Arial, sans-serif' font-size='16' fill='%23999' font-weight='500'%3ENo Image Available%3C/text%3E%3C/svg%3E`;
            
            this.src = svg;
        }
    });
});

// Scroll to Top Button
const scrollTopBtn = document.querySelector('.scroll-top');

if (scrollTopBtn) {
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 500) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });

    scrollTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}
    </script>

    <?php include 'includes/footer.php'; ?>

</body>
</html>