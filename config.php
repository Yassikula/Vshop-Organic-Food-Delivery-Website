 <?php
$servername = "localhost";
$username = "root"; // default username for localhost is root
$password = ""; // default password for localhost is empty
$dbname = "vegetables"; // database name

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}



?> 