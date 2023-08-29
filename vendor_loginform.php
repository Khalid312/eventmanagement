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
<?php
session_start();
require_once("db_connection.php");

if (isset($_SESSION['vendor_id'])) {
    $vendor_id = $_SESSION['vendor_id'];

    $query = "SELECT * FROM events WHERE vendor_id = '$vendor_id'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        while ($event = $result->fetch_assoc()) {
            echo "<div class='event'>";
            echo "<h3>{$event['event_name']}</h3>";
            echo "<p>Date: {$event['event_date']}</p>";
            echo "<p>Location: {$event['event_location']}</p>";
            echo "</div>";
        }
    } else {
        echo "No events available.";
    }
} else {
    header("Location: login_form.php");
    exit();
}
?>
