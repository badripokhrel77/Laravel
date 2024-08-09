<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Contact Us</h1>
        </header>
        <main>
            <div class="contact-form">
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="phone">Phone</label>
                    <input type="number" id="Phone" name="phone" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    
                    <button type="submit">  <i class="fa-solid fa-paper-plane"></i>  Send Message</button>
                
                </form>
            </div>
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><strong>  <i class="fa-solid fa-location-dot"></i>  
                     Address:</strong> Butwal-12,Tamnager</p>
                <p><strong> <i class="fa-solid fa-phone-volume"></i>    
                    Phone:</strong> 9862907601</p>
                <p><strong> <i class="fa-solid fa-envelope"></i>    
                    Email:</strong>sarugaire30@gmail.com</p>
                <div class="social-media">
                    <a href="#" class="social-icon">Facebook</a>
                    <a href="#" class="social-icon">Twitter</a>
                    <a href="#" class="social-icon">LinkedIn</a>
                    <a href="#" class="social-icon">WhatsApp</a>
                </div>
            </div>
        </main>
    </div>


</body>
</html>
