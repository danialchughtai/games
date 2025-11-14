<?php
// Connect to database and run SQL query
include("db.php");
// Grabs id value from URL
$id = $_GET['id'];
$sql = "SELECT * FROM devincars WHERE car_id = {$id}";
$rst = mysqli_query($mysqli, $sql);
$a_row = mysqli_fetch_assoc($rst);
?>
<h1><?=$a_row['car_model']?></h1>
<p><?=$a_row['car_year']?></p>
<a href="list-games.php"><< Back to list</a>