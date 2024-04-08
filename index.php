<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <!-- <link rel="stylesheet" href="css/dashboard.css"> Link to your CSS file for styling -->
    <link rel="stylesheet" href="css/sidebars.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
    <script>var __adobewebfontsappname__ = "dreamweaver"</script>
    <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
    <?php include_once 'sidebar.php'; ?>
    <div class="main-content">
    <div class="container">
        <!-- Navigation -->
        <header> <a href="">
                <img src="img/UPTM_Logo.png" alt="">
            </a>
            <nav>
                <ul>
                    <li><a href="#about">RESERVATION SYSTEM</a></li>
                </ul>
            </nav>
        </header>
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <h2 class="hero_header"> <span class="light">&nbsp;</span></h2>
            <p class="tagline">&nbsp;&nbsp;</p>
        </section>
        <!-- About Section -->
        <section class="about" id="about">
            <h2 class="hidden">About</h2>
            <p class="text_column">The Universiti Poly-Tech Malaysia (UPTM) exemplifies its commitment to providing a
                holistic educational experience through the introduction of its innovative Booking Facility Reservation
                System. Rooted in the university's vision of becoming the preferred institution for cultivating
                professionals who positively impact the nation, this system integrates contemporary technologies to
                offer a personalized and seamless reservation process for students and staff alike. Upholding UPTM's
                core values of Trustworthy, Caring, Resilient, and Respected, the system not only focuses on efficiency
                but also emphasizes the development of human attributes. By empowering every user to access
                state-of-the-art facilities, UPTM ensures that its students are equipped not only with technical skills
                but also with the professionalism, ethical responsibility, and social awareness necessary for
                contributing to a better tomorrow for the nation and beyond. The Booking Facility Reservation System
                stands as a testament to UPTM's dedication to fostering an environment where individuals can thrive and
                excel in their journey toward becoming well-rounded, socially conscious professionals.. </p>
        </section>
        <!-- Footer Section -->
        <section class="footer_banner" id="contact">
            <h2 class="hidden">Footer Banner Section </h2>
            <p class="hero_header">FOR THE LATEST NEWS &amp; UPDATES</p>
            <div class="button">subscribe</div>
        </section>
        <!-- Copyrights Section -->
        <div class="copyright">&copy;2023- Universiti poly-tech malaysia <strong>&nbsp;</strong></div>
    </div>
    <!-- Main Container Ends -->
    </div>
</body>

</html>