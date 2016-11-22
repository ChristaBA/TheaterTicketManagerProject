<?php
session_start();
    $var_value =  $_SESSION['varname'];// $_SESSION['Companyname'];
    //echo "Session is set to" . $_SESSION['Companyname'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "testdatabase";
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 $test = mysqli_connect($servername, $username, $password);
// Check connection
if($test === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 //output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
//fputcsv($output, array('firstname' , 'lastname' ,  'ticketnumber', 'email', 'phonenumber', 'seat', 'day', 'time', 'address' ));

$link = mysqli_connect($servername, $username, $password, $dbname);

//$rows = mysqli_query($link, 'SELECT firstname, lastname,  ticketnumber, email, phonenumber, seat, day, time, address, company FROM seasonticket');
$companySelect = 'helloWorld';
$rows = mysqli_query($link, "SELECT firstname, lastname,  ticketnumber, email, phonenumber, seat, day, "
        . "time, address, company FROM seasonticket WHERE company = '$var_value'");


while ($row = mysqli_fetch_assoc($rows))
        { 
        fputcsv ($output, $row);
        }