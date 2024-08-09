<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hotel Room Booking Form</title>
<link rel="stylesheet" href="book.css">
</head>
<body>
<div class="container">
  <form class="bookingForm" action="#" method="POST">
    <h2>Room Booking</h2>
    <div class="form-group">
      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" placeholder="Fullname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" placeholder="phone" required>
    </div>
    <div class="form-group">
        <label for="phone">Address:</label>
        <input type="text" id="Address" name="address"  placeholder="Address" required>
      </div>
    <div class="form-group">
      <label for="checkInDate">Check-in Date:</label>
      <input type="date" id="checkInDate" name="checkInDate" required>
    </div>
    <div class="form-group">
      <label for="checkOutDate">Check-out Date:</label>
      <input type="date" id="checkOutDate" name="checkOutDate" required>
    </div>
    <div class="form-group">
      <label for="roomType">Room Type:</label>
      <select id="roomType" name="roomType" required>
        <option value="">Select Room Type</option>
        <option value="single">Single Room</option>
        <option value="double">Double Room</option>
        <option value="suite">Suite</option>
      </select>
    </div>
    <div class="form-group">
      <label for="specialRequests">Special Requests:</label>
      <textarea id="specialRequests" name="specialRequests" rows="4"></textarea>
    </div>
    <button type="submit">Submit Booking</button>
  </form>
</div>
<script src="script.js"></script>
</body>
</html>
