<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is ." . $_SESSION["total"] . ".";
        ?>
        
        <a href="homepage.html" class="btn" style="width:250px;height:150px">
    </body>
</html>