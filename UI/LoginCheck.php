<?php
session_start();
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
$pass = md5($_POST["password"]);

$findWorkerQuery = "SELECT accounttype FROM worker WHERE login='$user' AND password='$pass' limit 1";
$queryResult = mysqli_query($link, $findWorkerQuery);

$findCompany = "SELECT  CompanyName FROM worker WHERE login ='$user'";
$queryResult2 = mysqli_query($link, $findCompany);

while($row = $queryResult2->fetch_assoc())    
 {
     $company = $row["CompanyName"];

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
  
 } 
if(mysqli_num_rows($queryResult) > 0)
{
    $accountType = $queryResult->fetch_object()->accounttype;
    
    if($accountType == 1)
    {
        //echo "Welcome to the System Admin page.";
        echo "<script> window.location = 'Administrator.html';</script>";
        
        
        
    }
    elseif ($accountType == 2) 
    {
        //This is where we would redirect them to the correct page
        //For now, it just redirects to a dummy page
        //echo "Welcome to the Program Manager page.";
       
        
        
        echo "<script> window.location = 'Super.php';</script>";
        $_SESSION['Companyname'] =$company;
        
        
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

