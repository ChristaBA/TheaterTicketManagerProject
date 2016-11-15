<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manager Splash</title>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    </head>
    <body>
        <script>
            $(document).ready(function() {
                $.post("getSeasonTickets.php", function(response){
                   $("#seasonTicketDisplay").html(response);
                   //console.log(response);
                });
            });
        </script>
        <?php
        // put your code here
        ?>
        <h1>Welcome to the Program Manager Page.</h1>
        <div id="seasonTicketDisplay">
            
        </div>
    </body>
</html>
