<?php
include "db_connect.php";
$new_first = $_GET["newfn"];
$new_last = $_GET["newln"];
$new_middle = $_GET["newmn"];
$new_time = $_GET["dpt"];
$new_people = $_GET["peoplere"];
$new_comment = $_GET["commentre"];
$new_meal = $_GET["mealtype"];


$new_first = addslashes($new_first );

$new_last= addslashes($new_last );

$new_middle= addslashes($new_middle );

$new_time= addslashes($new_time );

$new_people= addslashes($new_people );

$new_comment= addslashes($new_comment );

$new_meal= addslashes($new_meal );
// Search for word 

echo "<h2 Thanks for the reservation. </h2>";

$sql = "INSERT INTO Reservation (ReservationID, First Name, Last Name, Middle Name, People, Comment, Time, Meal) VALUES (NULL, '$new_first', '$new_last', '$new_middle', '$new_people'
, '$new_comment', '$new_time', '$new_meal' )";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));


?>


