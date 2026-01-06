<?php 
require 'includes/db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum | New Generation Academy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="academic-body">

    

    <nav class="navbar">
        <div class="logo">NGA<span style="color:var(--nga-gold)">.EDU</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="academics.php" class="active-nav">Academics</a></li>
            <li><a href="contact.php" class="btn-apply">Admissions</a></li>
        </ul>
    </nav>

    <header class="academic-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="badge-gold">Technical Excellence</span>
            <h1>Academic <span class="text-gold">Rigor</span></h1>
            <p>Advanced curricula designed to produce high-impact Software Engineers and Robotics experts.</p>
        </div>
    </header>

    <main class="academic-main-grid">
        <aside class="side-nav-container">
            <div class="sticky-nav">
                <h4 class="nav-title">Departments</h4>
                <div class="nav-links-vertical">
                    <a href="#software" class="v-link active"><i class="fas fa-code"></i> Software Engineering</a>
                    <a href="#embedded" class="v-link"><i class="fas fa-microchip"></i> Embedded Systems</a>
                    <a href="#uiux" class="v-link"><i class="fas fa-palette"></i> UI/UX & Leadership</a>
                </div>
                <div class="ad-box">
                    <p>Ready to join?</p>
                    <a href="contact.php" class="btn-gold-small">Apply Now</a>
                </div>
            </div>
        </aside>

        <div class="content-container">
            
            <section id="software" class="program-card">
                <div class="p-header">
                    <div class="p-title-area">
                        <div class="p-icon"><i class="fas fa-laptop-code"></i></div>
                        <div>
                            <h2>Software Programming</h2>
                            <p>Full-Stack Web Architecture</p>
                        </div>
                    </div>
                    <div class="p-meta">
                        <span><i class="far fa-clock"></i> 12 Months</span>
                        <span><i class="fas fa-signal"></i> Advanced</span>
                    </div>
                </div>

                <div class="p-body">
                    <h3>Master the Web from Scratch</h3>
                    <p>We reject the use of "magic" frameworks in the first phase. You will build your own engines using pure <strong>HTML5, CSS3, JS, and PHP</strong> to understand the core logic of the internet.</p>
                    
                    <div class="module-grid">
                        <div class="m-box">
                            <span class="m-num">01</span>
                            <h4>Frontend Architecture</h4>
                            <p>Semantic structures, CSS Grid/Flex, and DOM manipulation without libraries.</p>
                        </div>
                        <div class="m-box">
                            <span class="m-num">02</span>
                            <h4>Backend Logic (PHP)</h4>
                            <p>Server-side scripting, authentication systems, and MySQL database design.</p>
                        </div>
                    </div>

                    <div class="price-action">
                        <div class="fee">Academic Fee: <strong>2,500,000 RWF</strong> / Year</div>
                        <a href="contact.php" class="btn-outline-gold">Enroll in Track</a>
                    </div>
                </div>
            </section>

            <section id="embedded" class="program-card">
                <div class="p-header">
                    <div class="p-title-area">
                        <div class="p-icon"><i class="fas fa-robot"></i></div>
                        <div>
                            <h2>Embedded Systems</h2>
                            <p>Hardware & Robotics Lab</p>
                        </div>
                    </div>
                    <div class="p-meta">
                        <span><i class="far fa-clock"></i> 14 Months</span>
                        <span><i class="fas fa-signal"></i> Expert</span>
                    </div>
                </div>

                <div class="p-body">
                    <h3>Connecting Code to Reality</h3>
                    <p>This program focuses on the intersection of software and physical hardware, specializing in <strong>C++ and Microcontroller Logic</strong>.</p>
                    
                    <div class="module-grid">
                        <div class="m-box">
                            <span class="m-num">01</span>
                            <h4>C++ Programming</h4>
                            <p>Low-level memory management, pointers, and industrial logic.</p>
                        </div>
                        <div class="m-box">
                            <span class="m-num">02</span>
                            <h4>IoT & Robotics</h4>
                            <p>Building autonomous systems using Arduino, ESP32, and Raspberry Pi.</p>
                        </div>
                    </div>

                    <div class="price-action">
                        <div class="fee">Academic Fee: <strong>3,000,000 RWF</strong> / Year</div>
                        <a href="contact.php" class="btn-outline-gold">Enroll in Track</a>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <footer class="footer-simple">
        <p>&copy; 2026 New Generation Academy | Kigali, Rwanda</p>
    </footer>

    <script>
        // PRELOADER
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('preloader').classList.add('hide-preloader');
            }, 2000); 
        });

        // SMOOTH SCROLL & ACTIVE LINK
        const links = document.querySelectorAll('.v-link');
        window.addEventListener('scroll', () => {
            let current = "";
            document.querySelectorAll('.program-card').forEach(card => {
                const cardTop = card.offsetTop;
                if (pageYOffset >= cardTop - 150) {
                    current = card.getAttribute('id');
                }
            });
            links.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
        window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    // Duration matches the progressFill animation (2.5s) + a small buffer
    setTimeout(() => {
        preloader.classList.add('hide-preloader');
    }, 2800); 
});
    </script>
</body>
</html>