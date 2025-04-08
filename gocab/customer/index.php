<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Home</title>
  <link rel="stylesheet" href="../../assets/index.css">
</head>
<body>
  
<?php include('navbar.php'); ?>

<div class="wrapper">

  <section class="hero">
    <div class="deco"></div>
    <div class="hero-content">
        <h1>Welcome,<span>[CustomerName]</span></h1>
        <p>Book your ride with ease and comfort</p>
    </div>
    <div class="hero-image">
      <img src="../../assets/images/hero-image.png" alt="Hero Image">
    </div>
  </section>

  <section class="services" id="services">
    <div class="container">
      <div class="section-title">
        <h2>Our Services</h2>
        <p>We provide a range of professional transportation services tailored to meet your specific needs</p>
      </div>
      <div class="service-grid">
        <div class="service-card">
          <div class="service-icon">🚕</div>
          <h3>City Taxi</h3>
          <p>Quick, comfortable rides within the city limits with professional drivers who know every street and shortcut.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">✈️</div>
          <h3>Airport Transfer</h3>
          <p>Reliable airport pickup and drop-off service with flight tracking to ensure timely arrivals and departures.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">🏢</div>
          <h3>Corporate Transport</h3>
          <p>Dedicated business transportation solutions for companies, with billing accounts and priority service.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">🚙</div>
          <h3>Long Distance</h3>
          <p>Comfortable intercity transportation with fixed prices and experienced drivers for longer journeys.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">📦</div>
          <h3>Package Delivery</h3>
          <p>Swift and secure delivery service for your urgent packages and documents across the city.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">👨‍👩‍👧‍👦</div>
          <h3>Family Van</h3>
          <p>Spacious vehicles for family trips with extra luggage space and child seats available on request.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="why-us" id="about">
    <div class="pattern-bg"></div>
    <div class="container">
      <div class="why-us-grid">
        <div class="why-us-image">
          <div class="yellow-box"></div>
          <img src="../../assets/images/driver.webp" alt="Taxi service" class="why-us-img">
          <div class="stats-box">
            <div class="stats-number">15+</div>
            <div class="stats-text">Years of Experience</div>
          </div>
        </div>
        <div class="why-us-content">
          <h2>Why Choose QuickCab</h2>
          <p>With over 15 years of experience in the transportation industry, we're committed to providing our customers with the most reliable, safe, and comfortable taxi service in town.</p>
          <ul class="feature-list">
            <li class="feature-item">
              <div class="feature-icon">⏱️</div>
              <div class="feature-text">
                <h4>Fast & Reliable</h4>
                <p>Our drivers arrive on time, every time, with an average pickup time of less than 5 minutes.</p>
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-icon">👨‍✈️</div>
              <div class="feature-text">
                <h4>Professional Drivers</h4>
                <p>All our drivers are professionally trained, vetted, and have excellent knowledge of the city.</p>
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-icon">💰</div>
              <div class="feature-text">
                <h4>Competitive Pricing</h4>
                <p>Transparent fares with no hidden charges. Pay only for the distance traveled.</p>
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-icon">🛡️</div>
              <div class="feature-text">
                <h4>Safety First</h4>
                <p>GPS-tracked vehicles, real-time ride monitoring, and 24/7 customer support for your safety.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- Signup Modal -->
  <div id="signup-modal" class="modal-overlay signup">
    <div class="modal-content">
      <div class="modal-header">
          <h2>Create a GoCab Account</h2>
          <span class="modal-close" data-modal="signup-modal">&times;</span>
      </div>
      <div class="modal-body">
        <form id="signup-form" method="POST" action="signup.php">
          <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
              <div class="error-message" id="signup-name-error">Please enter your name</div>
          </div>
          <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
              <div class="error-message" id="signup-email-error">Please enter a valid email address</div>
          </div>
          <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone"  name="phone" class="form-control" placeholder="Enter your phone number" required>
              <div class="error-message" id="signup-phone-error">Please enter a valid phone number</div>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Create a password" required>
              <div class="error-message" id="signup-password-error">Password must be at least 8 characters with a number and special character</div>
          </div>
          <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm your password" required>
              <div class="error-message" id="signup-confirm-password-error">Passwords do not match</div>
          </div>
          <div class="form-group">
              <input type="checkbox" id="terms" required>
              <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
              <div class="error-message" id="terms-error">You must agree to the terms</div>
          </div>
          <div class="text-center mt-4">
              <button type="submit" class="btn">Create Account</button>
          </div>
          <div class="text-center mt-4">
              <p>Already have an account? <button class="login-btn" id="show-login">Login</button></p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div id="login-modal" class="modal-overlay">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Login to GoCab</h2>
        <span class="modal-close" data-modal="login-modal">&times;</span>
      </div>
      <div class="modal-body">
        <form id="login-form" method="POST" action="login.php">
          <div class="form-group">
            <label for="login-email">Email Address</label>
            <input type="email" id="login-email" name="email" class="form-control" placeholder="Enter your email" required>
            <div class="error-message" id="login-email-error">Please enter a valid email address</div>
          </div>
          <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="password" class="form-control" placeholder="Enter your password" required>
            <div class="error-message" id="login-password-error">Password must be at least 6 characters</div>
          </div>
          <div class="form-group">
            <label for="role">Select Role</label>
            <select id="role" class="form-control" name="role" required>
              <option value="" disabled selected>Select your role</option>
              <option value="passenger">Passenger</option>
              <option value="driver">Driver</option>
              <option value="admin">Administrator</option>
            </select>
            <div class="error-message" id="role-error">Please select a role</div>
          </div>
          <div class="form-footer">
            <div>
              <input type="checkbox" id="remember-me" name="remeber-me">
              <label for="remember-me">Remember me</label>
            </div>
            <a href="#" id="forgot-password">Forgot Password?</a>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn">Login</button>
          </div>
          <div class="text-center mt-4">
            <p>Don't have an account? <button class="signup btn" id="show-signup" style="background-color:var(--primary-color); color:var(--secondary-color);">Sign up</button></p>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show modals
        document.getElementById('login-btn').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent any default behavior
            document.getElementById('login-modal').style.display = 'flex';
        });
        
        // Switch between modals
        document.getElementById('show-signup').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('login-modal').style.display = 'none';
            document.getElementById('signup-modal').style.display = 'flex';
        });
        
        document.getElementById('show-login').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('signup-modal').style.display = 'none';
            document.getElementById('login-modal').style.display = 'flex';
        });
        
        
        // Close modals 
    const closeButtons = document.querySelectorAll('.modal-close');
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal');
            const modalElement = document.getElementById(modalId);
            if (modalElement) {
                modalElement.style.display = 'none';
            }
        });
    });
    
    // Close when clicking outside modal
    const modals = document.querySelectorAll('.modal-overlay');
    modals.forEach(function(modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });
    });
});

//password validation

document.getElementById("signup-form").addEventListener("submit", function(event) {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("signup-confirm-password").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault(); // Stop form submission
        return;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        event.preventDefault();
        return;
    }
});

document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect the form data
    var formData = new FormData(this);

    // Send the data to the server
    fetch("login.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Display success message and redirect
            alert(data.success);
            window.location.href = data.redirect;  // Redirect to the dashboard page
        } else {
            // Display error message
            alert(data.error);
        }
    })
    .catch(error => console.error("Error:", error));
});


</script>

</html>
