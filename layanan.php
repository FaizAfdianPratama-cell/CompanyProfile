<?php
// Include security headers
require_once 'includes/security-headers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - PT. Revolutek Dananjaya Mandiri</title>
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
        .services-hero {
            background: #BA1A1A;
            color: white;
            padding: 110px 0 60px;
            text-align: center;
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .hero-content .subtitle {
            font-size: clamp(1rem, 2vw, 1.125rem);
            opacity: 0;
            line-height: 1.7;
            color: #e0e0e0;
            animation: fadeInUp 0.6s ease-out 0.1s forwards;
        }

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

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section {
            padding: 80px 0;
        }

        .section-gray {
            background: #f8f8f8;
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

        /* Fade In Animation */
        .fade-in {
            opacity: 0;
        }

        .fade-in.visible {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Main Services Grid */
        .main-services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            border-radius: 8px;
            padding: 35px 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border: 1px solid #e5e5e5;
            transition: all 0.2s ease;
        }

        .service-card:hover {
            border-color: #BA1A1A;
            box-shadow: 0 4px 12px rgba(186, 26, 26, 0.1);
        }

        .service-icon-wrapper {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 70px;
            height: 70px;
            background: #f8f8f8;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .service-icon {
            font-size: 2rem;
            color: #BA1A1A;
        }

        .service-card h3 {
            color: #1a1a1a;
            font-size: clamp(1.125rem, 2vw, 1.375rem);
            margin-bottom: 16px;
            font-weight: 600;
        }

        .service-card > p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.7;
            font-size: 0.9375rem;
        }

        /* Expandable Content - CRITICAL FIX */
        .expandable-content {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.4s ease, opacity 0.3s ease;
        }

        .service-card.expanded .expandable-content {
            max-height: 5000px;
            opacity: 1;
            margin-top: 20px;
        }

        .expand-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #BA1A1A;
            color: white;
            padding: 12px 24px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 0.9375rem;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            font-family: 'Inter', sans-serif;
        }

        .expand-button:hover {
            background: #9a1515;
        }

        .expand-button i {
            transition: transform 0.3s;
            font-size: 0.875rem;
        }

        .service-card.expanded .expand-button i {
            transform: rotate(180deg);
        }

        /* Service Images Grid */
        .service-images-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 16px;
            margin: 20px 0;
        }

        .service-image-item {
            text-align: center;
        }

        .service-image-item img {
            width: 100%;
            height: 140px;
            object-fit: contain;
            background: #f8f8f8;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #e5e5e5;
        }

        .service-image-item p {
            font-size: 0.8125rem;
            color: #666;
            margin-top: 8px;
            line-height: 1.4;
        }

        /* Photo Grid */
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
            margin: 20px 0;
        }

        .photo-item img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #e5e5e5;
        }

        .photo-item p {
            margin-top: 8px;
            font-size: 0.8125rem;
            color: #666;
            text-align: center;
        }

        /* Service Features List */
        .service-features {
            list-style: none;
            margin-top: 20px;
        }

        .service-features li {
            padding: 8px 0;
            color: #666;
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.9375rem;
            line-height: 1.6;
        }

        .service-features li i {
            color: #BA1A1A;
            font-size: 0.75rem;
            margin-top: 6px;
            flex-shrink: 0;
        }

        /* Numbered Photo Grid */
        .numbered-photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 16px;
            margin: 24px 0;
        }

        .numbered-photo-wrapper {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e5e5e5;
        }

        .numbered-photo-wrapper img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }

        .photo-number {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #BA1A1A;
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .numbered-photo-item p {
            margin-top: 8px;
            font-size: 0.8125rem;
            color: #666;
            text-align: center;
        }

        /* Process Section */
        .process-section {
            background: white;
            border-radius: 8px;
            padding: 50px 40px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border: 1px solid #e5e5e5;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-top: 30px;
        }

        .process-step {
            text-align: center;
        }

        .step-number {
            width: 70px;
            height: 70px;
            background: #BA1A1A;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0 auto 16px;
        }

        .process-step h4 {
            color: #1a1a1a;
            margin-bottom: 8px;
            font-size: 1rem;
            font-weight: 600;
        }

        .process-step p {
            color: #666;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        /* Capabilities Grid */
        .capabilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .capability-item {
            background: white;
            padding: 30px 25px;
            border-radius: 8px;
            border: 1px solid #e5e5e5;
            transition: all 0.2s ease;
        }

        .capability-item:hover {
            border-color: #BA1A1A;
            box-shadow: 0 4px 12px rgba(186, 26, 26, 0.1);
        }

        .capability-item h4 {
            color: #BA1A1A;
            margin-bottom: 12px;
            font-size: 1.0625rem;
            font-weight: 600;
        }

        .capability-item p {
            color: #666;
            font-size: 0.9375rem;
            line-height: 1.7;
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

        /* Responsive */
        @media (max-width: 1024px) {
            .main-services {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .services-hero {
                padding: 120px 0 60px;
            }

            .section {
                padding: 60px 0;
            }

            .main-services {
                grid-template-columns: 1fr;
            }

            .service-card {
                padding: 30px 25px;
            }

            .process-section {
                padding: 40px 30px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }

            .services-hero {
                padding: 100px 0 50px;
            }

            .hero-content {
                padding: 0 1rem;
            }

            .service-card {
                padding: 25px 20px;
            }

            .service-icon-wrapper {
                width: 60px;
                height: 60px;
            }

            .service-icon {
                font-size: 1.75rem;
            }

            .process-section {
                padding: 30px 20px;
            }

            .step-number {
                width: 60px;
                height: 60px;
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="services-hero">
        <div class="hero-content">
            <h1>LAYANAN KAMI</h1>
            <p class="subtitle">Precision machining dan repair facilities dengan akurasi hingga 0.0002" untuk energy sectors equipment dan pipe threading</p>
        </div>
    </section>

    <!-- Main Services -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title">Layanan Utama</h2>
                <p class="section-subtitle">Kapabilitas mencakup perancangan produk, manufaktur, dan layanan untuk perusahaan minyak & gas</p>
            </div>
            
            <div class="main-services">
                <!-- Custom Fabrication -->
                <div class="service-card fade-in">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-cogs service-icon"></i>
                    </div>
                    <h3>Custom Fabrication</h3>
                    <p>Kami menyediakan solusi fabrikasi untuk kebutuhan mendesak pelanggan yang memiliki gambar teknis atau part tanpa dokumentasi.</p>
                    
                    <button class="expand-button">
                        <span>Lihat Detail</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="expandable-content">
                        <p>Tim engineering kami melakukan reverse engineering dan re-drawing untuk kemudian memproduksi komponen secara in-house dengan cepat.</p>
                        
                        <div class="service-images-grid">
                            <div class="service-image-item">
                                <img src="assets/LayananKami/fabrikasi1.png" alt="Thrust ESP Pump Discharge">
                                <p>Thrust ESP Pump Discharge</p>
                            </div>
                            <div class="service-image-item">
                                <img src="assets/LayananKami/fabrikasi2.png" alt="Custom Wellhead Adapter">
                                <p>Custom Wellhead Adapter</p>
                            </div>
                            <div class="service-image-item">
                                <img src="assets/LayananKami/fabrikasi3.png" alt="Kelly Valve">
                                <p>Kelly Valve</p>
                            </div>
                            <div class="service-image-item">
                                <img src="assets/LayananKami/fabrikasi4.png" alt="Special Flange Adapter">
                                <p>Special Flange Adapter</p>
                            </div>
                        </div>
                        
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Custom part manufacturing dari gambar teknis</li>
                            <li><i class="fas fa-check"></i> Reverse engineering & re-drawing services</li>
                            <li><i class="fas fa-check"></i> In-house machining capabilities</li>
                            <li><i class="fas fa-check"></i> Urgent parts production</li>
                            <li><i class="fas fa-check"></i> ESP pump components</li>
                            <li><i class="fas fa-check"></i> Wellhead adapters & special flanges</li>
                            <li><i class="fas fa-check"></i> Kelly valves & custom assemblies</li>
                        </ul>
                    </div>
                </div>

                <!-- Welding & Fabrication -->
                <div class="service-card fade-in">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-fire service-icon"></i>
                    </div>
                    <h3>Welding & Inconel Overlay</h3>
                    <p>Layanan pengelasan dan overlay sesuai standar metallurgical untuk mild steel dan exotic materials.</p>
                    
                    <button class="expand-button">
                        <span>Lihat Detail</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="expandable-content">
                        <p>Proses pengelasan mengikuti WPS dan PQR yang telah teruji dengan welder dan inspector bersertifikat.</p>
                        
                        <div class="photo-grid">
                            <div class="photo-item">
                                <img src="assets/LayananKami/welding4.png" alt="Client's Onsite Welder">
                                <p>Client's Onsite Welder Hire</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/welding2.png" alt="High Pressure Welded Cross">
                                <p>High Pressure Welded Cross Flange</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/welding3.png" alt="Inconnel Overlay">
                                <p>Inconel Overlay Body & Ring Groove</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/welding5.png" alt="Custom Skid Welding">
                                <p>Custom Skid Welding & Fabrication</p>
                            </div>
                        </div>
                        
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Welding process: SMAW, GMAW, dan GTAW</li>
                            <li><i class="fas fa-check"></i> High pressure welded cross flange</li>
                            <li><i class="fas fa-check"></i> Custom skid welding & fabrication</li>
                            <li><i class="fas fa-check"></i> Onsite welder hire (rig, platform, structural maintenance)</li>
                            <li><i class="fas fa-check"></i> Inconel overlay (body & ring groove)</li>
                            <li><i class="fas fa-check"></i> Certified welder & inspector</li>
                            <li><i class="fas fa-check"></i> Overlay welding & re-machine services</li>
                        </ul>
                    </div>
                </div>

                <!-- General Repair -->
                <div class="service-card fade-in">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-tools service-icon"></i>
                    </div>
                    <h3>General Repair</h3>
                    <p>Layanan repair yang terintegrasi dengan dukungan in-house inspection, fabrikasi replacement parts, NDT, dan pressure testing hingga 30,000 PSI.</p>
                    
                    <button class="expand-button">
                        <span>Lihat Detail</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="expandable-content">
                        <p>Pendekatan one-stop solution ini mempercepat proses repair dengan kualitas yang terjamin.</p>
                        
                        <div class="photo-grid" style="grid-template-columns: repeat(2, 1fr);">
                            <div class="photo-item">
                                <img src="assets/LayananKami/repair1.png" alt="Mud Pump Repair">
                                <p>Repairing Mud Pump Crank Shaft</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/repair2.png" alt="Inspection & Welding">
                                <p>Inspection, Welding & Re-machined</p>
                            </div>
                        </div>
                        
                        <p style="margin-top: 20px; margin-bottom: 12px; font-weight: 600; color: #1a1a1a;">Tahapan proses repair meliputi:</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Inspection, diagnostic, troubleshooting</li>
                            <li><i class="fas fa-check"></i> Parts and labor for repair</li>
                            <li><i class="fas fa-check"></i> Parts and labor for preventive maintenance</li>
                            <li><i class="fas fa-check"></i> Testing & calibration</li>
                            <li><i class="fas fa-check"></i> Reports, Certificate of Conformance, repair warranty</li>
                        </ul>
                    </div>
                </div>

                <!-- Valve & Wellhead Repair -->
                <div class="service-card fade-in">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-cog service-icon"></i>
                    </div>
                    <h3>Valve & Wellhead Repair</h3>
                    <p>Layanan repair dan manufaktur komponen wellhead dengan kemampuan produksi replacement parts untuk komponen yang sudah tidak diproduksi.</p>
                    
                    <button class="expand-button">
                        <span>Lihat Detail</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="expandable-content">
                        <p>Dilengkapi dengan overlay services menggunakan material khusus seperti Inconel.</p>
                        
                        <h4 style="color: #1a1a1a; font-size: 1rem; margin: 24px 0 16px; text-align: center; font-weight: 600;">Dokumentasi Proses Repair</h4>
                        
                        <div class="numbered-photo-grid">
                            <div class="numbered-photo-item">
                                <div class="numbered-photo-wrapper">
                                    <div class="photo-number">1</div>
                                    <img src="assets/LayananKami/valve1.png" alt="Plug Valve Failed">
                                </div>
                                <p>Failed Function Test</p>
                            </div>
                            <div class="numbered-photo-item">
                                <div class="numbered-photo-wrapper">
                                    <div class="photo-number">2</div>
                                    <img src="assets/LayananKami/valve2.png" alt="Disassembled">
                                </div>
                                <p>Disassembly & Analysis</p>
                            </div>
                            <div class="numbered-photo-item">
                                <div class="numbered-photo-wrapper">
                                    <div class="photo-number">3</div>
                                    <img src="assets/LayananKami/valve3.png" alt="Inspection">
                                </div>
                                <p>Problem Identification</p>
                            </div>
                            <div class="numbered-photo-item">
                                <div class="numbered-photo-wrapper">
                                    <div class="photo-number">4</div>
                                    <img src="assets/LayananKami/valve4.png" alt="Overlay & Machining">
                                </div>
                                <p>Overlay & Re-machining</p>
                            </div>
                            <div class="numbered-photo-item">
                                <div class="numbered-photo-wrapper">
                                    <div class="photo-number">5</div>
                                    <img src="assets/LayananKami/valve5.png" alt="Ready Delivery">
                                </div>
                                <p>Quality Check & Delivery</p>
                            </div>
                        </div>
                        
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Manufacturing & repair wellhead component</li>
                            <li><i class="fas fa-check"></i> Replacement parts untuk komponen obsolete</li>
                            <li><i class="fas fa-check"></i> Overlay services (Inconel & specialty materials)</li>
                            <li><i class="fas fa-check"></i> Comprehensive testing & quality assurance</li>
                            <li><i class="fas fa-check"></i> Fast turnaround time</li>
                        </ul>
                    </div>
                </div>

                <!-- Wellhead Installation -->
                <div class="service-card fade-in">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-hard-hat service-icon"></i>
                    </div>
                    <h3>Wellhead Installation</h3>
                    <p>Layanan instalasi wellhead di lokasi pelanggan (onshore & offshore) dengan tim field service engineer berpengalaman.</p>
                    
                    <button class="expand-button">
                        <span>Lihat Detail</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="expandable-content">
                        <div class="photo-grid">
                            <div class="photo-item">
                                <img src="assets/LayananKami/install1.png" alt="Wellhead Component">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install2.png" alt="Installation Process">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install3.png" alt="Onsite Installation">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install4.png" alt="Platform Installation">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install5.png" alt="Wellhead Assembly">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install6.png" alt="Field Service">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install7.png" alt="Team Installation">
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/install8.png" alt="Completed Installation">
                            </div>
                        </div>
                        
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Onsite wellhead installation (onshore & offshore)</li>
                            <li><i class="fas fa-check"></i> Experienced field service engineers</li>
                            <li><i class="fas fa-check"></i> Complete installation services</li>
                            <li><i class="fas fa-check"></i> Safety & quality compliance</li>
                        </ul>
                    </div>
                </div>

                <!-- Tubular Inspection -->
                <div class="service-card fade-in">
                    <div class="service-icon-wrapper">
                        <i class="fas fa-search service-icon"></i>
                    </div>
                    <h3>Tubular Inspection, Repair & Rethread</h3>
                    <p style="font-weight: 600; color: #BA1A1A;">Solusi cost-effective untuk kebutuhan tubular pelanggan.</p>
                    
                    <button class="expand-button">
                        <span>Lihat Detail</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>

                    <div class="expandable-content">
                        <p>Kami menerima used tubulars untuk dilakukan inspeksi, pemotongan, dan rethreading. Setelah melewati quality control, tubular akan dilapisi ulang dan siap dikirim sebagai refurbished tubular berkualitas setara baru.</p>
                        
                        <div class="photo-grid">
                            <div class="photo-item">
                                <img src="assets/LayananKami/tubular1.png" alt="Used Tubulars">
                                <p>Revolutek takes used tubulars for inspection</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/tubular2.png" alt="Cut & Rethread">
                                <p>Revolutek cut & rethread</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/tubular3.png" alt="Thread Type">
                                <p>API 5CT, Tenaris Premium Connection</p>
                            </div>
                            <div class="photo-item">
                                <img src="assets/LayananKami/tubular4.png" alt="Refurbished Tubular">
                                <p>Quality Control & Recoating</p>
                            </div>
                        </div>
                        
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Tubular inspection services</li>
                            <li><i class="fas fa-check"></i> Cut & rethread solutions</li>
                            <li><i class="fas fa-check"></i> API 5CT & Tenaris Premium Connection</li>
                            <li><i class="fas fa-check"></i> Custom thread according to customer needs</li>
                            <li><i class="fas fa-check"></i> Complete quality control process</li>
                            <li><i class="fas fa-check"></i> Recoating & refurbishment services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coupling Manufacturing Process -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title">Coupling Fabrication</h2>
                <p class="section-subtitle">Produksi internal lengkap dari bahan baku hingga produk jadi</p>
            </div>
            
            <div class="process-section fade-in">
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h4>RAW MATERIAL</h4>
                        <p>FOR COUPLING</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h4>SEMI FINISHED</h4>
                        <p>(THREADED & PHOSPHATED)</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h4>FINISHED COUPLING</h4>
                        <p>QC TESTED, CERTIFIED, MATERIAL TREATED, COATED & MARKED</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Capabilities -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title">Key Capabilities</h2>
                <p class="section-subtitle">One-stop solution dengan dukungan sertifikasi internasional dan tim berpengalaman</p>
            </div>
            
            <div class="capabilities-grid">
                <div class="capability-item fade-in">
                    <h4>12 Layanan Pendukung</h4>
                    <p>Repair, Maintenance, Welding, Surface Treatment, Calibration, Pressure Testing, NDT, Inspection, Mechanical Facility Construction, Onsite Installation, Engineering Design</p>
                </div>
                <div class="capability-item fade-in">
                    <h4>Standar Internasional</h4>
                    <p>API 7-1-1150, API 5B-0217, API 6A-1589, TenarisHydrill (Premium Connection), & API Spec Q1 10th Edition</p>
                </div>
                <div class="capability-item fade-in">
                    <h4>Klien Berpengalaman</h4>
                    <p>Schlumberger, Halliburton, Baker Hughes, Weatherford, Apexindo, Solar Alert, dan berbagai oil & gas companies</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // EXPAND/COLLAPSE SERVICE CARDS - FIXED VERSION
            const expandButtons = document.querySelectorAll('.expand-button');
            
            expandButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const card = this.closest('.service-card');
                    const isExpanded = card.classList.contains('expanded');
                    const buttonText = this.querySelector('span');
                    
                    // Close all other cards
                    document.querySelectorAll('.service-card.expanded').forEach(openCard => {
                        if (openCard !== card) {
                            openCard.classList.remove('expanded');
                            const otherButtonText = openCard.querySelector('.expand-button span');
                            if (otherButtonText) {
                                otherButtonText.textContent = 'Lihat Detail';
                            }
                        }
                    });
                    
                    // Toggle current card
                    if (isExpanded) {
                        card.classList.remove('expanded');
                        buttonText.textContent = 'Lihat Detail';
                    } else {
                        card.classList.add('expanded');
                        buttonText.textContent = 'Tutup Detail';
                        
                        // Smooth scroll to card
                        setTimeout(() => {
                            const cardTop = card.getBoundingClientRect().top + window.pageYOffset - 100;
                            window.scrollTo({
                                top: cardTop,
                                behavior: 'smooth'
                            });
                        }, 300);
                    }
                });
            });

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

            console.log('Total expand buttons found:', expandButtons.length);
        });
    </script>

    <?php include 'includes/footer.php'; ?>

</body>
</html>