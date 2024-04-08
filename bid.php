<?php
session_start();
if (!$_SESSION['isBid']) {
    header("Location: ./reservation.php");
    exit();
}
include_once 'includes/functions.inc.php';
include_once 'includes/db.inc.php';
$facilityId = $_GET['facility_id'];
$club = $_GET['club'];
$purpose = $_GET['purpose'];
$date = $_GET['date'];
$startTime = $_GET['start_time'];
$endTime = $_GET['end_time'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/sidebars.css">
    <link rel="stylesheet" href="css/reservation.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <?php include_once 'sidebar.php'; ?>
    <div class="main-content">
        <h1>Make Reservation</h1>
        <div class="container">
            <p>Slot available. Check the details before proceeding.</p>

            <!-- Display reservation details in a table -->
            <table class="reservation-details">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Facility ID</td>
                    <td><?php echo $facilityId; ?></td>
                </tr>
                <tr>
                    <td>Club</td>
                    <td><?php echo $club; ?></td>
                </tr>
                <tr>
                    <td>Purpose</td>
                    <td><?php echo $purpose; ?></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><?php echo $date; ?></td>
                </tr>
                <tr>
                    <td>Start Time</td>
                    <td><?php echo $startTime; ?></td>
                </tr>
                <tr>
                    <td>End Time</td>
                    <td><?php echo $endTime; ?></td>
                </tr>
            </table>

            <form action="includes/bid.inc.php" method="post">

                <input type="hidden" name="facility_id" id="facility_id" value="<?php echo $facilityId; ?>">
                <input type="hidden" name="club" id="club" value="<?php echo $club; ?>">
                <input type="hidden" name="purpose" id="club" value="<?php echo $purpose; ?>">
                <input type="hidden" name="date" id="date" value="<?php echo $date; ?>">
                <input type="hidden" name="start_time" id="start_time" value="<?php echo $startTime; ?>">
                <input type="hidden" name="end_time" id="end_time" value="<?php echo $endTime; ?>">

                <div class="confirmation-message">Are you sure you want to proceed?</div>

                <button type="submit" name="noBidBtn">Yes</button>
                <button type="submit" name="bidBtn">No</button>

            </form>
        </div>
    </div>

</body>

</html>
