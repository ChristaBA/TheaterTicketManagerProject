<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Splash Example</title>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script>
            $(document).ready(function() {
                $.post("getAccounts.php", function(response){
                   $("#accountDisplay").html(response);
                   //console.log(response);
                });
            });
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h1>Welcome to the System Admin Page.</h1>
        <div id="accountDisplay">
            
        </div>
    </body>
</html>
