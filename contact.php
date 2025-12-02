<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - PT Pioneer CNC Indonesia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        /* =========================== */
        /* STYLE KHUSUS HALAMAN KONTAK */
        /* =========================== */
        
        /* Floating Elements */
        .floating-element {
            position: absolute;
            background: linear-gradient(135deg, var(--secondary), var(--gold));
            border-radius: 50%;
            opacity: 0.08;
            animation: float 6s ease-in-out infinite;
            z-index: 1;
        }

        .float-1 {
            width: 80px;
            height: 80px;
            top: 15%;
            left: 5%;
            animation-delay: 0s;
        }

        .float-2 {
            width: 60px;
            height: 60px;
            bottom: 25%;
            right: 10%;
            animation-delay: 2s;
        }

        .float-3 {
            width: 40px;
            height: 40px;
            top: 40%;
            right: 15%;
            animation-delay: 4s;
        }

        .float-4 {
            width: 70px;
            height: 70px;
            bottom: 15%;
            left: 8%;
            animation-delay: 1s;
        }

        .float-5 {
            width: 50px;
            height: 50px;
            top: 20%;
            right: 20%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            33% {
                transform: translateY(-10px) rotate(120deg);
            }
            66% {
                transform: translateY(5px) rotate(240deg);
            }
        }

        /* JUDUL HERO SECTION - SEPERTI KATALOG */
        .contact-hero {
            background: linear-gradient(135deg, var(--primary) 0%, #0f1f3a 100%);
            color: white;
            padding: 8rem 0 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-top: 0;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.03"><polygon points="1000,0 1000,100 0,100"></polygon></svg>');
            background-size: cover;
        }

        .contact-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .contact-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff 0%, var(--gold) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }

        .contact-hero p {
            font-size: 1.4rem;
            max-width: 600px;
            margin: 0 auto;
            color: #e2e8f0;
            line-height: 1.7;
            font-weight: 300;
            position: relative;
            z-index: 2;
        }

        /* Contact Main Section */
        .contact-main {
            padding: 5rem 0;
            background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
            margin: 0;
            position: relative;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            position: relative;
            z-index: 2;
        }

        /* Contact Information */
        .contact-page-info {
            padding: 2rem 0;
        }

        .contact-page-info h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 2rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 1rem;
        }

        .contact-page-info h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--secondary), var(--gold));
            border-radius: 2px;
        }

        .contact-details {
            margin-bottom: 3rem;
        }

        .contact-page-item {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .contact-page-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .contact-page-item:hover::before {
            left: 100%;
        }

        .contact-page-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            border-left-color: var(--secondary);
        }

        .contact-page-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--secondary), var(--gold));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            flex-shrink: 0;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .contact-page-item:hover .contact-page-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, var(--gold), var(--secondary));
        }

        .contact-page-content h3 {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-weight: 600;
            position: relative;
            z-index: 2;
        }

        .contact-page-content p {
            color: var(--dark);
            line-height: 1.6;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .contact-page-link {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .contact-page-link:hover {
            color: var(--gold);
            transform: translateX(5px);
        }

        /* Business Hours */
        .business-hours {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin: 0;
            border: 2px solid transparent;
            background: linear-gradient(white, white), 
                        linear-gradient(135deg, var(--secondary), var(--gold));
            background-origin: border-box;
            background-clip: padding-box, border-box;
            position: relative;
            overflow: hidden;
        }

        .business-hours::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .business-hours h3 {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 2;
        }

        .business-hours h3 i {
            color: var(--gold);
        }

        .hours-list {
            list-style: none;
            padding: 0;
            position: relative;
            z-index: 2;
        }

        .hours-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .hours-list li:hover {
            background: #f8fafc;
            padding-left: 0.5rem;
            border-radius: 5px;
        }

        .hours-list li:last-child {
            border-bottom: none;
        }

        .day {
            font-weight: 600;
            color: var(--dark);
        }

        .time {
            color: var(--secondary);
            font-weight: 500;
        }

        .closed {
            color: var(--accent);
            font-weight: 600;
        }

        /* Contact Form */
        .contact-form-section {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            margin: 0;
            border: 2px solid transparent;
            background: linear-gradient(white, white), 
                        linear-gradient(135deg, var(--secondary), var(--gold));
            background-origin: border-box;
            background-clip: padding-box, border-box;
        }

        .contact-form-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--secondary), var(--gold));
        }

        .contact-form-section h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-weight: 700;
            position: relative;
            z-index: 2;
        }

        .form-subtitle {
            color: var(--gray);
            margin-bottom: 2rem;
            font-size: 1.1rem;
            position: relative;
            z-index: 2;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark);
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
            font-family: inherit;
            position: relative;
            z-index: 2;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary);
            background: white;
            box-shadow: 0 0 0 3px rgba(45, 116, 218, 0.1);
            transform: translateY(-2px);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--secondary), var(--gold));
            color: white;
            border: none;
            padding: 1.2rem 2.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 5px 15px rgba(45, 116, 218, 0.3);
            position: relative;
            overflow: hidden;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            z-index: 2;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--gold), var(--secondary));
            transition: all 0.4s ease;
            z-index: -1;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(45, 116, 218, 0.4);
        }

        .submit-btn:hover::before {
            left: 0;
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        /* MAP SECTION YANG DIPERBAIKI - MENGGUNAKAN CARD */
        .map-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            margin: 0;
            position: relative;
        }

        .map-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        .map-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            height: 450px;
            border: 2px solid transparent;
            background: linear-gradient(white, white), 
                        linear-gradient(135deg, var(--secondary), var(--gold));
            background-origin: border-box;
            background-clip: padding-box, border-box;
        }

        #contact-map {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* CARD MAP OVERLAY YANG DIPERBAIKI */
        .map-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            background: linear-gradient(white, white), 
                        linear-gradient(135deg, var(--secondary), var(--gold));
            background-origin: border-box;
            background-clip: padding-box, border-box;
            position: relative;
            overflow: hidden;
        }

        .map-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--secondary), var(--gold));
        }

        .map-card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .map-card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--secondary), var(--gold));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: white;
        }

        .map-card-header h3 {
            font-size: 1.5rem;
            color: var(--primary);
            margin: 0;
            font-weight: 700;
        }

        .map-card-content {
            position: relative;
            z-index: 2;
        }

        .map-card-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .map-card-item:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .map-card-item i {
            color: var(--secondary);
            font-size: 1.1rem;
            margin-top: 0.2rem;
            flex-shrink: 0;
        }

        .map-card-text {
            flex: 1;
        }

        .map-card-text strong {
            display: block;
            color: var(--primary);
            margin-bottom: 0.3rem;
            font-weight: 600;
        }

        .map-card-text p {
            margin: 0;
            color: var(--dark);
            line-height: 1.5;
            font-size: 0.95rem;
        }

        .map-card-actions {
            margin-top: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .btn-map {
            padding: 1rem 1.5rem;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-directions {
            background: linear-gradient(135deg, var(--secondary), var(--gold));
            color: white;
            box-shadow: 0 5px 15px rgba(45, 116, 218, 0.3);
        }

        .btn-directions:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(45, 116, 218, 0.4);
        }

        .btn-call-map {
            background: white;
            color: var(--secondary);
            border: 2px solid var(--secondary);
        }

        .btn-call-map:hover {
            background: var(--secondary);
            color: white;
            transform: translateY(-2px);
        }

        /* FAQ Section */
        .faq-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary) 0%, #0f1f3a 100%);
            color: white;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
            position: relative;
            z-index: 2;
        }

        .faq-container h2 {
            text-align: center;
            font-size: 2.3rem;
            margin-bottom: 3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #ffffff 0%, var(--gold) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .faq-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        .faq-question {
            padding: 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            color: #e2e8f0;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            padding: 0 1.5rem 1.5rem;
            max-height: 500px;
        }

        .faq-toggle {
            color: var(--gold);
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-toggle {
            transform: rotate(180deg);
        }

        /* CTA Section */
        .contact-cta {
            padding: 4rem 0;
            background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
            text-align: center;
            margin: 0;
            position: relative;
        }

        .cta-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 1rem;
            position: relative;
            z-index: 2;
        }

        .contact-cta h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .contact-cta p {
            font-size: 1.2rem;
            color: var(--dark);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-whatsapp {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }

        .btn-whatsapp:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
        }

        .btn-call {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(45, 116, 218, 0.3);
        }

        .btn-call:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(45, 116, 218, 0.4);
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            text-align: center;
            display: none;
            animation: slideInDown 0.5s ease;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive untuk halaman kontak */
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .map-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .contact-form-section {
                padding: 2rem;
            }
            
            .contact-hero {
                padding: 7rem 0 5rem 0;
            }
            
            .floating-element {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .contact-hero p {
                font-size: 1.2rem;
            }
            
            .contact-page-item {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-whatsapp, .btn-call {
                width: 100%;
                max-width: 280px;
                justify-content: center;
            }
            
            .contact-hero {
                padding: 6rem 0 4rem 0;
            }
            
            .map-wrapper {
                height: 350px;
            }
        }

        @media (max-width: 480px) {
            .contact-hero {
                padding: 5rem 0 3rem 0;
            }
            
            .contact-form-section {
                padding: 1.5rem;
            }
            
            .contact-page-info {
                padding: 1rem 0;
            }
            
            .contact-hero h1 {
                font-size: 2rem;
            }
            
            .contact-hero p {
                font-size: 1rem;
            }
            
            .map-wrapper {
                height: 300px;
            }
            
            .map-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Contact Hero Section - SEPERTI KATALOG -->
    <section class="contact-hero">
        <!-- Floating Elements -->
        <div class="floating-element float-1"></div>
        <div class="floating-element float-2"></div>
        <div class="floating-element float-3"></div>
        <div class="floating-element float-4"></div>
        <div class="floating-element float-5"></div>
        
        <div class="contact-hero-content">
            <h1>Hubungi Kami</h1>
            <p>Kami siap membantu Anda dengan solusi terbaik untuk kebutuhan mesin CNC Anda</p>
        </div>
    </section>

    <!-- Contact Main Section -->
    <section class="contact-main">
        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-page-info">
                <h2>Informasi Kontak</h2>
                
                <div class="contact-details">
                    <div class="contact-page-item" onclick="focusOnMap()">
                        <div class="contact-page-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-page-content">
                            <h3>Alamat Kantor</h3>
                            <p>Jl. Industri Raya No. 123</p>
                            <p>Kawasan Industri Modern, Jakarta 13910</p>
                            <p>Indonesia</p>
                            <a href="javascript:void(0)" class="contact-page-link">
                                Lihat di Peta <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="contact-page-item" onclick="window.location.href='tel:+622112345678'">
                        <div class="contact-page-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-page-content">
                            <h3>Telepon</h3>
                            <p><a href="tel:+622112345678" class="contact-page-link">+62 21 1234 5678</a></p>
                            <p><a href="tel:+628112345678" class="contact-page-link">+62 811 2345 6789</a></p>
                        </div>
                    </div>

                    <div class="contact-page-item" onclick="window.location.href='mailto:info@pioneercnc.co.id'">
                        <div class="contact-page-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-page-content">
                            <h3>Email</h3>
                            <p><a href="mailto:info@pioneercnc.co.id" class="contact-page-link">info@pioneercnc.co.id</a></p>
                            <p><a href="mailto:sales@pioneercnc.co.id" class="contact-page-link">sales@pioneercnc.co.id</a></p>
                        </div>
                    </div>

                    <div class="contact-page-item" onclick="window.open('https://wa.me/628112345678', '_blank')">
                        <div class="contact-page-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-page-content">
                            <h3>WhatsApp</h3>
                            <p><a href="https://wa.me/628112345678" class="contact-page-link">+62 811 2345 6789</a></p>
                            <p>Fast Response - 24/7 Support</p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="business-hours">
                    <h3><i class="fas fa-clock"></i> Jam Operasional</h3>
                    <ul class="hours-list">
                        <li>
                            <span class="day">Senin - Jumat</span>
                            <span class="time">08:00 - 17:00</span>
                        </li>
                        <li>
                            <span class="day">Sabtu</span>
                            <span class="time">08:00 - 15:00</span>
                        </li>
                        <li>
                            <span class="day">Minggu</span>
                            <span class="closed">Libur</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2>Kirim Pesan</h2>
                <p class="form-subtitle">Isi form di bawah ini dan tim kami akan menghubungi Anda segera</p>
                
                <div id="successMessage" class="success-message">
                    <i class="fas fa-check-circle"></i> Terima kasih! Pesan Anda telah berhasil dikirim.
                </div>
                
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Lengkap *</label>
                        <input type="text" id="name" name="name" class="form-control" required placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" id="email" name="email" class="form-control" required placeholder="nama@email.com">
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+62 812 3456 7890">
                    </div>

                    <div class="form-group">
                        <label for="company" class="form-label">Nama Perusahaan</label>
                        <input type="text" id="company" name="company" class="form-control" placeholder="Nama perusahaan Anda">
                    </div>

                    <div class="form-group">
                        <label for="subject" class="form-label">Subjek *</label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="">Pilih Subjek</option>
                            <option value="quotation">Request Quotation</option>
                            <option value="technical">Technical Support</option>
                            <option value="service">After Sales Service</option>
                            <option value="partnership">Kerjasama Bisnis</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Pesan *</label>
                        <textarea id="message" name="message" class="form-control" required placeholder="Tulis pesan detail Anda di sini..."></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section YANG SUDAH DIPERBAIKI -->
    <section class="map-section">
        <div class="map-container">
            <!-- Map Wrapper -->
            <div class="map-wrapper">
                <div id="contact-map"></div>
            </div>
            
            <!-- Map Card -->
            <div class="map-card">
                <div class="map-card-header">
                    <div class="map-card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Lokasi Kami</h3>
                </div>
                
                <div class="map-card-content">
                    <div class="map-card-item">
                        <i class="fas fa-location-dot"></i>
                        <div class="map-card-text">
                            <strong>Alamat</strong>
                            <p>Jl. Industri Raya No. 123<br>Kawasan Industri Modern<br>Jakarta 13910, Indonesia</p>
                        </div>
                    </div>
                    
                    
                    
                    
                </div>
                
                <div class="map-card-actions">
                    <a href="https://maps.google.com/?q=Jl.+Industri+Raya+No.+123,Jakarta" target="_blank" class="btn-map btn-directions">
                        <i class="fas fa-directions"></i> Dapatkan Petunjuk Arah
                    </a>
                    <a href="tel:+622112345678" class="btn-map btn-call-map">
                        <i class="fas fa-phone"></i> Telepon Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <h2>Pertanyaan Umum</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    Berapa lama waktu respons untuk quotation?
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    Kami akan merespons permintaan quotation dalam waktu 1-2 jam kerja. Untuk permintaan yang kompleks, maksimal 24 jam.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Apakah tersedia layanan purna jual?
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    Ya, kami menyediakan layanan purna jual lengkap termasuk instalasi, training, maintenance, dan technical support 24/7.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Berapa lama garansi untuk mesin CNC?
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    Garansi standar 1 tahun untuk seluruh mesin, dengan extended warranty option tersedia. Garansi termasuk parts dan service.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Apakah tersedia demo mesin?
                    <i class="fas fa-chevron-down faq-toggle"></i>
                </div>
                <div class="faq-answer">
                    Ya, kami menyediakan demo mesin di showroom kami. Silakan hubungi untuk appointment terlebih dahulu.
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact-cta">
        <div class="cta-container">
            <h2>Butuh Bantuan Cepat?</h2>
            <p>Hubungi kami langsung melalui WhatsApp atau telepon untuk konsultasi gratis</p>
            <div class="cta-buttons">
                <a href="https://wa.me/628112345678" class="btn-whatsapp">
                    <i class="fab fa-whatsapp"></i> WhatsApp Sekarang
                </a>
                
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Initialize Map
        function initMap() {
            // Koordinat untuk Jakarta (contoh lokasi)
            const companyLocation = [-6.2088, 106.8456];
            
            // Create map
            const map = L.map('contact-map').setView(companyLocation, 15);
            
            // Add tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            // Add custom icon
            const customIcon = L.divIcon({
                html: '<i class="fas fa-industry" style="color: #d4af37; font-size: 24px; background: white; padding: 10px; border-radius: 50%; box-shadow: 0 2px 10px rgba(0,0,0,0.3);"></i>',
                iconSize: [44, 44],
                iconAnchor: [22, 44],
                popupAnchor: [0, -40],
                className: 'custom-map-icon'
            });
            
            // Add marker
            L.marker(companyLocation, { icon: customIcon })
                .addTo(map)
                .bindPopup(`
                    <div style="text-align: center; padding: 10px;">
                        <h3 style="margin: 0 0 10px 0; color: #1a365d; font-size: 16px;">PT Pioneer CNC Indonesia</h3>
                        <p style="margin: 5px 0; font-size: 14px;">Jl. Industri Raya No. 123</p>
                        <p style="margin: 5px 0; font-size: 14px;">Kawasan Industri Modern</p>
                        <p style="margin: 5px 0; font-size: 14px;">Jakarta 13910</p>
                        <a href="https://maps.google.com/?q=Jl.+Industri+Raya+No.+123,Jakarta" target="_blank" 
                           style="display: inline-block; margin-top: 10px; padding: 8px 15px; background: #2d74da; color: white; text-decoration: none; border-radius: 5px; font-size: 12px;">
                           Dapatkan Petunjuk Arah
                        </a>
                    </div>
                `)
                .openPopup();
        }

        // Focus on map when address is clicked
        function focusOnMap() {
            document.querySelector('.map-section').scrollIntoView({ 
                behavior: 'smooth',
                block: 'center'
            });
        }

        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const navLinks = document.querySelector('.nav-links');
            
            if (mobileMenu) {
                mobileMenu.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                    
                    // Ubah ikon menu
                    const icon = this.querySelector('i');
                    if (icon.classList.contains('fa-bars')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
                
                // Tutup menu mobile ketika klik di luar
                document.addEventListener('click', function(event) {
                    if (!event.target.closest('.nav-container')) {
                        navLinks.classList.remove('active');
                        const icon = mobileMenu.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
            }

            // Initialize map
            initMap();

            // FAQ Toggle Functionality
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                });
            });

            // Contact Form Submission
            const contactForm = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Simple form validation
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                if (name && email && subject && message) {
                    // Simulate form submission
                    const submitBtn = contactForm.querySelector('.submit-btn');
                    const originalText = submitBtn.innerHTML;
                    
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
                    submitBtn.disabled = true;
                    
                    setTimeout(() => {
                        // Show success message
                        successMessage.style.display = 'block';
                        
                        // Reset form
                        contactForm.reset();
                        
                        // Restore button
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        
                        // Hide success message after 5 seconds
                        setTimeout(() => {
                            successMessage.style.display = 'none';
                        }, 5000);
                    }, 2000);
                } else {
                    alert('Harap lengkapi semua field yang wajib diisi.');
                }
            });

            // Add animation to contact items on scroll
            const contactItems = document.querySelectorAll('.contact-page-item');
            const mapCardItems = document.querySelectorAll('.map-card-item');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            contactItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(item);
            });
            
            mapCardItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(item);
            });
        });
    </script>
<?php
include 'footer.php';
?>
</body>
</html>