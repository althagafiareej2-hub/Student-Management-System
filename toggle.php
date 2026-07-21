<?php

include "db.php";

$id=$_POST['id'];

$conn->query("UPDATE names
SET status=IF(status=0,1,0)
WHERE id=$id");


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