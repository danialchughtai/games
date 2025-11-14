<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Add a Car</h1>
<form action="add-game.php" method="post">
<div class="mb-3">
<label for="CarModel" class="form-label">Car Model</label>
<input type="text" class="form-control" id="CarModel" name="CarModel">
</div>
<div class="mb-3">
<label for="CarYear" class="form-label">Car Year</label>
<input type="number" class="form-control" id="CarYear" name="CarYear" min="1900" max="2099" placeholder="Enter year (e.g. 2020)">
</div>
<div class="mb-3">
<label for="CarRegistration" class="form-label">Car Registration</label>
<input type="text" class="form-control" id="CarRegistration" name="CarRegistration">
</div>
<div class="mb-3">
<label for="CarCondition" class="form-label">Car Condition</label>
<select class="form-select" id="CarCondition" name="CarCondition" required>
<option value="" selected disabled>Select condition</option>
<option value="New">New</option>
<option value="Used">Used</option>
</select>
</div>
<div class="mb-3">
<label for="CarTransmission" class="form-label">Car Transmission</label>
<select class="form-select" id="CarTransmission" name="CarTransmission" required>
<option value="" selected disabled>Select Transmission</option>
<option value="Manual">Manual</option>
<option value="Automatic">Automatic</option>
</select>
</div>
<div class="mb-3">
<label for="CarFuelType" class="form-label">Car Fuel Type</label>
<select class="form-select" id="CarFuelType" name="CarFuelType" required>
<option value="" selected disabled>Select Fuel Type</option>
<option value="Diesel">Diesel</option>
<option value="Petrol">Petrol</option>
</select>
</div>
<div class="mb-3">
<label for="CarPrice" class="form-label">Car Price</label>
<input type="number" class="form-control" id="CarPrice" name="CarPrice">
</div>
<input type="submit" class="btn btn-primary" value="Add Car">
</form>
</div>
</body>
</html>