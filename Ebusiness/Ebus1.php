<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
         
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
        <center>
            
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        <div style="width:650px; border:6px outset navy;background:lightcyan; margin:auto">
        <h1>Excelsior Cloud Computing Ltd.</h1>
        <h2>Select a product:</h2>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="VAT">
                VAT
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button class="btn" onClick="calcSub()", "calcDisVAT()">Calculate Cost</button>
        </br>
        <a role="button" href="Ebus1.php" class="btn">Clear Choice</a>
        </br>
        
        </center>
        </div>
    </body>
</html>