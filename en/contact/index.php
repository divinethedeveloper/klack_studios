<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | KLACK Studios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../styles/nav.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ff5e1a;
            --primary-dark: #e04b00;
            --bg-dark: #0a0a0a;
            --bg-light: #1a1a1a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem 5vw;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(10, 10, 10, 0.98);
            z-index: 100;
            transition: var(--transition);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary);
            letter-spacing: -1px;
            text-decoration: none;
        }

        .navbar .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .navbar .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            position: relative;
            transition: var(--transition);
        }

        .navbar .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--primary);
            transition: var(--transition);
        }

        .navbar .nav-links a:hover {
            color: var(--text-primary);
        }

        .navbar .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero */
        .contact-hero {
            height: 60vh;
            min-height: 500px;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 5vw;
            position: relative;
            margin-top: 80px;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.7) 100%);
        }

        .contact-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .contact-hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .contact-hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            opacity: 0;
            animation: fadeIn 1s ease 0.5s forwards;
        }

        /* Contact Section */
        .contact-section {
            padding: 6rem 5vw;
            position: relative;
            background: var(--bg-dark);
        }

        .contact-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info {
            padding: 2rem;
            background: var(--bg-light);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-detail {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .contact-detail i {
            color: var(--primary);
            font-size: 1.2rem;
        }

        .contact-detail span {
            color: var(--text-secondary);
        }

        .contact-form {
            padding: 2rem;
            background: var(--bg-light);
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .contact-form h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
            border-radius: 4px;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 94, 26, 0.1);
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .submit-btn {
            padding: 0.9rem 2.5rem;
            background: var(--primary);
            color: var(--text-primary);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .submit-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 94, 26, 0.2);
        }

        /* Map Section */
        .map-section {
            padding: 6rem 5vw;
            background: var(--bg-light);
            position: relative;
        }

        .map-placeholder {
            height: 400px;
            background: #333;
            border-radius: 8px;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .map-placeholder.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Footer */
        .footer {
            background: var(--bg-dark);
            padding: 4rem 5vw;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--text-primary);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .footer-social a {
            color: var(--text-secondary);
            font-size: 1.5rem;
            transition: var(--transition);
        }

        .footer-social a:hover {
            color: var(--primary);
            transform: translateY(-3px);
        }

        .footer-copyright {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Animations */
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .contact-content {
                grid-template-columns: 1fr;
            }
            .map-placeholder {
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .navbar .nav-links {
                display: none;
            }
            .contact-hero {
                height: 50vh;
                min-height: 400px;
                margin-top: 70px;
            }
            .contact-info, .contact-form {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .contact-hero h1 {
                font-size: 2rem;
            }
            .contact-info h2, .contact-form h2 {
                font-size: 2rem;
            }
            .map-placeholder {
                height: 200px;
            }
        }
    </style>
</head>
<body>

    <?php require_once '../../components/nav.php'?>

    
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1>Contact Us</h1>
            <p>Get in touch with KLACK Studios for inquiries, partnerships, or to join our creative community.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <div class="contact-details">
                    <div class="contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Accra, Ghana</span>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-phone"></i>
                        <span>+233 54 470 9730</span>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-envelope"></i>
                        <span>info@KLACKstudios.online</span>
                    </div>
                    <div class="contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>Mon-Fri: 9 AM - 6 PM (GMT)</span>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h2>Get in Touch</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <section class="map-section">
        <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Find Us</h2>
        <div class="map-placeholder">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1981.809158888067!2d-0.3384069!3d5.5553627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgh!4v1699999999999"                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                >
            </iframe>
        </div>
    </section>
    
    <footer class="footer">
        <div class="footer-logo logo">KLACK STUDIOS</div>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Careers</a>
            <a href="#">Press</a>
            <a href="#">Contact</a>
        </div>
        <div class="footer-social">
            <a href="#">⌨</a>
            <a href="#">⌨</a>
            <a href="#">⌨</a>
            <a href="#">⌨</a>
        </div>
        <p class="footer-copyright">© 2024 KLACK Studios. All rights reserved.</p>
    </footer>
    <script src='../../scripts/nav.js'></script>


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Animate map section on scroll
        const mapPlaceholder = document.querySelector('.map-placeholder');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, { threshold: 0.1 });

        observer.observe(mapPlaceholder);
    </script>
</body>
</html>