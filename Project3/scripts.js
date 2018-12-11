
function getValue(id){
  return parseFloat(document.getElementById(id).value);
}
function quadForm() {
    var aValue = parseInt(document.getElementById("aValue").value);
    var bValue = parseInt(document.getElementById("bValue").value);
    var cValue = parseInt(document.getElementById("cValue").value);

    var result = ((aValue*-1)+(Math.pow(Math.pow(bValue,2)-(4*aValue*cValue),1/2)))/(2*aValue);
    var result1 = ((aValue*-1)-(Math.pow(Math.pow(bValue,2)-(4*aValue*cValue),1/2)))/(2*aValue);

    document.getElementById("result").innerHTML = result;
    document.getElementById("result1").innerHTML = result1;
}
function volume(){
    var vValue = parseInt(document.getElementById("vValue").value);
    var resultV = Math.pow(vValue,3);
    document.getElementById("resultV").innerHTML = resultV;
}
function triArea(){
    var baseValue = parseInt(document.getElementById("baseValue").value);
    var heightValue = parseInt(document.getElementById("heightValue").value);
    var resultA = (baseValue/2)*heightValue;
    document.getElementById("resultA").innerHTML = resultA;
}
