<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();

if(isset($_POST['companyName']))
{
    $company =$_POST['companyName'];
    $_SESSION['varname'] = $company;
} 

if(isset($_POST['showName']))
{
    $showname =$_POST['showName'];
    $_SESSION['showname'] =$showname;
    
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "testdatabase";
    $link =  mysqli_connect($servername, $username, $password, $dbname);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    
    $companyName = $_SESSION['varname'];
    
    //echo $companyName;
    $locationQuery = "SELECT DISTINCT location FROM showname WHERE Company ='$companyName' LIMIT 1";
    $queryResult = mysqli_query($link, $locationQuery);
    
    $result = $queryResult->fetch_assoc();
    
        echo $result["location"];
    
}
if(isset($_POST['Btnid']))
{
    $showid =$_POST['Btnid'];
    $_SESSION['Showid'] =$showid;
    
}
//echo "value passed in is ".$company;

//echo "Session is set to" . $_SESSION['varname'];

//$showname =$_POST['showName'];
//$_SESSION['showname'] =$showname;
///echo "Session is set to" . $_SESSION['showname'];


//$_SESSION['varname'] = $_POST['data'];