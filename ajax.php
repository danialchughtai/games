<?php
// Connect to database and run SQL query
include("db.php");
// Is a keyword provided in the URL?
if(isset($_GET['search']))
$sql = "SELECT * FROM devincars WHERE car_model LIKE '%{$_GET['search']}%' ORDER BY car_year";
else
$sql = "SELECT * FROM devincars ORDER BY car_year";
// Fetch all record, convert to JSON and return
$results = $mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
print(json_encode($results));
?>