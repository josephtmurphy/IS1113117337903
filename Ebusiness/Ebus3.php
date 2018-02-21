<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h2>PURCHASE RECEIPT</h2>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Purchased by " . $_SESSION["name"] . ".";
        ?>
        
        <br/>
        <br/>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Email address: " . $_SESSION["email"];
        ?>
        
        <br/>
        <br/>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        
        <a href="homepage.html" class="btn" style="width:250px;height:150px">
    </body>
</html>