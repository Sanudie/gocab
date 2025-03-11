<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Navigation Bar</title>
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
    .login-btn {
      background-color: black;  
      color: white;               
      padding: 10px 20px;         
      border-radius: 10px;         
      text-decoration: none; 
      margin-left: 20px;     
    }

    .login-btn:hover {
      background-color: #333333;  
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
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="header-content">
        <div class="logo"><img src="..\assets\images\logo.png"></div>
        <div class="menu-toggle" id="mobile-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav id="nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Book a ride</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Account</a></li>
            <li><button class="login-btn" id="login-btn">Login</button></li>
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
  </script>
</body>
</html>
