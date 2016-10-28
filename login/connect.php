 <?php
$servername = "localhost";
$username = "KARLI";
$password = "CUTTIE0220";

// Create connection
$conn = new mysqli($servername, $username, $password);

/// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>