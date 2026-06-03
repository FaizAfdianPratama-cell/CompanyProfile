<?php
$current_year = date('Y');
$current_page = basename($_SERVER['PHP_SELF']);
?>
<footer class="footer">
    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="footer-container">
            <!-- Company Section -->
            <div class="footer-col footer-company">
                <img src="assets/rdmlogo.png" alt="RDM Logo" class="footer-logo">
                <p class="company-name">PT Revolutek Dananjaya Mandiri</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h3 class="footer-title">TAUTAN CEPAT</h3>
                <ul class="footer-links">
                    <li><a href="beranda.php" class="<?php echo ($current_page == 'beranda.php') ? 'active' : ''; ?>">Beranda</a></li>
                    <li><a href="tentang-kami.php" class="<?php echo ($current_page == 'tentang-kami.php') ? 'active' : ''; ?>">Tentang Kami</a></li>
                    <li><a href="layanan.php" class="<?php echo ($current_page == 'layanan.php') ? 'active' : ''; ?>">Layanan</a></li>
                    <li><a href="produk.php" class="<?php echo ($current_page == 'produk.php') ? 'active' : ''; ?>">Produk</a></li>
                    <li><a href="karir.php" class="<?php echo ($current_page == 'karir.php') ? 'active' : ''; ?>">Karir</a></li>
                    <li><a href="kontak.php" class="<?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>">Kontak</a></li>
                </ul>
            </div>

            <!-- Office Locations -->
            <div class="footer-col">
                <h3 class="footer-title">Lokasi Kantor</h3>
                <div class="location-item">
                    <p class="location-label">Kantor Pusat</p>
                    <p class="location-address">Gedung Cibis Nine Lt. 11, #W27<br>
                    Jl. TB. Simatupang No. 2<br>
                    Jakarta Selatan 12560</p>
                </div>
                <div class="location-item">
                    <p class="location-label">Workshop</p>
                    <p class="location-address">Jl. Raya Cikarang - Cibarusah No. 18<br>
                    Sindang Mulya, Cibarusah<br>
                    Bekasi 17340</p>
                    <p class="location-address">Jl. Mulawarman No.49, Manggar<br>
                    Balikpapan 76116<br>
                    </p>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="footer-col">
                <h3 class="footer-title">Hubungi Kami</h3>
                <ul class="contact-list">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <div class="contact-detail">
                            <span>021-89901570</span>
                            <span>021-38820176</span>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <span>+62 852-1980-1733</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:recruitment.rdm.met@gmail.com">recruitment.rdm.met@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-container">
            <div class="footer-bottom-content">
                <p class="copyright">&copy; <?php echo $current_year; ?> PT Revolutek Dananjaya Mandiri. All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <span class="separator">|</span>
                    <a href="kebijakan-privasi.php">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Running Text Ticker -->
    <div class="footer-ticker">
        <div class="ticker-content">
            <span class="ticker-text">HOME OF SOLUTION MAKER</span>
            <span class="ticker-separator"></span>
            <span class="ticker-text">HOME OF SOLUTION MAKER</span>
            <span class="ticker-separator"></span>
            <span class="ticker-text">HOME OF SOLUTION MAKER</span>
            <span class="ticker-separator"></span>
            <span class="ticker-text">HOME OF SOLUTION MAKER</span>
            <span class="ticker-separator"></span>
            <span class="ticker-text">HOME OF SOLUTION MAKER</span>
            <span class="ticker-separator"></span>
            <span class="ticker-text">HOME OF SOLUTION MAKER</span>
            <span class="ticker-separator"></span>
        </div>
    </div>
</footer>

