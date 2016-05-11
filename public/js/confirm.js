function ConfirmarCero() {
	var sueldo = document.getElementById('sueldo');
	var sobresueldo = document.getElementById('sobresueldo');
	var estimulo = document.getElementById('estimulo');
    
    if(sueldo.value == 0 || sobresueldo.value == 0 || estimulo.value == 0){
    	Alerta();
    }else{
    	document.altas.submit();
    }
}

function Alerta() {
	var c = confirm("Hay uno o más campos con valor de 0, ¿desea continuar?.");
    if (c == true) {
    	document.altas.submit();
	}
}