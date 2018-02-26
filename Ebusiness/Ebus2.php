<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
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
    
    <body>
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        <div style="width:650px; border:6px outset navy;background:lightcyan; margin:auto">
        <h1>SephTech Cloud Computing Ltd.</h1>
        <h2>Please enter your payment details.</h2>
            
            <form method ="POST" action = "Ebus3.php">
                
                <h4>Personal Details:</h4>
            <label for="name">
                Name:
                <input type="text" id="name" placeholder="Name" name="name" maxlength="30">
            </label>
                
                <br/>
                
            <label for="email">
                Email:
                <input type="text" id="email" placeholder="Email" name="email" maxlength="30">
            </label>
            
            <br/>
            <br/>
            
            <h4>Payment Details:</h4>
                <label for="cardnum">
                Card Number:
                <input type="text" id="cardnum" placeholder="Card Number" name="cardnum" maxlength="16" type>
                </label>
                    
                    <br/>
                
                <label for="pin">
                PIN:
                <input type="password" id="user_pin" placeholder="PIN" name="pin" maxlength="4" type>
                </label>
                    
                    <br/>
                    <br/>
                    
                <button type="Submit" class="btn2" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br/>
            
            <button class="btn2" onClick="validateDetails()"> Validate </button>
            
            <br/>
            <br/>
            
            </div>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        // Set session variable
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        <?php
        // Set session variable
        $_SESSION["name"] = $_POST["name"];
        ?>
        
        <?php
        // Set session variable
        $_SESSION["email"] = $_POST["email"];
        ?>
        
    </body>
    
</html>