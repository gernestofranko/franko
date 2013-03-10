<?php

echo"				
			<img src='img/actualizacion.png' /><br /><br />
			Para realizar una busqueda debe especificar los tipos de filtros que desea utilizar...
				<form name='form1' action='' method='POST' ><br />
					<table class='text' border=0 margin='0' padding='0'>
						<tr>
							<td>
								Dato a buscar:
							</td>
							<td>	
								<input type='text' name='dato' id='dato' class='textbox' onKeyPress=\"search('data.php','mostradoralteraciones');\">
							</td>
						</tr>
						<tr>
							<td>Filtro de busqueda:
							</td>
							<td>
								<input type='radio' name='filtro' id='nombre' checked value='nombre'>Nombre 
								<input type='radio' name='filtro' id='apellido' value='apellido'>Apellidos
								<input type='radio' name='filtro' id='direccion' value='direccion'>Direccion
								<input type='radio' name='filtro' id='dui' value='dui'>Dui
								   
							</td>
						</tr>
						
					</table>
				</form>
			<div id='divdatos'></div>	
			<div class='mostrardoralteraciones' id='mostradoralteraciones'>
			No se ha filtrado informacion aun.<br>	
			
			</div><br />
			
			";
			


?>