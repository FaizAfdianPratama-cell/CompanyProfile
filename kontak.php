<?php
// Include security headers
require_once 'includes/security-headers.php';

// Handle form submission
$form_message = '';
$form_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF token
    if (!verify_csrf_token($_POST['csrf_token'] ?? '')) {
        $form_message = 'Invalid security token. Please try again.';
        $form_type = 'error';
    } else {
        // Rate limiting check
        $client_ip = get_client_ip();
        if (!check_rate_limit($client_ip, 5, 300)) { // 5 requests per 5 minutes
            $form_message = 'Too many requests. Please try again in 5 minutes.';
            $form_type = 'error';
        } else {
            // Sanitize and validate inputs
            $nama = sanitize_input($_POST['nama'] ?? '');
            $email = sanitize_input($_POST['email'] ?? '');
            $telepon = sanitize_input($_POST['telepon'] ?? '');
            $perusahaan = sanitize_input($_POST['perusahaan'] ?? '');
            $pesan = sanitize_input($_POST['pesan'] ?? '');
            
            $errors = [];
            
            // Validation
            if (empty($nama) || strlen($nama) < 3) {
                $errors[] = 'Nama harus diisi minimal 3 karakter';
            }
            
            if (empty($email) || !validate_email($email)) {
                $errors[] = 'Email tidak valid';
            }
            
            if (empty($telepon) || strlen($telepon) < 10) {
                $errors[] = 'Nomor telepon tidak valid';
            }
            
            if (empty($pesan) || strlen($pesan) < 10) {
                $errors[] = 'Pesan harus diisi minimal 10 karakter';
            }
            
            if (empty($errors)) {
                // Proses pengiriman email (atau simpan ke database)
                // Contoh pengiriman email:
                
                $to = 'recruitment.rdm.met@gmail.com';
                $subject = 'Pesan Baru dari Website Revolutek - ' . $nama;
                
                $email_body = "Pesan baru dari website Revolutek:\n\n";
                $email_body .= "Nama: " . $nama . "\n";
                $email_body .= "Email: " . $email . "\n";
                $email_body .= "Telepon: " . $telepon . "\n";
                $email_body .= "Perusahaan: " . ($perusahaan ?: '-') . "\n\n";
                $email_body .= "Pesan:\n" . $pesan . "\n\n";
                $email_body .= "---\n";
                $email_body .= "IP Address: " . $client_ip . "\n";
                $email_body .= "Waktu: " . date('Y-m-d H:i:s') . "\n";
                
                $headers = "From: noreply@revolutek.com\r\n";
                $headers .= "Reply-To: " . $email . "\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                
                // Uncomment untuk mengirim email
                // if (mail($to, $subject, $email_body, $headers)) {
                //     $form_message = 'Terima kasih! Pesan Anda telah berhasil terkirim.';
                //     $form_type = 'success';
                // } else {
                //     $form_message = 'Maaf, terjadi kesalahan. Silakan coba lagi.';
                //     $form_type = 'error';
                // }
                
                // Untuk testing (hapus saat production):
                $form_message = 'Terima kasih! Pesan Anda telah berhasil terkirim.';
                $form_type = 'success';
                
            } else {
                $form_message = implode('<br>', $errors);
                $form_type = 'error';
            }
        }
    }
}

