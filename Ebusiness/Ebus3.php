<?php
session_start();
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <style>
            body {
                background-image: url(https://images.fineartamerica.com/images-medium-large-5/austin-daytime-skyline-tod-and-cynthia-grubbs.jpg);
                font: 18px arial;
                color: black;
                text-align: center;
                height: 100vh;
                background-size: cover;
                background-position: center;
                    }
        
            h1 {
            color: blue;
                    }
        </style>
        
    </head>
    
    <body>
        
        <br/>
        <br/>
        <br/>
        
        <div style="width:650px; border:6px outset navy;background:lightcyan; margin:auto">
        
        <center>
        <h1>Excelsior Cloud Computing Ltd.</h1>
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
        echo "Total is " . $_SESSION["total"] . " euros.";
        ?>
        
        <br/>
        <br/>
        
        <p>Thank you for shopping with Excelsior Cloud Computing Ltd!</p>
        
        <img src="http://www.animatedimages.org/data/media/1574/animated-success-image-0015.gif" alt="success">
        
        <br/>
        <br/>
        
        <a href="../homepage.html" class="btn">Home</a>
        
        <br/>
        <br/>
        
        </center>
        </div>
    </body>
</html>