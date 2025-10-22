<?php
session_start();
require_once 'backend/db.php';
require_once 'backend/auth.php';

if (!isGuestLoggedIn()) {
 
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GINHAWA - Luxury Hotel & Restaurant</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/headfoot.css">
        <link rel="stylesheet" href="css/landingpage.css">
    </head>
    <body class="light-mode">
        <div class="page-wrapper">
            <nav class="navbar">
                <div class="navbar-container">
                    <a href="landingpage.php" class="navbar-brand">
                        <i class="fas fa-hotel"></i>
                        <span>GINHAWA</span>
                    </a>

                    <ul class="navbar-nav">
                        <li><a href="landingpage.php" class="nav-link active">
                            <i class="fas fa-home"></i> Home
                        </a></li>
                        <li><a href="guestlogin.php" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a></li>
                    </ul>
                </div>
            </nav>

            <main class="main-content">
                <section class="hero-section">
                    <div class="hero-overlay">
                        <div class="hero-content">
                            <h1>Welcome to GINHAWA</h1>
                            <p class="hero-subtitle">Luxury Hotel & After Glow Restaurant</p>
                            <p class="hero-description">Experience unmatched comfort and outstanding dining in the heart of the city.</p>
                        </div>
                    </div>
                </section>

                <section class="section section-dark">
                    <div class="container">
                        <div class="section-header">
                            <h2>Our Rooms & Suites</h2>
                            <p>Comfortable rooms with beautiful views</p>
                        </div>
                        
                        <div class="rooms-grid">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/Singelr.jpg" alt="Single Room" class="room-photo">
                                </div>
                                <div class="room-content">
                                    <h3>Single Room</h3>
                                    <p>Perfect for solo travelers</p>
                                    <a href="guestlogin.php" class="btn btn-primary btn-sm">
                                        Login to Book
                                    </a>
                                </div>
                            </div>
                            
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/Doubler.jpg" alt="Double Room" class="room-photo">
                                </div>
                                <div class="room-content">
                                    <h3>Double Room</h3>
                                    <p>Ideal for couples</p>
                                    <a href="guestlogin.php" class="btn btn-primary btn-sm">
                                        Login to Book
                                    </a>
                                </div>
                            </div>
                            
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/Kingsizer.jpg" alt="King Size Room" class="room-photo">
                                </div>
                                <div class="room-content">
                                    <h3>King Size Room</h3>
                                    <p>Luxury at its finest</p>
                                    <a href="guestlogin.php" class="btn btn-primary btn-sm">
                                        Login to Book
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <footer class="footer">
                <div class="container">
                    <p>&copy; 2025 GINHAWA Hotel & After Glow Restaurant. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
    </html>
    <?php
    exit();
}

// need muna mag login (protected page)
$guest = getCurrentGuest();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GINHAWA - Luxury Hotel & Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/headfoot.css">
    <link rel="stylesheet" href="css/landingpage.css">
</head>
<body class="light-mode">
    <div class="page-wrapper">
        <nav class="navbar">
            <div class="navbar-container">
                <a href="landingpage.php" class="navbar-brand">
                    <i class="fas fa-hotel"></i>
                    <span>GINHAWA</span>
                </a>

                <ul class="navbar-nav">
                    <li><a href="landingpage.php" class="nav-link active">
                        <i class="fas fa-home"></i> Home
                    </a></li>
                    <li><a href="bookings.php" class="nav-link">
                        <i class="fas fa-calendar-check"></i> Hotel Stay
                    </a></li>
                    <li><a href="order-food.php" class="nav-link">
                        <i class="fas fa-utensils"></i> Order Food
                    </a></li>
                    <li><a href="drinks.php" class="nav-link">
                        <i class="fas fa-cocktail"></i> Order Drinks
                    </a></li>
                    <li><a href="housekeeping.php" class="nav-link">
                        <i class="fas fa-broom"></i> Housekeeping
                    </a></li>
                    
                    <li class="logout-item"><a href="backend/logout.php" class="nav-link logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout (<?php echo htmlspecialchars($guest['name']); ?>)
                    </a></li>
                </ul>
            </div>
        </nav>

        <main class="main-content">
            <section class="hero-section">
                <div class="hero-overlay">
                    <div class="hero-content">
                        <h1>Welcome back to GINHAWA</h1>
                        <p class="hero-subtitle">Hello, <?php echo htmlspecialchars($guest['name']); ?>!</p>
                        <p class="hero-description">We're glad to have you back. How can we serve you today?</p>
                        <div class="hero-actions">
                            <a href="hotelbooking.php" class="btn btn-gold">Book New Stay</a>
                            <a href="bookings.php" class="btn btn-primary">View My Stays</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-dark">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Rooms & Suites</h2>
                        <p>Comfortable rooms with beautiful views</p>
                    </div>
                    
                    <div class="rooms-grid">
                        <div class="room-card">
                            <div class="room-image">
                                <img src="images/Singelr.jpg" alt="Single Room" class="room-photo">
                            </div>
                            <div class="room-content">
                                <h3>Single Room</h3>
                                <a href="hotelbooking.php" class="btn btn-primary btn-sm">
                                    Book Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="room-card">
                            <div class="room-image">
                                <img src="images/Doubler.jpg" alt="Double Room" class="room-photo">
                            </div>
                            <div class="room-content">
                                <h3>Double Room</h3>
                                <a href="hotelbooking.php" class="btn btn-primary btn-sm">
                                    Book Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="room-card">
                            <div class="room-image">
                                <img src="images/Kingsizer.jpg" alt="King Size Room" class="room-photo">
                            </div>
                            <div class="room-content">
                                <h3>King Size Room</h3>
                                <a href="hotelbooking.php" class="btn btn-primary btn-sm">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           <section class="section section-light">
    <div class="container">
        <div class="section-header">
            <h2>About GINHAWA Hotel</h2>
        </div>

     
        <div class="about-content">
         
            <div class="about-image">
                <img src="images/HCIhotel.jpg" alt="GINHAWA Hotel Exterior" class="about-photo">
            </div>

        
            <div class="about-text">
                <h3>Welcome to GINHAWA</h3>
                <p>
                    GINHAWA Hotel was established in 2010 with a vision to provide unparalleled luxury and comfort to our guests. 
                    Located in the heart of the city, our hotel combines modern elegance with traditional Filipino hospitality.
                </p>
                <p>
                    The name <strong>"GINHAWA"</strong> means comfort and ease in Filipino, which perfectly reflects our commitment 
                    to providing a relaxing and memorable stay for every guest. Our hotel features 150 beautifully designed rooms, 
                    state-of-the-art facilities, and exceptional service that has earned us numerous awards in the hospitality industry.
                </p>
            </div>
        </div>
    </div>
</section>


        </main>

        <footer class="footer">
            <div class="container">
                <p>&copy; 2025 GINHAWA Hotel & After Glow Restaurant. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>

