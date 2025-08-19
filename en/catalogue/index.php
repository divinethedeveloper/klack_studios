<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title>Catalog | KLACK Studios</title>
  <meta name="title" content="Catalog | KLACK Studios">
  <meta name="description" content="Explore the KLACK Studios catalog — premium film, photography, and creative production services. Discover our work, portfolio, and exclusive offerings.">
  <meta name="keywords" content="KLACK Studios catalog, film portfolio, photography, creative production, cinematography, media services, Ghana">
  <meta name="author" content="KLACK Studios">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://klackstudios.online/catalog">
  <meta property="og:title" content="Catalog | KLACK Studios">
  <meta property="og:description" content="Browse the KLACK Studios catalog — showcasing premium creative works, film, photography, and production services.">
  <meta property="og:image" content="https://klackstudios.online/android-chrome-512x512.png">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://klackstudios.online/catalog">
  <meta name="twitter:title" content="Catalog | KLACK Studios">
  <meta name="twitter:description" content="Browse the KLACK Studios catalog — showcasing premium creative works, film, photography, and production services.">
  <meta name="twitter:image" content="https://klackstudios.online/android-chrome-512x512.png">

  <!-- Favicons -->
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
        .catalog-hero {
            height: 60vh;
            min-height: 500px;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)), 
                        url('https://i.ytimg.com/vi/d23YGRnsD5Y/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAOKOeJgZgG4dRuZl-HPz9uRaA80A');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 5vw;
            position: relative;
         }

        .catalog-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.7) 100%);
        }

        .catalog-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .catalog-hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .catalog-hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            opacity: 0;
            animation: fadeIn 1s ease 0.5s forwards;
        }

        /* Catalog Section */
        .catalog-section {
            padding: 6rem 5vw;
            position: relative;
            background: var(--bg-dark);
        }

        .catalog-header {
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

        .filter-sort {
            display: flex;
            gap: 1rem;
        }

        .filter-btn, .sort-btn {
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn:hover, .filter-btn.active, .sort-btn:hover, .sort-btn.active {
            background: var(--primary);
            color: var(--text-primary);
            border-color: var(--primary);
        }

        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .catalog-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 3/2;
            background: var(--bg-light);
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transform: translateY(20px);
        }
        .catalog-item iframe{
            height: 100%;
            width: 100%;

        }

        .catalog-item.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .catalog-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .catalog-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .catalog-item:hover img {
            transform: scale(1.05);
            opacity: 0.8;
        }

        .catalog-item-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            opacity: 0;
            transition: var(--transition);
        }

        .catalog-item:hover .catalog-item-overlay {
            opacity: 1;
        }

        .catalog-item-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .catalog-item:hover .catalog-item-title {
            transform: translateY(0);
        }

        .catalog-item-meta {
            font-size: 0.9rem;
            color: var(--text-secondary);
            transform: translateY(20px);
            transition: var(--transition);
            transition-delay: 0.1s;
        }

        .catalog-item:hover .catalog-item-meta {
            transform: translateY(0);
        }

        .catalog-item-year {
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

        .catalog-item:hover .catalog-item-year {
            transform: translateY(0);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 3rem;
            opacity: 0;
            animation: fadeIn 1s ease 0.5s forwards;
        }

        .page-btn {
            padding: 0.5rem 1rem;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
        }

        .page-btn:hover, .page-btn.active {
            background: var(--primary);
            color: var(--text-primary);
            border-color: var(--primary);
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
            .catalog-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            .filter-sort {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        @media (max-width: 768px) {
            .navbar .nav-links {
                display: none;
            }
            .catalog-hero {
                height: 50vh;
                min-height: 400px;
                margin-top: 70px;
            }
            .catalog-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .filter-sort {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .catalog-item-title {
                font-size: 1.1rem;
            }
            .catalog-item-meta {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <?php require_once '../../components/nav.php'?>
    
    
    <section class="catalog-hero">
        <div class="catalog-hero-content">
            <h1>Our Catalog</h1>
            <p>Explore the full collection of KLACK Studios' award-winning films and series, spanning genres and decades.</p>
        </div>
    </section>

    <section class="catalog-section">
        <div class="catalog-header">
            <h2 class="section-title">Featured Works</h2>
            <div class="filter-sort">
                <select class="filter-btn" onchange="filterCatalog(this.value)">
                    <option value="all">All Genres</option>
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="comedy">Comedy</option>
                </select>
                <select class="sort-btn" onchange="sortCatalog(this.value)">
                    <option value="release-desc">Release (Newest)</option>
                    <option value="release-asc">Release (Oldest)</option>
                    <option value="title-asc">Title (A-Z)</option>
                    <option value="title-desc">Title (Z-A)</option>
                </select>
            </div>
        </div>
                
        <div class="catalog-grid" id="catalogGrid">


        <div class="catalog-item" data-genre="series" data-year="2025">
            <iframe src="https://www.youtube.com/embed/uGkHx-cTacY" frameborder="0" allowfullscreen></iframe>
            <div class="catalog-item-overlay">
                <h3 class="catalog-item-title">Dead End – Season 1 Episode 1: "The Night Before"</h3>
                <p class="catalog-item-meta">KLACK STUDIOS | 26m 15s</p>
                <span class="catalog-item-year">2025</span>
            </div>
        </div>
    
        <div class="catalog-item" data-genre="series" data-year="2025">
            <iframe src="https://www.youtube.com/embed/d23YGRnsD5Y" frameborder="0" allowfullscreen></iframe>
            <div class="catalog-item-overlay">
                <h3 class="catalog-item-title">Dead End – Season 1 Episode 2: "The Arrival"</h3>
                <p class="catalog-item-meta">KLACK STUDIOS | 15m 32s</p>
                <span class="catalog-item-year">2025</span>
            </div>
        </div>

        <div class="catalog-item" data-genre="teaser" data-year="2025">
            <iframe src="https://www.youtube.com/embed/WOaog9TQV4Y" frameborder="0" allowfullscreen></iframe>
            <div class="catalog-item-overlay">
                <h3 class="catalog-item-title">JOURNEY OF NO RETURN || TEASER'</h3>
                <p class="catalog-item-meta">KLACK STUDIOS | 3m 3s</p>
                <span class="catalog-item-year">2025</span>
            </div>
        </div>
            
        
        
        
        <div class="catalog-item" data-genre="series" data-year="2025">
                <iframe src="https://www.youtube.com/embed/lPAE7DROdWk" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">FAR FROM SCHOOL EP 05</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 22m 22s</p>
                    <span class="catalog-item-year">2025</span>
                </div>
            </div>
            
            <div class="catalog-item" data-genre="movie" data-year="2025">
                <iframe src="https://www.youtube.com/embed/UbMppZf8feY" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">GHOST IN THE MIRROR VOLUME II</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 1h 28m</p>
                    <span class="catalog-item-year">2025</span>
                </div>
            </div>

            <div class="catalog-item" data-genre="trailer" data-year="2024">
                <iframe src="https://www.youtube.com/embed/3tApRnR8hIo" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">Ghost in the Mirror Official Trailer</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 1m 21s</p>
                    <span class="catalog-item-year">2024</span>
                </div>
            </div>

            <div class="catalog-item" data-genre="series" data-year="2025">
                <iframe src="https://www.youtube.com/embed/g_8QzqK-jpQ" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">FAR FROM SCHOOL EP 01</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 22m 57s</p>
                    <span class="catalog-item-year">2025</span>
                </div>
            </div>

            <div class="catalog-item" data-genre="series" data-year="2025">
                <iframe src="https://www.youtube.com/embed/eUlykhIK51o" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">School Ghost (EP 02)</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 22m 39s</p>
                    <span class="catalog-item-year">2025</span>
                </div>
            </div>

            <div class="catalog-item" data-genre="series" data-year="2024">
                <iframe src="https://www.youtube.com/embed/hvNIhD9J59s" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">HIGH SCHOOL TALES LOVE 💕 SERIES 2</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 2m 6s</p>
                    <span class="catalog-item-year">2024</span>
                </div>
            </div>

            <div class="catalog-item" data-genre="trailer" data-year="2024">
                <iframe src="https://www.youtube.com/embed/IKg8wqULuMk" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">HEARTSTRINGS TRAILER</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 3m 14s</p>
                    <span class="catalog-item-year">2024</span>
                </div>
            </div>

            <div class="catalog-item" data-genre="trailer" data-year="2024">
                <iframe src="https://www.youtube.com/embed/rTSagj_fEa8" frameborder="0" allowfullscreen></iframe>
                <div class="catalog-item-overlay">
                    <h3 class="catalog-item-title">BLOOD BROTHERS COMING SOON</h3>
                    <p class="catalog-item-meta">KLACK STUDIOS | 2m 10s</p>
                    <span class="catalog-item-year">2024</span>
                </div>
            </div>
        </div>
         
        <div class="pagination">
            <button class="page-btn" onclick="changePage(1)">1</button>
            <button class="page-btn" onclick="changePage(2)">2</button>
            <button class="page-btn" onclick="changePage(3)">3</button>
        </div>
    </section>
    
    <?php require_once "../../components/footer.php"?>

    <script src='../../scripts/nav.js'></script>


    <script>
        // Animate catalog items on scroll
        const catalogItems = document.querySelectorAll('.catalog-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, index * 100);
                }
            });
        }, { threshold: 0.1 });

        catalogItems.forEach(item => {
            item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(item);
        });

        // Filter and Sort Functionality
        function filterCatalog(genre) {
            const items = document.querySelectorAll('.catalog-item');
            items.forEach(item => {
                const itemGenre = item.getAttribute('data-genre');
                if (genre === 'all' || itemGenre === genre) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function sortCatalog(sortType) {
            const items = Array.from(document.querySelectorAll('.catalog-item'));
            items.sort((a, b) => {
                const aValue = sortType.includes('title') ? a.querySelector('.catalog-item-title').textContent : a.getAttribute('data-year');
                const bValue = sortType.includes('title') ? b.querySelector('.catalog-item-title').textContent : b.getAttribute('data-year');
                if (sortType.includes('desc')) {
                    return aValue > bValue ? -1 : 1;
                } else {
                    return aValue < bValue ? -1 : 1;
                }
            });
            const grid = document.getElementById('catalogGrid');
            items.forEach(item => grid.appendChild(item));
        }

        // Pagination (Basic Implementation)
        let currentPage = 1;
        const itemsPerPage = 6;

        function changePage(page) {
            currentPage = page;
            const items = document.querySelectorAll('.catalog-item');
            items.forEach((item, index) => {
                item.style.display = (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage) ? 'block' : 'none';
            });
            document.querySelectorAll('.page-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelector(`.page-btn[onclick="changePage(${page})"]`).classList.add('active');
        }

        // Initialize with first page
        changePage(1);
    </script>
</body>
</html>