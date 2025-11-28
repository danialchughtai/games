<?php
include("db.php");
$id = intval($id);


$id = $_POST['car_id'];
$id = intval($id);

$model = $_POST['CarModel'];
$year = $_POST['CarYear'];
$reg = $_POST['CarRegistration'];
$cond = $_POST['CarCondition'];
$trans = $_POST['CarTransmission'];
$fuel = $_POST['CarFuelType'];
$price = $_POST['CarPrice'];

//sanitise input
$model = mysqli_real_escape_string($mysqli, $model);
$year = mysqli_real_escape_string($mysqli, $year);
$reg = mysqli_real_escape_string($mysqli, $reg);
$cond = mysqli_real_escape_string($mysqli, $cond);
$trans = mysqli_real_escape_string($mysqli, $trans);
$fuel = mysqli_real_escape_string($mysqli, $fuel);
$price = mysqli_real_escape_string($mysqli, $price);


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