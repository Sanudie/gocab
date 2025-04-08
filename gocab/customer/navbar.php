<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Navigation Bar</title>
  <style>
    /* * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background-color: #f5f5f5;
    } */
    
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
  </script>
</body>
</html>