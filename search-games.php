<h1>Search results</h1>
<?php
// Connect to database and run SQL query
include("db.php");
// Read value from form
$keywords = $_POST['keywords'];
// Run SQL query
$sql = "SELECT * FROM devincars
WHERE car_model LIKE '%{$keywords}%'
ORDER BY car_id";
$results = mysqli_query($mysqli, $sql);
?>
<table>
<?php while($a_row = mysqli_fetch_assoc($results)):?>
<tr>
<td><a href="game-
details.php?id=<?=$a_row['car_id']?>"><?=$a_row['car_model']?></a></td>
<td><?=$a_row['price']?></td>
</tr>
<?php endwhile;?>
</table>