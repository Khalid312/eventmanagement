<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Vendor Panel</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem 0;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

h2 {
    color: #333;
}

a {
    color: #007bff;
    text-decoration: none;
    margin-left: 10px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem 0;
    position: absolute;
    bottom: 0;
    width: 100%;
}

    </style>
    <header>
        <h1>Vendor Panel</h1>
    </header>
    <main>
        <?php include("vendor_functions.php"); ?>
        <?php
            session_start();
            if(isset($_SESSION['vendor_id'])) {
                echo "<h2>Welcome, " . getVendorName($_SESSION['vendor_id']) . "!</h2>";
                echo "<a href='logout.php'>Logout</a>";
                echo "<h3>Your Events</h3>";
                displayVendorEvents($_SESSION['vendor_id']);
            } else {
                include("login_form.php");
            }
        ?>
    </main>
    <footer>
        <p>&copy; 2023 Vendor Panel</p>
    </footer>
</body>
</html>
