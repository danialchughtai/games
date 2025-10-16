<?php
$mysqli = new mysqli("localhost","2441631","578s9k","db2441631");

if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}

?>