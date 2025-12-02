<?php 
$pageTitle = "Tentang Kami - PT Pioneer CNC Indonesia";
include 'header.php'; 
?>

<style>
    /* About Page Styles */
    
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

    /* JUDUL HERO SECTION - SEPERTI KATALOG & KONTAK */
    .about-hero {
        background: linear-gradient(135deg, var(--primary) 0%, #0f1f3a 100%);
        color: white;
        padding: 8rem 0 6rem 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin-top: 0;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.03"><polygon points="1000,0 1000,100 0,100"></polygon></svg>');
        background-size: cover;
    }

    .about-hero-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .about-hero h1 {
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

    .about-hero p {
        font-size: 1.4rem;
        max-width: 600px;
        margin: 0 auto;
        color: #e2e8f0;
        line-height: 1.7;
        font-weight: 300;
        position: relative;
        z-index: 2;
    }

    /* Company Overview */
    .company-overview {
        padding: 5rem 0;
        background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
        position: relative;
    }

    .overview-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .overview-content h2 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 1.5rem;
        font-weight: 700;
        position: relative;
        padding-bottom: 1rem;
    }

    .overview-content h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(to right, var(--secondary), var(--gold));
        border-radius: 2px;
    }

    .overview-content p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: var(--dark);
        margin-bottom: 1.5rem;
    }

    .overview-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-top: 2rem;
    }

    .stat-item {
        text-align: center;
        padding: 1.5rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .stat-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }

    .stat-item:hover::before {
        left: 100%;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--secondary);
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 2;
    }

    .stat-label {
        font-size: 1rem;
        color: var(--dark);
        font-weight: 600;
        position: relative;
        z-index: 2;
    }

    .overview-image {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .overview-image:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
    }

    .overview-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .overview-image:hover img {
        transform: scale(1.05);
    }

    /* Vision Mission Section */
    .vision-mission {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--primary) 0%, #0f1f3a 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .vision-mission::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.03"><polygon points="0,0 1000,100 0,100"></polygon></svg>');
        background-size: cover;
    }

    .vm-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
        position: relative;
        z-index: 2;
    }

    .vm-container h2 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 3rem;
        font-weight: 700;
        background: linear-gradient(135deg, #ffffff 0%, var(--gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .vm-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
    }

    .vision-card, .mission-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 2.5rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .vision-card::before, .mission-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
        transition: left 0.5s ease;
    }

    .vision-card:hover::before, .mission-card:hover::before {
        left: 100%;
    }

    .vision-card:hover, .mission-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .vision-card h3, .mission-card h3 {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        color: var(--gold);
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 1rem;
        position: relative;
        z-index: 2;
    }

    .vision-card h3 i, .mission-card h3 i {
        font-size: 2rem;
    }

    .vision-card p, .mission-card p {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #e2e8f0;
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 2;
    }

    .mission-list {
        list-style: none;
        padding: 0;
        position: relative;
        z-index: 2;
    }

    .mission-list li {
        padding: 0.8rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        transition: all 0.3s ease;
    }

    .mission-list li:hover {
        background: rgba(255, 255, 255, 0.05);
        padding-left: 1rem;
        border-radius: 5px;
    }

    .mission-list li:last-child {
        border-bottom: none;
    }

    .mission-list li::before {
        content: '✓';
        color: var(--gold);
        font-weight: bold;
        font-size: 1.2rem;
        margin-top: 0.1rem;
        flex-shrink: 0;
    }

    /* Organizational Structure */
    .org-structure {
        padding: 5rem 0;
        background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
        position: relative;
    }

    .org-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
        position: relative;
        z-index: 2;
    }

    .org-container h2 {
        text-align: center;
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 3rem;
        font-weight: 700;
        position: relative;
        padding-bottom: 1rem;
    }

    .org-container h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(to right, var(--secondary), var(--gold));
        border-radius: 2px;
    }

    .org-chart {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
        background: linear-gradient(white, white), 
                    linear-gradient(135deg, var(--secondary), var(--gold));
        background-origin: border-box;
        background-clip: padding-box, border-box;
    }

    .org-level {
        display: flex;
        justify-content: center;
        margin-bottom: 3rem;
        position: relative;
    }

    .org-level:not(:last-child)::after {
        content: '';
        position: absolute;
        bottom: -1.5rem;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 1.5rem;
        background: var(--secondary);
    }

    .ceo-level {
        margin-bottom: 4rem;
    }

    .management-level {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .staff-level {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }

    .org-member {
        text-align: center;
        padding: 1.5rem;
        background: linear-gradient(135deg, #f8fafc, #ffffff);
        border-radius: 15px;
        border: 2px solid #e2e8f0;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .org-member::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s ease;
    }

    .org-member:hover::before {
        left: 100%;
    }

    .org-member:hover {
        transform: translateY(-5px);
        border-color: var(--secondary);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .ceo-member {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: white;
        border: none;
        padding: 2rem;
    }

    .ceo-member:hover {
        background: linear-gradient(135deg, var(--secondary), var(--primary));
    }

    .member-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--secondary), var(--gold));
        margin: 0 auto 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: white;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .org-member:hover .member-avatar {
        transform: scale(1.1) rotate(5deg);
    }

    .ceo-member .member-avatar {
        width: 100px;
        height: 100px;
        font-size: 2.5rem;
        background: linear-gradient(135deg, var(--gold), #ffffff);
        color: var(--primary);
    }

    .member-name {
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 2;
    }

    .ceo-member .member-name {
        font-size: 1.3rem;
    }

    .member-position {
        color: var(--secondary);
        font-weight: 600;
        font-size: 0.9rem;
        position: relative;
        z-index: 2;
    }

    .ceo-member .member-position {
        color: var(--gold);
    }

    .member-department {
        color: var(--gray);
        font-size: 0.8rem;
        margin-top: 0.3rem;
        position: relative;
        z-index: 2;
    }

    .ceo-member .member-department {
        color: #e2e8f0;
    }

    /* Values Section */
    .company-values {
        padding: 5rem 0;
        background: linear-gradient(135deg, var(--primary) 0%, #0f1f3a 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .values-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
        position: relative;
        z-index: 2;
    }

    .values-container h2 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 3rem;
        font-weight: 700;
        background: linear-gradient(135deg, #ffffff 0%, var(--gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .value-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .value-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
        transition: left 0.5s ease;
    }

    .value-card:hover::before {
        left: 100%;
    }

    .value-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .value-icon {
        font-size: 3rem;
        color: var(--gold);
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .value-card:hover .value-icon {
        transform: scale(1.2) rotate(5deg);
    }

    .value-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: white;
        font-weight: 600;
        position: relative;
        z-index: 2;
    }

    .value-card p {
        color: #e2e8f0;
        line-height: 1.6;
        font-size: 1rem;
        position: relative;
        z-index: 2;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .overview-container {
            grid-template-columns: 1fr;
            gap: 3rem;
        }
        
        .vm-grid {
            grid-template-columns: 1fr;
        }
        
        .management-level {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .staff-level {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .values-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .floating-element {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 2.5rem;
        }
        
        .about-hero p {
            font-size: 1.2rem;
        }
        
        .overview-stats {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .management-level {
            grid-template-columns: 1fr;
        }
        
        .staff-level {
            grid-template-columns: 1fr;
        }
        
        .values-grid {
            grid-template-columns: 1fr;
        }
        
        .org-chart {
            padding: 1.5rem;
        }
        
        .about-hero {
            padding: 7rem 0 5rem 0;
        }
    }

    @media (max-width: 480px) {
        .about-hero {
            padding: 6rem 0 4rem 0;
        }
        
        .overview-stats {
            grid-template-columns: 1fr;
        }
        
        .vision-card, .mission-card, .value-card {
            padding: 1.5rem;
        }
        
        .about-hero h1 {
            font-size: 2rem;
        }
        
        .about-hero p {
            font-size: 1rem;
        }
    }
</style>

<!-- About Hero Section - SEPERTI KATALOG & KONTAK -->
<section class="about-hero">
    <!-- Floating Elements -->
    <div class="floating-element float-1"></div>
    <div class="floating-element float-2"></div>
    <div class="floating-element float-3"></div>
    <div class="floating-element float-4"></div>
    <div class="floating-element float-5"></div>
    
    <div class="about-hero-content">
        <h1>Tentang PT Pioneer CNC Indonesia</h1>
        <p>Pemimpin dalam industri mesin CNC dengan komitmen untuk memberikan solusi terbaik bagi kebutuhan manufaktur Anda</p>
    </div>
</section>

<!-- Company Overview -->
<section class="company-overview">
    <div class="overview-container">
        <div class="overview-content">
            <h2>Profil Perusahaan</h2>
            <p>PT Pioneer CNC Indonesia adalah perusahaan terdepan dalam penyediaan mesin CNC berkualitas tinggi di Indonesia. Dengan pengalaman lebih dari 15 tahun di industri manufaktur, kami telah membangun reputasi yang kuat dalam menyediakan solusi mesin CNC yang inovatif dan andal.</p>
            <p>Kami mengkhususkan diri dalam mesin CNC Fiber Laser Cutting, Plasma Cutting, Router, dan berbagai mesin manufaktur presisi lainnya. Dengan produk brand DCS, kami menjamin kualitas terbaik untuk mendukung kesuksesan bisnis Anda.</p>
            
            <div class="overview-stats">
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Klien Terlayani</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support Teknis</div>
                </div>
            </div>
        </div>
        <div class="overview-image">
            <img src="foto/8.JPG" alt="PT Pioneer CNC Indonesia Factory">
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="vision-mission">
    <div class="vm-container">
        <h2>Visi & Misi Perusahaan</h2>
        <div class="vm-grid">
            <div class="vision-card">
                <h3><i class="fas fa-eye"></i> Visi Kami</h3>
                <p>Menjadi perusahaan penyedia mesin CNC terdepan di Indonesia yang dikenal dengan kualitas produk unggulan, layanan terbaik, dan inovasi teknologi yang terus berkembang untuk mendukung pertumbuhan industri manufaktur nasional.</p>
            </div>
            <div class="mission-card">
                <h3><i class="fas fa-bullseye"></i> Misi Kami</h3>
                <ul class="mission-list">
                    <li>Menyediakan mesin CNC dengan teknologi terkini dan kualitas terbaik</li>
                    <li>Memberikan solusi komprehensif untuk kebutuhan manufaktur pelanggan</li>
                    <li>Mengutamakan kepuasan pelanggan melalui layanan purna jual yang excellent</li>
                    <li>Berkontribusi dalam pengembangan industri manufaktur Indonesia</li>
                    <li>Membangun kemitraan jangka panjang yang saling menguntungkan</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Organizational Structure -->
<section class="org-structure">
    <div class="org-container">
        <h2>Struktur Organisasi</h2>
        <div class="org-chart">
            <!-- CEO Level -->
            <div class="org-level ceo-level">
                <div class="org-member ceo-member">
                    <div class="member-avatar">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="member-name">John Doe</div>
                    <div class="member-position">Chief Executive Officer</div>
                    <div class="member-department">Executive Board</div>
                </div>
            </div>

            <!-- Management Level -->
            <div class="org-level management-level">
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="member-name">Jane Smith</div>
                    <div class="member-position">Operations Director</div>
                    <div class="member-department">Operations</div>
                </div>
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="member-name">Michael Brown</div>
                    <div class="member-position">Sales Director</div>
                    <div class="member-department">Sales & Marketing</div>
                </div>
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="member-name">Sarah Johnson</div>
                    <div class="member-position">Technical Director</div>
                    <div class="member-department">Technical</div>
                </div>
            </div>

            <!-- Staff Level -->
            <div class="org-level staff-level">
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="member-name">Robert Wilson</div>
                    <div class="member-position">Production Manager</div>
                </div>
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="member-name">Lisa Anderson</div>
                    <div class="member-position">Customer Service Manager</div>
                </div>
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="member-name">David Lee</div>
                    <div class="member-position">Technical Support Manager</div>
                </div>
                <div class="org-member">
                    <div class="member-avatar">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="member-name">Emily Davis</div>
                    <div class="member-position">Marketing Manager</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Values -->
<section class="company-values">
    <div class="values-container">
        <h2>Nilai-Nilai Perusahaan</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Kualitas Terbaik</h3>
                <p>Kami berkomitmen untuk menyediakan produk dengan kualitas terbaik dan standar tertinggi dalam setiap aspek bisnis kami.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Inovasi</h3>
                <p>Terus berinovasi dan mengadopsi teknologi terbaru untuk memberikan solusi yang lebih baik bagi pelanggan kami.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Integritas</h3>
                <p>Menjunjung tinggi kejujuran, transparansi, dan etika bisnis dalam setiap interaksi dengan stakeholders.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Animation for stats counting
    document.addEventListener('DOMContentLoaded', function() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        statNumbers.forEach(stat => {
            const target = parseInt(stat.textContent);
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    stat.textContent = target + '+';
                    clearInterval(timer);
                } else {
                    stat.textContent = Math.floor(current) + '+';
                }
            }, 50);
        });

        // Add scroll animation for elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 200);
                }
            });
        }, observerOptions);

        // Observe animated elements
        const animatedElements = document.querySelectorAll('.stat-item, .vision-card, .mission-card, .value-card, .org-member');
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            observer.observe(el);
        });
    });
</script>

<?php include 'footer.php'; ?>
</body>
</html>