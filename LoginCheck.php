<?php
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

$user = $_POST["userName"];
$pass = $_POST["password"];

$findWorkerQuery = "SELECT accounttype FROM worker WHERE login='$user' AND password='$pass' limit 1";
$queryResult = mysqli_query($link, $findWorkerQuery);

if(mysqli_num_rows($queryResult) > 0)
{
    $accountType = $queryResult->fetch_object()->accounttype;
    
    if($accountType == 1)
    {
        //echo "Welcome to the System Admin page.";
        echo "<script> window.location = 'AdminSplash.php';</script>";
    }
    elseif ($accountType == 2) 
    {
        //This is where we would redirect them to the correct page
        //For now, it just redirects to a dummy page
        //echo "Welcome to the Program Manager page.";
        echo "<script> window.location = 'ManagerSplash.php';</script>";
    }
    
    else 
    {
        echo "Unexpected Account Type. Please contact the System Admin.";
    }
}

else
{
    echo "Invalid Username or Password";
}