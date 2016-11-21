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