// Generate CSRF token for form
$csrf_token = generate_csrf_token();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - PT. Revolutek Dananjaya Mandiri</title>
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

        /* Alert Messages */
        .alert {
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 0.9375rem;
        }

        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert-error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        /* Hero Section */
        .contact-hero {
            background: #BA1A1A;
            color: white;
            padding: 100px 0 60px;
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
            margin-bottom: 1.5rem;
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

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #1a1a1a;
            margin-bottom: 12px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1rem;
            color: #666;
            margin-bottom: 60px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        /* Info Cards */
        .info-card {
            background: white;
            padding: 35px 30px;
            border-radius: 8px;
            border: 1px solid #e5e5e5;
            transition: all 0.2s ease;
        }

        .info-card:hover {
            border-color: #BA1A1A;
            box-shadow: 0 4px 12px rgba(186, 26, 26, 0.1);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: #f8f8f8;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .card-icon i {
            font-size: 1.75rem;
            color: #BA1A1A;
        }

        .info-card h3 {
            font-size: 1.375rem;
            margin-bottom: 16px;
            color: #1a1a1a;
            font-weight: 600;
        }

        .info-card p {
            color: #666;
            line-height: 1.7;
            margin-bottom: 12px;
            font-size: 0.9375rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            padding: 12px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-item i {
            width: 32px;
            height: 32px;
            background: #f8f8f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 0.875rem;
            color: #BA1A1A;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .contact-details {
            flex: 1;
        }

        .contact-label {
            font-size: 0.8125rem;
            color: #999;
            display: block;
            margin-bottom: 4px;
        }

        .contact-value {
            font-weight: 500;
            color: #333;
            font-size: 0.9375rem;
            display: block;
        }

        /* Appointment Section */
        .appointment-section {
            margin: 60px 0;
        }

        .appointment-card {
            background: #BA1A1A;
            border-radius: 8px;
            padding: 50px 40px;
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 40px;
            align-items: center;
        }

        .appointment-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .appointment-icon i {
            font-size: 2.5rem;
            color: white;
        }

        .appointment-content {
            color: white;
        }

        .appointment-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: white;
        }

        .appointment-content > p {
            font-size: 0.9375rem;
            opacity: 0.95;
            line-height: 1.7;
            margin-bottom: 16px;
        }

        .appointment-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .appointment-features li {
            display: flex;
            align-items: center;
            margin: 8px 0;
            font-size: 0.875rem;
            opacity: 0.9;
        }

        .appointment-features li i {
            margin-right: 10px;
            font-size: 0.875rem;
            color: #4ade80;
        }

        .appointment-action {
            text-align: center;
        }

        .appointment-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: white;
            color: #BA1A1A;
            padding: 16px 32px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9375rem;
            text-decoration: none;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .appointment-btn:hover {
            background: #f8f8f8;
        }

        .appointment-btn i {
            font-size: 0.9375rem;
        }

        .appointment-note {
            margin-top: 12px;
            font-size: 0.8125rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Message Form */
        .form-container {
            background: white;
            padding: 50px 40px;
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            max-width: 1400px;
            margin: 0 auto;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header h3 {
            font-size: 1.75rem;
            color: #1a1a1a;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-header p {
            color: #666;
            font-size: 0.9375rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
            font-size: 0.9375rem;
        }

        .form-group label i {
            margin-right: 6px;
            color: #BA1A1A;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            font-size: 0.9375rem;
            font-family: 'Inter', sans-serif;
            background: #f8f8f8;
            color: #333;
            transition: all 0.2s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #BA1A1A;
            background: white;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: #BA1A1A;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'Inter', sans-serif;
        }

        .submit-btn:hover {
            background: #9a1515;
        }

        .submit-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .submit-btn i {
            margin-left: 8px;
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

        .section-title,
        .section-subtitle {
            opacity: 0;
        }

        .section-title.visible,
        .section-subtitle.visible {
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

        /* Responsive */
        @media (max-width: 1024px) {
            .contact-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }

            .appointment-card {
                grid-template-columns: 1fr;
                gap: 30px;
                text-align: center;
            }

            .appointment-icon {
                margin: 0 auto;
            }

            .appointment-features li {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .contact-hero {
                padding: 120px 0 60px;
            }

            .contact-section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .section-subtitle {
                margin-bottom: 50px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .info-card {
                padding: 30px 25px;
            }

            .form-container {
                padding: 40px 30px;
            }

            .appointment-card {
                padding: 40px 30px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .contact-hero {
                padding: 100px 0 50px;
            }

            .hero-content {
                padding: 0 1rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .contact-section {
                padding: 40px 0;
            }

            .info-card {
                padding: 25px 20px;
            }

            .info-card h3 {
                font-size: 1.125rem;
            }

            .form-container {
                padding: 30px 20px;
            }

            .form-header h3 {
                font-size: 1.375rem;
            }

            .form-group input,
            .form-group textarea {
                padding: 12px 14px;
            }

            .submit-btn {
                padding: 14px;
            }

            .appointment-card {
                padding: 30px 20px;
            }

            .appointment-icon {
                width: 70px;
                height: 70px;
            }

            .appointment-icon i {
                font-size: 2rem;
            }

            .appointment-content h3 {
                font-size: 1.25rem;
            }

            .appointment-btn {
                padding: 14px 24px;
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body>
    
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>HUBUNGI KAMI</h1>
            <p class="subtitle">Kami siap membantu Anda dengan layanan machine shop, repair facilities, dan solusi engineering berkualitas tinggi untuk sektor energi dengan standar internasional.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title fade-in">Informasi Kontak</h2>
            <p class="section-subtitle fade-in">Temukan kami di berbagai lokasi untuk melayani kebutuhan Anda dengan lebih baik</p>
            
            <div class="contact-grid">
                <!-- Workshop Card -->
                <div class="info-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Workshop</h3>
                    <p><i class="fas fa-map-marker-alt" style="color: #BA1A1A; margin-right: 8px;"></i>Jl. Raya Cikarang - Cibarusah, No 18, Sindang Mulya, Cibarusah - 17340, Bekasi</p>
                    <p style="margin-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: #BA1A1A; margin-right: 8px;"></i>Jl. Mulawarman No.49, Manggar - Balikpapan 76116</p>
                </div>

                <!-- Office Card -->
                <div class="info-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Kantor Pusat</h3>
                    <p><i class="fas fa-map-marker-alt" style="color: #BA1A1A; margin-right: 8px;"></i>Gedung Cibis Nine, Lt. 11, #W27, Cilandak KKO Komplek, Jl. TB. Simatupang No. 2, Jakarta Selatan 12560</p>
                </div>

                <!-- Contact Info Card -->
                <div class="info-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <h3>Informasi Kontak</h3>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div class="contact-details">
                            <span class="contact-label">Telepon</span>
                            <span class="contact-value">021-38820176</span>
                            <span class="contact-value">021-89901670</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-user-tie"></i>
                        <div class="contact-details">
                            <span class="contact-label">Admin HRGA</span>
                            <span class="contact-value">+62 852-1980-1733</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-details">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">recruitment.rdm.met@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Appointment Section -->
            <div class="appointment-section fade-in">
                <div class="appointment-card">
                    <div class="appointment-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="appointment-content">
                        <h3>Buat Janji Temu dengan Tim Kami</h3>
                        <p>Perlu konsultasi langsung atau kunjungan ke workshop kami? Jadwalkan pertemuan Anda melalui sistem booking online kami yang praktis dan efisien.</p>
                    </div>
                    <div class="appointment-action">
                        <a href="http://localhost/SiPosKam-WebRevolutek/" target="_blank" class="appointment-btn">
                            <span>Buat Janji Sekarang</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Message Form -->
            <div class="form-container fade-in">
                <div class="form-header">
                    <h3>Kirim Pesan Kepada Kami</h3>
                    <p>Isi formulir di bawah ini dan tim kami akan segera menghubungi Anda</p>
                </div>
                
                <?php if ($form_message): ?>
                    <div class="alert alert-<?php echo $form_type; ?>">
                        <?php echo $form_message; ?>
                    </div>
                <?php endif; ?>
                
                <form id="contactForm" method="POST" action="">
                    <!-- CSRF Token -->
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nama"><i class="fas fa-user"></i>Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required maxlength="100">
                        </div>
                        
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i>Email</label>
                            <input type="email" id="email" name="email" placeholder="nama@example.com" required maxlength="100">
                        </div>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="telepon"><i class="fas fa-phone"></i>No. Telepon</label>
                            <input type="tel" id="telepon" name="telepon" placeholder="+62 xxx-xxxx-xxxx" required maxlength="20">
                        </div>

                        <div class="form-group">
                            <label for="perusahaan"><i class="fas fa-briefcase"></i>Perusahaan</label>
                            <input type="text" id="perusahaan" name="perusahaan" placeholder="Nama perusahaan (opsional)" maxlength="100">
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="pesan"><i class="fas fa-comment-dots"></i>Pesan / Kebutuhan</label>
                        <textarea id="pesan" name="pesan" placeholder="Ceritakan kepada kami bagaimana kami dapat membantu Anda..." required maxlength="1000"></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <span>Kirim Pesan</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <?php include 'includes/footer.php'; ?>

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

        // Form submission with client-side validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            submitBtn.disabled = true;
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
</body>
</html>