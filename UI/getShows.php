<?php
 //include "connection.php";
session_start();
   $var_value =  $_SESSION['varname'];
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

$result =  mysqli_query($link, "SELECT  showname,  date, time ,location, Company FROM showname WHERE Company = '$var_value'");

//mysqli_query($link,"SELECT * FROM seasonticket WHERE CompanyName ='$var_value' ");

echo "<table border='1'>
<tr>
<th>Showname</th>
<th>Date</th>
<th>Time</th>
<th>Location</th>
<th>Company</th>



<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['showname'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>" . $row['Company'] . "</td>";


echo "<td><a href='javascript:void(0);' id='editLink'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);