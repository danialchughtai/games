<?php
// Read values from the form
$car_model = $_POST['CarModel'];
$car_year = $_POST['CarYear'];
$car_condition = $_POST['CarCondition'];
$car_registration = $_POST['CarRegistration'];
$car_transmission = $_POST['CarTransmission'];
$fuel_type = $_POST['CarFuelType'];
$car_price = $_POST['CarPrice'];
// Connect to database
include("db.php");
//sanitise input
$car_model = mysqli_real_escape_string($mysqli, $car_model);
$car_year = mysqli_real_escape_string($mysqli, $car_year);
$car_condition = mysqli_real_escape_string($mysqli, $car_condition);
$car_registration = mysqli_real_escape_string($mysqli, $car_registration);
$car_transmission = mysqli_real_escape_string($mysqli, $car_transmission);
$fuel_type = mysqli_real_escape_string($mysqli, $fuel_type);
$car_price = mysqli_real_escape_string($mysqli, $car_price);



// Build SQL statement
$sql = "INSERT INTO devincars(car_model, car_year, car_registration, `condition`, transmission, fuel_type, price)
VALUES('{$car_model}', '{$car_year}', '{$car_registration}', '{$car_condition}', '{$car_transmission}', '{$fuel_type}', '{$car_price}')";
// Run SQL statement and report errors
if(!$mysqli -> query($sql)) {
echo("<h4>SQL error description: " . $mysqli -> error . "</h4>");
}
// Redirect to list
header("location: list-games.php");
?>