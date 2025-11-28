<?php
// Connect to database and run SQL query
include("db.php");
// Grabs id value from URL
$id = $_GET['id'];
$id = intval($id);

$sql = "SELECT * FROM devincars WHERE car_id = {$id}";
$rst = mysqli_query($mysqli, $sql);
$a_row = mysqli_fetch_assoc($rst);
?>
<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow-sm">
<div class="card-body">

<h2 class="card-title mb-4"><?=$a_row['car_model']?></h2>

<ul class="list-group list-group-flush">
<li class="list-group-item"><strong>Year:</strong> <?=$a_row['car_year']?></li>
<li class="list-group-item"><strong>Registration:</strong> <?=$a_row['car_registration']?></li>
<li class="list-group-item"><strong>Condition:</strong> <?=$a_row['condition']?></li>
<li class="list-group-item"><strong>Transmission:</strong> <?=$a_row['transmission']?></li>
<li class="list-group-item"><strong>Fuel Type:</strong> <?=$a_row['fuel_type']?></li>
<li class="list-group-item"><strong>Price:</strong> £<?=$a_row['price']?></li>
</ul>

<a href="list-games.php" class="btn btn-dark mt-4">← Back to List</a>

</div>
</div>

</div>

</body>
</html>

