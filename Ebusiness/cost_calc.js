/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
}

    if(document.getElementById('cloud9').checked) {
    argSubTotal = 200;
}

    if(document.getElementById('aws').checked) {
    argSubTotal = 300;
}

    if(document.getElementById('gmail').checked) {
    argSubTotal = 400;
}

enablebtnProceed();
display(argSubTotal);
}

function display(parm1){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;

function calcDisVAT(){
    
    var argVAT;
    
    if(document.getElementById('salesforce').checked) {
    argVAT = 10;
}

    if(document.getElementById('cloud9').checked) {
    argVAT = 20;
}

    if(document.getElementById('aws').checked) {
    argVAT = 30;
}

    if(document.getElementById('gmail').checked) {
    argVAT = 40;
}

display(argVAT);
}

function display(parm2){
    document.getElementById("vat").value = parm2;
    
        var argDiscount;

    if(document.getElementById('salesforce').checked) {
    argDiscount = 5;
}

    if(document.getElementById('cloud9').checked) {
    argDiscount = 10;
}

    if(document.getElementById('aws').checked) {
    argDiscount = 15;
}

    if(document.getElementById('gmail').checked) {
    argDiscount = 20;
}

display(argDiscount);
}

function display(parm3){
    document.getElementById("discount").value = parm3;
    
    enablebtnProceed();
}
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('btnProceed').prop('disabled', true);
}