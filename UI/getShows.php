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

if(isset($_POST['id']))
{
    $unique = $_POST['id'];
    if(mysqli_query($link,"DELETE FROM showname WHERE showId = '$unique'"))
    {
        echo "";
    }
    
}

$result =  mysqli_query($link, "SELECT  showname,  date, time ,location, Company, showId FROM showname WHERE Company = '$var_value'");

//mysqli_query($link,"SELECT * FROM seasonticket WHERE CompanyName ='$var_value' ");

echo "<table border='1'>
<tr>
<th hidden></th>
<th>Showname</th>
<th>Date</th>
<th>Location</th>
<th>Company</th>



<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td hidden class=\"uniqueID\">" . $row['showId'] . "</td>";
echo "<td>" . $row['showname'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>" . $row['Company'] . "</td>";
echo "<td><a href='' id='editLink'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);