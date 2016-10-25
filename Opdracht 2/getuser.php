<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>


<?php

$q = $_GET["q"];

    
$con = mysqli_connect('localhost','root','','world');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


    $sql= "SELECT * FROM country WHERE Name LIKE '$q%' OR Continent LIKE '$q%'"; 



$result = mysqli_query($con, $sql);
    
echo "<table>
<tr>
<th>Name</th>
<th>Continent</th>
</tr>";
    
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Continent'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>
