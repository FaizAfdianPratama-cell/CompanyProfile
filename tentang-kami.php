<?php
// Include security headers
require_once 'includes/security-headers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - PT. Revolutek Dananjaya Mandiri</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #BA1A1A;
            --primary-dark: #8B0000;
            --primary-light: #ff4444;
            --text-dark: #1a1a1a;
            --text-gray: #666;
            --text-light: #999;
            --bg-white: #ffffff;
            --bg-gray: #f8f9fa;
            --bg-light: #fafbfc;
            --border: #e5e7eb;
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.06);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.08);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: var(--bg-white);
            overflow-x: hidden;
        }

        /* Hero Section - Enhanced with subtle gradient */
        .hero {
            background: var(--primary);
            color: white;
            padding: 130px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }

        .hero-subtitle {
            font-size: clamp(1.0625rem, 2vw, 1.25rem);
            opacity: 0;
            line-height: 1.8;
            color: rgba(255,255,255,0.95);
            font-weight: 400;
            animation: fadeInUp 0.8s ease-out 0.2s forwards;
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

        /* Company Story - Enhanced Layout */
        .story-section {
            padding: 100px 0;
            background: var(--bg-white);
        }

        .story-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: grid;
            grid-template-columns: 45% 55%;
            gap: 80px;
            align-items: start;
        }

        .story-image-wrapper {
            width: 100%;
            height: 600px;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            position: sticky;
            top: 100px;
        }

        .story-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            backface-visibility: hidden;
        }

        .story-content {
            padding-right: 40px;
            max-height: 600px;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--bg-gray);
        }
        
        .story-content::-webkit-scrollbar {
            width: 6px;
        }
        
        .story-content::-webkit-scrollbar-track {
            background: var(--bg-gray);
            border-radius: 10px;
        }
        
        .story-content::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .story-content::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        .story-heading {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 28px;
            line-height: 1.3;
            letter-spacing: -0.01em;
        }

        .story-text {
            font-size: 16.81px;
            line-height: 1.75;
            color: var(--text-gray);
            margin-bottom: 24px;
            text-align: justify;
        }

        .story-text:last-child {
            margin-bottom: 0;
        }

        /* Section Headers - More refined */
        .section {
            padding: 100px 0;
        }

        .section-light {
            background: var(--bg-gray);
        }

        .section-header {
            text-align: center;
            margin-bottom: 72px;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.75rem);
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 16px;
            letter-spacing: -0.02em;
        }

        .section-description {
            font-size: 1.0625rem;
            color: var(--text-gray);
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Core Business*/
        .business-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .business-card {
            background: var(--bg-white);
            padding: 48px 36px;
            border-radius: 20px;
            border: 1px solid var(--border);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .business-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, rgba(186, 26, 26, 0.1), rgba(186, 26, 26, 0.05));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
            transition: all 0.4s ease;
        }

        .business-icon i {
            font-size: 1.75rem;
            color: var(--primary);
            transition: color 0.4s ease;
        }

        .business-card h3 {
            font-size: 1.375rem;
            font-weight: 700;
            margin-bottom: 14px;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .business-card p {
            font-size: 0.9375rem;
            color: var(--text-gray);
            line-height: 1.8;
        }

        /* Certifications - More elegant */
        .cert-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 24px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .cert-item {
            background: var(--bg-white);
            padding: 40px 28px;
            border-radius: 16px;
            text-align: center;
            border: 1px solid var(--border);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .cert-icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, rgba(186, 26, 26, 0.1), rgba(186, 26, 26, 0.05));
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .cert-icon i {
            font-size: 1.375rem;
            color: var(--primary);
            transition: color 0.3s ease;
        }

        .cert-item h4 {
            font-size: 0.9375rem;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.5;
            position: relative;
        }

        /* Clients - Enhanced Grid */
        /* Clients - Compact Grid Design */
        .clients-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 40px 60px;
            margin-top: 60px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }

        .client-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px;
            transition: all 0.3s ease;
        }

        .client-logo img {
            max-width: 140px;
            max-height: 70px;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: grayscale(0%);
            opacity: 0.95;
            transition: all 0.3s ease;
        }

        .client-logo:hover img {
            opacity: 1;
            transform: scale(1.05);
        }

        /* Logo sizing adjustments */
        .client-logo img[alt="Halliburton"],
        .client-logo img[alt="Imeco"],
        .client-logo img[alt="CiticGroup"],
        .client-logo img[alt="HCML"],
        .client-logo img[alt="Medco Energi"],
        .client-logo img[alt="FMC Technologies"],
        .client-logo img[alt="Total"] {
            max-width: 180%;
            max-height: 180%;
        }
        
        .client-logo img[alt="Orka"],
        .client-logo img[alt="RH PetroGas"] {
            max-width: 230%;
            max-height: 230%;
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
        
        /* Desktop (1025px - 1199px) */
        @media (max-width: 1199px) {
            .container {
                max-width: 1024px;
            }
            
            .story-wrapper {
                gap: 60px;
            }
            
            .business-grid {
                max-width: 1000px;
            }
        }

        /* Tablet Landscape & Small Desktop (769px - 1024px) */
        @media (max-width: 1024px) {
            .hero {
                padding: 100px 0 60px;
            }

            .hero-title {
                font-size: 2.25rem;
            }
            
            .hero-subtitle {
                font-size: 1.125rem;
            }

            .section {
                padding: 80px 0;
            }

            .section-title {
                font-size: 2.25rem;
            }
            
            .section-header {
                margin-bottom: 56px;
            }

            .story-wrapper {
                grid-template-columns: 1fr;
                gap: 48px;
            }

            .story-image-wrapper {
                height: 450px;
                max-width: 600px;
                margin: 0 auto;
                position: relative;
                top: 0;
            }

            .story-content {
                padding-right: 0;
                max-width: 800px;
                margin: 0 auto;
                max-height: none;
                overflow-y: visible;
            }

            .story-heading {
                font-size: 1.875rem;
                text-align: center;
            }
            
            .story-text {
                font-size: 1rem;
            }

            .business-grid {
                grid-template-columns: 1fr;
                gap: 24px;
                max-width: 600px;
            }

            .cert-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .clients-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 32px 48px;
            }
        }

        /* Tablet Portrait (481px - 768px) */
        @media (max-width: 768px) {
            .hero {
                padding: 120px 0 60px;
            }

            .hero-title {
                font-size: 1.875rem;
                margin-bottom: 1rem;
            }

            .hero-subtitle {
                font-size: 1rem;
                line-height: 1.7;
            }

            .story-section {
                padding: 60px 0;
            }

            .story-wrapper {
                gap: 36px;
            }

            .story-image-wrapper {
                height: 320px;
            }

            .story-heading {
                font-size: 1.625rem;
                margin-bottom: 24px;
            }
            
            .story-text {
                font-size: 0.9375rem;
                margin-bottom: 20px;
                line-height: 1.8;
            }

            .section {
                padding: 60px 0;
            }

            .section-header {
                margin-bottom: 40px;
            }

            .section-title {
                font-size: 1.75rem;
                margin-bottom: 12px;
            }
            
            .section-description {
                font-size: 0.9375rem;
            }

            .business-card {
                padding: 36px 28px;
            }
            
            .business-card h3 {
                font-size: 1.25rem;
            }
            
            .business-card p {
                font-size: 0.9375rem;
            }

            .cert-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }

            .cert-item {
                padding: 28px 20px;
            }
            
            .cert-icon {
                width: 48px;
                height: 48px;
                margin-bottom: 16px;
            }
            
            .cert-icon i {
                font-size: 1.25rem;
            }
            
            .cert-item h4 {
                font-size: 0.875rem;
            }

            .clients-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 24px 32px;
            }

            .client-logo {
                height: 70px;
            }
            
            .client-logo img {
                max-width: 120px;
                max-height: 60px;
            }

            .container {
                padding: 0 20px;
            }

            .scroll-top {
                bottom: 20px;
                right: 20px;
                width: 48px;
                height: 48px;
            }
        }

        /* Mobile Landscape & Large Mobile (481px - 640px) */
        @media (max-width: 640px) {
            .hero {
                padding: 70px 0 40px;
            }
            
            .hero-title {
                font-size: 1.625rem;
            }
            
            .hero-subtitle {
                font-size: 0.9375rem;
            }
            
            .story-section {
                padding: 50px 0;
            }
            
            .story-image-wrapper {
                height: 280px;
            }
            
            .story-heading {
                font-size: 1.5rem;
            }
            
            .section {
                padding: 50px 0;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .business-card {
                padding: 32px 24px;
            }
            
            .business-icon {
                width: 56px;
                height: 56px;
                margin-bottom: 20px;
            }
            
            .business-icon i {
                font-size: 1.5rem;
            }
            
            .clients-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px 24px;
            }
        }

        /* Mobile Portrait (320px - 480px) */
        @media (max-width: 480px) {
            .hero {
                padding: 100px 0 50px;
            }

            .hero-title {
                font-size: 1.5rem;
                line-height: 1.3;
                margin-bottom: 0.875rem;
            }
            
            .hero-subtitle {
                font-size: 0.875rem;
                line-height: 1.6;
            }

            .story-section {
                padding: 40px 0;
            }

            .story-wrapper {
                gap: 28px;
            }

            .story-image-wrapper {
                height: 240px;
                border-radius: 12px;
            }

            .story-heading {
                font-size: 1.375rem;
                margin-bottom: 20px;
            }
            
            .story-text {
                font-size: 0.875rem;
                margin-bottom: 16px;
                line-height: 1.7;
            }

            .section {
                padding: 40px 0;
            }

            .section-header {
                margin-bottom: 32px;
            }

            .section-title {
                font-size: 1.375rem;
                margin-bottom: 10px;
            }
            
            .section-description {
                font-size: 0.875rem;
                line-height: 1.6;
            }

            .business-grid {
                gap: 16px;
            }

            .business-card {
                padding: 28px 20px;
                border-radius: 16px;
            }
            
            .business-icon {
                width: 52px;
                height: 52px;
                margin-bottom: 18px;
                border-radius: 12px;
            }
            
            .business-icon i {
                font-size: 1.375rem;
            }
            
            .business-card h3 {
                font-size: 1.125rem;
                margin-bottom: 10px;
            }
            
            .business-card p {
                font-size: 0.875rem;
                line-height: 1.7;
            }

            .cert-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }

            .cert-item {
                padding: 24px 16px;
                border-radius: 12px;
            }
            
            .cert-icon {
                width: 44px;
                height: 44px;
                margin-bottom: 14px;
                border-radius: 10px;
            }
            
            .cert-icon i {
                font-size: 1.125rem;
            }
            
            .cert-item h4 {
                font-size: 0.8125rem;
                line-height: 1.4;
            }

            .clients-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px 20px;
            }

            .client-logo {
                height: 60px;
            }
            
            .client-logo img {
                max-width: 100px;
                max-height: 50px;
            }

            .container {
                padding: 0 16px;
            }

            .scroll-top {
                bottom: 16px;
                right: 16px;
                width: 44px;
                height: 44px;
            }
            
            .scroll-top i {
                font-size: 1rem;
            }
        }

        /* Extra Small Mobile (320px - 375px) */
        @media (max-width: 375px) {
            .hero-title {
                font-size: 1.375rem;
            }
            
            .hero-subtitle {
                font-size: 0.8125rem;
            }
            
            .story-image-wrapper {
                height: 220px;
            }
            
            .story-heading {
                font-size: 1.25rem;
            }
            
            .section-title {
                font-size: 1.25rem;
            }
            
            .business-card {
                padding: 24px 18px;
            }
            
            .business-card h3 {
                font-size: 1.0625rem;
            }
            
            .cert-item {
                padding: 20px 14px;
            }
            
            .cert-item h4 {
                font-size: 0.75rem;
            }
            
            .container {
                padding: 0 14px;
            }
        }
        
        /* Landscape orientation adjustments for mobile */
        @media (max-height: 500px) and (orientation: landscape) {
            .hero {
                padding: 50px 0 30px;
            }
            
            .section {
                padding: 40px 0;
            }
            
            .story-image-wrapper {
                height: 200px;
            }
        }
    </style>
