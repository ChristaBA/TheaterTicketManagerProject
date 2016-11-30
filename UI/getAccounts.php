<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

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
    if(mysqli_query($link,"DELETE FROM worker WHERE login = '$unique'"))
    {
        echo "";
    }
    
}
$var_value =  $_SESSION['varname'];
    
if($var_value == "admin" | $var_value == "ADMIN")
{
    $result = mysqli_query($link,"SELECT * FROM worker");
}
else
{
    $result = mysqli_query($link,"SELECT * FROM worker WHERE companyName = '$var_value'");
}
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
echo "<td class=\"uniqueID\">" . $row['login'] . "</td>";
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

echo "<td><a href='' id='editLink'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);

?>