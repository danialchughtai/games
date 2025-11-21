<?php
// Connect
include("db.php");

// Read ID from URL
$id = $_GET['id'];

// Fetch existing record
$sql = "SELECT * FROM devincars WHERE car_id = $id";
$record = mysqli_query($mysqli, $sql)->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

<div class="container mt-4">
<h1>Update Car</h1>

<form action="update-car.php" method="post">

<input type="hidden" name="car_id" value="<?=$record['car_id']?>">

<div class="mb-3">
<label class="form-label">Car Model</label>
<input type="text" class="form-control" name="CarModel" value="<?=$record['car_model']?>">
</div>

<div class="mb-3">
<label class="form-label">Car Year</label>
<input type="text" class="form-control" name="CarYear" value="<?=$record['car_year']?>">
</div>

<div class="mb-3">
<label class="form-label">Car Registration</label>
<input type="text" class="form-control" name="CarRegistration" value="<?=$record['car_registration']?>">
</div>

<div class="mb-3">
<label class="form-label">Condition</label>
<select class="form-select" name="CarCondition">
<option <?=$record['condition']=="New"?"selected":""?>>New</option>
<option <?=$record['condition']=="Used"?"selected":""?>>Used</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Transmission</label>
<select class="form-select" name="CarTransmission">
<option <?= $record['transmission']=="Automatic"?"selected":""?>>Automatic</option>
<option <?= $record['transmission']=="Manual"?"selected":""?>>Manual</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Fuel Type</label>
<select class="form-select" name="CarFuelType">
<option <?= $record['fuel_type']=="Diesel"?"selected":""?>>Diesel</option>
<option <?= $record['fuel_type']=="Petrol"?"selected":""?>>Petrol</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Price</label>
<input type="number" class="form-control" name="CarPrice" value="<?=$record['price']?>">
</div>

<input type="submit" class="btn btn-primary" value="Update Car">

</form>
</div>
</body>
</html>