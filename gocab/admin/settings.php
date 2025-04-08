<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Admin Settings</title>
  <link rel="stylesheet" href="../../assets/adminindex.css">
  <style>
    .wrapper {
      margin-top: 0;
    }
    
    .settings-container {
      display: grid;
      grid-template-columns: 250px 1fr;
      gap: 30px;
      margin-bottom: 40px;
    }
    
    .settings-sidebar {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 20px;
      color: #fff;
    }
    
    .settings-nav {
      list-style: none;
    }
    
    .settings-nav-item {
      padding: 12px 15px;
      border-radius: 6px;
      margin-bottom: 5px;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
    }
    
    .settings-nav-item.active {
      background-color: #ffd500;
      color: #111;
      font-weight: 600;
    }
    
    .settings-nav-item:not(.active):hover {
      background-color: #2a2a2a;
    }
    
    .settings-icon {
      margin-right: 10px;
      font-size: 18px;
    }
    
    .settings-content {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 30px;
      color: #fff;
    }
    
    .settings-panel {
      display: none;
    }
    
    .settings-panel.active {
      display: block;
    }
    
    .settings-header {
      margin-bottom: 25px;
    }
    
    .settings-title {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .settings-description {
      color: #aaa;
      font-size: 14px;
    }
    
    .form-row {
      margin-bottom: 20px;
    }
    
    .form-label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      color: #ddd;
    }
    
    .form-input {
      width: 100%;
      padding: 12px 15px;
      background-color: #222;
      border: 1px solid #333;
      color: #fff;
      border-radius: 6px;
      font-size: 14px;
    }
    
    .form-input:focus {
      border-color: #ffd500;
      outline: none;
    }
    
    .settings-section {
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 1px solid #333;
    }
    
    .settings-section:last-child {
      border-bottom: none;
    }
    
    .settings-section-title {
      font-size: 18px;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
    }
    
    .settings-section-title:after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 40px;
      height: 3px;
      background-color: #ffd500;
    }
    
    .toggle-switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 30px;
    }
    
    .toggle-switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .toggle-slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #333;
      transition: .4s;
      border-radius: 30px;
    }
    
    .toggle-slider:before {
      position: absolute;
      content: "";
      height: 22px;
      width: 22px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      transition: .4s;
      border-radius: 50%;
    }
    
    input:checked + .toggle-slider {
      background-color: #ffd500;
    }
    
    input:checked + .toggle-slider:before {
      transform: translateX(30px);
    }
    
    .toggle-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }
    
    .toggle-label {
      font-size: 14px;
    }
    
    .notification-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }
    
    .color-picker {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }
    
    .color-option {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      cursor: pointer;
    }
    
    .color-option.active {
      border: 2px solid #fff;
    }
    
    .theme-card {
      background-color: #222;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      cursor: pointer;
      display: flex;
      align-items: center;
    }
    
    .theme-card.active {
      border: 2px solid #ffd500;
    }
    
    .theme-preview {
      width: 60px;
      height: 60px;
      border-radius: 8px;
      margin-right: 15px;
    }
    
    .dark-preview {
      background-color: #151515;
      position: relative;
    }
    
    .dark-preview:after {
      content: "";
      position: absolute;
      top: 15px;
      left: 15px;
      width: 30px;
      height: 10px;
      background-color: #ffd500;
    }
    
    .light-preview {
      background-color: #f5f5f5;
      position: relative;
    }
    
    .light-preview:after {
      content: "";
      position: absolute;
      top: 15px;
      left: 15px;
      width: 30px;
      height: 10px;
      background-color: #444;
    }
    
    .blue-preview {
      background-color: #1a2b47;
      position: relative;
    }
    
    .blue-preview:after {
      content: "";
      position: absolute;
      top: 15px;
      left: 15px;
      width: 30px;
      height: 10px;
      background-color: #3498db;
    }
    
    .theme-info {
      flex-grow: 1;
    }
    
    .theme-name {
      font-weight: 600;
      margin-bottom: 5px;
    }
    
    .theme-desc {
      font-size: 12px;
      color: #aaa;
    }
    
    .settings-actions {
      display: flex;
      justify-content: flex-end;
      gap: 15px;
      margin-top: 30px;
    }
    
    .cancel-btn {
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      background-color: transparent;
      color: #fff;
      border: 1px solid #444;
    }
    
    .save-btn {
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      background-color: #ffd500;
      color: #111;
      border: none;
    }
  </style>
