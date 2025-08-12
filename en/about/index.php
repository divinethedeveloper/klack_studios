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
            gap: 3rem;
        }

        .about-text {
            max-width: 700px;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .about-text p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
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
            .about-content {
                gap: 2rem;
            }
            .team-grid {
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
            .about-text {
                max-width: 100%;
            }
            .stat-item {
                min-width: 150px;
            }
        }

        @media (max-width: 480px) {
            .about-hero h1 {
                font-size: 2rem;
            }
            .about-text h2 {
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
            <h1>About Us</h1>
            <p>Learn about the vision and passion driving KLACK Studios to create world-class cinematic experiences.</p>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Founded by visionary filmmaker Eddie Bills on August 27, 2015, in Accra, Ghana, KLACK Studios has rapidly become one of the most professional and competent production houses in the country.

                At KLACK Studios, we are dedicated to elevating the standards of visual storytelling through innovation, creativity, and professionalism. From filmmaking and scripted series to comedy skits, music videos, and documentaries, we bring a fresh perspective to the world of cinema.

                We also offer top-tier cinematography services, including:</p>

                <p>
                    <strong>Photography</strong>
                    <br>
                    <strong>Videography</strong>
                    <br>
                    <strong>Engagements & Weddings</strong>
                    <br>
                    <strong>Outdooring Ceremonies</strong>
                    <br>
                    <strong>Graduations and Events</strong>

                </p>
                <p>Whether you're looking to hire professionals for your event, collaborate on a film, or pursue your passion for acting or filmmaking, KLACK Studios is the right place for you.
                </p>


            </div>

            <div class="about-text">
                <h2>KLACK Studios Academy</h2>
                <p>Passionate about acting? Dreaming of becoming a movie actor or actress? Interested in learning how to operate cameras, lights, and gear behind the scenes?

                Join the KLACK Studios Academy, where we train and mentor the next generation of creatives in: </p>

                <p>
                    <strong>Acting</strong>
                    <br>
                    <strong>Directing</strong>
                    <br>
                    <strong>Cinematography</strong>
                    <br>
                    <strong>Scriptwriting</strong>
                    <br>
                    <strong>Editing & Post-production</strong>

                </p>
                <p>Whether you're looking to hire professionals for your event, collaborate on a film, or pursue your passion for acting or filmmaking, KLACK Studios is the right place for you.</p>


            </div>
            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Years of Excellence</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">17+</div>
                    <div class="stat-label">Awards Won</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">53+</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <h2 class="section-title" style="text-align: center; margin-bottom: 3rem;">Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Eddie Bills</h3>
                <p>CEO, Creative Director & Editor</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>David Ofori Kissi</h3>
                <p>Production Manager</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Victor Honney Forson</h3>
                <p>Assistant Manager</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Freda Opoku Baah</h3>
                <p>Financial Manager</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Emmanuel Baah Donkor</h3>
                <p>Assistant Director</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Otoo Dennis Joe</h3>
                <p>D.O.P</p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Godwin Abo Niidjan</h3>
                <p>D.O.P</p>
            </div>
      
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Victor Honney Forson</h3>
                <p>DO.P </p>
            </div>
            <div class="team-member">
                <img src="https://source.unsplash.com/random/300x300/?portrait" alt=".">
                <h3>Jamiah Hustern</h3>
                <p>Oranizer & Continuity</p>
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
            <a href="#">⌨</a>
            <a href="#">⌨</a>
            <a href="#">⌨</a>
            <a href="#">⌨</a>
        </div>
        <p class="footer-copyright">© 2024 KLACK Studios. All rights reserved.</p>
    </footer>
    <script src='../../scripts/nav.js'></script>


    <script>
        // Animate team members on scroll
        const teamMembers = document.querySelectorAll('.team-member');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, index * 200);
                }
            });
        }, { threshold: 0.1 });

        teamMembers.forEach(member => {
            observer.observe(member);
        });
    </script>
</body>
</html>