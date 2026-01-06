<?php 
require 'includes/db.php'; 
$projects = [];
try {
    $sql = "SELECT * FROM projects WHERE approval_status='approved' ORDER BY id DESC LIMIT 3";
    $stmt = $pdo->query($sql);
    $projects = $stmt->fetchAll();
} catch (Exception $e) {
    // Silent fail
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Generation Academy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div id="preloader">
    <div class="logo-loader-container">
        <div class="loader-logo">
            NGA<span class="logo-dot">.</span><span class="logo-ext">Coding academy</span>
        </div>
        
        <div class="loader-progress-track">
            <div class="loader-progress-fill"></div>
        </div>
        
        <div class="loader-status">
            <span class="status-word">EXCELLENCE</span>
            <span class="status-separator">|</span>
            <span class="status-word">INNOVATION</span>
        </div>
    </div>
    <div class="preloader-bg-glow"></div>
</div>
</div>
    <nav class="navbar">
        <div class="logo">NGA<span style="color:var(--nga-gold)">.COD</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
             <li><a href="events.php">Events</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li><a href="contact.php" class="btn-apply">Admission</a></li>
            
        </ul>
    </nav>

    <header class="hero">
        <video autoplay muted loop playsinline>
           
            <source src="assets/videos/hero-bg.mp4" type="video/mp4">
        </video>
      
        <div class="hero-content">
            <h1>TRANSFORMED FOR <span style="color:var(--nga-gold)">COMMUNITY</span></h1>
            <p>Empowering the next generation of Software Engineers and Embedded Systems Architects.</p>
            <a href="#programs" class="btn-apply">Explore Programs</a>
        </div>
    </header>

    <section id="programs" class="section" style="background: #f4f7f6;">
        <div class="section-title">
            <h4 style="color:var(--nga-gold); letter-spacing:2px; font-size:0.9rem;">Academic Tracks</h4>
            <h2>Choose Your Specialization</h2>
            <p>Hover over a card to view the curriculum details.</p>
        </div>

        <div class="program-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="icon-circle"><i class="fas fa-code fa-3x"></i></div>
                        <h3>Software Programming</h3>
                        <p>Full-Stack Web Development</p>
                    </div>
                    <div class="flip-card-back">
                        <h3>The Stack</h3>
                        <ul>
                            <li><i class="fas fa-check"></i> Pure HTML5, CSS3, JS</li>
                            <li><i class="fas fa-check"></i> PHP Backend Architecture</li>
                            <li><i class="fas fa-check"></i> MySQL Database Design</li>
                            <li><i class="fas fa-check"></i> Git Version Control</li>
                        </ul>
                        <a href="academics.php" class="btn-flip">View Syllabus</a>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="icon-circle"><i class="fas fa-microchip fa-3x"></i></div>
                        <h3>Embedded Systems</h3>
                        <p>Hardware & IoT Logic</p>
                    </div>
                    <div class="flip-card-back">
                        <h3>The Tech</h3>
                        <ul>
                            <li><i class="fas fa-check"></i> C++ Programming</li>
                            <li><i class="fas fa-check"></i> Arduino & Raspberry Pi</li>
                            <li><i class="fas fa-check"></i> Circuit Logic & Sensors</li>
                            <li><i class="fas fa-check"></i> Smart Home Automation</li>
                        </ul>
                        <a href="academics.php" class="btn-flip">View Syllabus</a>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="icon-circle"><i class="fas fa-users-cog fa-3x"></i></div>
                        <h3>UI/UX & Leadership</h3>
                        <p>Design Thinking & Management</p>
                    </div>
                    <div class="flip-card-back">
                        <h3>The Skills</h3>
                        <ul>
                            <li><i class="fas fa-check"></i> Wireframing (Figma)</li>
                            <li><i class="fas fa-check"></i> Agile Methodologies</li>
                            <li><i class="fas fa-check"></i> Project Management</li>
                            <li><i class="fas fa-check"></i> Public Speaking</li>
                        </ul>
                        <a href="academics.php" class="btn-flip">View Syllabus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="position: relative; background: #fff; overflow: hidden; padding: 6rem 10%;">
        <div style="position: absolute; top: 0; right: 0; width: 300px; height: 100%; background: var(--nga-light); skew-x: -20deg; z-index: 0; transform: skewX(-20deg) translateX(100px);"></div>

        <div class="split-layout" style="align-items: center; position: relative; z-index: 1;">
            
            <div class="vision-image-container" onclick="openFounderModal()" style="cursor: pointer; position: relative; overflow: hidden;">
                <img src="assets/images/founder.jpg" alt="Director" class="vision-img">
                <div class="vision-badge"><i class="fas fa-quote-left"></i></div>
                <div class="click-hint">
                    <i class="fas fa-expand-arrows-alt"></i> View Profile
                </div>
            </div>

            <div class="vision-text-content">
                <h4 style="color:var(--nga-gold); letter-spacing: 2px; font-weight: bold; margin-bottom: 1rem; text-transform: uppercase; font-size: 0.8rem;">Leadership & Vision</h4>
                
                <h2 style="font-size: 2.5rem; color: var(--nga-blue); line-height: 1.2; margin-bottom: 1.5rem;">
                    "We are defining the future of <span style="border-bottom: 3px solid var(--nga-gold);">Rwandan Tech</span>."
                </h2>
                
                <div class="mission-highlight">
                    <span class="mission-label">OUR MISSION</span>
                    <p>To go beyond syntax and instill a culture of <strong>Production-Quality Engineering</strong>. We build real systems that solve real community problems.</p>
                </div>

                <div class="values-deck">
                    <div class="val-card">
                        <div class="val-icon"><i class="fas fa-code-branch"></i></div>
                        <div class="val-info"><h5>Collaboration</h5><small>Git-Flow & Team Dynamics</small></div>
                    </div>
                    <div class="val-card">
                        <div class="val-icon"><i class="fas fa-medal"></i></div>
                        <div class="val-info"><h5>Excellence</h5><small>World-Class Standards</small></div>
                    </div>
                    <div class="val-card">
                        <div class="val-icon"><i class="fas fa-users"></i></div>
                        <div class="val-info"><h5>Community</h5><small>Social Impact Coding</small></div>
                    </div>
                </div>

                <div style="margin-top: 3rem; display: flex; align-items: center; gap: 15px;">
                    <div style="height: 1px; width: 50px; background: var(--nga-gold);"></div>
                    <div>
                        <strong style="display: block; color: var(--nga-blue);">Mr. Jean Claude Tuyisenge</strong>
                        <span style="font-size: 0.9rem; color: #999;">MD & Co-Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="background: white;">
        <div class="section-title">
            <h2>Student Innovation</h2>
            <p>Recent projects built by our students.</p>
        </div>
        <div class="grid-3">
            <?php if(count($projects) > 0): ?>
                <?php foreach($projects as $proj): ?>
                <div class="card" style="background:var(--nga-light);">
                    <h3><?= htmlspecialchars($proj['title']) ?></h3>
                    <p><?= htmlspecialchars(substr($proj['description'], 0, 80)) ?>...</p>
                    <br>
                    <a href="#" style="color:var(--nga-blue); font-weight:bold;">View Project &rarr;</a>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card"><h3>School Management System</h3><p>A complete dashboard for managing grades and attendance.</p></div>
                <div class="card"><h3>Traffic Control IoT</h3><p>Smart traffic lights using Arduino and C++.</p></div>
                <div class="card"><h3>E-Commerce Platform</h3><p>A multi-vendor marketplace built with PHP.</p></div>
            <?php endif; ?>
        </div>
    </section>
<section class="section counter-section" style="background: var(--nga-blue); color: white; padding: 4rem 10%;">
    <div class="counter-grid">
        <div class="counter-item">
            <h2 class="count">10</h2>
            <span>+ Active Students</span>
        </div>
        <div class="counter-item">
            <h2 class="count">12</h2>
            <span>Expert Mentors</span>
        </div>
        <div class="counter-item">
            <h2 class="count">2</h2>
            <span>High-Tech Labs</span>
        </div>
        <div class="counter-item">
            <h2 class="count">15</h2>
            <span>Industry Partners</span>
        </div>
    </div>
</section>

<section class="section" style="background: #f4f7f6;">
    <div class="section-title">
        <h4 style="color:var(--nga-gold); letter-spacing:2px; font-size:0.9rem; text-transform:uppercase;">Our Faculty</h4>
        <h2>Expert Mentors</h2>
        <p>Learn from industry professionals leading the tech revolution in Rwanda.</p>
    </div>

    <div class="team-grid">
        <div class="profile-card">
            <div class="profile-img-box">
                <img src="assets/images/teacher1.jpg" alt="Teacher Name">
                <div class="profile-socials">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="profile-info">
                <h3>Teacher Name</h3>
                <p>Software Engineering Lead</p>
            </div>
        </div>

        <div class="profile-card">
            <div class="profile-img-box">
                <img src="assets/images/teacher2.jpg" alt="Teacher Name">
                <div class="profile-socials">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="profile-info">
                <h3>Teacher Name</h3>
                <p>Robotics & IoT Expert</p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: white;">
    <div class="section-title">
        <h4 style="color:var(--nga-gold); letter-spacing:2px; font-size:0.9rem; text-transform:uppercase;">Future Leaders</h4>
        <h2>Student Spotlight</h2>
        <p>The faces behind the innovative projects at NGA.</p>
    </div>

    <div class="team-grid">
        <div class="profile-card student-card">
            <div class="profile-img-box">
                <img src="assets/images/student1.jpg" alt="Student Name">
            </div>
            <div class="profile-info">
                <h3>Student Name</h3>
                <p>Software Engineering Cohort 2025</p>
            </div>
        </div>

        <div class="profile-card student-card">
            <div class="profile-img-box">
                <img src="assets/images/student2.jpg" alt="Student Name">
            </div>
            <div class="profile-info">
                <h3>Student Name</h3>
                <p>Embedded Systems Specialist</p>
            </div>
        </div>
    </div>
</section>
    <section class="section" style="background: #fff;">
        <div class="section-title">
            <h4 style="color:var(--nga-gold); letter-spacing:2px; font-size:0.9rem; text-transform:uppercase;">In The Press</h4>
            <h2>NGA In The Media</h2>
            <p>Featured stories covering our global impact and technological milestones.</p>
        </div>

        <div class="news-grid">
            <article class="news-card" onclick="window.open('https://www.newtimes.co.rw/article/21974/news/featured/kigalis-new-generation-academy-leads-ai-education-gears-up-for-global-competition', '_blank')">
                <div class="news-img-wrapper">
                    <img src="assets/images/news1.jpg" alt="AI Education" class="news-img">
                    <div class="date-badge"><span class="day">20</span><span class="month">NOV</span></div>
                    <div class="category-tag">Featured</div>
                </div>
                <div class="news-content">
                    <div class="news-source"><i class="far fa-newspaper"></i> The New Times</div>
                    <h3>Kigali's New Generation Academy leads AI education</h3>
                    <p>NGA hosts UNESCO delegation and Ministry of ICT officials as students gear up for major global tech competitions.</p>
                    <span class="read-more">Read Full Story <i class="fas fa-arrow-right"></i></span>
                </div>
            </article>

            <article class="news-card" onclick="window.open('https://www.newtimes.co.rw/article/21610/news/rwanda/kigali-students-inspired-by-new-robotics-lab', '_blank')">
                <div class="news-img-wrapper">
                    <img src="assets/images/news2.jpg" alt="Robotics Lab" class="news-img">
                    <div class="date-badge"><span class="day">06</span><span class="month">NOV</span></div>
                    <div class="category-tag">Innovation</div>
                </div>
                <div class="news-content">
                    <div class="news-source"><i class="far fa-newspaper"></i> The New Times</div>
                    <h3>Kigali students inspired by new robotics lab</h3>
                    <p>Inside the new facility equipping nursery, primary, and secondary learners with cutting-edge robotics tools.</p>
                    <span class="read-more">Read Full Story <i class="fas fa-arrow-right"></i></span>
                </div>
            </article>

            <article class="news-card" onclick="window.open('https://www.topafricanews.com/2024/08/24/nga-shares-progress-in-teaching-coding-robotics-to-young-children/', '_blank')">
                <div class="news-img-wrapper">
                    <img src="assets/images/news3.png" alt="Coding Progress" class="news-img">
                    <div class="date-badge"><span class="day">24</span><span class="month">AUG</span></div>
                    <div class="category-tag">Technology</div>
                </div>
                <div class="news-content">
                    <div class="news-source"><i class="fas fa-globe-africa"></i> Top Africa News</div>
                    <h3>NGA shares progress in teaching Coding & Robotics</h3>
                    <p>From JICA visits to awards from the Head of State: How NGA students are competing on the world stage.</p>
                    <span class="read-more">Read Full Story <i class="fas fa-arrow-right"></i></span>
                </div>
            </article>
        </div>
    </section>

    <section class="section" style="background: white; text-align: center;">
        <div class="section-title">
            <h2 style="margin-bottom: 0.5rem;">Our Strategic Partners</h2>
            <p style="color: #666;">Collaborating with world-class institutions.</p>
        </div>
        <div class="partner-grid">
            <div class="partner-card" onclick="openModal('Digital Media Academy', 'A Silicon Valley leader in tech education.', 'https://www.digitalmediaacademy.org', 'assets/images/partners/partner_1.png')"><img src="assets/images/partners/partner_1.png" alt="DMA"></div>
            <div class="partner-card" onclick="openModal('Bank of Kigali', 'Supporting financial literacy.', 'https://www.bk.rw', 'assets/images/partners/partner_2.png')"><img src="assets/images/partners/partner_2.png" alt="BK"></div>
            <div class="partner-card" onclick="openModal('Radiant Insurance', 'Comprehensive insurance solutions.', 'https://radiant.rw', 'assets/images/partners/partner_3.png')"><img src="assets/images/partners/partner_3.png" alt="Radiant"></div>
            <div class="partner-card" onclick="openModal('British Council', 'Connecting UK and Rwanda.', 'https://www.britishcouncil.rw', 'assets/images/partners/partner_4.png')"><img src="assets/images/partners/partner_4.png" alt="British Council"></div>
            <div class="partner-card" onclick="openModal('Edify', 'Improving education outcomes.', 'https://www.edify.org', 'assets/images/partners/partner_5.png')"><img src="assets/images/partners/partner_5.png" alt="Edify"></div>
            <div class="partner-card" onclick="openModal('Institut Français', 'Promoting French culture.', 'https://if-rwanda.org', 'assets/images/partners/partner_6.png')"><img src="assets/images/partners/partner_6.png" alt="Institut Francais"></div>
            <div class="partner-card" onclick="openModal('Ministry of ICT', 'Driving digital transformation.', 'https://minict.gov.rw', 'assets/images/partners/partner_7.png')"><img src="assets/images/partners/partner_7.png" alt="MINICT"></div>
            <div class="partner-card" onclick="openModal('REB', 'Rwanda Basic Education Board.', 'https://www.reb.rw', 'assets/images/partners/partner_8.png')"><img src="assets/images/partners/partner_8.png" alt="REB"></div>
            <div class="partner-card" onclick="openModal('GIZ Rwanda', 'Supporting vocational training.', 'https://www.giz.de', 'assets/images/partners/partner_9.png')"><img src="assets/images/partners/partner_9.png" alt="GIZ"></div>
        </div>
    </section>

    <section class="section" style="background: var(--nga-blue); color: white; position: relative;">
        <div class="section-title">
            <h2 style="color: white;">Voices of NGA</h2>
            <p style="color: rgba(255,255,255,0.7);">Hear from our students and alumni.</p>
        </div>
        <div class="testimonial-container">
            <button class="slider-btn prev-btn" onclick="moveSlide(-1)">&#10094;</button>
            <div class="testimonial-wrapper">
                <div class="testimonial-slide active">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="quote-text">"The Embedded Systems program allowed me to build a traffic control system that is now being tested in my community."</p>
                    <div class="user-profile"><div class="user-avatar" style="background-color: #ff9900;">LG</div><div><h4>Levi Gatimu</h4><small>Class of 2025</small></div></div>
                </div>
                <div class="testimonial-slide">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p class="quote-text">"I came here knowing nothing about code. Six months later, I deployed a full real-estate platform using PHP and MySQL."</p>
                    <div class="user-profile"><div class="user-avatar" style="background-color: #D4AF37;">KM</div><div><h4>Kheillah M.</h4><small>Software Engineering</small></div></div>
                </div>
            </div>
            <button class="slider-btn next-btn" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </section>

    <section class="section" style="background: var(--nga-gold); color: var(--nga-blue); text-align: center;">
        <div style="max-width: 600px; margin: 0 auto;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">Join the Next Cohort</h2>
            <p style="margin-bottom: 2rem;">Applications for the 2026 intake are now open. Download the prospectus or apply online.</p>
            <form style="display: flex; gap: 10px; justify-content: center;">
                <input type="email" placeholder="Enter your email" style="padding: 12px; border: none; border-radius: 5px; width: 60%;">
                <button type="button" class="btn-apply" style="background: var(--nga-blue); color: white !important; border: none; cursor: pointer;">Get Info</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-grid">
            <div>
                <h4>New Generation Academy</h4>
                <p>Excellence in Code & Character.</p>
            </div>
            <div>
                <h4>Quick Links</h4>
                <p><a href="#">Admissions</a></p>
                <p><a href="#">Student Portal</a></p>
            </div>
            <div>
                <h4>Contact</h4>
                <p>Kigali, Rwanda</p>
                <p>info@nga.ac.rw</p>
            </div>
        </div>
        <p>&copy; 2026 NGA Coding Academy</p>
    </footer>

    <div class="floating-video-widget" onclick="openVideoModal()">
        <div class="floating-video-container">
            <video autoplay muted loop playsinline class="float-video">
                <source src="assets/videos/intro.mp4" type="video/mp4">
            </video>
            <div class="float-overlay">
                <i class="fas fa-play"></i>
            </div>
        </div>
        <div class="float-text">Watch Campus Tour</div>
    </div>

    <div id="partnerModal" class="modal-overlay">
        <div class="modal-content">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <img id="modalImg" src="" alt="Partner Logo" class="modal-logo">
            <h3 id="modalTitle">Partner Name</h3>
            <p id="modalDesc">Description goes here...</p>
            <div class="modal-actions">
                <a id="modalLink" href="#" target="_blank" class="btn-visit">Visit Website</a>
                <button onclick="closeModal()" class="btn-close">Close</button>
            </div>
        </div>
    </div>

    <div id="founderModal" class="modal-overlay">
        <div class="profile-card-modal">
            <span class="close-modal" onclick="closeFounderModal()">&times;</span>
            <div class="profile-header-bg"></div>
            <div class="profile-content">
                <div class="profile-img-circle"><img src="assets/images/founder.jpg" alt="Founder"></div>
                <h2>Mr. Jean Claude Tuyisenge</h2>
                <p class="profile-role">MD & Co-Founder</p>
                <p class="profile-bio">"Leading NGA to empower Rwanda's youth through technology."</p>
                <div class="social-links">
                    <a href="#" class="social-btn twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <button onclick="closeFounderModal()" class="btn-profile-close">Close</button>
            </div>
        </div>
    </div>

    <div id="videoModal" class="modal-overlay video-modal-overlay">
        <div class="video-modal-container">
            <span class="close-video" onclick="closeVideoModal()">&times;</span>
            <div class="video-wrapper">
                <video controls id="mainVideo">
                    <source src="assets/videos/intro.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <script>
        // SLIDER
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        function moveSlide(step) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + step + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }
        setInterval(() => { moveSlide(1); }, 5000);

        // MODAL LOGIC (Merged)
        const partnerModal = document.getElementById('partnerModal');
        const founderModal = document.getElementById('founderModal');
        const videoModal = document.getElementById('videoModal');
        
        // Partner Modal Funcs
        const mImg = document.getElementById('modalImg');
        const mTitle = document.getElementById('modalTitle');
        const mDesc = document.getElementById('modalDesc');
        const mLink = document.getElementById('modalLink');

        function openModal(title, desc, link, imgSrc) {
            mTitle.innerText = title;
            mDesc.innerText = desc;
            mLink.href = link;
            mImg.src = imgSrc;
            partnerModal.style.display = 'flex';
        }
        function closeModal() { partnerModal.style.display = 'none'; }

        // Founder Modal Funcs
        function openFounderModal() { founderModal.style.display = 'flex'; }
        function closeFounderModal() { founderModal.style.display = 'none'; }

        // Video Modal Funcs
        const mainVideo = document.getElementById('mainVideo');
        function openVideoModal() {
            videoModal.style.display = 'flex';
            mainVideo.play();
        }
        function closeVideoModal() {
            videoModal.style.display = 'none';
            mainVideo.pause();
            mainVideo.currentTime = 0;
        }

        // Window Click (Closes All)
        window.onclick = function(event) {
            if (event.target == partnerModal) { closeModal(); }
            if (event.target == founderModal) { closeFounderModal(); }
            if (event.target == videoModal) { closeVideoModal(); }
        }
        // --- PRELOADER LOGIC ---
window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    // Keep it visible for at least 3 seconds so user sees the animation
    setTimeout(() => {
        preloader.classList.add('hide-preloader');
    }, 3000); 
});
// --- ANIMATED COUNTER LOGIC ---
const counters = document.querySelectorAll('.count');
const speed = 200;

const startCounter = () => {
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target') || parseInt(counter.innerText);
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };
        // Reset to 0 initially for animation effect
        const finalVal = counter.innerText;
        counter.setAttribute('data-target', finalVal);
        counter.innerText = '0';
        updateCount();
    });
};

// Start counter when section is visible
let observer = new IntersectionObserver((entries) => {
    if(entries[0].isIntersecting) {
        startCounter();
        observer.unobserve(entries[0].target);
    }
}, { threshold: 0.5 });

observer.observe(document.querySelector('.counter-section'));
    </script>
</body>
</html>