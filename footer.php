<!-- Footer -->
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col footer-company">
                    <div class="footer-logo-section">
                        <div class="footer-logo">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="footer-company-info">
                            <h3 class="footer-company-name">PT PIONEER CNC INDONESIA</h3>
                            <div class="footer-tagline">Dengan Produk Brand DCS</div>
                            <div class="footer-slogan">Best Quality For The Excellent</div>
                        </div>
                    </div>
                    <p class="footer-desc">
                        Penyedia solusi mesin CNC terkemuka di Indonesia dengan teknologi terkini 
                        untuk meningkatkan efisiensi dan produktivitas industri manufaktur.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-title">Tautan Cepat</h4>
                    <ul class="footer-nav">
                        <li><a href="index.php"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                        <li><a href="products.php"><i class="fas fa-chevron-right"></i> Produk</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Kontak</a></li>
                    </ul>
                </div>

                <!-- Products -->
                <div class="footer-col">
                    <h4 class="footer-title">Produk Kami</h4>
                    <ul class="footer-nav">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> CNC Milling</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> CNC Turning</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> CNC Laser Cutting</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> CNC Plasma Cutting</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> CNC Router</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col">
                    <h4 class="footer-title">Kontak Kami</h4>
                    <div class="footer-contact">
                        <div class="footer-contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="footer-contact-details">
                                <strong>Alamat Kantor</strong>
                                <span>Jl. Industri Raya No. 123<br>Jakarta Utara 14350</span>
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-phone"></i>
                            <div class="footer-contact-details">
                                <strong>Telepon</strong>
                                <span>+62 21 1234 5678</span>
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-envelope"></i>
                            <div class="footer-contact-details">
                                <strong>Email</strong>
                                <span>info@pioneercnc.co.id</span>
                            </div>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-clock"></i>
                            <div class="footer-contact-details">
                                <strong>Jam Operasional</strong>
                                <span>Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="footer-newsletter-section">
        <div class="footer-container">
            <div class="footer-newsletter">
                <div class="newsletter-info">
                    <h4><i class="fas fa-paper-plane"></i> Berlangganan Newsletter</h4>
                    <p>Dapatkan informasi terbaru tentang produk dan promo spesial</p>
                </div>
                <form class="newsletter-form">
                    <input type="email" placeholder="Masukkan email Anda" required>
                    <button type="submit">Berlangganan <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom-section">
        <div class="footer-container">
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; 2024 PT PIONEER CNC INDONESIA. All rights reserved.</p>
                </div>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Footer Styles - Tidak Tabrakan dengan Header */
    .site-footer {
        background: linear-gradient(135deg, #0f1f3a 0%, #1a365d 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .site-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.02"><polygon points="0,0 1000,100 0,100"></polygon></svg>');
        background-size: cover;
    }

    .footer-container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .footer-main {
        padding: 4rem 0 2rem;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 3rem;
    }

    /* Footer Column Styles */
    .footer-col h4.footer-title {
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        color: var(--gold);
        position: relative;
        padding-bottom: 10px;
        font-weight: 600;
    }

    .footer-col h4.footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background: var(--gold);
    }

    /* Company Info Section */
    .footer-logo-section {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 1.5rem;
    }

    .footer-logo {
        width: 60px;
        height: 60px;
        background: linear-gradient(45deg, var(--secondary), var(--gold));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
        flex-shrink: 0;
    }

    .footer-company-info {
        text-align: left;
    }

    .footer-company-name {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 5px;
        background: linear-gradient(to right, white, var(--gold));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .footer-tagline {
        font-size: 1rem;
        color: var(--gold);
        margin-bottom: 3px;
        font-weight: 500;
    }

    .footer-slogan {
        font-size: 0.85rem;
        color: #cbd5e0;
        font-style: italic;
    }

    .footer-desc {
        line-height: 1.7;
        margin-bottom: 2rem;
        color: #e2e8f0;
        font-size: 0.95rem;
    }

    /* Social Links */
    .footer-social {
        display: flex;
        gap: 12px;
    }

    .footer-social-link {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: var(--transition);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .footer-social-link:hover {
        background: var(--gold);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    /* Footer Navigation */
    .footer-nav {
        list-style: none;
    }

    .footer-nav li {
        margin-bottom: 12px;
    }

    .footer-nav a {
        color: #e2e8f0;
        text-decoration: none;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.95rem;
    }

    .footer-nav a:hover {
        color: var(--gold);
        transform: translateX(5px);
    }

    .footer-nav i {
        font-size: 0.7rem;
        color: var(--gold);
    }

    /* Contact Info */
    .footer-contact {
        display: flex;
        flex-direction: column;
        gap: 1.2rem;
    }

    .footer-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .footer-contact-item i {
        color: var(--gold);
        margin-top: 3px;
        font-size: 1.1rem;
        width: 20px;
        flex-shrink: 0;
    }

    .footer-contact-details {
        flex: 1;
    }

    .footer-contact-details strong {
        display: block;
        margin-bottom: 5px;
        color: white;
        font-size: 0.95rem;
    }

    .footer-contact-details span {
        color: #e2e8f0;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    /* Newsletter Section */
    .footer-newsletter-section {
        background: rgba(0, 0, 0, 0.3);
        padding: 2.5rem 0;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-newsletter {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
    }

    .newsletter-info h4 {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 5px;
        color: var(--gold);
        font-size: 1.3rem;
    }

    .newsletter-info p {
        color: #e2e8f0;
        margin: 0;
        font-size: 0.95rem;
    }

    .newsletter-form {
        display: flex;
        gap: 10px;
        flex: 0 0 400px;
    }

    .newsletter-form input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        color: white;
        font-size: 0.95rem;
        transition: var(--transition);
    }

    .newsletter-form input::placeholder {
        color: #cbd5e0;
    }

    .newsletter-form input:focus {
        outline: none;
        border-color: var(--gold);
        background: rgba(255, 255, 255, 0.15);
    }

    .newsletter-form button {
        background: linear-gradient(45deg, var(--secondary), var(--gold));
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: 600;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .newsletter-form button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Footer Bottom */
    .footer-bottom-section {
        background: rgba(0, 0, 0, 0.5);
        padding: 1.5rem 0;
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .footer-copyright p {
        margin: 0;
        color: #cbd5e0;
        font-size: 0.9rem;
    }

    .footer-legal {
        display: flex;
        gap: 2rem;
    }

    .footer-legal a {
        color: #cbd5e0;
        text-decoration: none;
        font-size: 0.9rem;
        transition: var(--transition);
    }

    .footer-legal a:hover {
        color: var(--gold);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
        }
        
        .footer-newsletter {
            flex-direction: column;
            text-align: center;
            gap: 1.5rem;
        }
        
        .newsletter-form {
            flex: none;
            width: 100%;
            max-width: 400px;
        }
    }

    @media (max-width: 768px) {
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .footer-logo-section {
            flex-direction: column;
            text-align: center;
            align-items: center;
        }
        
        .footer-bottom {
            flex-direction: column;
            gap: 1rem;
            text-align: center;
        }
        
        .footer-legal {
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }
        
        .newsletter-form {
            flex-direction: column;
        }
        
        .footer-main {
            padding: 3rem 0 1.5rem;
        }
        
        .footer-newsletter-section {
            padding: 2rem 0;
        }
    }

    @media (max-width: 480px) {
        .site-footer {
            text-align: center;
        }
        
        .footer-contact-item {
            justify-content: center;
        }
        
        .footer-social {
            justify-content: center;
        }
        
        .footer-company-info {
            text-align: center;
        }
    }
</style>

<script>
    // Newsletter Form Submission
    document.addEventListener('DOMContentLoaded', function() {
        const newsletterForm = document.querySelector('.newsletter-form');
        
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const emailInput = this.querySelector('input[type="email"]');
                const email = emailInput.value;
                
                if (email) {
                    // Simpan email ke localStorage (bisa diganti dengan AJAX request)
                    let subscribers = JSON.parse(localStorage.getItem('newsletterSubscribers') || '[]');
                    subscribers.push({
                        email: email,
                        date: new Date().toISOString()
                    });
                    localStorage.setItem('newsletterSubscribers', JSON.stringify(subscribers));
                    
                    // Tampilkan pesan sukses
                    alert('Terima kasih! Anda telah berlangganan newsletter kami.');
                    emailInput.value = '';
                }
            });
        }
    });
</script>