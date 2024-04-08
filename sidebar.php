    <header class="header-main">
        <div class="sidebar">
            <h2>UPTM Facility Reservation System</h2>    
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="facilityList.php"><i class="fas fa-user"></i>Facility List</a></li>
                <li><a href="schedule.php"><i class="fas fa-user"></i>Schedule</a></li>
                <?php
                if (isset($_SESSION['is_admin'])) {
                    echo '<li><a href="bookingListAdmin.php"><i class="fas fa-address-card"></i>Reservation List</a></li>';
                    echo '<li><a href="manageFacility.php"><i class="fas fa-address-card"></i>Manage Facility</a></li>';
                }
                if (!isset($_SESSION['is_admin'])) {
                    echo '<li><a href="myBooking.php"><i class="fas fa-address-card"></i>My Booking</a></li>';
                    echo '<li><a href="profile.php"><i class="fas fa-address-card"></i>Profile</a></li>';
                }
                ?>

                <li><a href="faq.php"><i class=""></i>FAQ</a></li>
                <li><a href="includes/logout.php"><i class=""></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>