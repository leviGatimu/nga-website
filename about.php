<?php 
require 'includes/db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story | New Generation Academy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="about-page">

    <div id="preloader">
        <div class="logo-loader-container">
            <div class="loader-logo">NGA<span class="logo-dot">.</span><span class="logo-ext">Coding academy</span></div>
            <div class="loader-progress-track"><div class="loader-progress-fill"></div></div>
            <div class="loader-status">
                <span class="status-word">HISTORY</span><span class="status-separator">|</span><span class="status-word">MISSION</span>
            </div>
        </div>
        <div class="preloader-bg-glow"></div>
    </div>

    <nav class="navbar">
        <div class="logo">NGA<span style="color:var(--nga-gold)">.EDU</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" style="color:var(--nga-gold)">About</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li><a href="contact.php" class="btn-apply">Admissions</a></li>
        </ul>
    </nav>

    <header class="about-hero">
        <div class="hero-parallax-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="blog-category">Our Legacy</span>
            <h1>Transformed to <span class="text-gold">Impact Communities</span></h1>
            <p>The journey of Rwanda's premier coding academy and our mission to build the future.</p>
            <div class="scroll-indicator">
                <span>Scroll to explore</span>
                <div class="mouse"><div class="wheel"></div></div>
            </div>
        </div>
    </header>

    <section class="blog-section">
        <div class="blog-container">
            <div class="blog-image reveal-left">
                <img src="assets/images/news2.jpg" alt="Our Founders">
            </div>
            <div class="blog-text reveal-right">
                <h4 class="text-gold">The Genesis</h4>
                <h2>From a Vision to a <span style="color:var(--nga-blue)">Digital Revolution</span></h2>
                <p>Founded with a singular mission, New Generation Academy (NGA) emerged to fill the gap between traditional education and the rapidly evolving tech industry. We recognized that the future of Rwanda depends on engineers who don't just use technology, but create it.</p>
                <p>NGA leads AI education and has hosted esteemed delegations from UNESCO and the Ministry of ICT. Our students are trained to compete on global stages, ensuring Rwanda's place in the international tech ecosystem.</p>
                <blockquote>"We don't just teach code; we foster a mindset of problem-solving and ethical leadership."</blockquote>
            </div>
        </div>
    </section>

    <section class="parallax-divider">
        <div class="parallax-content">
            <h2>State-of-the-Art <span class="text-gold">Robotics Lab</span></h2>
            <p>Inaugurated at a value of 100 million Rwandan francs, our lab equips nursery, primary, and secondary learners with cutting-edge tools.</p>
        </div>
    </section>

    <section class="section values-section">
        <div class="section-title">
            <h4 class="text-gold">Our Foundation</h4>
            <h2>The Pillars of NGA</h2>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <i class="fas fa-microchip"></i>
                <h3>Innovation</h3>
                <p>Equipping students with robotics and AI tools to inspire the next generation of innovators.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Character</h3>
                <p>Integrity is at the heart of our code. We build ethical leaders for the community.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-globe"></i>
                <h3>Global Impact</h3>
                <p>Preparing learners to excel in global competitions and technological milestones.</p>
            </div>
        </div>
    </section>

    <section class="timeline-section">
        <div class="section-title">
            <h2>Our Milestone <span class="text-gold">Journey</span></h2>
        </div>
        <div class="timeline">
            <div class="timeline-item reveal-up">
                <div class="time-dot"></div>
                <div class="time-content">
                    <h3>August 2024</h3>
                    <p>Significant progress shared in teaching Coding & Robotics, receiving recognition from JICA and Head of State awards.</p>
                </div>
            </div>
            <div class="timeline-item reveal-up">
                <div class="time-dot"></div>
                <div class="time-content">
                    <h3>November 6, 2025</h3>
                    <p>Inauguration of the 100M Frw Robotics Lab, a milestone for technical education in Kigali.</p>
                </div>
            </div>
            <div class="timeline-item reveal-up">
                <div class="time-dot"></div>
                <div class="time-content">
                    <h3>November 19, 2025</h3>
                    <p>NGA hosts UNESCO and Ministry of ICT delegates to showcase AI education leadership.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-simple">
        <div class="footer-logo">NGA<span class="text-gold">.EDU</span></div>
        <p>&copy; 2026 New Generation Academy | Excellence in Code & Character.</p>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // PRELOADER
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('preloader').classList.add('hide-preloader');
            }, 2500); 
        });

        // SCROLL REVEAL ANIMATIONS
        ScrollReveal().reveal('.reveal-left', { origin: 'left', distance: '50px', duration: 1000, delay: 200 });
        ScrollReveal().reveal('.reveal-right', { origin: 'right', distance: '50px', duration: 1000, delay: 200 });
        ScrollReveal().reveal('.reveal-up', { origin: 'bottom', distance: '30px', duration: 800, interval: 200 });
    </script>
</body>
</html>