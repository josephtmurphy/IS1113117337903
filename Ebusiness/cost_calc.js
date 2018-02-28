/* global $ */

    var argSubTotal;
    var argDiscount;
    var argVat;
    var argTotal;

function calcSub(){
    
    if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
    calcDisVatTotal();
}

    if(document.getElementById('cloud9').checked) {
    argSubTotal = 200;
    calcDisVatTotal();
}

    if(document.getElementById('aws').checked) {
    argSubTotal = 300;
    calcDisVatTotal();
}

    if(document.getElementById('gmail').checked) {
    argSubTotal = 400;
    calcDisVatTotal();
}

    function calcDisVatTotal(parmSubTotal){
    
    argDiscount = argSubTotal * 0.05;
    argVat = argSubTotal * 0.10;
    argTotal = (argSubTotal - argDiscount) + argVat;
    
    display(argSubTotal, argDiscount, argVat, argTotal);
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
}
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('btnProceed').prop('disabled', true);
}