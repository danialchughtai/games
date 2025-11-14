<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

<h1 class="text-center mt-3">DevinCars</h1>

<?php
// Connect to database
include("db.php");
// Run SQL query
$sql = "SELECT * FROM devincars ORDER BY car_id";
$results = mysqli_query($mysqli, $sql);
?>

<div class="container">

<div class="d-flex justify-content-center align-items-center gap-3 mb-4">

<form action="search-games.php" method="post" class="d-flex gap-2">
<input type="text" name="keywords" placeholder="Search" class="form-control">
<input type="submit" value="Go!" class="btn btn-dark">
</form>

<a href="add-game-form.php" class="btn btn-primary">Add a Car</a>

<!-- Dropdown -->
<div class="dropdown" id="myDropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
Car Models
</button>
<ul class="dropdown-menu" id="myList"></ul>
</div>

<!-- Modal button -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
View All Cars
</button>

</div>

<table class="table table-hover table-bordered">
<tr>
<th>Model</th>
<th>Year</th>
<th>Registration</th>
<th>Condition</th>
<th>Transmission</th>
<th>Fuel</th>
<th>Price</th>
</tr>

<?php while($a_row = mysqli_fetch_assoc($results)):?>
<tr>
<td><a href="game-details.php?id=<?=$a_row['car_id']?>"><?=$a_row['car_model']?></a></td>
<td><?=$a_row['car_year']?></td>
<td><?=$a_row['car_registration']?></td>
<td><?=$a_row['condition']?></td>
<td><?=$a_row['transmission']?></td>
<td><?=$a_row['fuel_type']?></td>
<td>£<?=$a_row['price']?></td>
</tr>
<?php endwhile;?>

</table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5">All Cars</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
<table id="ajaxContent"></table>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Load dropdown data
const myDropdown = document.getElementById('myDropdown');
myDropdown.addEventListener('show.bs.dropdown', event => {

const myList = document.getElementById('myList');
myList.innerHTML = '<li class="dropdown-item">Loading...</li>';

fetch('ajax.php')
.then(response => response.json())
.then(response => {
myList.innerHTML = '';
response.forEach(car => {

var li = document.createElement("li");
var a = document.createElement("a");

a.innerHTML = car.car_model;
a.href = "#";
a.classList.add("dropdown-item");

li.appendChild(a);
myList.appendChild(li);

});
});
});
</script>

<script>
// Load modal data
const myModalEl = document.getElementById('exampleModal');
myModalEl.addEventListener('show.bs.modal', event => {

var table = document.getElementById("ajaxContent");
table.innerHTML = 'Loading...';

fetch('ajax.php')
.then(response => response.json())
.then(response => {

table.innerHTML = '';

response.forEach(car => {
var row = table.insertRow(0);
var cell1 = row.insertCell(0);
cell1.innerHTML = car.car_model;
});

});
});
</script>

</body>
</html>
