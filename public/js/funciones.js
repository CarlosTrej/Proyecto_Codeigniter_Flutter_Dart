
function hola(){
    alert("Hola Mundo");
}/* functionHola */

function validaNumeritos(event){

    if (event.charCode >=48 && event.charCode <=57) {
        return true;
    }
    if (event.charCode >=65 && event.charCode <=90){
        return true;
    }
    return false;
}/* validaNumeritos */