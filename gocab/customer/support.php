<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Support</title>
  <link rel="stylesheet" href="../../assets/index.css">
  <style>
    .support-hero {
      height: 60vh;
      width: 100%;
      display: flex;
      align-items: center;
      position: relative;
      background-color: var(--secondary-color);
      overflow: hidden;
      padding: 50px;
    }
    
    .support-deco {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      background-image: url("../../assets/images/support_bg.jpg");
      background-repeat: no-repeat; 
      background-size: cover; 
      background-position: center;
      opacity: 0.7;
    }
    
    .support-content {
      padding: 80px 0;
      background-color: #151515;
    }
    
    .support-grid {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 40px;
      margin-top: 50px;
    }
    
    .support-links {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 30px;
    }
    
    .support-menu {
      list-style: none;
      padding: 0;
    }
    
    .support-menu li {
      margin-bottom: 15px;
    }
    
    .support-menu li a {
      display: block;
      padding: 12px 15px;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    
    .support-menu li a:hover, .support-menu li a.active {
      background-color: rgba(255, 213, 0, 0.1);
      color: #ffd500;
    }
    
    .support-menu li a.active {
      border-left: 3px solid #ffd500;
    }
    
    .faq-content {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 30px;
    }
    
    .faq-item {
      margin-bottom: 20px;
      border-bottom: 1px solid #333;
      padding-bottom: 20px;
    }
    
    .faq-item:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    
    .faq-question {
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #fff;
      font-size: 18px;
      font-weight: 600;
      padding: 10px 0;
    }
    
    .faq-question::after {
      content: '+';
      font-size: 24px;
      color: #ffd500;
    }
    
    .faq-item.active .faq-question::after {
      content: '-';
    }
    
    .faq-answer {
      color: #aaa;
      padding: 10px 0;
      display: none;
    }
    
    .faq-item.active .faq-answer {
      display: block;
    }
    
    .contact-section {
      background-color: #111;
      padding: 80px 0;
    }
    
    .contact-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }
    
    .contact-card {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      transition: transform 0.3s;
    }
    
    .contact-card:hover {
      transform: translateY(-10px);
    }
    
    .contact-icon {
      font-size: 36px;
      color: #ffd500;
      margin-bottom: 20px;
      width: 70px;
      height: 70px;
      background-color: rgba(255, 213, 0, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }
    
    .contact-card h3 {
      color: #fff;
      margin-bottom: 15px;
    }
    
    .contact-card p {
      color: #aaa;
      margin-bottom: 20px;
    }
    
    .contact-card a {
      color: #ffd500;
      text-decoration: none;
      font-weight: 600;
    }
    
    .contact-form {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 40px;
      margin-top: 50px;
    }
    
    .contact-form h3 {
      color: #fff;
      margin-bottom: 20px;
      text-align: center;
    }
    
    .form-row {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-bottom: 20px;
    }
    
    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }
    
    .btn {
      display: inline-block;
      background-color: #ffd500;
      color: #111;
      padding: 10px 30px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    .btn:hover {
      background-color: #e6c000;
    }
  </style>
</head>
<body>
  
<?php include('navbar.php'); ?>

<div class="wrapper">

  <section class="support-hero">
    <div class="support-deco"></div>
    <div class="hero-content">
      <h1>Customer <span>Support</span></h1>
      <p>We're here to help you with any questions or concerns</p>
    </div>
  </section>

  <section class="support-content">
    <div class="container">
      <div class="section-title">
        <h2>How Can We Help?</h2>
        <p>Find answers to frequently asked questions or contact our support team</p>
      </div>
      
      <div class="support-grid">
        <div class="support-links">
          <h3>Support Categories</h3>
          <ul class="support-menu">
            <li><a href="#" class="active" data-category="general">General Questions</a></li>
            <li><a href="#" data-category="booking">Booking & Rides</a></li>
            <li><a href="#" data-category="payment">Payment & Billing</a></li>
            <li><a href="#" data-category="account">Account Management</a></li>
            <li><a href="#" data-category="driver">Driver Information</a></li>
            <li><a href="#" data-category="safety">Safety & Security</a></li>
          </ul>
        </div>
        
        <div class="faq-content">
          <h3>Frequently Asked Questions</h3>
          
          <div class="faq-list" id="general">
            <div class="faq-item active">
              <div class="faq-question">What is GoCab?</div>
              <div class="faq-answer">
                <p>GoCab is a modern ride-hailing service that connects passengers with drivers for convenient and comfortable transportation. We offer a variety of services including city taxis, airport transfers, corporate transport, and more.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">How do I download the GoCab app?</div>
              <div class="faq-answer">
                <p>The GoCab app is available for free download on both iOS and Android devices. Simply search for "GoCab" in the App Store or Google Play Store and follow the installation instructions.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">Where is GoCab available?</div>
              <div class="faq-answer">
                <p>GoCab currently operates in over 30 major cities across the country. You can check if GoCab is available in your area by entering your location in the app or on our website.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">How do I contact customer support?</div>
              <div class="faq-answer">
                <p>You can contact our customer support team through the app, by email at support@gocab.com, or by phone at 1-800-GO-CABIN (1-800-462-2246). Our support team is available 24/7 to assist you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact-section">
    <div class="container">
      <div class="section-title">
        <h2>Contact Us</h2>
        <p>Get in touch with our support team through your preferred communication channel</p>
      </div>
      
      <div class="contact-grid">
        <div class="contact-card">
          <div class="contact-icon">📞</div>
          <h3>Phone Support</h3>
          <p>Our support team is available 24/7 to assist you</p>
          <a href="tel:18004622246">1-800-GO-CABIN</a>
        </div>
        
        <div class="contact-card">
          <div class="contact-icon">✉️</div>
          <h3>Email Support</h3>
          <p>Send us an email and we'll respond within 24 hours</p>
          <a href="mailto:support@gocab.com">support@gocab.com</a>
        </div>
        
        <div class="contact-card">
          <div class="contact-icon">💬</div>
          <h3>Live Chat</h3>
          <p>Chat with a support agent directly from the app</p>
          <a href="#">Open GoCab App</a>
        </div>
      </div>
      
      <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form id="support-form">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
          </div>
          
          <div class="form-group">
            <label for="subject">Subject</label>
            <select id="subject" class="form-control" required>
              <option value="" disabled selected>Select a subject</option>
              <option value="general">General Inquiry</option>
              <option value="booking">Booking Issue</option>
              <option value="payment">Payment Problem</option>
              <option value="account">Account Management</option>
              <option value="feedback">Feedback/Suggestion</option>
              <option value="complaint">Complaint</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" placeholder="Enter your message" required></textarea>
          </div>
          
          <div class="form-group">
            <button type="submit" class="btn">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // FAQ toggle functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
      question.addEventListener('click', function() {
        const faqItem = this.parentElement;
        faqItem.classList.toggle('active');
      });
    });
    
    // Support category switching
    const categoryLinks = document.querySelectorAll('.support-menu a');
    
    categoryLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Remove active class from all links
        categoryLinks.forEach(item => {
          item.classList.remove('active');
        });
        
        // Add active class to clicked link
        this.classList.add('active');
        
        // Switch FAQ content based on selected category
        const category = this.getAttribute('data-category');
        loadFaqContent(category);
      });
    });
    
    // Function to load FAQ content based on category
    function loadFaqContent(category) {
      // This would typically load content via AJAX
      // For demo purposes, we'll just show a message
      const faqContent = document.querySelector('.faq-list');
      
      // Clear existing content
      faqContent.innerHTML = '';
      
      // Add a loading message
      const loadingItem = document.createElement('div');
      loadingItem.className = 'faq-item active';
      loadingItem.innerHTML = `
        <div class="faq-question">Loading ${category} FAQs...</div>
        <div class="faq-answer">
          <p>This is a placeholder for the ${category} FAQs. In a real implementation, this content would be loaded dynamically from the server.</p>
        </div>
      `;
      
      faqContent.appendChild(loadingItem);
    }
    
    // Handle support form submission
    const supportForm = document.getElementById('support-form');
    
    supportForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const subject = document.getElementById('subject').value;
      const message = document.getElementById('message').value;
      
      // In a real implementation, you would send this data to the server
      // For demo purposes, we'll just show an alert
      
      alert(`Thank you, ${name}! Your message has been received. We'll get back to you at ${email} as soon as possible.`);
      
      // Reset the form
      this.reset();
    });
  });
</script>

</body>
</html>