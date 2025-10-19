<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
crossorigin="anonymous">
<body>
<h1 class="text-center">The list of my games</h1>
<?php
// Connect to database
include("db.php");
// Run SQL query
$sql = "SELECT * FROM videogames ORDER BY released_date";
$results = mysqli_query($mysqli, $sql);
?>
<div class="head d-flex justify-content-center gap-2 align-items-center mb-3">

<form action="search-games.php" method="post">
<input type="text" name="keywords" placeholder="Search">
<input type="submit" value="Go!">
</form>

<a href="add-game-form.php" class="btn btn-primary">Add a game</a>

</div>

<table class="table table-hover">
<?php while($a_row = mysqli_fetch_assoc($results)):?>
<tr>
<td><a href="game-details.php?id=<?=$a_row['game_id']?>"><?=$a_row['game_name']?></a></td>
<td><?=$a_row['rating']?></td>
</tr>
<?php endwhile;?>
</table>
</body>
</html>