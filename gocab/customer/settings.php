<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Settings</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background-color: #f5f5f5;
    }
    
    header {
      background-color: #D4AF37;
      padding: 10px 0;
      position: fixed;
      z-index: 100;
      width: 100%;
      height: 6rem;
    }
    
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo img{
      width: 280px;
      height: auto;
    }
    
    nav ul {
      display: flex;
      list-style: none;
      align-items: center;
    }
    
    nav ul li {
      margin-left: 20px;
    }
    
    nav ul li a {
      color: black;
      text-decoration: none;
      font-weight: 500;
      transition: opacity 0.3s;
    }
    
    nav ul li a:hover {
      opacity: 0.8;
      transition: color 0.3s;
    }

    .profile-container {
      position: relative;
    }

    .profile-icon {
      width: 40px;
      height: 40px;
      background-color: black;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-weight: bold;
      cursor: pointer;
      text-transform: uppercase;
    }

    .dropdown-menu {
      position: absolute;
      top: 50px;
      right: 0;
      background-color: white;
      border-radius: 4px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
      width: 180px;
      display: none;
      z-index: 101;
    }

    .dropdown-menu.active {
      display: block;
    }

    .dropdown-menu ul {
      display: block;
      padding: 0;
    }

    .dropdown-menu ul li {
      margin: 0;
      padding: 0;
    }

    .dropdown-menu ul li a {
      display: block;
      padding: 12px 15px;
      color: #333;
      text-decoration: none;
      transition: background-color 0.3s;
      border-bottom: 1px solid #eee;
    }

    .dropdown-menu ul li:last-child a {
      border-bottom: none;
    }

    .dropdown-menu ul li a:hover {
      background-color: #f7f7f7;
    }

    /* Main content styles */
    .main-content {
      padding-top: 8rem;
      padding-bottom: 3rem;
    }

    .settings-section {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .settings-header {
      margin-bottom: 2rem;
      border-bottom: 2px solid #D4AF37;
      padding-bottom: 1rem;
    }

    .settings-header h1 {
      color: #333;
    }

    .settings-tabs {
      display: flex;
      border-bottom: 1px solid #ddd;
      margin-bottom: 2rem;
    }

    .tab {
      padding: 1rem 1.5rem;
      cursor: pointer;
      font-weight: 500;
      border-bottom: 3px solid transparent;
      transition: all 0.3s;
    }

    .tab.active {
      color: #D4AF37;
      border-bottom: 3px solid #D4AF37;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 500;
      color: #555;
    }

    .form-control {
      width: 100%;
      padding: 0.8rem;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 1rem;
    }

    .form-control:focus {
      outline: none;
      border-color: #D4AF37;
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 24px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      transition: .4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      transition: .4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color: #D4AF37;
    }

    input:checked + .slider:before {
      transform: translateX(26px);
    }

    .setting-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
      border-bottom: 1px solid #eee;
    }

    .setting-item-label h3 {
      font-size: 1rem;
      font-weight: 500;
      margin-bottom: 0.2rem;
      color: #333;
    }

    .setting-item-label p {
      font-size: 0.9rem;
      color: #777;
    }

    .payment-method {
      display: flex;
      align-items: center;
      padding: 1rem;
      border: 1px solid #eee;
      border-radius: 6px;
      margin-bottom: 1rem;
    }

    .payment-method-logo {
      width: 60px;
      height: 40px;
      background-color: #f5f5f5;
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1rem;
      font-weight: bold;
      color: #555;
    }

    .payment-method-info {
      flex: 1;
    }

    .payment-method-actions a {
      color: #D4AF37;
      text-decoration: none;
      margin-left: 1rem;
      font-size: 0.9rem;
    }

    .btn {
      background-color: #D4AF37;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 4px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #c69c22;
    }

    .btn-danger {
      background-color: #f44336;
    }

    .btn-danger:hover {
      background-color: #d32f2f;
    }

    .btn-outline {
      background-color: transparent;
      color: #333;
      border: 1px solid #ddd;
    }

    .btn-outline:hover {
      background-color: #f5f5f5;
    }

    .btn-group {
      margin-top: 2rem;
      display: flex;
      justify-content: flex-end;
    }

    .btn-group .btn {
      margin-left: 1rem;
    }

    /* Hamburger menu for mobile */
    .menu-toggle {
      display: none;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 21px;
      cursor: pointer;
    }
    
    .menu-toggle span {
      display: block;
      height: 3px;
      width: 100%;
      background-color: black;
      border-radius: 3px;
    }
    
    /* Responsive styles */
    @media (max-width: 768px) {
      .menu-toggle {
        display: flex;
      }
      
      nav {
        position: absolute;
        top: 80px;
        left: 0;
        right: 0;
        background-color: #D4AF37;
        height: 0;
        overflow: hidden;
        transition: height 0.3s ease;
      }
      
      nav.active {
        height: auto;
        padding: 20px 0;
        box-shadow: 0 5px 5px rgba(0,0,0,0.1);
      }
      
      nav ul {
        flex-direction: column;
        width: 90%;
        margin: 0 auto;
      }
      
      nav ul li {
        margin: 0;
        padding: 10px 0;
        border-bottom: 1px solid rgba(255,255,255,0.2);
      }
      
      nav ul li:last-child {
        border-bottom: none;
      }

      .dropdown-menu {
        position: static;
        width: 100%;
        box-shadow: none;
        margin-top: 10px;
      }

      .settings-tabs {
        flex-wrap: wrap;
      }

      .tab {
        flex: 1 0 50%;
        text-align: center;
        padding: 0.8rem;
      }

      .setting-item {
        flex-direction: column;
        align-items: flex-start;
      }

      .setting-item-label {
        margin-bottom: 1rem;
      }

      .btn-group {
        flex-direction: column;
      }

      .btn-group .btn {
        margin: 0 0 1rem 0;
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="header-content">
        <div class="logo"><a href="index.php"><img src="..\..\assets\images\logo.png"></a></div>
        <div class="menu-toggle" id="mobile-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav id="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php">Book a ride</a></li>
            <li><a href="offer.php">Offers</a></li>
            <li><a href="support.php">Support</a></li>
            <li class="profile-container">
              <div class="profile-icon" id="user-profile"></div>
              <div class="dropdown-menu" id="profile-dropdown">
                <ul>
                  <li><a href="profile.php">View Profile</a></li>
                  <li><a href="settings.php">Settings</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="container">
      <div class="settings-section">
        <div class="settings-header">
          <h1>Settings</h1>
        </div>

        <div class="settings-tabs">
          <div class="tab active" data-tab="account">Account</div>
          <div class="tab" data-tab="payment">Payment Methods</div>
          <div class="tab" data-tab="notifications">Notifications</div>
          <div class="tab" data-tab="security">Security</div>
        </div>

        <!-- Account Tab -->
        <div class="tab-content active" id="account-tab">
          <form>
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" id="fullname" class="form-control" value="Sanudi Yapa">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" class="form-control" value="sanudi.yapa@example.com">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" class="form-control" value="+94 77 123 4567">
            </div>
            <div class="form-group">
              <label for="address">Default Address</label>
              <input type="text" id="address" class="form-control" value="42 Park Street, Colombo 05">
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <select id="language" class="form-control">
                <option value="en" selected>English</option>
                <option value="si">සිංහල</option>
                <option value="ta">தமிழ்</option>
              </select>
            </div>
            <div class="btn-group">
              <button type="reset" class="btn btn-outline">Cancel</button>
              <button type="submit" class="btn">Save Changes</button>
            </div>
          </form>
        </div>

        <!-- Payment Methods Tab -->
        <div class="tab-content" id="payment-tab">
          <div class="payment-method">
            <div class="payment-method-logo">VISA</div>
            <div class="payment-method-info">
              <h3>Visa Card ending in 4589</h3>
              <p>Expires 12/26</p>
            </div>
            <div class="payment-method-actions">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </div>
          </div>

          <div class="payment-method">
            <div class="payment-method-logo">MC</div>
            <div class="payment-method-info">
              <h3>Mastercard ending in 7823</h3>
              <p>Expires 09/25</p>
            </div>
            <div class="payment-method-actions">
              <a href="#">Edit</a>
              <a href="#">Remove</a>
            </div>
          </div>

          <button class="btn" style="margin-top: 1rem;">Add Payment Method</button>
        </div>

        <!-- Notifications Tab -->
        <div class="tab-content" id="notifications-tab">
          <div class="setting-item">
            <div class="setting-item-label">
              <h3>Push Notifications</h3>
              <p>Receive notifications for booking updates and offers</p>
            </div>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
          </div>

          <div class="setting-item">
            <div class="setting-item-label">
              <h3>Email Notifications</h3>
              <p>Receive booking confirmations and receipts via email</p>
            </div>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
          </div>

          <div class="setting-item">
            <div class="setting-item-label">
              <h3>SMS Notifications</h3>
              <p>Receive booking confirmations and updates via SMS</p>
            </div>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
          </div>

          <div class="setting-item">
            <div class="setting-item-label">
              <h3>Marketing Communications</h3>
              <p>Receive special offers and promotions</p>
            </div>
            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
          </div>
        </div>

        <!-- Security Tab -->
        <div class="tab-content" id="security-tab">
          <div class="form-group">
            <label for="current-password">Current Password</label>
            <input type="password" id="current-password" class="form-control">
          </div>
          <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" id="new-password" class="form-control">
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" id="confirm-password" class="form-control">
          </div>
          
          <div class="setting-item">
            <div class="setting-item-label">
              <h3>Two-Factor Authentication</h3>
              <p>Secure your account with an additional verification step</p>
            </div>
            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
          </div>

          <div class="setting-item">
            <div class="setting-item-label">
              <h3>Login Notifications</h3>
              <p>Receive notifications when your account is accessed from a new device</p>
            </div>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider"></span>
            </label>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-danger">Delete Account</button>
            <button type="button" class="btn">Update Password</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    // Mobile menu toggle functionality
    const mobileMenu = document.getElementById('mobile-menu');
    const nav = document.getElementById('nav');
    
    mobileMenu.addEventListener('click', function() {
      nav.classList.toggle('active');
    });

    // Profile dropdown functionality
    const userProfile = document.getElementById("user-profile");
    const profileDropdown = document.getElementById("profile-dropdown");
    const userName = "Sanudi Yapa";
    
    userProfile.textContent = userName.charAt(0);
    
    userProfile.addEventListener('click', function(e) {
      e.stopPropagation();
      profileDropdown.classList.toggle('active');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function() {
      if (profileDropdown.classList.contains('active')) {
        profileDropdown.classList.remove('active');
      }
    });
    
    // Prevent dropdown from closing when clicking inside it
    profileDropdown.addEventListener('click', function(e) {
      e.stopPropagation();
    });

    // Settings tabs functionality
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabs.forEach(tab => {
      tab.addEventListener('click', function() {
        // Remove active class from all tabs and contents
        tabs.forEach(t => t.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));
        
        // Add active class to clicked tab
        this.classList.add('active');
        
        // Show corresponding content
        const tabId = this.getAttribute('data-tab');
        document.getElementById(tabId + '-tab').classList.add('active');
      });
    });
  </script>
</body>
</html>