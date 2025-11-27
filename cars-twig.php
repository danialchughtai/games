<?php
require_once 'vendor/autoload.php';

include("db.php");

$sql = "SELECT * FROM devincars ORDER BY car_id";
$cars = $mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);

$loader = new \Twig\Loader\FilesystemLoader('.');
$twig = new \Twig\Environment($loader);

echo $twig->render('cars.html', ['cars' => $cars]);