</head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>TENTANG KAMI</h1>
                <p class="hero-subtitle">PT. Revolutek Dananjaya Mandiri - Revolutionary Technology untuk solusi machining dan repair facilities terdepan di Indonesia</p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="story-section">
        <div class="story-wrapper">
            <div class="story-image-wrapper">
                <img src="assets/Profil.jpg" alt="PT Revolutek Dananjaya Mandiri" class="story-image">
            </div>
            
            <div class="story-content">
                <h2 class="story-heading">Profil Perusahaan</h2>
                
                <p class="story-text">PT. Revolutek Dananjaya Mandiri adalah perusahaan yang bergerak di bidang machine shop dan fasilitas reparasi. Nama "Revolutek" diambil dari istilah kata "Revolutionary Technology". Nama ini mencerminkan komitmen perusahaan untuk menghadirkan teknologi revolusioner dalam industri perminyakan dan gas bumi di Indonesia. Perusahaan kami memiliki spesialisasi khusus untuk fabrikasi dan repair produk (tools) dalam industri oil dan gas.</p>

                <p class="story-text">Selain itu, PT. Revolutek Dananjaya Mandiri terus mengembangkan kapabilitas perusahaan dengan meraih berbagai sertifikasi internasional seperti ISO 9001:2015, API 5B untuk sertifikasi casing dan tubing, API 7-1 untuk standar rotary drilling equipment, API 6A untuk sertifikasi wellhead dan Christmas tree equipment, dan API Spec Q1 10th Edition. Seiring dengan pertumbuhan bisnisnya, perusahaan berhasil memperoleh lisensi premium connection threading dengan skala internasional yang sangat bergengsi seperti TSH Blue Premium Connection, PT. Revolutek Dananjaya Mandiri juga meraih kemitraan strategis dengan berbagai perusahaan multinasional untuk meningkatkan kapasitas dan kapabilitas perusahaan.</p>
            </div>
        </div>
    </section>

    <!-- Core Business -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Bisnis Utama</h2>
                <p class="section-description">Bidang usaha kami yang menjadi keunggulan kompetitif kami dalam industri oil & gas</p>
            </div>
            
            <div class="business-grid">
                <div class="business-card">
                    <div class="business-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Machine and Fabricating Shop</h3>
                    <p>Precision machining dengan akurasi hingga 0.0002" menggunakan CNC dan bucking machines 2-3/8" hingga 24" untuk berbagai komponen oil & gas.</p>
                </div>
                
                <div class="business-card">
                    <div class="business-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Inspection & Recertification</h3>
                    <p>Non-destructive testing, pipe inspection, dan recertification services dengan witness BV/DNV/SKPI Migas untuk equipment compliance.</p>
                </div>
                
                <div class="business-card">
                    <div class="business-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Repair Facilities</h3>
                    <p>Comprehensive repair services untuk wellhead, valves, BOP, dan pressure control equipment dengan in-house fabrication capabilities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sertifikasi & Standar</h2>
                <p class="section-description">Komitmen terhadap kualitas dengan sertifikasi internasional yang diakui</p>
            </div>
            
            <div class="cert-grid">
                <div class="cert-item">
                    <div class="cert-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>ISO 9001:2015</h4>
                </div>
                
                <div class="cert-item">
                    <div class="cert-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>API 5B-0217</h4>
                </div>
                
                <div class="cert-item">
                    <div class="cert-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h4>API 7-1-1150</h4>
                </div>
                
                <div class="cert-item">
                    <div class="cert-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>API 6A-1589</h4>
                </div>
                
                <div class="cert-item">
                    <div class="cert-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h4>TenarisHydrill (Premium Connection)</h4>
                </div>
                
                <div class="cert-item">
                    <div class="cert-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h4>API Spec Q1 10th Edition</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="section section-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Pengguna Akhir Produk & Layanan Kami</h2>
                <p class="section-description">Dipercaya oleh perusahaan-perusahaan terkemuka di industri oil & gas</p>
            </div>
            
            <div class="clients-grid">
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Cameron.png" alt="Cameron">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/ConocoPhillips.png" alt="ConocoPhillips">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Elnusa.png" alt="Elnusa">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Expro.png" alt="Expro">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/FMC-Technologies.png" alt="FMC Technologies">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Halliburton.png" alt="Halliburton">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/HCML.png" alt="HCML">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Imeco.png" alt="Imeco">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/MedcoEnergi.png" alt="Medco Energi">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRDM/CiticGroup.png" alt="CiticGroup">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Pertamina-PHEWMO.png" alt="Pertamina Hulu Energy WMO">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/PertaminaDrillingServicesIndonesia.png" alt="Pertamina Drilling Services">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRDM/PertaminaHuluMahakam.png" alt="Pertamina Hulu Mahakam">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Pertamina-PHEONWJ.png" alt="Pertamina Hulu Energy">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Pertamina-PHEOSES.png" alt="Pertamina Hulu Energy OSES">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/PetroChina.png" alt="PetroChina">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRDM/Noyy.png" alt="Noyy">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/PGN-Saka.png" alt="PGN Saka">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Repsol.png" alt="Repsol">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/RH-PetroGas.png" alt="RH PetroGas">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Schlumberger.png" alt="Schlumberger">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Solaralert.png" alt="Solaralert">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Superior.png" alt="Superior">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Total.png" alt="Total">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Weatherford.png" alt="Weatherford">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Sarulla.png" alt="Sarulla">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/SorikMarapi.png" alt="SorikMarapi">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/Orka.png" alt="Orka">
                </div>
                <div class="client-logo">
                    <img src="assets/LogoPenggunaRdm/PremierOil.png" alt="Premier Oil">
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
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

        // Fade in animations with IntersectionObserver
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { 
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Apply fade-in animation to cards
        document.querySelectorAll('.business-card, .cert-item, .client-logo').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = `all 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.05}s`;
            fadeObserver.observe(el);
        });

        // Story section fade-in
        const storyElements = document.querySelectorAll('.story-image-wrapper, .story-content');
        storyElements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = `all 0.8s ease ${index * 0.2}s`;
            fadeObserver.observe(el);
        });
    </script>

    <?php include 'includes/footer.php'; ?>

</body>
</html>