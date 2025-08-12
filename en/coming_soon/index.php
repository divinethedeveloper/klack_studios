<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | KLACK Studios</title>
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
        .coming-soon-hero {
            height: 60vh;
            min-height: 500px;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=2070&auto=format&fit=crop');
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

        .coming-soon-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.7) 100%);
        }

        .coming-soon-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .coming-soon-hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .coming-soon-hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            opacity: 0;
            animation: fadeIn 1s ease 0.5s forwards;
        }

        /* Countdown */
        .countdown {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 3rem 0;
            opacity: 0;
            animation: fadeIn 1s ease 0.8s forwards;
        }

        .countdown-item {
            text-align: center;
            min-width: 100px;
        }

        .countdown-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .countdown-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--text-secondary);
        }

        /* Coming Soon Grid */
        .coming-soon-section {
            padding: 6rem 5vw;
            position: relative;
            background: var(--bg-dark);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 1rem;
        }

        .section-title {
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary);
        }

        .section-filter {
            display: flex;
            gap: 1rem;
        }

        .filter-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: var(--text-primary);
            border-color: var(--primary);
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 2/3;
            background: var(--bg-light);
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(20px);
        }

        .grid-item.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .grid-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .grid-item:hover img {
            transform: scale(1.05);
            opacity: 0.8;
        }

        .grid-item-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            opacity: 0;
            transition: var(--transition);
        }

        .grid-item:hover .grid-item-overlay {
            opacity: 1;
        }

        .grid-item-title {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .grid-item:hover .grid-item-title {
            transform: translateY(0);
        }

        .grid-item-description {
            font-size: 1rem;
            color: var(--text-secondary);
            transform: translateY(20px);
            transition: var(--transition);
            transition-delay: 0.1s;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .grid-item:hover .grid-item-description {
            transform: translateY(0);
        }

        .grid-item-release {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background: var(--primary);
            color: var(--text-primary);
            font-size: 0.8rem;
            border-radius: 4px;
            transform: translateY(20px);
            transition: var(--transition);
            transition-delay: 0.2s;
        }

        .grid-item:hover .grid-item-release {
            transform: translateY(0);
        }

        /* Newsletter */
        .newsletter {
            background: var(--bg-light);
            padding: 5rem 5vw;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .newsletter p {
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-input {
            flex: 1;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
            font-size: 1rem;
            border-radius: 4px 0 0 4px;
            transition: var(--transition);
        }

        .newsletter-input:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 94, 26, 0.1);
        }

        .newsletter-btn {
            padding: 0 2rem;
            background: var(--primary);
            color: var(--text-primary);
            border: none;
            border-radius: 0 4px 4px 0;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .newsletter-btn:hover {
            background: var(--primary-dark);
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
            .countdown {
                gap: 1rem;
            }
            
            .countdown-item {
                min-width: 80px;
            }
            
            .countdown-number {
                font-size: 2.5rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar .nav-links {
                display: none;
            }
            
            .coming-soon-hero {
                height: 50vh;
                min-height: 400px;
                margin-top: 70px;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .section-filter {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 0.5rem;
            }
            
            .countdown {
                gap: 0.5rem;
            }
            
            .countdown-item {
                min-width: 70px;
            }
            
            .countdown-number {
                font-size: 2rem;
            }
            
            .newsletter-form {
                flex-direction: column;
                gap: 1rem;
            }
            
            .newsletter-input, .newsletter-btn {
                border-radius: 4px;
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .countdown-number {
                font-size: 1.5rem;
            }
            
            .countdown-label {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
<?php require_once '../../components/nav.php'?>

    
    <section class="coming-soon-hero">
        <div class="coming-soon-hero-content">
            <h1>Coming Soon</h1>
            <p>Discover our upcoming cinematic experiences. Be the first to witness these extraordinary stories.</p>
            
            <div class="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="days">00</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="hours">00</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="minutes">00</div>
                    <div class="countdown-label">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="seconds">00</div>
                    <div class="countdown-label">Seconds</div>
                </div>
            </div>
        </div>
    </section>

    <section class="coming-soon-section">
        <div class="section-header">
            <h2 class="section-title">Upcoming Releases</h2>
            <div class="section-filter">
                <button class="filter-btn active">All</button>
                <button class="filter-btn">Movies</button>
                <button class="filter-btn">Series</button>
                <button class="filter-btn">Documentaries</button>
            </div>
        </div>
        
        <div class="grid">
            <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 1">
            <div class="grid-item-overlay">
                    <h3 class="grid-item-title">Eternal Kingdom</h3>
                    <p class="grid-item-description">Embark on an epic journey through a mythical realm where ancient prophecies guide a young hero to unite warring kingdoms. With breathtaking battles and stunning landscapes, this fantasy adventure promises to captivate audiences of all ages.</p>
                    <span class="grid-item-release">June 15, 2024</span>
                </div>
            </div>
            <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 1">
            <div class="grid-item-overlay">
                    <h3 class="grid-item-title">Neon Horizon</h3>
                    <p class="grid-item-description">In a futuristic city shrouded in neon lights, a rogue AI detective uncovers a conspiracy that threatens humanity. This sci-fi thriller blends high-tech action with deep emotional stakes, offering a visually spectacular experience.</p>
                    <span class="grid-item-release">July 22, 2024</span>
                </div>
            </div>
            <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 1">
            <div class="grid-item-overlay">
                    <h3 class="grid-item-title">Shadows & Lies</h3>
                    <p class="grid-item-description">A hard-boiled detective navigates the gritty underworld of a rain-soaked city to solve a murder that unravels a web of corruption. This noir masterpiece delivers suspense, intrigue, and unforgettable characters.</p>
                    <span class="grid-item-release">August 5, 2024</span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="newsletter">
        <h2>Stay Updated</h2>
        <p>Subscribe to our newsletter for exclusive updates, behind-the-scenes content, and early access to tickets.</p>
        <form class="newsletter-form">
            <input type="email" class="newsletter-input" placeholder="Your email address" required>
            <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
    </section>
    
    <footer class="footer">
        <div class="footer-logo">KLACK STUDIOS</div>
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


    <script>
        // Countdown Timer
        function updateCountdown() {
            const targetDate = new Date('October 15, 2025 00:00:00').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }
        
        updateCountdown();
        setInterval(updateCountdown, 1000);
        
        // Animate grid items on scroll
        const gridItems = document.querySelectorAll('.grid-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, index * 100);
                }
            });
        }, { threshold: 0.1 });
        
        gridItems.forEach(item => {
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(item);
        });
        
        // Filter buttons
        const filterBtns = document.querySelectorAll('.filter-btn');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                // Here you would add filtering logic
            });
        });
    </script>