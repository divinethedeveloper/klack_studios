<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | KLACK Studios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../styles/nav.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        /* Hero */
        .about-hero {
            height: 60vh;
            min-height: 500px;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), 
                        url('../../assets/about.jpg');
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

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.7) 100%);
        }

        .about-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .about-hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .about-hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            opacity: 0;
            animation: fadeIn 1s ease 0.5s forwards;
        }

        /* About Section */
        .about-section {
            padding: 6rem 5vw;
            position: relative;
            background: var(--bg-dark);
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 4rem;
        }

        /* Our Story - Image + Text Layout */
        .our-story {
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .our-story-img {
            flex: 1;
            min-width: 300px;
        }

        .our-story-img img {
            width: 100%;
            border-radius: 8px;
            object-fit: cover;
            height: 400px;
        }

        .our-story-text {
            flex: 1;
            min-width: 300px;
        }

        .our-story-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .our-story-text p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        .our-story-text ul {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 1.5rem;
        }

        .our-story-text ul li {
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }

        .our-story-text ul li::before {
            content: '•';
            color: var(--primary);
            margin-right: 0.5rem;
        }

        /* Academy - Card-based Layout */
        .academy {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .academy-card {
            background: var(--bg-light);
            padding: 2rem;
            border-radius: 8px;
            text-align: center;
            transition: var(--transition);
        }

        .academy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .academy-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .academy-card p {
            color: var(--text-secondary);
        }

        /* Contact Us - Centered with Icons */
        .contact-us {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-us h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-us p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        .contact-us .contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .contact-us .contact-item i {
            color: var(--primary);
            font-size: 1.5rem;
        }

        /* Stats Section */
        .about-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
            text-align: center;
        }

        .stat-item {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .stat-item.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Social Section */
        .social-section {
            padding: 4rem 5vw;
            background: var(--bg-light);
            text-align: center;
        }

        .social-section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .social-links a {
            color: var(--text-primary);
            text-decoration: none;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .social-links a:hover {
            color: var(--primary);
            transform: translateY(-3px);
        }

        /* Team Section */
        .team-section {
            padding: 6rem 5vw;
            background: var(--bg-light);
            position: relative;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .team-member {
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .team-member.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .team-member img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .team-member h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .team-member p {
            color: var(--text-secondary);
            font-size: 0.9rem;
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
            .our-story {
                flex-direction: column;
            }
            .academy {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar .nav-links {
                display: none;
            }
            .about-hero {
                height: 50vh;
                min-height: 400px;
                margin-top: 70px;
            }
            .stat-item {
                min-width: 150px;
            }
        }

        @media (max-width: 480px) {
            .about-hero h1 {
                font-size: 2rem;
            }
            .our-story-text h2,
            .academy-card h3,
            .contact-us h2 {
                font-size: 2rem;
            }
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php require_once '../../components/nav.php'?>

    <section class="about-hero">
        <div class="about-hero-content">
            <h1>About KLACK Studios</h1>
            <p>Discover the passion and vision behind KLACK Studios, where we craft cinematic excellence with creativity and innovation.</p>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <div class="our-story">
                <div class="our-story-img">
                    <img src="https://source.unsplash.com/random/600x400/?cinema" alt="KLACK Studios">
                </div>
                <div class="our-story-text">
                    <h2>Our Story</h2>
                    <p>Founded on August 27, 2015, by visionary filmmaker Eddie Bills in Accra, Ghana, KLACK Studios has risen to prominence as a beacon of cinematic excellence. We are committed to pushing the boundaries of visual storytelling through innovation and professionalism, creating compelling content across films, scripted series, comedy skits, music videos, and documentaries.</p>
                    <p>Our premier cinematography services include:</p>
                    <ul>
                        <li>Photography</li>
                        <li>Videography</li>
                        <li>Engagements & Weddings</li>
                        <li>Outdooring Ceremonies</li>
                        <li>Graduations & Events</li>
                    </ul>
                    <p>From event coverage to collaborative film projects, KLACK Studios is your partner in transforming visions into reality.</p>
                </div>
            </div>

            <div class="academy">
            <div class="academy-card">
                    <h3>Acting</h3>
                    <p>Master the art of performance with our expert-led acting courses, designed to unlock your on-screen potential.</p>
                </div>
                <div class="academy-card">
                    <h3>Directing</h3>
                    <p>Learn to lead with vision, shaping stories that captivate audiences through our directing program.</p>
                </div>
                <div class="academy-card">
                    <h3>Cinematography</h3>
                    <p>Explore the craft of visual storytelling with hands-on training in camera and lighting techniques.</p>
                </div>
                <div class="academy-card">
                    <h3>Scriptwriting & Post-production</h3>
                    <p>Craft compelling narratives and transform raw footage into polished masterpieces with our combined course.</p>
                </div>
            </div>

            <div class="contact-us">
                <h2>Contact Us</h2>
                <p>Ready to bring your story to life or join our academy? Get in touch with us today!</p>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>Call or WhatsApp: 0544709730</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location: Accra, Ghana</span>
                </div>
            </div>

            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-number" data-target="10">0</div>
                    <div class="stat-label">Years of Excellence</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="17">0</div>
                    <div class="stat-label">Awards Won</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="53">0</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
            </div>
        </div>
    </section>

    <section class="social-section">
        <h2>Connect With Us</h2>
        <div class="social-links">
            <a href="https://www.facebook.com/KLACKStudios" target="_blank">Facebook: KLACK Studios</a>
            <a href="https://www.youtube.com/c/KlackStudios" target="_blank">YouTube: Klack Studios</a>
            <a href="https://www.tiktok.com/@klackstudios" target="_blank">TikTok: @klackstudios</a>
            <a href="https://www.tiktok.com/@blaqcinema1" target="_blank">TikTok: @blaqcinema1</a>
            <a href="https://www.instagram.com/klackstudios" target="_blank">Instagram: @klackstudios</a>
        </div>
        <p style="margin-top: 1.5rem; color: var(--text-secondary);">Follow us for the latest projects, casting calls, and behind-the-scenes content!</p>
    </section>

    <section class="team-section">
        <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Eddie Bills">
                <h3>Eddie Bills</h3>
                <p>CEO, Creative Director & Editor</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="David Ofori Kissi">
                <h3>David Ofori Kissi</h3>
                <p>Production Manager</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Victor Honney Forson">
                <h3>Victor Honney Forson</h3>
                <p>Assistant Manager</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Freda Opoku Baah">
                <h3>Freda Opoku Baah</h3>
                <p>Financial Manager</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Emmanuel Baah Donkor">
                <h3>Emmanuel Baah Donkor</h3>
                <p>Assistant Director</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Otoo Dennis Joe">
                <h3>Otoo Dennis Joe</h3>
                <p>D.O.P</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Godwin Abo Niidjan">
                <h3>Godwin Abo Niidjan</h3>
                <p>D.O.P</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Victor Honney Forson">
                <h3>Victor Honney Forson</h3>
                <p>D.O.P</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt="Jamiah Hustern">
                <h3>Jamiah Hustern</h3>
                <p>Organizer & Continuity</p>
            </div>
        </div>
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
            <a href="https://www.facebook.com/KLACKStudios" target="_blank">Facebook</a>
            <a href="https://www.youtube.com/c/KlackStudios" target="_blank">YouTube</a>
            <a href="https://www.tiktok.com/@klackstudios" target="_blank">TikTok</a>
            <a href="https://www.instagram.com/klackstudios" target="_blank">Instagram</a>
        </div>
        <p class="footer-copyright">© 2025 KLACK Studios. All rights reserved.</p>
    </footer>

    <script src='../../scripts/nav.js'></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    // Animate team members on scroll
    const teamMembers = document.querySelectorAll('.team-member');
    const teamObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('animated');
                }, index * 200);
            }
        });
    }, { threshold: 0.1 });

    teamMembers.forEach(member => {
        teamObserver.observe(member);
    });

    // Animate stats numbers sequentially on scroll
    const statItems = document.querySelectorAll('.stat-item');
    const statObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                animateStat(entry.target, 500 * index); // Delay each animation
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, { threshold: 0.5 });

    statItems.forEach(item => {
        statObserver.observe(item);
    });

    function animateStat(item, delay) {
        setTimeout(() => {
            const statNumber = item.querySelector('.stat-number');
            const target = parseInt(statNumber.getAttribute('data-target'));
            let count = 0;
            const duration = 3000; // Total animation duration (in milliseconds) - slower
            const startTime = performance.now();

            function updateCount(currentTime) {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / duration, 1);
                count = Math.ceil(target * progress);
                statNumber.textContent = count + (progress === 1 ? '+' : '');

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                }
            }

            requestAnimationFrame(updateCount);
            item.classList.add('animated');
        }, delay);
    }
</script>
</body>
</html>