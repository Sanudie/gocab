<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCab - Admin Dashboard</title>
  <link rel="stylesheet" href="../../assets/adminindex.css">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="wrapper">
  <section class="admin-hero">
    <div class="admin-deco"></div>
    <div class="hero-content">
      <h1>Admin <span>Dashboard</span></h1>
      <p>Manage your GoCab operations efficiently</p>
    </div>
  </section>

  <section class="admin-content">
    <div class="container">
      <!-- Dashboard Summary -->
      <div class="dashboard-grid">
        <div class="dashboard-card">
          <div class="card-icon">🚕</div>
          <div class="card-value">43</div>
          <div class="card-label">Active Rides</div>
        </div>
        <div class="dashboard-card">
          <div class="card-icon">👨‍✈️</div>
          <div class="card-value">128</div>
          <div class="card-label">Active Drivers</div>
        </div>
        <div class="dashboard-card">
          <div class="card-icon">👥</div>
          <div class="card-value">2,847</div>
          <div class="card-label">Total Users</div>
        </div>
        <div class="dashboard-card">
          <div class="card-icon">💰</div>
          <div class="card-value">$12,458</div>
          <div class="card-label">Revenue (Today)</div>
        </div>
      </div>
      
      <!-- Current Rides Section -->
      <div class="admin-section" id="currentrides">
        <h2>Current Rides</h2>
        <div class="admin-actions">
          <div class="filters">
            <select class="filter-select">
              <option value="all">All Statuses</option>
              <option value="active">Active</option>
              <option value="pending">Pending</option>
              <option value="completed">Completed</option>
              <option value="cancelled">Cancelled</option>
            </select>
            <select class="filter-select">
              <option value="all">All Services</option>
              <option value="city">City Taxi</option>
              <option value="airport">Airport Transfer</option>
              <option value="corporate">Corporate</option>
              <option value="long">Long Distance</option>
            </select>
          </div>
          <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search rides...">
            <button class="search-btn">Search</button>
          </div>
        </div>
        <table class="admin-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Driver</th>
              <th>Pickup</th>
              <th>Destination</th>
              <th>Status</th>
              <th>Amount</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#RD5421</td>
              <td>John Smith</td>
              <td>Mike Davis</td>
              <td>123 Main St</td>
              <td>456 Park Ave</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>$24.50</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Cancel</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#RD5420</td>
              <td>Emma Johnson</td>
              <td>Robert Wilson</td>
              <td>789 Oak Dr</td>
              <td>Airport Terminal B</td>
              <td><span class="status-pill status-pending">Pending</span></td>
              <td>$35.75</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Cancel</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#RD5419</td>
              <td>Michael Brown</td>
              <td>Sarah Lee</td>
              <td>567 Pine St</td>
              <td>Downtown Mall</td>
              <td><span class="status-pill status-completed">Completed</span></td>
              <td>$18.90</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#RD5418</td>
              <td>Jennifer Williams</td>
              <td>David Jones</td>
              <td>321 Cedar Ln</td>
              <td>Conference Center</td>
              <td><span class="status-pill status-cancelled">Cancelled</span></td>
              <td>$0.00</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="pagination">
          <a href="#" class="page-btn">«</a>
          <a href="#" class="page-btn active">1</a>
          <a href="#" class="page-btn">2</a>
          <a href="#" class="page-btn">3</a>
          <a href="#" class="page-btn">»</a>
        </div>
      </div>
      
      <!-- Driver Management Section -->
      <div class="admin-section" id="drivers">
        <h2>Driver Management</h2>
        <div class="admin-actions">
          <div class="filters">
            <select class="filter-select">
              <option value="all">All Statuses</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
              <option value="pending">Pending Approval</option>
            </select>
            <select class="filter-select">
              <option value="all">All Vehicle Types</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV</option>
              <option value="van">Van</option>
            </select>
          </div>
          <button class="primary-btn">+ Add New Driver</button>
        </div>
        <table class="admin-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Vehicle</th>
              <th>Rating</th>
              <th>Status</th>
              <th>Total Rides</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#DR234</td>
              <td>Mike Davis</td>
              <td>Toyota Camry (Sedan)</td>
              <td>4.8/5</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>328</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Deactivate</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#DR235</td>
              <td>Sarah Lee</td>
              <td>Honda Civic (Sedan)</td>
              <td>4.9/5</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>246</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Deactivate</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#DR236</td>
              <td>Robert Wilson</td>
              <td>Ford Explorer (SUV)</td>
              <td>4.7/5</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>187</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Deactivate</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#DR237</td>
              <td>David Jones</td>
              <td>Toyota Sienna (Van)</td>
              <td>4.6/5</td>
              <td><span class="status-pill status-pending">Pending</span></td>
              <td>0</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Approve</button>
                  <button class="action-btn">Reject</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="pagination">
          <a href="#" class="page-btn">«</a>
          <a href="#" class="page-btn active">1</a>
          <a href="#" class="page-btn">2</a>
          <a href="#" class="page-btn">3</a>
          <a href="#" class="page-btn">»</a>
        </div>
      </div>

      <!-- Customer Details Section -->
      <div class="admin-section" id="customers">
        <h2>Customer Details</h2>
        <div class="admin-actions">
          <div class="filters">
            <select class="filter-select">
              <option value="all">All Statuses</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
              <option value="pending">Pending Approval</option>
            </select>
            <select class="filter-select">
              <option value="all">All Vehicle Types</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV</option>
              <option value="van">Van</option>
            </select>
          </div>
          <button class="primary-btn">+ Add New Driver</button>
        </div>
        <table class="admin-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Vehicle</th>
              <th>Rating</th>
              <th>Status</th>
              <th>Total Rides</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#DR234</td>
              <td>Mike Davis</td>
              <td>Toyota Camry (Sedan)</td>
              <td>4.8/5</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>328</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Deactivate</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#DR235</td>
              <td>Sarah Lee</td>
              <td>Honda Civic (Sedan)</td>
              <td>4.9/5</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>246</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Deactivate</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#DR236</td>
              <td>Robert Wilson</td>
              <td>Ford Explorer (SUV)</td>
              <td>4.7/5</td>
              <td><span class="status-pill status-active">Active</span></td>
              <td>187</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Edit</button>
                  <button class="action-btn">Deactivate</button>
                </div>
              </td>
            </tr>
            <tr>
              <td>#DR237</td>
              <td>David Jones</td>
              <td>Toyota Sienna (Van)</td>
              <td>4.6/5</td>
              <td><span class="status-pill status-pending">Pending</span></td>
              <td>0</td>
              <td>
                <div class="action-buttons">
                  <button class="action-btn">View</button>
                  <button class="action-btn">Approve</button>
                  <button class="action-btn">Reject</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="pagination">
          <a href="#" class="page-btn">«</a>
          <a href="#" class="page-btn active">1</a>
          <a href="#" class="page-btn">2</a>
          <a href="#" class="page-btn">3</a>
          <a href="#" class="page-btn">»</a>
        </div>
      </div>
      
      <!-- Analytics Section -->
      <div class="admin-section" id="analytics">
        <h2>Analytics & Reports</h2>
        <div class="analytics-cards">
          <div class="analytics-card">
            <h3>Revenue Overview</h3>
            <div class="chart-placeholder">
              Revenue Chart (Last 30 Days)
            </div>
          </div>
          <div class="analytics-card">
            <h3>Ride Distribution</h3>
            <div class="chart-placeholder">
              Ride Type Distribution Chart
            </div>
          </div>
          <div class="analytics-card">
            <h3>Customer Growth</h3>
            <div class="chart-placeholder">
              Customer Growth Chart (Last 12 Months)
            </div>
          </div>
          <div class="analytics-card">
            <h3>Driver Performance</h3>
            <div class="chart-placeholder">
              Driver Rating & Completion Rate Chart
            </div>
          </div>
        </div>
        <div class="admin-actions">
          <button class="primary-btn">Generate Monthly Report</button>
          <button class="primary-btn">Export Data</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Add New Driver Modal -->
  <div id="add-driver-modal" class="modal-overlay" style="display:none;">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Add New Driver</h2>
        <span class="modal-close" data-modal="add-driver-modal">&times;</span>
      </div>
      <div class="modal-body">
        <form id="add-driver-form" method="POST" action="add-driver.php">
          <div class="form-group">
            <label for="driver-name">Full Name</label>
            <input type="text" id="driver-name" name="name" class="form-control" placeholder="Enter driver's full name" required>
          </div>
          <div class="form-group">
            <label for="driver-email">Email Address</label>
            <input type="email" id="driver-email" name="email" class="form-control" placeholder="Enter driver's email" required>
          </div>
          <div class="form-group">
            <label for="driver-phone">Phone Number</label>
            <input type="tel" id="driver-phone" name="phone" class="form-control" placeholder="Enter driver's phone number" required>
          </div>
          <div class="form-group">
            <label for="vehicle-type">Vehicle Type</label>
            <select id="vehicle-type" class="form-control" name="vehicle_type" required>
              <option value="" disabled selected>Select vehicle type</option>
              <option value="sedan">Sedan</option>
              <option value="suv">SUV</option>
              <option value="van">Van</option>
            </select>
          </div>
          <div class="form-group">
            <label for="vehicle-model">Vehicle Model</label>
            <input type="text" id="vehicle-model" name="vehicle_model" class="form-control" placeholder="Enter vehicle model" required>
          </div>
          <div class="form-group">
            <label for="license-number">License Number</label>
            <input type="text" id="license-number" name="license_number" class="form-control" placeholder="Enter license number" required>
          </div> 
          <div class="text-center mt-4">
            <button type="submit" class="btn">Add Driver</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Show modals
    document.querySelectorAll('.primary-btn').forEach(function(btn) {
      btn.addEventListener('click', function() {
        document.getElementById('add-driver-modal').style.display = 'flex';
      });
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
    
    // Form submission handling
    document.getElementById('add-driver-form').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Driver added successfully!');
      document.getElementById('add-driver-modal').style.display = 'none';
    });
  });
</script>

</body>
</html>