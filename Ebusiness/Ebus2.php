<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method ="POST" action = "Ebus3.php">
                
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
                
                <label for="pin">
                PIN:
                <input type="password" id="user_pin" placeholder="PIN" name="pin" maxlength="4" type>
                </label>
                    
                    <br/>
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        // Set session variable
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        <?php
        // Set session variable
        $_SESSION["name"] = $_POST["name"];
        ?>
        
    </body>
    
</html>