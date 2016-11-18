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
$firstname = filter_input(INPUT_POST,"firstname");
$lastname = filter_input(INPUT_POST,"lastname");
$ticketNumber = filter_input(INPUT_POST,"ticketNumber");
$email = filter_input(INPUT_POST,"email");
$phoneNumber = filter_input(INPUT_POST,"phoneNumber");
$seat = filter_input(INPUT_POST,"seat");
$day = filter_input(INPUT_POST,"day");
$time = filter_input(INPUT_POST,"time");
$address = filter_input(INPUT_POST,"address");
$company = filter_input(INPUT_POST,"company");
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $firstname);
$last_name = mysqli_real_escape_string($link, $lastname);
$ticket_Number = mysqli_real_escape_string($link, $ticketNumber);
$email_sql = mysqli_real_escape_string($link, $email);
$phone_Number = mysqli_real_escape_string($link, $phoneNumber);
$seat_sql = mysqli_real_escape_string($link, $seat);
$day_sql = mysqli_real_escape_string($link, $day);
$time_sql = mysqli_real_escape_string($link, $time);
$address_sql = mysqli_real_escape_string($link, $address);
//$company_sql = mysqli_real_escape_string($link, $company);
$company_sql = "whatEver";

$mysqli_get_users = mysqli_query($link,"SELECT * FROM seasonticket where email = '$email_sql' " );
$get_rows = mysqli_affected_rows($link);
if($get_rows >= 1)
{
    echo "email exists: please pick a different email.";
   // header('Location: index.php');
}
else{
$sql = "INSERT INTO seasonticket (firstname, lastname,  ticketnumber, email, phonenumber, seat, day, time, address, company)
VALUES ('$first_name', '$last_name','$ticket_Number', '$email_sql', $phone_Number, '$seat_sql', '$day_sql', '$time_sql', '$address_sql', '$company_sql')";
if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
$link->close();