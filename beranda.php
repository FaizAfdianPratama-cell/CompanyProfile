<?php
// Include security headers
require_once 'includes/security-headers.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - PT. Revolutek Dananjaya Mandiri</title>
    
    <!-- Font sudah di-preconnect, tidak perlu preload -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #c41e3a;
            --primary-dark: #8b1538;
            --secondary: #1a1a2e;
            --text-primary: #1a1a1a;
            --text-secondary: #6b7280;
            --border-color: #e5e7eb;
            --bg-light: #f9fafb;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 140px 0 70px;
            position: relative;
            overflow: hidden;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/image1.jpeg') center/cover;
            opacity: 0.15;
            will-change: opacity;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: radial-gradient(circle at 70% 50%, rgba(0, 0, 0, 0.2) 0%, transparent 50%);
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            animation: fadeInUp 0.8s ease-out;
            max-width: 900px;
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

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            line-height: 1.15;
            letter-spacing: -2px;
        }

        .hero-content .subtitle {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            opacity: 0.92;
            line-height: 1.8;
            font-weight: 400;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 4rem;
            margin-bottom: 1rem;
            padding: 2rem 0;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
            position: relative;
            padding: 1rem 1.5rem;
            border-radius: 20px;
            transition: all 0.4s ease;
            min-width: 200px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            display: block;
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
        }

        .stat-label {
            font-size: 0.875rem;
            opacity: 0.9;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .certifications {
            background: linear-gradient(135deg, #7a7a7a 0%, #6a6a6a 100%);
            padding: 2rem 0;
            position: relative;
            overflow: hidden;
        }

        .certifications::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        }

        .cert-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
        }

        .cert-title {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ffffff;
            font-size: 1.8rem;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .cert-carousel-wrapper {
            position: relative;
            overflow: hidden;
            padding: 1rem 0;
        }

        .cert-logos {
            display: flex;
            gap: 1.5rem;
            width: max-content;
            animation: certScroll 25s linear infinite;
        }

        @media (hover: hover) and (pointer: fine) {
            .cert-carousel-wrapper:hover .cert-logos {
                animation-play-state: paused;
            }
        }

        .cert-logos.paused {
            animation-play-state: paused !important;
        }

        .cert-item {
            background: white;
            padding: 1.2rem 1.8rem;
            border-radius: 16px;
            font-weight: 600;
            color: #333;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            border: 2px solid transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80px;
            font-size: 0.95rem;
            position: relative;
            overflow: hidden;
            white-space: normal;
            line-height: 1.3;
            flex-shrink: 0;
            min-width: 260px;
            max-width: 300px;
            cursor: pointer;
            user-select: none;
        }

        .cert-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(196, 30, 58, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .cert-item:hover::before {
            left: 100%;
        }

        .cert-item:hover {
            transform: translateY(-8px) scale(1.05);
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            box-shadow: 0 12px 24px rgba(196, 30, 58, 0.3);
        }

        @keyframes certScroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-280px * 6 - 1.5rem * 6));
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            color: var(--text-primary);
            margin-bottom: 1rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Capabilities Section */
        .capabilities {
            background: var(--bg-light);
            padding: 100px 0;
        }

        .capabilities-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        .capability-item {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .capability-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .capability-item:hover {
            transform: translateY(-5px);
            border-color: transparent;
            border: 1px solid black;
        }

        .capability-item:hover::before {
            transform: scaleY(1);
        }

        .capability-item h4 {
            color: var(--text-primary);
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .capability-item h4 i {
            color: var(--primary);
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(196, 30, 58, 0.1);
            border-radius: 10px;
        }

        .capability-item p {
            color: var(--text-secondary);
            line-height: 1.6;
            padding-left: 48px;
        }

        /* Gallery Section */
        .gallery {
            padding: 100px 0;
            background: white;
            overflow: hidden;
        }

        .gallery-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .gallery-layout {
            display: grid;
            grid-template-columns: 380px 1fr;
            gap: 4rem;
            align-items: start;
        }

        .gallery-header-side {
            padding-right: 2rem;
            position: sticky;
            top: 120px;
        }

        .gallery-header-side h2 {
            font-size: 2.8rem;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -1px;
        }

        .gallery-header-side p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .gallery-scroll-wrapper {
            position: relative;
            overflow: hidden;
        }

        .gallery-masonry {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            padding: 1.5rem 0;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .gallery-masonry::-webkit-scrollbar {
            display: none;
        }
        
        .gallery-item {
            flex-shrink: 0;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            width: 320px;
        }

        .img-wrapper {
            position: relative;
            width: 100%;
            height: 320px;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Skeleton loader for images */
        .img-wrapper.loading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .gallery-item:nth-child(3n+1) .img-wrapper {
            height: 380px;
        }

        .gallery-item:nth-child(3n+2) .img-wrapper {
            height: 320px;
        }

        .gallery-item:nth-child(3n+3) .img-wrapper {
            height: 280px;
        }

        /* Clients Section */
        .clients {
            padding: 100px 0;
            background: var(--bg-light);
            overflow: hidden;
            position: relative;
        }

        .clients-carousel {
            display: flex;
            width: max-content;
            animation: scroll 30s linear infinite;
            gap: 2rem;
            padding: 0 1rem;
        }

        .client-card {
            padding: 2rem 2.5rem;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s ease;
            min-width: 220px;
            height: 120px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .client-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .client-card img {
            max-width: 100%;
            max-height: 60px;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .client-card:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        .client-card img[alt="HALLIBURTON"],
        .client-card img[alt="BAKERHUGHES"] {
            min-height: 170px;
            transform: scale(1.2);
        }

        .clients-container {
            position: relative;
            overflow: hidden;
            padding: 1rem 0;
        }

        .clients-container::before,
        .clients-container::after {
            content: '';
            position: absolute;
            top: 0;
            width: 120px;
            height: 100%;
            z-index: 2;
        }

        .clients-container::before {
            left: 0;
            background: linear-gradient(to right, var(--bg-light) 0%, transparent 100%);
        }

        .clients-container::after {
            right: 0;
            background: linear-gradient(to left, var(--bg-light) 0%, transparent 100%);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-200px * 6 - 2rem * 6));
            }
        }

        .clients-container:hover .clients-carousel {
            animation-play-state: paused;
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
        @media (max-width: 1200px) {
            .hero-container {
                padding: 0 1.5rem;
            }

            .container, .cert-container, .gallery-container {
                padding: 0 1.5rem;
            }

            .gallery-layout {
                grid-template-columns: 320px 1fr;
                gap: 3rem;
            }

            .gallery-header-side h2 {
                font-size: 2.4rem;
            }

            .gallery-item {
                width: 280px;
            }
        }

        @media (max-width: 1024px) {
            .hero-content h1 {
                font-size: 3.2rem;
            }

            .hero-stats {
                gap: 2rem;
            }

            .stat-number {
                font-size: 2.4rem;
            }

            .cert-title {
                font-size: 1.6rem;
            }

            .cert-item {
                min-width: 260px;
                padding: 1.1rem 2.2rem;
                font-size: 0.9rem;
            }

            @keyframes certScroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-260px * 6 - 1.5rem * 6));
                }
            }

            .capabilities-grid {
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
            }

            .capability-item {
                padding: 1.8rem;
            }

            .gallery-layout {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .gallery-header-side {
                position: static;
                padding-right: 0;
                text-align: center;
            }

            .gallery-item {
                width: 300px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 120px 0 60px;
                min-height: auto;
            }

            .hero-container {
                padding: 0 1.5rem;
            }

            .hero-content {
                text-align: center;
            }

            .hero-content h1 {
                font-size: 2.5rem;
                line-height: 1.2;
                margin-top: 1rem;
            }

            .hero-content .subtitle {
                font-size: 1rem;
                margin-bottom: 2rem;
            }

            .hero-stats {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 0.8rem;
                margin-bottom: 2rem;
                padding: 1.5rem 0;
                width: 100%;
            }

            .stat-item {
                text-align: center;
                min-width: auto;
                padding: 1rem 0.5rem;
            }

            .stat-number {
                font-size: 1.6rem;
                margin-bottom: 0.3rem;
            }

            .stat-label {
                font-size: 0.7rem;
                line-height: 1.3;
            }

            .certifications {
                padding: 1.5rem 0;
            }

            .cert-container {
                padding: 0 1rem;
            }

            .cert-title {
                font-size: 1.4rem;
                margin-bottom: 1.2rem;
            }

            .cert-item {
                min-width: 240px;
                padding: 1rem 2rem;
                font-size: 0.85rem;
                min-height: 70px;
            }

            .cert-logos {
                gap: 1.2rem;
            }

            @keyframes certScroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-240px * 6 - 1.2rem * 6));
                }
            }

            .capabilities, .gallery, .clients {
                padding: 60px 0;
            }

            .capabilities-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .capability-item {
                margin-bottom: 0;
                padding: 1.5rem;
            }

            .capability-item h4 {
                font-size: 1.05rem;
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }

            .capability-item h4 i {
                margin-bottom: 0.3rem;
            }

            .capability-item p {
                font-size: 0.9rem;
                padding-left: 0;
                text-align: center;
            }

            .section-title {
                font-size: 2rem;
            }

            .section-subtitle {
                font-size: 1rem;
            }

            .section-header {
                margin-bottom: 3rem;
            }

            .gallery-header-side h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .gallery-header-side p {
                font-size: 1rem;
            }

            .gallery-item {
                width: 260px;
            }

            .gallery-item:nth-child(3n+1) .img-wrapper {
                height: 320px;
            }

            .gallery-item:nth-child(3n+2) .img-wrapper {
                height: 280px;
            }

            .gallery-item:nth-child(3n+3) .img-wrapper {
                height: 240px;
            }

            .client-card {
                min-width: 180px;
                padding: 1.5rem 2rem;
            }
        }

        @media (max-width: 640px) {
            .hero {
                padding: 110px 0 50px;
            }

            .hero-content h1 {
                font-size: 2rem;
                margin-bottom: 1rem;
                letter-spacing: 1px;
                margin-top: 1.5rem;
            }

            .hero-content .subtitle {
                font-size: 0.95rem;
                line-height: 1.6;
            }

            .hero-stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.6rem;
                padding: 1rem 0;
            }

            .stat-item {
                padding: 0.8rem 0.4rem;
            }

            .stat-number {
                font-size: 1.4rem;
            }

            .stat-label {
                font-size: 0.65rem;
            }

            .cert-title {
                font-size: 1.2rem;
                margin-bottom: 1rem;
            }

            .cert-item {
                min-width: 220px;
                padding: 0.9rem 1.8rem;
                font-size: 0.8rem;
                min-height: 65px;
            }

            .cert-logos {
                gap: 1rem;
            }

            @keyframes certScroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-220px * 6 - 1rem * 6));
                }
            }

            .section-title {
                font-size: 1.75rem;
            }

            .section-subtitle {
                font-size: 0.95rem;
            }

            .capabilities-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .capability-item {
                margin-bottom: 1rem;
            }

            .capability-item h4 {
                font-size: 0.95rem;
            }

            .capability-item h4 i {
                font-size: 1.3rem;
                width: 36px;
                height: 36px;
            }

            .capability-item p {
                font-size: 0.85rem;
                line-height: 1.5;
            }

            .gallery {
                padding: 50px 0;
            }

            .gallery-container {
                padding: 0 1rem;
            }

            .gallery-header-side h2 {
                font-size: 1.75rem;
            }

            .gallery-header-side p {
                font-size: 0.95rem;
            }

            .gallery-item {
                width: 240px;
            }

            .gallery-masonry {
                gap: 1rem;
                padding: 1rem 0;
            }

            .client-card {
                min-width: 160px;
                padding: 1.2rem 1.8rem;
                height: 100px;
            }

            .client-card img {
                max-height: 50px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 100px 0 40px;
            }

            .hero-container {
                gap: 1.5rem;
                padding: 0 1rem;
            }

            .hero-content h1 {
                font-size: 1.75rem;
                letter-spacing: 1px;
                margin-top: 2rem;
            }

            .hero-content .subtitle {
                font-size: 0.9rem;
                margin-bottom: 1.5rem;
            }

            .hero-stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.5rem;
                padding: 1rem 0;
            }

            .stat-item {
                padding: 0.7rem 0.3rem;
            }

            .stat-number {
                font-size: 1.3rem;
            }

            .stat-label {
                font-size: 0.6rem;
            }

            .certifications {
                padding: 1.2rem 0;
            }

            .cert-title {
                font-size: 1rem;
                margin-bottom: 0.8rem;
            }

            .cert-item {
                min-width: 200px;
                padding: 0.8rem 1.5rem;
                font-size: 0.75rem;
                min-height: 60px;
            }

            .cert-logos {
                gap: 0.8rem;
            }

            @keyframes certScroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-200px * 6 - 0.8rem * 6));
                }
            }

            .capabilities, .gallery, .clients {
                padding: 50px 0;
            }

            .container, .gallery-container {
                padding: 0 1rem;
            }

            .section-header {
                margin-bottom: 2.5rem;
            }

            .section-title {
                font-size: 1.5rem;
                margin-bottom: 0.8rem;
            }

            .section-subtitle {
                font-size: 0.9rem;
            }

            .capabilities-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.7rem;
            }

            .capability-item {
                padding: 1rem 0.8rem;
            }

            .capability-item h4 {
                font-size: 0.9rem;
                gap: 0.4rem;
            }

            .capability-item h4 i {
                font-size: 1.2rem;
                width: 32px;
                height: 32px;
            }

            .capability-item p {
                font-size: 0.8rem;
                line-height: 1.4;
            }

            .gallery-header-side h2 {
                font-size: 1.5rem;
            }

            .gallery-item {
                width: 200px;
            }

            .gallery-item:nth-child(3n+1) .img-wrapper,
            .gallery-item:nth-child(3n+2) .img-wrapper,
            .gallery-item:nth-child(3n+3) .img-wrapper {
                height: 260px;
            }

            .client-card {
                min-width: 140px;
                padding: 1rem 1.5rem;
                height: 90px;
            }

            .client-card img {
                max-height: 45px;
            }

            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-140px * 6 - 2rem * 6));
                }
            }
        }

        @media (max-width: 375px) {
            .hero-content h1 {
                font-size: 1.6rem;
                margin-top: 2rem;
            }

            .hero-content .subtitle {
                font-size: 0.85rem;
            }

            .stat-number {
                font-size: 1.2rem;
            }

            .stat-label {
                font-size: 0.58rem;
            }

            .cert-item {
                font-size: 0.7rem;
                padding: 0.6rem 1rem;
                min-width: 130px;
                max-width: 180px;
            }

            .section-title {
                font-size: 1.4rem;
            }

            .capabilities-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.6rem;
            }

            .capability-item {
                padding: 0.9rem 0.7rem;
            }

            .capability-item h4 {
                font-size: 0.85rem;
            }

            .capability-item h4 i {
                width: 30px;
                height: 30px;
                font-size: 1.1rem;
            }

            .capability-item p {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-container" fade-in>
            <div class="hero-content">
                <h1>HOME OF SOLUTION MAKER</h1>
                <p class="subtitle">Oil Tools Fabrication and Repair Services, Including CNC Machine Shop Operation, Manufacture of Casing and Tubing Accessories and Down Hole and Rotary Drill Stem Equipment, Design, Manufacture and Repair Wellhead X-Mass Tree and Part.</p>
                
                <div class="hero-stats" fade-in>
                    <div class="stat-item">
                        <span class="stat-number">29,613</span>
                        <span class="stat-label">m² Workshop</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">30,000</span>
                        <span class="stat-label">PSI Preasure Testing</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">13.625</span>
                        <span class="stat-label"> Inc Max Threading</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications - ANIMATED CAROUSEL -->
    <section class="certifications">
        <div class="cert-container">
            <p class="cert-title">Bersertifikat & Berlisensi Internasional</p>
            
            <div class="cert-carousel-wrapper">
                <div class="cert-logos">
                    <!-- Original Items -->
                    <div class="cert-item">ISO 9001:2015</div>
                    <div class="cert-item">API 5B-0217</div>
                    <div class="cert-item">API 7-1-1150</div>
                    <div class="cert-item">API 6A-1589</div>
                    <div class="cert-item">TenarisHydrill (Premium Connection)</div>
                    <div class="cert-item">API Spec Q1 10th Edition</div>
                    
                    <!-- Duplicate for seamless loop -->
                    <div class="cert-item">ISO 9001:2015</div>
                    <div class="cert-item">API 5B-0217</div>
                    <div class="cert-item">API 7-1-1150</div>
                    <div class="cert-item">API 6A-1589</div>
                    <div class="cert-item">TenarisHydrill (Premium Connection)</div>
                    <div class="cert-item">API Spec Q1 10th Edition</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities -->
    <section class="capabilities">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Fasilitas & Kemampuan</h2>
                <p class="section-subtitle">Workshop berstandar internasional dengan akurasi hingga 0.0002" untuk solusi oil & gas terpercaya</p>
            </div>
            <div class="capabilities-grid">
                <div>
                    <div class="capability-item reveal">
                        <h4><i class="fas fa-industry"></i> Workshop 29.613 m²</h4>
                        <p>Open yard dan maintenance facility dengan peralatan CNC terlengkap</p>
                    </div>
                    <div class="capability-item reveal">
                        <h4><i class="fas fa-vial"></i> Testing Facilities</h4>
                        <p>30K PSI pressure test bunker, hydro & gas testing pit 15 meter dengan viewing room</p>
                    </div>
                    <div class="capability-item reveal">
                        <h4><i class="fas fa-microscope"></i> In-House Inspection</h4>
                        <p>Complete NDT services: MPI, Dye Penetrant, Ultrasonic, Hardness testing</p>
                    </div>
                </div>
                <div>
                    <div class="capability-item reveal">
                        <h4><i class="fas fa-paint-brush"></i> Surface Treatment</h4>
                        <p>Aluminum oxide blasting, phosphating, coating, dan painting facilities</p>
                    </div>
                    <div class="capability-item reveal">
                        <h4><i class="fas fa-clock"></i> Quick Response</h4>
                        <p>Emergency repair services dengan in-house fabrication untuk replacement parts</p>
                    </div>
                    <div class="capability-item reveal">
                        <h4><i class="fas fa-users"></i> Expert Team</h4>
                        <p>Certified welders, inspectors, dan engineers untuk quality assurance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section - OPTIMIZED WITH LAZY LOADING -->
    <section class="gallery" id="gallery">
        <div class="gallery-container">
            <div class="gallery-layout">
                <!-- Header Side -->
                <div class="gallery-header-side">
                    <h2>Galeri Fasilitas & Proyek</h2>
                    <p>Dokumentasi lengkap fasilitas workshop, equipment, dan project completion kami</p>
                </div>

                <!-- Gallery Scroll -->
                <div class="gallery-scroll-wrapper">
                    <div class="gallery-masonry" id="galleryScroll">
                        <!-- Gallery Item 1 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery1.jpg" 
                                     alt="Workshop Facility" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="380">
                            </div>
                        </div>

                        <!-- Gallery Item 2 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery2.jpg" 
                                     alt="CNC Machine" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="320">
                            </div>
                        </div>

                        <!-- Gallery Item 3 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery3.png" 
                                     alt="Testing Facility" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="280">
                            </div>
                        </div>

                        <!-- Gallery Item 4 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery4.png" 
                                     alt="Equipment" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="380">
                            </div>
                        </div>

                        <!-- Gallery Item 5 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery5.png" 
                                     alt="Project" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="320">
                            </div>
                        </div>

                        <!-- Gallery Item 6 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery6.jpg" 
                                     alt="Workshop" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="280">
                            </div>
                        </div>

                        <!-- Gallery Item 7 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery7.jpg" 
                                     alt="Facility" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="380">
                            </div>
                        </div>

                        <!-- Gallery Item 8 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery8.jpg" 
                                     alt="Testing" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="320">
                            </div>
                        </div>

                        <!-- Gallery Item 9 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery9.jpg" 
                                     alt="Machinery" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="280">
                            </div>
                        </div>

                        <!-- Gallery Item 10 -->
                        <div class="gallery-item">
                            <div class="img-wrapper loading">
                                <img data-src="assets/Gallery/Gallery10.jpg" 
                                     alt="Machinery" 
                                     loading="lazy"
                                     decoding="async"
                                     width="320"
                                     height="380">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Dipercaya oleh Pemimpin Industri</h2>
                <p class="section-subtitle">Kami telah dipercaya oleh perusahaan-perusahaan multinasional terkemuka</p>
            </div>
            <div class="clients-container">
                <div class="clients-carousel">
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRDM/Schlumberger.png" alt="Schlumberger" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Halliburton.png" alt="HALLIBURTON" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRDM/BakerHughes.png" alt="BAKERHUGHES" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Weatherford.png" alt="WEATHERFORd" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Apexindo.png" alt="APEXINDO" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Solaralert.png" alt="SOLARALERT" loading="lazy" decoding="async">
                    </div>
                    <!-- Duplicate items for seamless loop -->
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRDM/Schlumberger.png" alt="Schlumberger" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Halliburton.png" alt="HALLIBURTON" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRDM/BakerHughes.png" alt="BAKERHUGHES" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Weatherford.png" alt="WEATHERFORd" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Apexindo.png" alt="APEXINDO" loading="lazy" decoding="async">
                    </div>
                    <div class="client-card">
                        <img src="assets/LogoPenggunaRdm/Solaralert.png" alt="SOLARALERT" loading="lazy" decoding="async">
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
    'use strict';

// Prevent conflicts with navbar script
if (window.rdmInitialized) {
    console.warn('RDM scripts already initialized');
    // Don't exit, just warn
}
window.rdmInitialized = true;

    // ===== UTILITY FUNCTIONS =====
    
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Safe query selector - returns null if not found
    function safeQuery(selector) {
        try {
            return document.querySelector(selector);
        } catch (e) {
            console.warn(`Element not found: ${selector}`);
            return null;
        }
    }

    function safeQueryAll(selector) {
        try {
            return document.querySelectorAll(selector);
        } catch (e) {
            console.warn(`Elements not found: ${selector}`);
            return [];
        }
    }

    // ===== LAZY LOADING IMAGES =====
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                const wrapper = img.closest('.img-wrapper');
                
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    
                    img.onload = () => {
                        if (wrapper && wrapper.classList) {
                            wrapper.classList.remove('loading');
                        }
                        img.style.opacity = '1';
                    };
                    
                    img.onerror = () => {
                        if (wrapper && wrapper.classList) {
                            wrapper.classList.remove('loading');
                        }
                        console.error('Failed to load image:', img.dataset.src);
                    };
                    
                    img.removeAttribute('data-src');
                }
                
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '50px 0px',
        threshold: 0.01
    });

    function initLazyLoading() {
        const lazyImages = safeQueryAll('img[data-src]');
        if (lazyImages.length > 0) {
            lazyImages.forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    // ===== NUMBER COUNTER ANIMATION =====
    
    function animateNumber(element, start, end, duration) {
        if (!element) return;
        
        const startTime = performance.now();
        const originalText = element.textContent;
        const hasInch = originalText.includes('"');
        const hasComma = originalText.includes(',');
        const hasDot = originalText.includes('.');
        
        function easeOutQuart(x) {
            return 1 - Math.pow(1 - x, 4);
        }
        
        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutQuart(progress);
            const current = start + (end - start) * easedProgress;
            const rounded = Math.floor(current);
            
            if (hasComma) {
                element.textContent = rounded.toLocaleString('id-ID');
            } else if (hasDot && end >= 1000) {
                element.textContent = rounded.toLocaleString('en-US');
            } else if (hasInch) {
                element.textContent = rounded + '"';
            } else {
                element.textContent = rounded;
            }
            
            if (progress < 1) {
                requestAnimationFrame(update);
            }
        }
        
        requestAnimationFrame(update);
    }

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumbers = entry.target.querySelectorAll('.stat-number');
                
                statNumbers.forEach((stat, index) => {
                    setTimeout(() => {
                        const value = stat.textContent.replace(/[.,]/g, '');
                        const endValue = parseFloat(value);
                        if (!isNaN(endValue)) {
                            animateNumber(stat, 0, endValue, 2000);
                        }
                    }, index * 150);
                });
                
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    // ===== SCROLL REVEAL ANIMATION =====
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const parentSection = entry.target.closest('section') || entry.target.closest('.container');
                const revealElements = parentSection ? 
                    Array.from(parentSection.querySelectorAll('.reveal:not(.active)')) : 
                    [entry.target];
                
                revealElements.forEach((el, index) => {
                    setTimeout(() => {
                        if (el && el.classList) {
                            el.classList.add('active');
                        }
                    }, index * 100);
                    revealObserver.unobserve(el);
                });
            }
        });
    }, { 
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    });

    // ===== GALLERY HORIZONTAL SCROLL =====
    
    function initGalleryScroll() {
        const galleryScroll = safeQuery('#galleryScroll');
        if (!galleryScroll) return;

        let isDown = false;
        let startX;
        let scrollLeft;

        galleryScroll.addEventListener('mousedown', (e) => {
            isDown = true;
            galleryScroll.style.cursor = 'grabbing';
            startX = e.pageX - galleryScroll.offsetLeft;
            scrollLeft = galleryScroll.scrollLeft;
        });

        galleryScroll.addEventListener('mouseleave', () => {
            isDown = false;
            galleryScroll.style.cursor = 'grab';
        });

        galleryScroll.addEventListener('mouseup', () => {
            isDown = false;
            galleryScroll.style.cursor = 'grab';
        });

        galleryScroll.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - galleryScroll.offsetLeft;
            const walk = (x - startX) * 2;
            galleryScroll.scrollLeft = scrollLeft - walk;
        });

        galleryScroll.style.cursor = 'grab';
    }

    // ===== CERTIFICATION CAROUSEL CONTROL =====
    
    function initCertificationCarousel() {
        const certLogos = safeQuery('.cert-logos');
        const certItems = safeQueryAll('.cert-item');
        
        if (!certLogos || certItems.length === 0) {
            console.warn('Certification carousel not found - skipping');
            return;
        }
        
        let pauseTimeout = null;
        const AUTO_RESUME_DELAY = 3000;
        
        function pauseCarousel() {
            if (certLogos && certLogos.classList) {
                certLogos.classList.add('paused');
            }
            
            if (pauseTimeout) {
                clearTimeout(pauseTimeout);
            }
            
            pauseTimeout = setTimeout(() => {
                if (certLogos && certLogos.classList) {
                    certLogos.classList.remove('paused');
                }
            }, AUTO_RESUME_DELAY);
        }
        
        function resumeCarousel() {
            if (pauseTimeout) {
                clearTimeout(pauseTimeout);
            }
            if (certLogos && certLogos.classList) {
                certLogos.classList.remove('paused');
            }
        }
        
        const handleInteraction = function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (certLogos && certLogos.classList && certLogos.classList.contains('paused')) {
                resumeCarousel();
            } else {
                pauseCarousel();
            }
        };
        
        certItems.forEach(item => {
            if (item) {
                item.addEventListener('touchstart', handleInteraction, { passive: false });
                item.addEventListener('click', handleInteraction);
            }
        });
        
        const certWrapper = safeQuery('.cert-carousel-wrapper');
        if (certWrapper) {
            certWrapper.addEventListener('touchstart', function(e) {
                if (!e.target.closest('.cert-item')) {
                    handleInteraction(e);
                }
            }, { passive: false });
            
            certWrapper.addEventListener('click', function(e) {
                if (!e.target.closest('.cert-item')) {
                    handleInteraction(e);
                }
            });
            
            if (window.matchMedia("(hover: hover) and (pointer: fine)").matches) {
                certWrapper.style.cursor = 'pointer';
            }
        }
    }

    // ===== CLIENTS CAROUSEL CONTROL =====
    
    function initClientsCarousel() {
        const carouselContainer = safeQuery('.clients-container');
        const carousel = safeQuery('.clients-carousel');
        
        if (carouselContainer && carousel) {
            carouselContainer.addEventListener('mouseenter', () => {
                if (carousel.style) {
                    carousel.style.animationPlayState = 'paused';
                }
            });
            
            carouselContainer.addEventListener('mouseleave', () => {
                if (carousel.style) {
                    carousel.style.animationPlayState = 'running';
                }
            });
        }
    }

    // ===== SMOOTH SCROLL =====
    
    function initSmoothScroll() {
        const anchors = safeQueryAll('a[href^="#"]');
        
        anchors.forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                const target = safeQuery(href);
                if (target) {
                    e.preventDefault();
                    const header = safeQuery('.header');
                    const headerHeight = header ? header.offsetHeight : 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ===== SCROLL TO TOP BUTTON =====
    
    function initScrollToTop() {
        const scrollTopBtn = safeQuery('.scroll-top');
        
        if (scrollTopBtn) {
            const handleScroll = debounce(() => {
                if (scrollTopBtn.classList) {
                    if (window.pageYOffset > 500) {
                        scrollTopBtn.classList.add('visible');
                    } else {
                        scrollTopBtn.classList.remove('visible');
                    }
                }
            }, 100);
            
            window.addEventListener('scroll', handleScroll);

            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    // ===== INITIALIZATION =====
    
    function init() {
        console.log('Initializing page...');
        
        // Lazy loading
        try {
            initLazyLoading();
        } catch (error) {
            console.error('Lazy loading error:', error);
        }
        
        // Stats counter
        try {
            const statsSection = safeQuery('.hero-stats');
            if (statsSection) {
                statsObserver.observe(statsSection);
            }
        } catch (error) {
            console.error('Stats observer error:', error);
        }
        
        // Reveal animations
        try {
            const revealElements = safeQueryAll('.reveal');
            if (revealElements.length > 0) {
                revealElements.forEach(el => {
                    if (el) revealObserver.observe(el);
                });
            }
        } catch (error) {
            console.error('Reveal observer error:', error);
        }
        
        // Gallery scroll
        try {
            initGalleryScroll();
        } catch (error) {
            console.error('Gallery scroll error:', error);
        }
        
        // Certification carousel
        try {
            initCertificationCarousel();
        } catch (error) {
            console.error('Certification carousel error:', error);
        }
        
        // Clients carousel
        try {
            initClientsCarousel();
        } catch (error) {
            console.error('Clients carousel error:', error);
        }
        
        // Smooth scroll
        try {
            initSmoothScroll();
        } catch (error) {
            console.error('Smooth scroll error:', error);
        }
        
        // Scroll to top
        try {
            initScrollToTop();
        } catch (error) {
            console.error('Scroll to top error:', error);
        }
        
        console.log('Page initialized successfully');
    }

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
</script>

    <?php include 'includes/footer.php'; ?>

</body>
</html>