<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Offers</title>
  <link rel="stylesheet" href="../../assets/index.css">
  <style>
    .offers-hero {
      height: 60vh;
      width: 100%;
      display: flex;
      align-items: center;
      position: relative;
      background-color: var(--secondary-color);
      overflow: hidden;
      padding: 50px;
    }
    
    .offers-deco {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      background-image: url("../../assets/images/offers_bg.jpg");
      background-repeat: no-repeat; 
      background-size: cover; 
      background-position: center;
      opacity: 0.7;
    }
    
    .offers-content {
      padding: 80px 0;
      background-color: #151515;
    }
    
    .promo-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      margin-top: 50px;
    }
    
    .promo-card {
      background-color: #1d1d1d;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .promo-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .promo-image {
      height: 200px;
      position: relative;
    }
    
    .promo-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .promo-badge {
      position: absolute;
      top: 15px;
      right: 15px;
      background-color: #ffd500;
      color: #111;
      padding: 5px 15px;
      border-radius: 20px;
      font-weight: 600;
    }
    
    .promo-details {
      padding: 25px;
    }
    
    .promo-details h3 {
      font-size: 24px;
      margin-bottom: 15px;
      color: #fff;
    }
    
    .promo-details p {
      color: #aaa;
      margin-bottom: 20px;
    }
    
    .promo-code {
      background-color: rgba(255, 213, 0, 0.1);
      border: 1px dashed #ffd500;
      padding: 10px;
      border-radius: 5px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .code {
      font-family: monospace;
      font-size: 18px;
      color: #ffd500;
      font-weight: 600;
    }
    
    .copy-btn {
      background-color: #ffd500;
      color: #111;
      border: none;
      padding: 5px 15px;
      border-radius: 4px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s;
    }
    
    .copy-btn:hover {
      background-color: #e6c000;
    }
    
    .validity {
      color: #aaa;
      font-size: 14px;
    }
    
    .referral-section {
      background-color: #111;
      padding: 80px 0;
      text-align: center;
    }
    
    .referral-box {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 40px;
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
    }
    
    .referral-steps {
      display: flex;
      justify-content: space-between;
      margin-top: 40px;
    }
    
    .step {
      flex: 1;
      padding: 0 15px;
      position: relative;
    }
    
    .step:not(:last-child):after {
      content: '→';
      position: absolute;
      right: -10px;
      top: 30px;
      font-size: 24px;
      color: #ffd500;
    }
    
    .step-number {
      width: 50px;
      height: 50px;
      background-color: #ffd500;
      color: #111;
      border-radius: 50%;
      font-size: 24px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }
    
    .step h4 {
      color: #fff;
      margin-bottom: 10px;
    }
    
    .step p {
      color: #aaa;
      font-size: 14px;
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
      margin-top: 20px;
    }
    
    .btn:hover {
      background-color: #e6c000;
    }
  </style>
</head>
<body>
  
<?php include('navbar.php'); ?>

<div class="wrapper">

  <section class="offers-hero">
    <div class="offers-deco"></div>
    <div class="hero-content">
      <h1>Exclusive <span>Offers</span></h1>
      <p>Save big with our promotional deals and discounts</p>
    </div>
  </section>

  <section class="offers-content">
    <div class="container">
      <div class="section-title">
        <h2>Current Promotions</h2>
        <p>Take advantage of these limited-time offers to save on your next ride</p>
      </div>
      
      <div class="promo-grid">
        <div class="promo-card">
          <div class="promo-image">
            <img src="../../assets/images/first_ride.jpg" alt="First Ride Discount">
            <div class="promo-badge">NEW USERS</div>
          </div>
          <div class="promo-details">
            <h3>First Ride Free</h3>
            <p>New to GoCab? Enjoy your first ride completely free (up to $20) when you sign up for a new account.</p>
            <div class="promo-code">
              <div class="code">FIRSTRIDE</div>
              <button class="copy-btn">Copy</button>
            </div>
            <div class="validity">Valid until: 30 April 2025</div>
          </div>
        </div>
        
        <div class="promo-card">
          <div class="promo-image">
            <img src="../../assets/images/airport_transfer.webp" alt="Airport Transfer">
            <div class="promo-badge">AIRPORT</div>
          </div>
          <div class="promo-details">
            <h3>25% Off Airport Transfers</h3>
            <p>Get 25% off on all airport transfers when booked at least 24 hours in advance.</p>
            <div class="promo-code">
              <div class="code">AIRPORT25</div>
              <button class="copy-btn">Copy</button>
            </div>
            <div class="validity">Valid until: 15 May 2025</div>
          </div>
        </div>
        
        <div class="promo-card">
          <div class="promo-image">
            <img src="../../assets/images/weekend_rides.jpg" alt="Weekend Rides">
            <div class="promo-badge">WEEKEND</div>
          </div>
          <div class="promo-details">
            <h3>Weekend Special</h3>
            <p>Enjoy 15% off on all rides during weekends (Friday to Sunday) with no minimum fare.</p>
            <div class="promo-code">
              <div class="code">WEEKEND15</div>
              <button class="copy-btn">Copy</button>
            </div>
            <div class="validity">Valid until: 31 May 2025</div>
          </div>
        </div>
        
        <div class="promo-card">
          <div class="promo-image">
            <img src="../../assets/images/corporate.webp" alt="Corporate Discount">
            <div class="promo-badge">BUSINESS</div>
          </div>
          <div class="promo-details">
            <h3>Corporate Package</h3>
            <p>Special rates for businesses with customized billing options and priority service.</p>
            <div class="promo-code">
              <div class="code">BIZTRAVEL</div>
              <button class="copy-btn">Copy</button>
            </div>
            <div class="validity">Valid until: Ongoing</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="referral-section">
    <div class="container">
      <div class="referral-box">
        <h2>Refer & Earn Program</h2>
        <p>Invite your friends to GoCab and earn reward credits for each successful referral</p>
        
        <div class="referral-steps">
          <div class="step">
            <div class="step-number">1</div>
            <h4>Invite Friends</h4>
            <p>Share your unique referral code with friends and family</p>
          </div>
          
          <div class="step">
            <div class="step-number">2</div>
            <h4>They Sign Up</h4>
            <p>Your friends create an account using your referral code</p>
          </div>
          
          <div class="step">
            <div class="step-number">3</div>
            <h4>Both Earn</h4>
            <p>You get $10 and they get $10 after their first ride</p>
          </div>
        </div>
        
        <a href="#" class="btn">Get Your Referral Code</a>
      </div>
    </div>
  </section>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Copy promo code functionality
    const copyButtons = document.querySelectorAll('.copy-btn');
    
    copyButtons.forEach(button => {
      button.addEventListener('click', function() {
        const codeElement = this.parentElement.querySelector('.code');
        const code = codeElement.textContent;
        
        navigator.clipboard.writeText(code).then(() => {
          // Change button text temporarily
          const originalText = this.textContent;
          this.textContent = 'Copied!';
          
          setTimeout(() => {
            this.textContent = originalText;
          }, 2000);
        });
      });
    });
  });
</script>

</body>
</html>