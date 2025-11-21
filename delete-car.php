<?php
include("db.php");

$id = $_GET['id'];

$sql = "DELETE FROM devincars WHERE car_id = $id";

$mysqli->query($sql);

// Redirect
header("location: list-games.php");
?>