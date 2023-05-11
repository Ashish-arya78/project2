<?php
$a_servername = "localhost";
$a_username = "root";
$a_password = "";
$a_dbname = "rental_booking";

// Create connection
$conn = new mysqli($a_servername, $a_username, $a_password, $a_dbname);

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS vehicle_booking (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone VARCHAR(30) NOT NULL,
select_vehicle VARCHAR(30) NOT NULL,
pickup_location VARCHAR(30) NOT NULL,
pickup_date VARCHAR(30) NOT NULL,
return_date VARCHAR(30) NOT NULL,
insurance_vehicle VARCHAR(30) NOT NULL,
payment_type VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "CREATE TABLE IF NOT EXISTS client_booking_feedback (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
message VARCHAR(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$conn->query($sql);

?>