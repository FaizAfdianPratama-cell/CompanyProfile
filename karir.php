<?php
// Include security headers
require_once 'includes/security-headers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karir - PT. Revolutek Dananjaya Mandiri</title>
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
        .career-hero {      
            background: #BA1A1A;
            color: white;
            padding: 100px 0 60px;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 600;
            margin-bottom: 1.5rem;
            letter-spacing: -0.5px;
        }

        .hero-content .subtitle {
            font-size: clamp(1rem, 2vw, 1.125rem);
            opacity: 0.9;
            font-weight: 400;
            line-height: 1.7;
            max-width: 700px;
            margin: 0 auto;
            color: #e0e0e0;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section {
            padding: 80px 0;
        }

        /* Career Portal Card */
        .career-portal-section {
            background: #f8f8f8;
            padding: 80px 0;
        }

        .portal-card {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            padding: 60px 50px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border: 1px solid #e5e5e5;
        }

        .portal-content {
            text-align: center;
        }

        .portal-icon {
            width: 80px;
            height: 80px;
            background: #BA1A1A;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
        }

        .portal-icon i {
            font-size: 2.5rem;
            color: white;
        }

        .portal-card h2 {
            font-size: 1.875rem;
            color: #1a1a1a;
            margin-bottom: 20px;
            font-weight: 600;
            letter-spacing: -0.3px;
        }

        .portal-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
            margin-bottom: 35px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .portal-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 32px;
            background: #BA1A1A;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            font-size: 1rem;
            transition: background 0.2s ease;
        }

        .portal-link:hover {
            background: #9a1515;
        }

        .portal-link i {
            font-size: 1rem;
        }

        .url-display {
            margin-top: 25px;
            padding: 16px 20px;
            background: #f8f8f8;
            border-radius: 4px;
            border: 1px solid #e5e5e5;
            font-family: 'Courier New', monospace;
            color: #666;
            font-size: 0.875rem;
            word-break: break-all;
        }

        .section-title {
            font-size: 2rem;
            color: #1a1a1a;
            margin-bottom: 12px;
            font-weight: 600;
            text-align: center;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            font-size: 1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto 60px;
            line-height: 1.7;
            text-align: center;
        }

        /* Why Join Section */
        .why-join-section {
            background: white;
            padding: 80px 0;
        }

        .why-join-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .why-join-item {
            background: white;
            padding: 35px 30px;
            border-radius: 8px;
            border: 1px solid #e5e5e5;
            transition: all 0.2s ease;
        }

        .why-join-item:hover {
            border-color: #BA1A1A;
            box-shadow: 0 4px 12px rgba(186, 26, 26, 0.1);
        }

        .why-join-item h4 {
            color: #1a1a1a;
            font-size: 1.125rem;
            margin-bottom: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .why-join-item h4 i {
            font-size: 1.25rem;
            color: #BA1A1A;
            flex-shrink: 0;
        }

        .why-join-item p {
            color: #666;
            line-height: 1.7;
            font-size: 0.9375rem;
        }

        /* Scroll to Top Button */
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: #9a1515;
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

        .portal-card,
        .section-title,
        .section-subtitle {
            opacity: 0;
        }

        .portal-card.visible,
        .section-title.visible,
        .section-subtitle.visible {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .career-hero {
                padding: 120px 0 60px;
            }

            .section {
                padding: 60px 0;
            }

            .career-portal-section,
            .why-join-section {
                padding: 60px 0;
            }

            .portal-card {
                padding: 40px 30px;
                margin: 0 1rem;
            }

            .portal-icon {
                width: 70px;
                height: 70px;
            }

            .portal-icon i {
                font-size: 2rem;
            }

            .portal-card h2 {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .why-join-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }

            .career-hero {
                padding: 100px 0 50px;
            }

            .hero-content h1 {
                font-size: 1.75rem;
            }

            .portal-card {
                padding: 35px 25px;
                border-radius: 6px;
            }

            .portal-icon {
                width: 60px;
                height: 60px;
            }

            .portal-icon i {
                font-size: 1.75rem;
            }

            .portal-card h2 {
                font-size: 1.375rem;
            }

            .portal-link {
                padding: 14px 28px;
                font-size: 0.9375rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .why-join-item {
                padding: 30px 25px;
            }
        }
    </style>
</head>
<body>

    <?php include 'includes/navbar.php' ?>

    <!-- Hero Section -->
    <section class="career-hero">
        <div class="hero-content">
            <h1>KARIR</h1>
            <p class="subtitle">Bangun karir Anda di perusahaan terkemuka di bidang oil & gas industry. Temukan peluang untuk berkembang bersama tim profesional kami.</p>
        </div>
    </section>

    <!-- Career Portal Card -->
    <section class="career-portal-section">
        <div class="container">
            <div class="portal-card fade-in">
                <div class="portal-content">
                    <div class="portal-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h2>Portal Karir Revolutek</h2>
                    <p>Kunjungi portal karir kami untuk melihat daftar lowongan kerja yang tersedia, persyaratan posisi, dan kirimkan aplikasi Anda secara online.</p>
                    <a href="https://career.revolutek.com" target="_blank" class="portal-link">
                        <span>Lihat Lowongan Kerja</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="url-display">
                        <i class="fas fa-link"></i> https://career.revolutek.com
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Section -->
    <section class="why-join-section">
        <div class="container">
            <h2 class="section-title fade-in">Mengapa Bergabung dengan Revolutek?</h2>
            <p class="section-subtitle fade-in">Kami adalah perusahaan yang terus berkembang dengan proyek-proyek berskala internasional</p>
            
            <div class="why-join-grid">
                <div class="why-join-item fade-in">
                    <h4><i class="fas fa-award"></i> Perusahaan Bersertifikat Internasional</h4>
                    <p>Memiliki sertifikasi API dan ISO, dipercaya oleh perusahaan multinasional terkemuka seperti Schlumberger, Halliburton, dan Baker Hughes</p>
                </div>

                <div class="why-join-item fade-in">
                    <h4><i class="fas fa-industry"></i> Fasilitas Workshop Modern</h4>
                    <p>Workshop seluas 29,613 m² dengan peralatan CNC terlengkap dan teknologi terkini untuk mendukung pekerjaan Anda</p>
                </div>

                <div class="why-join-item fade-in">
                    <h4><i class="fas fa-globe"></i> Proyek Internasional</h4>
                    <p>Kesempatan untuk terlibat dalam proyek-proyek oil & gas berskala nasional dan internasional</p>
                </div>

                <div class="why-join-item fade-in">
                    <h4><i class="fas fa-shield-alt"></i> Keselamatan Kerja Terjamin</h4>
                    <p>Komitmen tinggi terhadap safety standard dan kesejahteraan karyawan di lingkungan kerja</p>
                </div>

                <div class="why-join-item fade-in">
                    <h4><i class="fas fa-chart-line"></i> Perusahaan Berkembang</h4>
                    <p>Bergabung dengan perusahaan yang terus bertumbuh dan ekspansi di industri oil & gas</p>
                </div>

                <div class="why-join-item fade-in">
                    <h4><i class="fas fa-handshake"></i> Budaya Kerja Positif</h4>
                    <p>Lingkungan kerja yang profesional, kolaboratif, dan menghargai kontribusi setiap individu</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
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

            // Scroll to Top Button
            const scrollTopBtn = document.querySelector('.scroll-top');
            
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
        });
    </script>

</body>
</html>