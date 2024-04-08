<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Facility Reservation System</title>
    <link rel="stylesheet" href="css/faq.css"> <!-- Link to your FAQ CSS file for styling -->
    <link rel="stylesheet" href="css/sidebars.css"> <!-- Link to your sidebar CSS file -->
</head>
<body>
    <?php include_once 'sidebar.php'; ?> <!-- Include the sidebar -->
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-item">
            <button class="toggle-button">&#9660;</button> <!-- Downward arrow symbol for toggle button -->
            <h2>How do I make a reservation?</h2>
            <p class="answer" style="display: none;">To make a reservation, simply log in to your account, browse available facilities, select the desired date and time, and confirm your reservation.</p>
        </div>
        <div class="faq-item">
            <button class="toggle-button">&#9660;</button> <!-- Downward arrow symbol for toggle button -->
            <h2>Can I cancel my reservation?</h2>
            <p class="answer" style="display: none;">Yes, you can cancel your reservation by accessing your My Booking section. From there, you'll have the option to edit/delete any upcoming reservations.</p>
        </div>
        <div class="faq-item">
            <button class="toggle-button">&#9660;</button> <!-- Downward arrow symbol for toggle button -->
            <h2>Are there any fees for using the reservation system?</h2>
            <p class="answer" style="display: none;">No, the reservation system is provided free of charge to all students, faculty, and staff of UPTM. However, please note that there may be fees associated with certain facilities or services.</p>
        </div>
        <div class="faq-item">
            <button class="toggle-button">&#9660;</button> <!-- Downward arrow symbol for toggle button -->
            <h2>How far in advance can I make a reservation?</h2>
            <p class="answer" style="display: none;">Reservations can typically be made up anytime. However, this may vary depending on the facility and its availability.</p>
        </div>
    </div>

    <script>
        // JavaScript to toggle visibility of answer when button is clicked
        const toggleButtons = document.querySelectorAll('.toggle-button');
        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.parentNode.querySelector('.answer'); // Get the answer next to the button
                answer.style.display = answer.style.display === 'none' ? 'block' : 'none'; // Toggle answer display
            });
        });
    </script>
</body>
</html>
