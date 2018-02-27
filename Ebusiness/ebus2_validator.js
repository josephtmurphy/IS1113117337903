/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        
    var cardnum;
    
    cardnum = document.getElementById("cardnum").value;
        
    if (cardnum==""){
        alert("Please enter your card number");
    }
    else if (String(cardnum).length<16){
        alert("Please make sure your card number is fully complete")
    }
    else{
        enablebtnPurchase();
    }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}