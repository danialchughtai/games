<?php
include("db.php");

$id = $_POST['car_id'];
$model = $_POST['CarModel'];
$year = $_POST['CarYear'];
$reg = $_POST['CarRegistration'];
$cond = $_POST['CarCondition'];
$trans = $_POST['CarTransmission'];
$fuel = $_POST['CarFuelType'];
$price = $_POST['CarPrice'];

$sql = "UPDATE devincars SET 
car_model='$model',
car_year='$year',
car_registration='$reg',
`condition`='$cond',
transmission='$trans',
fuel_type='$fuel',
price='$price'
WHERE car_id=$id";

$mysqli->query($sql);

// Redirect
header("location: list-games.php");
?>