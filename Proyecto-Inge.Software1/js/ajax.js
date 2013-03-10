function registrar(page, ele) {

var nombre= document.getElementById('nombre').value;
var apellidos= document.getElementById('apellidos').value;
var direccion= document.getElementById('direccion').value;
var dui= document.getElementById('dui').value;
var edad= document.getElementById('edad').value;
var nivelacad= document.getElementById('nivelacad').value;
var nombreref= document.getElementById('nombreref').value;
var direccionref= document.getElementById('direccionref').value;
var parentezco= document.getElementById('parentezco').value;




var elemento = document.getElementById(ele);
  // Obtener la instancia del objeto XMLHttpRequest
  if(window.XMLHttpRequest) {
    peticion_http = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {
    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  }
 
  // Preparar la funcion de respuesta
  peticion_http.onreadystatechange = muestraContenido;
 
  // Realizar peticion HTTP
  peticion_http.open('GET', page+'?nombre='+nombre+'&apellidos='+apellidos+'&direccion='+direccion+'&dui='+dui+'&edad='+edad+'&nivelacad='+nivelacad+'&nombreref='+nombreref+'&direccionref='+direccionref+'&parentezco='+parentezco, true);
  peticion_http.send(null);
 
  elemento.innerHTML = "Cargando datos para su registro...";
  function muestraContenido() {

  
    if(peticion_http.readyState == 4) {
   
      if(peticion_http.status == 200) {
      elemento.innerHTML = peticion_http.responseText;
        return false;
      }
    }
  }

}

function cargaralteraciones(pagina, ele)
{
	var elemento = document.getElementById(ele);
	  // Obtener la instancia del objeto XMLHttpRequest
	  if(window.XMLHttpRequest) {
	    peticion_http = new XMLHttpRequest();
	  }
	  else if(window.ActiveXObject) {
	    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	 
	  // Preparar la funcion de respuesta
	  peticion_http.onreadystatechange = muestraContenido;
	 
	  // Realizar peticion HTTP
	  peticion_http.open('GET', pagina, true);
	  peticion_http.send(null);
	 
	  elemento.innerHTML = "Cargando datos para su registro...";
	  function muestraContenido() {
	
	  
	    if(peticion_http.readyState == 4) {
	   
	      if(peticion_http.status == 200) {
	      elemento.innerHTML = peticion_http.responseText;
	        return false;
	      }
	    }
	  }
}

function search(pagina, ele)
{
	function radioseleccionado(ctrl)
	{
	    for(i=0;i<ctrl.length;i++)
	        if(ctrl[i].checked) radioseleccionado=ctrl[i].value;
		
	}
	
	radioseleccionado(document.form1.filtro);
	
	dato=document.getElementById('dato').value;
	
	var elemento = document.getElementById(ele);
		  // Obtener la instancia del objeto XMLHttpRequest
		  if(window.XMLHttpRequest) {
		    peticion_http = new XMLHttpRequest();
		  }
		  else if(window.ActiveXObject) {
		    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
		  }
		 
		  // Preparar la funcion de respuesta
		  peticion_http.onreadystatechange = muestraContenido;
		 
		  // Realizar peticion HTTP
		  peticion_http.open('GET', pagina+'?filtro='+radioseleccionado+'&dato='+dato, true);
		  peticion_http.send(null);
		 
		  /*elemento.innerHTML = "";*/
		  function muestraContenido() {
		
		  
		    if(peticion_http.readyState == 4) {
		   
		      if(peticion_http.status == 200) {
		      elemento.innerHTML = peticion_http.responseText;
		        return false;
		      }
		    }
		  }
	
	
}

function buscarcodigo(dato,ele)
{

	var elemento = document.getElementById(ele);
	  // Obtener la instancia del objeto XMLHttpRequest
	  if(window.XMLHttpRequest) {
	    peticion_http = new XMLHttpRequest();
	  }
	  else if(window.ActiveXObject) {
	    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	 
	  // Preparar la funcion de respuesta
	  peticion_http.onreadystatechange = muestraContenido;
	 
	  // Realizar peticion HTTP
	  peticion_http.open('GET', 'data.php?datox='+dato, true);
	  peticion_http.send(null);
	 
	  
	  function muestraContenido() {
	
	  
	    if(peticion_http.readyState == 4) {
	   
	      if(peticion_http.status == 200) {
	      elemento.innerHTML = peticion_http.responseText;
	      
	        return false;
	      }
	    }
	  }

}

function actualizar(pagina,ele)
{

var nombre= document.getElementById('nombre2').value;
var apellidos= document.getElementById('apellidos2').value;
var direccion2= document.getElementById('direccion2').value;
var dui2= document.getElementById('dui2').value;
var edad= document.getElementById('edad').value;
var nivelacad2= document.getElementById('nivelacad2').value;
var nombreref= document.getElementById('nombreref').value;
var direccionref= document.getElementById('direccionref').value;
var parentezco2= document.getElementById('parentezco2').value;
var idactualizacion= document.getElementById('idregistro').value;
	
	var elemento = document.getElementById(ele);
		  // Obtener la instancia del objeto XMLHttpRequest
		  if(window.XMLHttpRequest) {
		    peticion_http = new XMLHttpRequest();
		  }
		  else if(window.ActiveXObject) {
		    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
		  }
		 
		  // Preparar la funcion de respuesta
		  peticion_http.onreadystatechange = muestraContenido;
		 
		  // Realizar peticion HTTP
		   peticion_http.open('GET', pagina+'?nombre2='+nombre+'&apellidos2='+apellidos+'&direccion2='+direccion2+'&dui2='+dui2+'&edad='+edad+'&nivelacad2='+nivelacad2+'&nombreref='+nombreref+'&direccionref='+direccionref+'&parentezco2='+parentezco2+'&actualizacion='+idactualizacion, true);
		  peticion_http.send(null);
		 
		  elemento.innerHTML = "Actualizando los datos...";
		  function muestraContenido() {
		
		  
		    if(peticion_http.readyState == 4) {
		   
		      if(peticion_http.status == 200) {
		      elemento.innerHTML = peticion_http.responseText;
		      
		        return false;
		      }
		    }
		  }
	
}

function deleteregistro(idregistro, ele)
{
if(confirm("En realidad desea eliminar este registro?")) {


var elemento = document.getElementById(ele);
		  // Obtener la instancia del objeto XMLHttpRequest
		  if(window.XMLHttpRequest) {
		    peticion_http = new XMLHttpRequest();
		  }
		  else if(window.ActiveXObject) {
		    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
		  }
		 
		  // Preparar la funcion de respuesta
		  peticion_http.onreadystatechange = muestraContenido;
		 
		  // Realizar peticion HTTP
		   peticion_http.open('GET', 'data.php?registroo='+idregistro, true);
		  peticion_http.send(null);
		 
		  elemento.innerHTML = "Actualizando los datos...";
		  function muestraContenido() {
		
		  
		    if(peticion_http.readyState == 4) {
		   
		      if(peticion_http.status == 200) {
		      elemento.innerHTML = peticion_http.responseText;
		      
		        return false;
		      }
		    }
		  }



}else
	{
	return false;
	}
}