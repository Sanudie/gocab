<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Admin Profile</title>
  <link rel="stylesheet" href="../../assets/adminindex.css">
  <style>
    .wrapper {
      margin-top: 0;
    }
    
    .profile-container {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 30px;
      margin-bottom: 40px;
    }
    
    .profile-card {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      color: #fff;
    }
    
    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 0 auto 20px;
      background-color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 60px;
      color: #ffd500;
    }
    
    .profile-name {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 5px;
    }
    
    .profile-role {
      color: #ffd500;
      font-size: 16px;
      margin-bottom: 20px;
    }
    
    .profile-stats {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      margin-top: 20px;
    }
    
    .stat-box {
      background-color: #222;
      border-radius: 8px;
      padding: 15px;
    }
    
    .stat-value {
      font-size: 24px;
      font-weight: 600;
      color: #fff;
    }
    
    .stat-label {
      font-size: 14px;
      color: #aaa;
    }
    
    .profile-details {
      background-color: #1d1d1d;
      border-radius: 10px;
      padding: 30px;
      color: #fff;
    }
    
    .details-section {
      margin-bottom: 30px;
    }
    
    .details-section h3 {
      font-size: 18px;
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
    }
    
    .details-section h3:after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 40px;
      height: 3px;
      background-color: #ffd500;
    }
    
    .detail-row {
      display: flex;
      margin-bottom: 15px;
    }
    
    .detail-label {
      flex-basis: 30%;
      color: #aaa;
    }
    
    .detail-value {
      flex-basis: 70%;
      font-weight: 500;
    }
    
    .activity-item {
      display: flex;
      align-items: flex-start;
      padding: 15px 0;
      border-bottom: 1px solid #333;
    }
    
    .activity-icon {
      width: 40px;
      height: 40px;
      border-radius: 8px;
      background-color: rgba(255, 213, 0, 0.1);
      color: #ffd500;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 20px;
    }
    
    .activity-content {
      flex-grow: 1;
    }
    
    .activity-text {
      margin-bottom: 5px;
    }
    
    .activity-time {
      font-size: 14px;
      color: #aaa;
    }
    
    .profile-actions {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }
    
    .profile-btn {
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      flex: 1;
    }
    
    .primary-profile-btn {
      background-color: #ffd500;
      color: #111;
      border: none;
    }
    
    .secondary-profile-btn {
      background-color: transparent;
      color: #fff;
      border: 1px solid #444;
    }
  </style>
</head>
<body>
<!-- <?php include('navbar.php'); ?> -->

<div class="wrapper">
  <section class="admin-hero">
    <div class="admin-deco"></div>
    <div class="hero-content">
      <h1>Admin <span>Profile</span></h1>
      <p>Manage your profile and account details</p>
    </div>
  </section>

  <section class="admin-content">
    <div class="container">
      <div class="profile-container">
        <!-- Profile Card -->
        <div class="profile-card">
          <div class="profile-image">👨‍💼</div>
          <h2 class="profile-name">John Anderson</h2>
          <p class="profile-role">System Administrator</p>
          
          <button class="primary-btn">Edit Profile</button>
          
          <div class="profile-stats">
            <div class="stat-box">
              <div class="stat-value">285</div>
              <div class="stat-label">Actions Today</div>
            </div>
            <div class="stat-box">
              <div class="stat-value">482</div>
              <div class="stat-label">Total Actions</div>
            </div>
            <div class="stat-box">
              <div class="stat-value">18</div>
              <div class="stat-label">Days Active</div>
            </div>
            <div class="stat-box">
              <div class="stat-value">42</div>
              <div class="stat-label">Reports Created</div>
            </div>
          </div>
          
          <div class="profile-actions">
            <button class="profile-btn secondary-profile-btn">Reset Password</button>
            <button class="profile-btn primary-profile-btn">Settings</button>
          </div>
        </div>
        
        <!-- Profile Details -->
        <div class="profile-details">
          <div class="details-section">
            <h3>Personal Information</h3>
            
            <div class="detail-row">
              <div class="detail-label">Full Name</div>
              <div class="detail-value">John Anderson</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Email</div>
              <div class="detail-value">john.anderson@gocab.com</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Phone</div>
              <div class="detail-value">+1 (555) 123-4567</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Department</div>
              <div class="detail-value">Operations</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Position</div>
              <div class="detail-value">System Administrator</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Joined</div>
              <div class="detail-value">March 3, 2025</div>
            </div>
          </div>
          
          <div class="details-section">
            <h3>Account Details</h3>
            
            <div class="detail-row">
              <div class="detail-label">User ID</div>
              <div class="detail-value">ADM-42</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Access Level</div>
              <div class="detail-value">Level 3 (Full Access)</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Last Login</div>
              <div class="detail-value">Today, 9:42 AM</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">Status</div>
              <div class="detail-value">
                <span class="status-pill status-active">Active</span>
              </div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label">2FA</div>
              <div class="detail-value">Enabled</div>
            </div>
          </div>
          
          <div class="details-section">
            <h3>Recent Activity</h3>
            
            <div class="activity-item">
              <div class="activity-icon">📝</div>
              <div class="activity-content">
                <div class="activity-text">Generated monthly earnings report</div>
                <div class="activity-time">Today, 10:23 AM</div>
              </div>
            </div>
            
            <div class="activity-item">
              <div class="activity-icon">👨‍✈️</div>
              <div class="activity-content">
                <div class="activity-text">Approved new driver: Michael Johnson</div>
                <div class="activity-time">Today, 9:47 AM</div>
              </div>
            </div>
            
            <div class="activity-item">
              <div class="activity-icon">🔍</div>
              <div class="activity-content">
                <div class="activity-text">Reviewed customer complaint #CR-238</div>
                <div class="activity-time">Yesterday, 4:12 PM</div>
              </div>
            </div>
            
            <div class="activity-item">
              <div class="activity-icon">💰</div>
              <div class="activity-content">
                <div class="activity-text">Updated pricing for Airport Transfer service</div>
                <div class="activity-time">Yesterday, 11:05 AM</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Profile edit functionality would go here
  });
</script>

</body>
</html>