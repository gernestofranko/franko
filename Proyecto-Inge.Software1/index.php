<?php
include("render.php");
$contenido="
				
						<div id='mostrador'>
						</div>
				<img src='img/personal-data.png' /><br /><br />
				Ingrese sus datos en las siguientes casillas!
				
				<form action='' method='POST' onsubmit=\"registrar('data.php','mostrador');return false\">
				<table class='text' border='0' width='100%'>
				<tr>
					<td width='100px'>
						Nombre:
					</td>	
					<td>
						<input type='text' name='nombre' id='nombre' class='textbox' />	
					</td>
				</tr>
				<tr>
					<td>
						Apellidos:
					</td>	
					<td>
						<input type='text' name='apellidos' id='apellidos' class='textbox' />	
					</td>
				</tr>
				<tr>
					<td>
						Direccion:
					</td>	
					<td>
						<input type='text' name='direccion' id='direccion' class='textbox' />	
					</td>
				</tr>
				<tr>
					<td>
						Dui:
					</td>	
					<td>
						<input type='text' name='dui' id='dui' class='textbox' style='width:150px;'/>	
					</td>
				</tr>
				<tr>
					<td>
						Edad:
					</td>	
					<td>
						<input type='text' name='edad' id='edad' class='textbox' style='width:150px;'/>	
					</td>
				</tr>
				<tr>
					<td>
						Nivel Academico:
					</td>	
					<td>
						
						<select name='nivelacad' id='nivelacad'>
							<option value='Basico'>Nivel Basico</option>
							<option value='Medio'>Nivel Intermedio</option>
							<option value='Superior'>Nivel Superior</option>
						</select>
							
					</td>
				</tr>
				
				<tr>
					<td colspan='2' align='left' style='font-weight:bold;color:#333333;'>
						<br />REFERENCIAS PERSONALES:
									
					</td>
				</tr>
				
				<tr>
					<td>
						Nombre:
					</td>	
					<td>
						<input type='text' name='nombreref' id='nombreref' class='textbox'/>	
					</td>
				</tr>
				<tr>
					<td>
						Direccion:
					</td>	
					<td>
						<input type='text' name='direccionref' id='direccionref' class='textbox'/>	
					</td>
				</tr>
				<tr>
					<td>
						Parentezco:
					</td>	
					<td>
						<select name='parentezco' id='parentezco'>
							<option value='Madre'>Madre</option>
							<option value='Padre'>Padre</option>
							<option value='Abuelos'>Abuelos</option>
							<option value='Hermanos'>Hermanos</option>
							<option value='Primos'>Primos</option>
							<option value='Tios'>Tios</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td colspan='2' align='right' style='font-weight:bold;color:#333333;'>
						<input type='submit' name='guardar' id='guardar' class='btnsend' value='&nbsp;' /> 
						<input type='reset' name='cancelar' id='cancelar' class='btncancel' value='&nbsp;' /> 
									
					</td>
				</tr>
				</table>
				</form>
			
			
				
			
			
			";
			
content($contenido)

?>