<?php

include "connection.php";
session_start();

//echo "The recieved show ID was: " .$_POST["showID"];
//echo "The receieved JSON was :" .$_POST["strJSON"];

$decodedSeats = json_decode($_POST["strJSON"]);
$showID = $_POST["showID"];
$payStatus = $_POST["payType"];

$returnSTR = "";
foreach($decodedSeats as $entry)
{
    $guid = com_create_guid();
    $insertTicket = "INSERT INTO tickets (seatNumber, Price, showId, UniqueId, Status, Pickup)
        VALUES ('$entry->seat','$entry->price','$showID','$guid','$payStatus', '0')";
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

