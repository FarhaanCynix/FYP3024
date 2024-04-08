<?php
session_start();
include_once 'includes/functions.inc.php';
include_once 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Facility</title>
    <link rel="stylesheet" href="css/sidebars.css">
    <link rel="stylesheet" href="css/manageFacility.css">
</head>

<body>
    <?php include_once 'sidebar.php'; ?>
    <div class="main-content">
        <div class="container">
            <h1>Edit This Facility</h1>
            <form action="includes/manageFacility.inc.php" method="post" class="table-list">
                <table>
                    <thead>
                        <tr>
                            <th>Facilty Name</th>
                            <th>Decsription</th>
                            <th>Capacity</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Initials output OR If admin not choose 
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                            // handlePostRequest($conn);
                            //   handleFormSubmissionFacilityManagement($conn, ['id', 'username', 'organization', 'facility', 'purpose', 'date', 'start_time', 'end_time', 'bid', 'status', 'checkbox'], 0, 0);
                        } else {
                            fetchAllFacility($conn, ['name', 'description', 'capacity', 'location', 'status'], $_GET['id']);
                        }
                        ?>
                    </tbody>
                </table>
            </form>

            <h2>Fill in The Facility Details to Edit</h2>
            <?php
            if (isset($_GET['success'])) {
                echo '<p class="success">' . $_GET['success'] . '</p>';
            }
            ?>
            <div class="form-edit">
                <form action="includes/editFacility.inc.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <table>
                        <tr>
                            <td><label for="name">Facility Name: </label></td>
                            <td><input type="text" name="name" size="20"></td>
                        </tr>
                        <tr>
                            <td><label for="description">Decsription: </label></td>
                            <td><input type="text" name="description" size="20"></td>
                        </tr>
                        <tr>
                            <td><label for="capacity">Capacity: </label></td>
                            <td><input type="number" name="capacity" size="20"></td>
                        </tr>
                        <tr>
                            <td><label for="location">Location: </label></td>
                            <td>
                                <select name="location">
                                    <option value="GF">Ground Floor</option>
                                    <option value="1F">1st Floor</option>
                                    <option value="2F">2nd Floor</option>
                                    <option value="3F">3rd Floor</option>
                                    <option value="4F">4th Floor</option>
                                    <option value="5F">5th Floor</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="status">Status: </label></td>
                            <td>
                                <select name="status">
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <button type="submit" name="back">Back</button>
                    <button type="submit" name="edit">Edit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
