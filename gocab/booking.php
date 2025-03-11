<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Your Ride</title>
  <link rel="stylesheet" href="../assets/booking.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
<?php include('navbar.php'); ?>
  <div class="booking-container">

    <h1>Book Your Ride</h1>
    
    <form id="booking-form">
      <div class="form-group">
        <label for="pickup">Pickup Location</label>
        <input type="text" id="pickup" placeholder="Enter pickup address" required>
      </div>
      
      <div class="form-group">
        <label for="dropoff">Drop-off Location</label>
        <input type="text" id="dropoff" placeholder="Enter destination address" required>
      </div>
      
      <div class="divider">
        <div class="divider-line"></div>
        <div class="divider-text">Select Car Type</div>
        <div class="divider-line"></div>
      </div>
      
      <div class="car-types">
        <div class="car-type selected" data-type="standard" data-rate="2.5">
          <div class="car-icon"><img src="..\assets\images\tuk.png" style=" font-size: 40px;"></div>
          <h3>Tuk</h3>
          <p>Economy, 3 seats</p>
        </div>
        
        <div class="car-type" data-type="suv" data-rate="3.5">
          <div class="car-icon"><img src="..\assets\images\car.png" style=" font-size: 40px;"></div>
          <h3>Car</h3>
          <p>Spacious, 4 seats</p>
        </div>
        
        <div class="car-type" data-type="luxury" data-rate="5.0">
          <div class="car-icon"><img src="..\assets\images\van.png" style=" font-size: 20px;"></div>
          <h3>Van</h3>
          <p>Premium, 6 seats</p>
        </div>
      </div>
      
      <div class="fare-estimate">
        <h3>
          <span>Estimated Fare</span>
          <span id="fare-amount">$25 - $30</span>
        </h3>
        <p>Final fare may vary based on traffic and wait time</p>
      </div>
      
      <button type="submit" class="btn" id="book-btn">Book Ride</button>
    </form>
    
    <div id="booking-status" class="status-message"></div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Elements
      const bookingForm = document.getElementById('booking-form');
      const pickupInput = document.getElementById('pickup');
      const dropoffInput = document.getElementById('dropoff');
      const carTypes = document.querySelectorAll('.car-type');
      const fareAmount = document.getElementById('fare-amount');
      const bookBtn = document.getElementById('book-btn');
      const bookingStatus = document.getElementById('booking-status');
      
      // Variables
      let selectedCarType = 'standard';
      let selectedCarRate = 2.5;
      let distance = 0;
      
      // Calculate initial distance and fare
      calculateRandomDistance();
      updateFareEstimate();
      
      // Event listeners for car type selection
      carTypes.forEach(carType => {
        carType.addEventListener('click', function() {
          // Remove selected class from all car types
          carTypes.forEach(item => item.classList.remove('selected'));
          
          // Add selected class to clicked car type
          this.classList.add('selected');
          
          // Update selected car type and rate
          selectedCarType = this.dataset.type;
          selectedCarRate = parseFloat(this.dataset.rate);
          
          // Update fare estimate
          updateFareEstimate();
        });
      });
      
      // Event listeners for address inputs to recalculate distance
      pickupInput.addEventListener('blur', calculateRandomDistance);
      dropoffInput.addEventListener('blur', calculateRandomDistance);
      
      // Form submission
      bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!pickupInput.value || !dropoffInput.value) {
          alert('Please enter both pickup and drop-off locations');
          return;
        }
        
        // Show loading state
        bookBtn.innerHTML = '<span class="loading"></span> Processing...';
        bookBtn.disabled = true;
        
        // Simulate booking process
        setTimeout(() => {
          // Hide form and show confirmation
          bookingForm.classList.add('hidden');
          
          // Show success message
          bookingStatus.style.display = 'block';
          bookingStatus.innerHTML = `
            <h2 style="color: #4a154b; margin-bottom: 15px;">Ride Booked Successfully!</h2>
            <p>Your ${selectedCarType.toUpperCase()} cab will arrive at your pickup location in approximately 3-5 minutes.</p>
            <p style="margin: 15px 0;">Pickup: ${pickupInput.value}</p>
            <p>Drop-off: ${dropoffInput.value}</p>
            <div style="margin: 20px 0; font-size: 20px; font-weight: bold;">
              Estimated fare: ${fareAmount.textContent}
            </div>
            <button class="btn" onclick="location.reload()">Book Another Ride</button>
          `;
        }, 1500);
      });
      
      // Function to calculate a random distance between pickup and dropoff
      function calculateRandomDistance() {
        // In a real app, this would use a maps API to calculate actual distance
        // For demo purposes, we'll generate a random distance if both fields have values
        if (pickupInput.value && dropoffInput.value) {
          distance = Math.random() * 15 + 2; // Random distance between 2 and 17 miles
        } else {
          distance = 0;
        }
        
        updateFareEstimate();
      }
      
      // Function to update the fare estimate based on distance and car type
      function updateFareEstimate() {
        if (distance > 0) {
          const baseFare = 5;
          const distanceCost = distance * selectedCarRate;
          const minFare = Math.round(baseFare + distanceCost);
          const maxFare = Math.round(minFare * 1.2); // Add 20% buffer for traffic, etc.
          
          fareAmount.textContent = `$${minFare} - $${maxFare}`;
        } else {
          fareAmount.textContent = 'Enter locations';
        }
      }
    });
  </script>
</body>
</html>