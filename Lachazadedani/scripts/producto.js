function validar(){
alert ("Hola, no te asustes");
var cod=document.f1.txtCod.value;
var nom=document.f1.txtNom.value;
var des=document.f1.txtDes.value;
var val=document.f1.txtVal.value;
var es=document.getElementById("escondido");

if(cod=="" || nom=="" || des=="" || val=="" ){
es.innerHTML="Faltan datos";
return false;
}
else{
document.f1.submit();
}


}