<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connection.php";
session_start();

if(isset($_POST['companyName']))
{
    unset($_SESSION['Showid']);
    
    $company = $_POST['companyName'];
    $_SESSION['varname'] = $company;
} 

if(isset($_POST['showName']))
{
    unset($_SESSION['Showid']);
    
    $showname =$_POST['showName'];
    $_SESSION['showname'] =$showname;
    
    $companyName = $_SESSION['varname'];
    
    //echo $companyName;
    $locationQuery = "SELECT DISTINCT location FROM showname WHERE Company ='$companyName' LIMIT 1";
    $queryResult = mysqli_query($link, $locationQuery);
    
    $result = $queryResult->fetch_assoc();
    
        echo $result["location"];
    
}
if(isset($_POST['Btnid']))
{
    $showid = $_POST['Btnid'];
    $_SESSION['Showid'] = $showid;
    
    $companyQuery = "SELECT DISTINCT * FROM showname WHERE showId ='$showid' LIMIT 1";
    $companyResult = mysqli_query($link, $companyQuery);
    
    if($row = $companyResult->fetch_assoc())
    {
        $_SESSION['varname'] = $row['Company'];
        $_SESSION['showname'] = $row['showname'];
    }
}
//echo "value passed in is ".$company;

//echo "Session is set to" . $_SESSION['varname'];

//$showname =$_POST['showName'];
//$_SESSION['showname'] =$showname;
///echo "Session is set to" . $_SESSION['showname'];


//$_SESSION['varname'] = $_POST['data'];