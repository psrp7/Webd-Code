function addNumber(){
    let num1 = parseInt(document.getElementById("firstnumber").value);
    let num2 = parseInt(document.getElementById("secondnumber").value);
    let sum = num1+num2;
    document.getElementById("result").value = sum;  

}

function subNumber(){
    let num1 = parseInt(document.getElementById("firstnumber").value);
    let num2 = parseInt(document.getElementById("secondnumber").value);
    let sum = num1-num2;
    document.getElementById("result").value = sum;  
}
function mulNumber(){
    let num1 = parseInt(document.getElementById("firstnumber").value);
    let num2 = parseInt(document.getElementById("secondnumber").value);

    let sum = num1*num2;

    document.getElementById("result").value = sum;  

}
function divNumber(){
    let num1 = parseInt(document.getElementById("firstnumber").value);
    let num2 = parseInt(document.getElementById("secondnumber").value);

    let sum = num1/num2;

    document.getElementById("result").value = sum;  

}