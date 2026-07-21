<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";
?>

<?php
include "db.php";
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Students</title>

<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Students Form</h2>

<form id="myForm">

<input type="text" id="name" placeholder="Name" required>

<input type="number" id="age" placeholder="Age" required>

<button type="submit">Submit</button>

</form>

<br>

<table border="1">

<tr>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Toggle</th>
</tr>

<tbody id="tableBody">

<?php

$result=$conn->query("SELECT * FROM names");

while($row=$result->fetch_assoc()){

echo "<tr>";

echo "<td>".$row['name']."</td>";

echo "<td>".$row['age']."</td>";

echo "<td>".$row['status']."</td>";

echo "<td><button onclick='toggleStatus(".$row['id'].")'>Toggle</button></td>";

echo "</tr>";

}

?>

</tbody>

</table>

<script src="script.js"></script>

</body>

</html>