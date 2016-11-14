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
// Create connection
$link =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$showname = 'Test2';  // We have to feed the show name as the index.
$mysqli_get_users = mysqli_query($link,"SELECT * FROM showname where showname = '$showname'" );
 // $mq = mysqli_query() or die ("not working query");
   $row = mysqli_fetch_array($mysqli_get_users) or die("line 44 not working");
   $s=$row['image'];
   echo $s;
  // echo $row['image'];

   //echo '<img src="'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">';