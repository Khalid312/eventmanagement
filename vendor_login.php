<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Login</h2>
<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>

</body>
</html>
<?php
// Simulated database functions

function getVendorName($vendorId) {
    // Replace with actual database query
    return "Vendor Name";
}

function displayVendorEvents($vendorId) {
    // Replace with actual database query to fetch events associated with the vendor
    $events = array(
        array("Event 1", "Date 1"),
        array("Event 2", "Date 2"),
    );

    if (count($events) > 0) {
        echo "<ul>";
        foreach ($events as $event) {
            echo "<li>{$event[0]} - {$event[1]}</li>";
        }
        echo "</ul>";
    } else {
        echo "No events available.";
    }
}
?>



