// JavaScript Document

function agregar(){
	var pos=document.getElementById("servicios").selectedIndex; //Obtener texto del combo servicios
	var texto=document.getElementById("servicios").options[pos].text; //obtener el texto de la opcion seleccionada
	var opc=new Option(texto,texto);	//crear opcion para el combo con en texto anterior
	
	var tam=document.getElementById("lista").length; //obtener la cantidad de opciones del combo
	var add=true;
	
	
	for(x=0;x<=(tam-1);x++){										//verfica si ya se ingreso la opcion seleccionada
		var temp=document.getElementById("lista").options[x].text;	// actualmente en el combo	
		if(temp==texto){
			add=false;												//si ya esta seleccionada se niega el permiso de agregar
			alert('Este servicio ya fue seleccionado');        //envia el aviso de servicio repetido
		}
	}
	
	
	if(add==true){
	document.getElementById("lista").options[tam]=opc; //asignar la opcion al combo lista en la ultima posicion
	}													//si y solo si este servicio no esta repetido
	
}



