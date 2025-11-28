<?php
include("db.php");

$search = $_GET['search'];
$maxPrice = $_GET['maxPrice'];
$years = $_GET['years'];
$conditions = $_GET['conditions'];
$transmissions = $_GET['transmissions'];

$sql = "SELECT * FROM devincars WHERE price <= $maxPrice";

// if ($search != '')
// $sql .= " AND car_model LIKE '%$search%'";

// if ($years != '')
// $sql .= " AND car_year IN ($years)";

// if ($conditions != '')
// $sql .= " AND `condition` IN ('$conditions')";

// if ($transmissions != '')
// $sql .= " AND transmission IN ('$transmissions')";
if ($search !== '')
    $sql .= " AND car_model LIKE '%$search%'";

if ($years !== '' && preg_match('/^[0-9,]+$/', $years))
    $sql .= " AND car_year IN ($years)";

if ($conditions !== '' && preg_match('/^[a-zA-Z, ]+$/', $conditions))
    $sql .= " AND `condition` IN ('$conditions')";

if ($transmissions !== '' && preg_match('/^[a-zA-Z, ]+$/', $transmissions))
    $sql .= " AND transmission IN ('$transmissions')";


$sql .= " ORDER BY price";

$results = $mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
print(json_encode($results));
?>
