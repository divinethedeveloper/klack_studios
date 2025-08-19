<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO Meta Tags -->
  <title>KLACK Studios | Premium Production</title>
  <meta name="title" content="KLACK Studios | Premium Production">
  <meta name="description" content="KLACK Studios offers premium film and media production services. Creative direction, cinematography, editing, and storytelling for brands and businesses.">
  <meta name="keywords" content="KLACK Studios, film production, video editing, cinematography, media production, creative studio, Ghana film, production house">
  <meta name="author" content="KLACK Studios">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://klackstudios.online/">
  <meta property="og:title" content="KLACK Studios | Premium Production">
  <meta property="og:description" content="Premium film and media production services for brands and businesses.">
  <meta property="og:image" content="https://klackstudios.online/android-chrome-512x512.png">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://klackstudios.online/">
  <meta name="twitter:title" content="KLACK Studios | Premium Production">
  <meta name="twitter:description" content="Premium film and media production services for brands and businesses.">
  <meta name="twitter:image" content="https://klackstudios.online/android-chrome-512x512.png">

  <!-- Favicons (relative path) -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
  <link rel="manifest" href="../../site.webmanifest">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">

  <!-- Fonts & Styles -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../styles/nav.css">
  <link rel="stylesheet" href="../../styles/footer.css">

  
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

        .container {
            position: relative;
            width: 100%;
            min-height: 100vh;
        }

        
        /* Hero Section */
        .hero {
            height: 100vh;
            width: 100%;
            background: url(../../assets/photo-1612977060650-77024e7aac63.jpg), rgba(0, 0, 0, 0.59);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            padding: 0 10vw;
            background-blend-mode: overlay;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 50%;
            opacity: 0;
            /* animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards; */
        }
        .hero-content.active{
            transform: translateY(30px);
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards;

        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            max-width: 80%;
            opacity: 0;
            margin-left: -5rem;
            
        }
        .hero-subtitle.active{
            animation: fadeIn .9s ease 0.8s forwards;
            margin-left: 0rem

        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.9rem 2.5rem;
            background: var(--primary);
            color: var(--text-primary);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: none;
            cursor: pointer;
            opacity: 0;
        }

        .btn.active{
            animation: fadeIn 1.5s ease 1.2s forwards;


        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 94, 26, 0.2);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-secondary {
            background: transparent !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            margin-left: 1rem;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.4);
        }

        /* Content Section */
        .section {
            padding: 8rem 5vw;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
        }

        .grid-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 4/3;
            background: var(--bg-light);
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
             display: flex;
            align-items: center;
            justify-content: center;
        }

        .grid-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .grid-item img {
            position: absolute;
            left: 0;
            top:-15%;
             height: 130%;
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
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .grid-item:hover .grid-item-title {
            transform: translateY(0);
        }

        .grid-item-meta {
            font-size: 0.9rem;
            color: var(--text-secondary);
            transform: translateY(20px);
            transition: var(--transition);
            transition-delay: 0.1s;
        }

        .grid-item:hover .grid-item-meta {
            transform: translateY(0);
        }

        

        

        .apply-section {
            padding: 8rem 5vw;
            background: var(--bg-light);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .apply-content {
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
        }

        .section-title {
            font-size: 2.5rem;
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary);
        }

        .apply-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            animation: fadeIn 1s ease 0.3s forwards;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.9rem 2.5rem;
            background: var(--primary);
            color: var(--text-primary);
            text-decoration: none;
            border-radius: 50px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: none;
            cursor: pointer;
            opacity: 0;
            animation: fadeIn 0.5s ease 0.6s forwards;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 94, 26, 0.2);
        }

        .btn:hover::before {
            left: 100%;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .apply-section {
                padding: 5rem 5vw;
            }

            .section-title {
                font-size: 2rem;
            }

            .apply-subtitle {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .apply-section {
                padding: 3rem 3vw;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .apply-subtitle {
                font-size: 1rem;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
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
            .hero-content {
                max-width: 70%;
            }
        }

        @media (max-width: 768px) {
         
            
            .hero-content {
                max-width: 100%;
                text-align: center;
            }
            
            .hero-subtitle {
                max-width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
            
            .btn-group {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-secondary {
                margin-left: 0;
            }
            
            .side-panel {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .section {
                padding: 5rem 5vw;
            }
            
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

</head>
<body>

    <?php require_once '../../components/nav.php'?>
   
    
    <div class="container">
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Dead End : Season 01</h1>
                <p class="hero-subtitle">An epic tale of honor and betrayal set against the rugged landscapes of medieval Wales. Coming this fall to theaters worldwide.</p>
                <div class="btn-group">
                    <a href="https://youtu.be/PCR1Fu6Q7W8?t=92" class="btn">Stream Now</a>
                    <a href="https://www.youtube.com/watch?v=WOaog9TQV4Y&pp=ygUNa2xhY2sgc3R1ZGlvIA%3D%3D" class="btn btn-secondary">Watch Trailer</a>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Featured Productions</h2>
            <div class="grid">
                <div class="grid-item">
                <img src="https://img.youtube.com/vi/vX6emjxWoB0/hqdefault.jpg" alt="Dead End – Season 1 Episode 3 Thumbnail">
                <div class="grid-item-overlay">
                        <h3 class="grid-item-title">Dead End : Season 1</h3>
                        <p class="grid-item-meta">2025 • Horror • 2h 18m</p>
                    </div>
                </div>
                <div class="grid-item">
                <img src="https://img.youtube.com/vi/g_8QzqK-jpQ/hqdefault.jpg" alt="Dead End – Season 1 Episode 3 Thumbnail">
                    <div class="grid-item-overlay">
                        <h3 class="grid-item-title">Far From School</h3>
                        <p class="grid-item-meta">2025 • Drama • 1h 52m</p>
                    </div>
                </div>
                 <div class="grid-item" onclick="window.open('https://www.youtube.com/watch?v=__ddctNqkR4', '_blank')">
                    <img src="https://img.youtube.com/vi/__ddctNqkR4/hqdefault.jpg" alt="The Last Letter Thumbnail">
                    <div class="grid-item-overlay">
                        <h3 class="grid-item-title">Ghost in the Mirror</h3>
                        <p class="grid-item-meta">2025 • Horror • 2h 5m</p>
                    </div>
                </div>

                <div class="grid-item" onclick="window.open('https://www.youtube.com/watch?v=R-pKW7Sr_-g', '_blank')">
                <img src="https://img.youtube.com/vi/R-pKW7Sr_-g/hqdefault.jpg" alt="Heart Strings Thumbnail">
                    <div class="grid-item-overlay">
                        <h3 class="grid-item-title">Heart Strings</h3>
                        <p class="grid-item-meta">2024 • Romance • 0h 23m</p>
                    </div>
                </div>
              

            </div>
        </section>
        
        <section class="section" style="background: var(--bg-light);">
    <h2 class="section-title">Coming Soon</h2>
    <div class="grid">
        <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 1">
            <div class="grid-item-overlay">
                <h3 class="grid-item-title">Night at Kotokraba</h3>
                <p class="grid-item-meta">2025 • Thriller • Coming March</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 2">
            <div class="grid-item-overlay">
                <h3 class="grid-item-title">When the Rain Fell</h3>
                <p class="grid-item-meta">2025 • Drama • Coming May</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 3">
            <div class="grid-item-overlay">
                <h3 class="grid-item-title">Love on the TroTro</h3>
                <p class="grid-item-meta">2024 • Romance • Coming July</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="https://www.moviecomps.com/space/comingsoon.jpg" alt="Coming Soon 4">
            <div class="grid-item-overlay">
                <h3 class="grid-item-title">The Spirit by the Cocoa Farm</h3>
                <p class="grid-item-meta">2025 • Horror • Coming September</p>
            </div>
        </div>
    </div>
</section>

    </div>

    <section class="apply-section">
        <div class="apply-content">
            <h2 class="section-title">Join Our Talent Pool</h2>
            <p class="apply-subtitle">Are you ready to shine on the big screen? Apply now to become part of KLACK Studios' exciting upcoming productions.</p>
            <a href="../apply" class="btn">Apply Now</a>
        </div>
    </section>
 
    <?php require_once "../../components/footer.php"?>


   

    <script src='../../scripts/nav.js'></script>

    <script>
     

    
        // Animate grid items on scroll
        const gridItems = document.querySelectorAll('.grid-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        gridItems.forEach((item, index) => {
            item.style.opacity = 0;
            item.style.transform = 'translateY(20px)';
            item.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
            observer.observe(item);
        });
    </script>
</body>
</html>