<style>
    /* Base Footer Styles */
    .footer {
        background: #BA1A1A;
        color: #ffffff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    .footer-main {
        padding: 40px 0 40px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .footer-main .footer-container {
        display: grid;
        grid-template-columns: 1.3fr 0.9fr 1.1fr 1fr;
        gap: 50px;
    }

    /* Company Section */
    .footer-company {
        padding-right: 20px;
    }

    .footer-logo {
        width: 180px;
        height: auto;
        margin-bottom: 20px;
        filter: brightness(0) invert(1);
        display: block;
    }

    .company-name {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 8px;
        line-height: 1.4;
    }

    .company-tagline {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 25px;
        font-weight: 400;
        letter-spacing: 0.3px;
    }

    /* Footer Column Titles */
    .footer-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 22px;
        color: #ffffff;
        letter-spacing: 0.3px;
        text-transform: uppercase;
        font-size: 0.875rem;
    }

    /* Footer Links */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 0.9375rem;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
    }

    .footer-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        bottom: -2px;
        left: 0;
        background-color: #ffffff;
        transition: width 0.3s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
        padding-left: 5px;
    }

    .footer-links a:hover::after {
        width: 100%;
    }

    .footer-links a.active {
        color: #ffffff;
        font-weight: 600;
    }

    /* Location Styles */
    .location-item {
        margin-bottom: 25px;
    }

    .location-item:last-child {
        margin-bottom: 0;
    }

    .location-label {
        font-weight: 600;
        font-size: 0.9375rem;
        margin-bottom: 8px;
        color: #ffffff;
    }

    .location-address {
        font-size: 0.875rem;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
    }

    /* Contact List */
    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 18px;
        font-size: 0.9375rem;
    }

    .contact-list li:last-child {
        margin-bottom: 0;
    }

    .contact-list i {
        color: #ffffff;
        font-size: 1rem;
        width: 18px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .contact-detail {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .contact-detail span {
        color: rgba(255, 255, 255, 0.85);
    }

    .contact-list a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-list a:hover {
        color: #ffffff;
        text-decoration: underline;
    }

    /* Footer Bottom */
    .footer-bottom {
        padding: 18px 0;
        background: rgba(0, 0, 0, 0.15);
    }

    .footer-bottom-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .copyright {
        font-size: 0.875rem;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    .footer-bottom-links {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 0.875rem;
    }

    .footer-bottom-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-bottom-links a:hover {
        color: #ffffff;
        text-decoration: underline;
    }

    .footer-bottom-links .separator {
        color: rgba(255, 255, 255, 0.4);
    }

    /* Running Text Ticker */
    .footer-ticker {
        background: rgba(0, 0, 0, 0.25);
        overflow: hidden;
        white-space: nowrap;
        padding: 8px 0;
        position: relative;
    }

    .ticker-content {
        display: inline-block;
        animation: scroll-left 25s linear infinite;
        padding-left: 100%;
    }

    .ticker-text {
        font-size: 0.875rem;
        font-weight: 600;
        letter-spacing: 3px;
        color: #ffffff;
        text-transform: uppercase;
        display: inline-block;
    }

    .ticker-separator {
        color: rgba(255, 255, 255, 0.5);
        margin: 0 50px;
        font-size: 1.2rem;
        display: inline-block;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* Pause animation on hover */
    .footer-ticker:hover .ticker-content {
        animation-play-state: paused;
    }

    /* Tablet (1024px ke bawah) */
    @media (max-width: 1024px) {
        .footer-main .footer-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .footer-company {
            grid-column: span 2;
            text-align: center;
            padding-right: 0;
        }

        .footer-logo {
            margin-left: auto;
            margin-right: auto;
        }

        .footer-col {
            text-align: center;
        }

        .footer-links {
            text-align: center;
        }

        .footer-links a {
            display: block;
            padding: 0 !important;
        }

        .footer-links a::after {
            display: none;
        }

        .location-item {
            text-align: center;
        }

        .contact-list {
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-list li {
            justify-content: center;
        }
    }

    /* Mobile (768px ke bawah) */
    @media (max-width: 768px) {
        .footer-main {
            padding: 40px 0 30px;
        }

        .footer-container {
            padding: 0 25px;
        }

        .footer-main .footer-container {
            grid-template-columns: 1fr;
            gap: 35px;
        }

        .footer-company {
            grid-column: span 1;
            text-align: center;
            padding-right: 0;
        }

        .footer-logo {
            width: 160px;
            margin-left: auto;
            margin-right: auto;
        }

        .footer-col {
            text-align: center;
        }

        .footer-title {
            font-size: 0.8125rem;
            text-align: center;
        }

        .footer-links {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            display: inline-block;
        }

        .footer-links a::after {
            display: none;
        }

        .location-item {
            text-align: center;
            margin: 0 auto 25px;
        }

        .location-item:last-child {
            margin-bottom: 0;
        }

        .location-address {
            text-align: center;
        }

        .contact-list {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-list li {
            justify-content: center;
            margin-bottom: 18px;
        }

        .contact-list li:last-child {
            margin-bottom: 0;
        }

        .contact-detail {
            text-align: center;
        }

        .footer-bottom-content {
            flex-direction: column;
            text-align: center;
            gap: 12px;
        }

        .footer-bottom-links {
            flex-direction: row;
            justify-content: center;
        }
    }

    /* Small Mobile (480px ke bawah) */
    /* Small Mobile (480px ke bawah) */
    @media (max-width: 480px) {
        .footer-main {
            padding: 35px 0 25px;
        }

        .footer-container {
            padding: 0 20px;
        }

        .footer-logo {
            width: 140px;
            margin-left: auto;
            margin-right: auto;
        }

        .company-name {
            font-size: 0.95rem;
            text-align: center;
        }

        .company-tagline {
            font-size: 0.8rem;
            text-align: center;
        }

        .footer-col {
            text-align: center;
        }

        .footer-title {
            font-size: 0.8125rem;
            margin-bottom: 18px;
            text-align: center;
        }

        .contact-list {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Footer Links - 2 kolom untuk mobile */
        .footer-links {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px 20px;
            max-width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-links li {
            margin-bottom: 0;
        }

        .footer-links a {
            display: inline-block;
            font-size: 0.875rem;
        }

        .location-address,
        .contact-list li {
            font-size: 0.875rem;
        }

        .location-item {
            text-align: center;
            margin: 0 auto 20px;
        }

        .location-item:last-child {
            margin-bottom: 0;
        }

        .location-label {
            text-align: center;
            font-size: 0.9rem;
        }

        .location-address {
            text-align: center;
        }

        /* Contact List - Layout khusus untuk mobile */
        .contact-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            max-width: 350px;
            margin: 0 auto;
        }

        .contact-list li:nth-child(1),
        .contact-list li:nth-child(2) {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .contact-list li:nth-child(3) {
            grid-column: span 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            margin-bottom: 0;
        }

        .contact-list li {
            margin-bottom: 0;
        }

        .contact-list i {
            margin-top: 0;
        }

        .contact-detail {
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .footer-bottom {
            padding: 20px 0;
        }

        .footer-bottom-content {
            flex-direction: column;
            text-align: center;
            gap: 12px;
        }

        .copyright,
        .footer-bottom-links {
            font-size: 0.8125rem;
            text-align: center;
        }

        .footer-bottom-links {
            flex-direction: row;
            justify-content: center;
            gap: 10px;
        }

        .footer-bottom-links .separator {
            display: inline;
        }

        .ticker-text {
            font-size: 0.75rem;
            letter-spacing: 2px;
        }

        .ticker-separator {
            margin: 0 30px;
        }
    }
</style>