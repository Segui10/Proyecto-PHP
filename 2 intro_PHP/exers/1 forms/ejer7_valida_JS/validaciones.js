function devuelveLetraDni(dni) { //dni se pasa como un entero
    var LETRAS='TRWAGMYFPDXBNJZSQVHLCKE';
	var pos=dni%23;  
    return LETRAS.charAt(pos);
}

function textorequerido(control, min){ 
	var cad=control.value;
	if (cad.length <= min) {
		return false;
	} else {
		return true;
	}
}

function numerorango(control,min, max){
	var cad=control.value.trim();
	if (cad.length<1 || isNaN(cad)) {  //Aqui compruebo si es NUMERO
		return false;
	}
	var num=parseInt(cad);
	if (num>max || num<min){ //Aqui compruebo que est� DENTRO del RANGO
		return false;
	} else {
		return true;
	}
}

function longmaxima(control,max){
	var cad=control.value;
	var long=cad.length;   
	if (long>max){
		return false;
	}else{
	    return true;
	}
}

function compruebaemail(control) {
	var email=control.value.trim();
    if (email.length==0) return true; //Si est� vacia no hago expresi�n regular
	var expreg=/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if (!email.match(expreg)){
		return false;
	} else {
		return true;
	}
}

function compruebanif(control) {
	var nif=control.value.trim().toUpperCase();
	if (nif.length==0) return true; 
	
	var expreg=/^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)? [0-9A-Z]|\d{8}(-|\.)?[A-Z])$/;
	if (!nif.match(expreg)){
		return false;
	} 

	var num=parseInt(nif); 	
	var letra=nif.charAt(nif.length-1);
	var letraalg=devuelveLetraDni(num);
	if (letra!=letraalg){
		return false;
	}	else {
		return true;
	}
}
