    <!-- Contact Section -->
    <style>
        @media (max-width: 992px) {
            .contact-container { flex-direction: column; gap: 40px; }
        }
        @media (max-width: 768px) {
            .contact-section { padding: 60px 15px !important; }
            .contact-form-wrapper .section-title { font-size: 2.2rem !important; }
            .form-row { flex-direction: column; gap: 0; }
            .form-group { margin-bottom: 20px !important; }
            .contact-container { gap: 30px; }
        }
    </style>
    <section class="contact-section">
        <div class="container contact-container">
            <div class="contact-form-wrapper">
                <p class="section-subtitle" style="justify-content: flex-start;">CONTACT US</p>
                <h2 class="section-title">Get Your <span class="accent-text">Free Quote Today!</span></h2>
                
                <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                        Thank you for your message! We will get back to you shortly.
                    </div>
                <?php endif; ?>
                
                <form class="contact-form" action="process_contact.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Your Name *</label>
                            <input type="text" class="form-control" name="name" placeholder="Ex. John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label>Select Services *</label>
                        <select class="form-control" name="service" style="appearance: auto; cursor: pointer; color: #66756C;">
                            <option value="" disabled selected>Select a service</option>
                            <option value="INTERIOR DESIGN">INTERIOR DESIGN</option>
                            <option value="RESIDENTIAL DESIGN">RESIDENTIAL DESIGN</option>
                            <option value="COMMERCIAL DESIGN">COMMERCIAL DESIGN</option>
                            <option value="FURNITURE DESIGN">FURNITURE DESIGN</option>
                            <option value="ARCHITECTURAL DESIGN">ARCHITECTURAL DESIGN</option>
                            <option value="KITCHEN DESIGN">KITCHEN DESIGN</option>
                            <option value="HOME AUTOMATION">HOME AUTOMATION</option>
                            <option value="SPACE PLANNING">SPACE PLANNING</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 30px;">
                        <label>Your Message *</label>
                        <textarea class="form-control" name="message" placeholder="Enter here..." required></textarea>
                    </div>
                    <button type="submit" class="btn" style="border: none;">
                        <span class="btn-icon" style="background: var(--primary-color)"><i class="fa-solid fa-arrow-right"></i></span>
                        <span class="btn-text">Send Message</span>
                    </button>
                </form>
            </div>
            
            <div class="contact-info-block">
                <div class="info-item">
                    <h4>Address</h4>
                    <p>KALP INTERIOR DESIGN STUDIO,<br>ISM ROAD, opp. SRDAV, Pundag,<br>Ranchi, Jharkhand 834001</p>
                </div>

                <div class="info-item">
                    <h4>Contact</h4>
                    <p>Phone : +91 9234772288<br>Email : info@kalpinteriors.com</p>
                </div>
                <div class="info-item">
                    <h4>Open Time</h4>
                    <p>Monday - Friday : 10:00 - 20:00<br>Saturday - Sunday : 11:00 - 18:00</p>
                </div>
                <div class="info-item">
                    <h4>Stay Connected</h4>
                    <div class="contact-social">
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
