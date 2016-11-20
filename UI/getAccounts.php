<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";

$link =  mysqli_connect($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

$result = mysqli_query($link,"SELECT * FROM worker");

echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Account Login</th>
<th>Account Type</th>

<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['login'] . "</td>";
switch ($row['accounttype']) {
    case 1:
        echo "<td>Administrator</td>";
        break;
    case 2:
        echo "<td>Program Manager</td>";
        break;

    default:
        echo "<td>Other</td>";
        break;
}

echo "<td><a href='javascript:void(0);' id='editLink'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);

?>