<?php

include "connection.php";
session_start();

//echo "The recieved show ID was: " .$_POST["showID"];
//echo "The receieved JSON was :" .$_POST["strJSON"];
$var_value =  $_SESSION['varname']; 
$decodedSeats = json_decode($_POST["strJSON"]);
$showing = $_POST["showing"];
$payStatus = $_POST["payType"];
$first = $_POST["firstname"];
$last =$_POST["lastname"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$address = $_POST["address"];

$returnSTR = "";
foreach($decodedSeats as $entry)
{
    $guid = com_create_guid();
    $insertTicket = "INSERT INTO seasonticket (firstname, lastname, ticketnumber, email, phonenumber, seat, day, time, address, company)
        VALUES ('$first','$last','$guid','$email',$phoneNumber,'$entry->seat','$showing','7:00','$address','$var_value')";
            if ($link->query($insertTicket) === TRUE) 
            {
                $returnSTR .= $guid . "<br/>";
                //echo "New record created successfully<br>";
                //echo "You are being redirected.";
                //header("refresh:3; url = Super.php");
            }
            else
            {
                $returnSTR = "ERROR";
                break;
            }
}

echo $returnSTR;
?>