</head>
<body>
<!-- <?php include('navbar.php'); ?> -->

<div class="wrapper">
  <section class="admin-hero">
    <div class="admin-deco"></div>
    <div class="hero-content">
      <h1>Admin <span>Settings</span></h1>
      <p>Customize your admin dashboard experience</p>
    </div>
  </section>

  <section class="admin-content">
    <div class="container">
      <div class="settings-container">
        <!-- Settings Sidebar -->
        <div class="settings-sidebar">
          <ul class="settings-nav">
            <li class="settings-nav-item active" data-panel="account">
              <span class="settings-icon">👤</span> Account Settings
            </li>
            <li class="settings-nav-item" data-panel="notifications">
              <span class="settings-icon">🔔</span> Notifications
            </li>
            <li class="settings-nav-item" data-panel="appearance">
              <span class="settings-icon">🎨</span> Appearance
            </li>
            <li class="settings-nav-item" data-panel="security">
              <span class="settings-icon">🔒</span> Security
            </li>
            <li class="settings-nav-item" data-panel="permissions">
              <span class="settings-icon">🔑</span> Permissions
            </li>
            <li class="settings-nav-item" data-panel="integrations">
              <span class="settings-icon">🔌</span> Integrations
            </li>
            <li class="settings-nav-item" data-panel="advanced">
              <span class="settings-icon">⚙️</span> Advanced
            </li>
          </ul>
        </div>
        
        <!-- Settings Content -->
        <div class="settings-content">
          <!-- Account Settings Panel -->
          <div class="settings-panel active" id="account">
            <div class="settings-header">
              <h2 class="settings-title">Account Settings</h2>
              <p class="settings-description">Manage your account information and preferences</p>
            </div>
            
            <form id="account-form">
              <div class="settings-section">
                <h3 class="settings-section-title">Personal Information</h3>
                
                <div class="form-row">
                  <label class="form-label" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-input" value="John Anderson">
                </div>
                
                <div class="form-row">
                  <label class="form-label" for="email">Email Address</label>
                  <input type="email" id="email" class="form-input" value="john.anderson@gocab.com">
                </div>
                
                <div class="form-row">
                  <label class="form-label" for="phone">Phone Number</label>
                  <input type="tel" id="phone" class="form-input" value="+1 (555) 123-4567">
                </div>
              </div>
              
              <div class="settings-section">
                <h3 class="settings-section-title">Preferences</h3>
                
                <div class="toggle-row">
                  <div class="toggle-label">Enable email notifications</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="toggle-row">
                  <div class="toggle-label">Enable SMS notifications</div>
                  <label class="toggle-switch">
                    <input type="checkbox">
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="toggle-row">
                  <div class="toggle-label">Auto-refresh dashboard</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="form-row">
                  <label class="form-label" for="timezone">Timezone</label>
                  <select id="timezone" class="form-input">
                    <option value="utc">UTC (Coordinated Universal Time)</option>
                    <option value="est" selected>EST (Eastern Standard Time)</option>
                    <option value="cst">CST (Central Standard Time)</option>
                    <option value="pst">PST (Pacific Standard Time)</option>
                  </select>
                </div>
                
                <div class="form-row">
                  <label class="form-label" for="language">Language</label>
                  <select id="language" class="form-input">
                    <option value="en" selected>English</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                    <option value="de">Deutsch</option>
                  </select>
                </div>
              </div>
              
              <div class="settings-actions">
                <button type="button" class="cancel-btn">Cancel</button>
                <button type="submit" class="save-btn">Save Changes</button>
              </div>
            </form>
          </div>
          
          <!-- Notifications Panel -->
          <div class="settings-panel" id="notifications">
            <div class="settings-header">
              <h2 class="settings-title">Notification Settings</h2>
              <p class="settings-description">Control how and when you receive alerts and notifications</p>
            </div>
            
            <form id="notifications-form">
              <div class="settings-section">
                <h3 class="settings-section-title">Email Notifications</h3>
                
                <div class="notification-item">
                  <div class="toggle-label">New customer registration</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">New driver application</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">Trip cancellations</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">Customer complaints</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">Daily revenue summary</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">Weekly performance reports</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
              </div>
              
              <div class="settings-section">
                <h3 class="settings-section-title">System Notifications</h3>
                
                <div class="notification-item">
                  <div class="toggle-label">Show desktop notifications</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">Play sound for new notifications</div>
                  <label class="toggle-switch">
                    <input type="checkbox">
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="notification-item">
                  <div class="toggle-label">System alerts (maintenance, updates)</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
              </div>
              
              <div class="settings-actions">
                <button type="button" class="cancel-btn">Cancel</button>
                <button type="submit" class="save-btn">Save Changes</button>
              </div>
            </form>
          </div>
          
          <!-- Appearance Panel -->
          <div class="settings-panel" id="appearance">
            <div class="settings-header">
              <h2 class="settings-title">Appearance Settings</h2>
              <p class="settings-description">Customize the look and feel of your dashboard</p>
            </div>
            
            <form id="appearance-form">
              <div class="settings-section">
                <h3 class="settings-section-title">Theme</h3>
                
                <div class="theme-card active">
                  <div class="theme-preview dark-preview"></div>
                  <div class="theme-info">
                    <div class="theme-name">Dark Theme</div>
                    <div class="theme-desc">Default dark mode for low light environments</div>
                  </div>
                </div>
                
                <div class="theme-card">
                  <div class="theme-preview light-preview"></div>
                  <div class="theme-info">
                    <div class="theme-name">Light Theme</div>
                    <div class="theme-desc">Bright theme for daytime use</div>
                  </div>
                </div>
                
                <div class="theme-card">
                  <div class="theme-preview blue-preview"></div>
                  <div class="theme-info">
                    <div class="theme-name">Blue Night</div>
                    <div class="theme-desc">Navy blue theme with accent colors</div>
                  </div>
                </div>
              </div>
              
              <div class="settings-section">
                <h3 class="settings-section-title">Accent Colors</h3>
                
                <div class="color-picker">
                  <div class="color-option active" style="background-color: #ffd500;"></div>
                  <div class="color-option" style="background-color: #e74c3c;"></div>
                  <div class="color-option" style="background-color: #3498db;"></div>
                  <div class="color-option" style="background-color: #2ecc71;"></div>
                  <div class="color-option" style="background-color: #9b59b6;"></div>
                </div>
              </div>
              
              <div class="settings-section">
                <h3 class="settings-section-title">Dashboard Layout</h3>
                
                <div class="form-row">
                  <label class="form-label" for="layout">Layout Style</label>
                  <select id="layout" class="form-input">
                    <option value="default" selected>Default (Cards and Tables)</option>
                    <option value="compact">Compact (Smaller Elements)</option>
                    <option value="comfortable">Comfortable (Larger Spacing)</option>
                  </select>
                </div>
                
                <div class="toggle-row">
                  <div class="toggle-label">Show quick stats on dashboard</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>
                </div>
                
                <div class="toggle-row">
                  <div class="toggle-label">Enable animations</div>
                  <label class="toggle-switch">
                    <input type="checkbox" checked>
                    <span class="toggle-slider"></span>
                  </label>


                  <!-- ithuru tika claude eke chat eken ganna one.. chat eka timeout una nisa mechcharai awe. ithuru tika ganna passe.
                 
                  https://claude.ai/chat/65075cd2-7279-466b-86b5-1d79a7cf9944  
                 
                  me thyenne e chat eka.
                  -->