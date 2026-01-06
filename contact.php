<?php require 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Admissions | New Generation Academy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="contact-page">

    <nav class="navbar">
        <div class="logo">NGA<span style="color:var(--nga-gold)">.EDU</span></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="academics.php">Academics</a></li>
            <li><a href="contact.php" style="color:var(--nga-gold)">Admissions</a></li>
        </ul>
    </nav>

    <section class="contact-hero">
        <div class="hero-inner">
            <h1>Get in <span style="color:var(--nga-gold)">Touch</span></h1>
            <p>Start your journey toward becoming a world-class engineer today.</p>
        </div>
    </section>

    <section class="section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Visit Our <span style="color:var(--nga-blue)">Campus</span></h2>
                <p>New Generation Academy is located in the vibrant hub of Kimihurura, Kigali. Stop by to tour our robotics lab and meet our faculty.</p>

                <div class="info-list">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Location</strong>
                            <span>Kimihurura, Gasabo, Kigali City</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <span>admissions@nga.ac.rw</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <strong>Phone</strong>
                            <span>+250 787 105 131</span>
                        </div>
                    </div>
                </div>

                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15950.185208575034!2d30.0682283!3d-1.9546059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6a4025a4d9d%3A0x6b810d7008a9856a!2sKimihurura%2C%20Kigali!5e0!3m2!1sen!2srw!4v1700000000000!5m2!1sen!2srw" 
                        width="100%" height="250" style="border:0; border-radius:15px;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <form action="process_contact.php" method="POST" class="modern-form">
                    <h3>Admission Inquiry</h3>
                    <p>Complete this form and our team will contact you within 24 hours.</p>
                    
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="John Doe" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" placeholder="+250..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Program of Interest</label>
                        <select name="program">
                            <option value="software">Software Programming</option>
                            <option value="embedded">Embedded Systems & Robotics</option>
                            <option value="uiux">UI/UX & Leadership</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Message / Questions</label>
                        <textarea name="message" rows="4" placeholder="How can we help you?"></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Submit Application <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 NGA Coding Academy | Excellence in Code & Character</p>
    </footer>

</body>
</html>