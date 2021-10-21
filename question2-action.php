<html>
<?php
include('db.sql.php');

$getdb = mysqli_select_db($mysqli,$db_db);

echo "<br>";

// Insert into employee table
$name = $_POST['name'];
$dob = $_POST['dob'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO employee (name, dob, username, password) VALUES ('$name', '$dob', '$username', '$password')";
if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

echo "<br>";

// Insert into remuneration table
$salary = (float)$_POST['salary']; 
$bonus = (float)$_POST['bonus'];

$sql2 = "INSERT INTO remuneration (salary, bonus) VALUES ($salary, $bonus)";
if ($mysqli->query($sql2) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $mysqli->error;
}

// Insert into cuti_claim
// Not added yet

?>

</html>