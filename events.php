<?php require 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events & Workshops | New Generation Academy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="event-page">

    <div id="preloader">
        <div class="logo-loader-container">
            <div class="loader-logo">NGA<span class="logo-dot">.</span><span class="logo-ext">Coding academy</span></div>
            <div class="loader-progress-track"><div class="loader-progress-fill"></div></div>
        </div>
    </div>

    <nav class="navbar">
        <div class="logo">NGA<span style="color:var(--nga-gold)">.EDU</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li><a href="events.php" style="color:var(--nga-gold)">Events</a></li>
            <li><a href="contact.php" class="btn-apply">Admissions</a></li>
        </ul>
    </nav>

    <header class="event-hero">
        <div class="hero-overlay"></div>
        <div class="event-hero-content">
            <span class="event-badge">Upcoming Major Event</span>
            <h1>Global AI <span class="text-gold">Hackathon 2026</span></h1>
            <p>Join world-class engineers in Kigali for 48 hours of innovation.</p>
            
            <div id="countdown" class="countdown-container">
                <div class="time-block"><span id="days">00</span><small>Days</small></div>
                <div class="time-block"><span id="hours">00</span><small>Hours</small></div>
                <div class="time-block"><span id="minutes">00</span><small>Mins</small></div>
            </div>
            
            <a href="#all-events" class="btn-gold-large">Register Now</a>
        </div>
    </header>

    <section id="all-events" class="section">
        <div class="section-title">
            <h4 class="text-gold">Academy Calendar</h4>
            <h2>Workshops & Seminars</h2>
        </div>

        <div class="filter-controls">
            <button class="filter-btn active" data-filter="all">All Events</button>
            <button class="filter-btn" data-filter="workshop">Workshops</button>
            <button class="filter-btn" data-filter="seminar">Seminars</button>
            <button class="filter-btn" data-filter="competition">Competitions</button>
        </div>

        <div class="event-grid">
            <div class="event-card workshop reveal-up">
                <div class="event-img">
                    <img src="assets/images/news1.jpg" alt="Robotics">
                    <div class="event-date"><span>15</span><small>JAN</small></div>
                </div>
                <div class="event-info">
                    <span class="event-cat">Workshop</span>
                    <h3>Embedded C++ Masterclass</h3>
                    <p>A deep dive into memory management and low-level hardware control.</p>
                    <div class="event-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Robotics Lab</span>
                        <span><i class="fas fa-user-friends"></i> 30 Seats</span>
                    </div>
                    <button class="btn-event-outline">View Details</button>
                </div>
            </div>

            <div class="event-card competition reveal-up">
                <div class="event-img">
                    <img src="assets/images/news2.jpg" alt="Robotics">
                    <div class="event-date"><span>22</span><small>FEB</small></div>
                </div>
                <div class="event-info">
                    <span class="event-cat">Competition</span>
                    <h3>The Coding Olympiad</h3>
                    <p>NGA students compete against top technical minds across Rwanda.</p>
                    <div class="event-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Main Auditorium</span>
                        <span><i class="fas fa-medal"></i> Global Prizes</span>
                    </div>
                    <button class="btn-event-outline">View Details</button>
                </div>
            </div>

            <div class="event-card seminar reveal-up">
                <div class="event-img">
                    <img src="assets/images/news3.jpg" alt="Robotics">
                    <div class="event-date"><span>10</span><small>MAR</small></div>
                </div>
                <div class="event-info">
                    <span class="event-cat">Seminar</span>
                    <h3>Ethics in Artificial Intelligence</h3>
                    <p>A special session hosted with UNESCO delegates on responsible AI development.</p>
                    <div class="event-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Conference Hall</span>
                        <span><i class="fas fa-microphone"></i> Guest Speakers</span>
                    </div>
                    <button class="btn-event-outline">View Details</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-simple">
        <p>&copy; 2026 New Generation Academy | Kigali, Rwanda</p>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // PRELOADER
        window.addEventListener('load', () => {
            setTimeout(() => document.getElementById('preloader').classList.add('hide-preloader'), 2000);
        });

        // COUNTDOWN TIMER
        const countdownDate = new Date("Jan 30, 2026 00:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            document.getElementById("days").innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            document.getElementById("minutes").innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        }, 1000);

        // FILTER LOGIC
        const filterBtns = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.event-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.getAttribute('data-filter');

                cards.forEach(card => {
                    if (filter === 'all' || card.classList.contains(filter)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        ScrollReveal().reveal('.reveal-up', { origin: 'bottom', distance: '30px', duration: 800, interval: 200 });
    </script>
</body>
</html>