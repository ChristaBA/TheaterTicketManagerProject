<?php
include "mydb.php";
 include "connection.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
$pass = "admin";
$passwordlogin = md5($pass);
$mysqli_get_users = mysqli_query($link,"SELECT * FROM worker where login= 'admin' " );
$get_rows = mysqli_affected_rows($link);
if($get_rows >= 1)
{
    echo "User exists: please pick a different username.";
    //echo "You are being redirected.";
    //header("refresh:3; url = CreateSuper.html");
}
else
    {
$sql = "INSERT INTO worker (firstname, lastname, password,login, AccountType, companyName)
VALUES ('admin', 'admin', '$passwordlogin' ,'admin', 1, 'admin' )";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
    echo true;
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
    echo false;
}
}
$link->close();
