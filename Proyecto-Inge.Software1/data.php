<?php
include('conexion.php');



if(isset($_GET['nombre']) AND isset($_GET['apellidos']))
{
	if(mysql_query("INSERT INTO Datos VALUES(null,'$_GET[nombre]','$_GET[apellidos]','$_GET[direccion]','$_GET[dui]','$_GET[edad]','$_GET[nivelacad]','$_GET[nombreref]','$_GET[direccionref]','$_GET[parentezco]')",$conexion))
	{
		echo"
		
		<div style='height:54px;'>
			<img src='img/ok.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>Su registro se completo con exito!!!<br /><span style='color:#888888;font-size:11px;'>$_GET[apellidos], $_GET[nombre]</span></div>
		</div>
		
		";
	}else
	{
	
		echo"
				
		<div style='height:54px;'>
			<img src='img/no.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>Hubo un problema en el registro!. <br /><span style='color:#888888;font-size:11px;'>Intentelo de nuevo mas tarde.</span></div>
		</div>
		
		";
	
		
	}
	

}


if(isset($_GET['filtro']) AND isset($_GET['dato']))
{
	$filtro='';
	if($_GET['filtro']=='nombre')
		{
			$filtro='Nombres';
		}
		if($_GET['filtro']=='apellido')
				{
					$filtro='Apellidos';
				}
				if($_GET['filtro']=='direccion')
						{
							$filtro='Direccion';
						}
						if($_GET['filtro']=='dui')
								{
									$filtro='Dui';
								}
	
	
	if($buscar = mysql_query("SELECT * FROM Datos WHERE $filtro LIKE '%$_GET[dato]%'",$conexion))
	{
		
		while($buscar2 = mysql_fetch_array($buscar))
		{
			echo "<div onclick=\"buscarcodigo('$buscar2[Id_Registro]','mostradoralteraciones');\" class='lector'>".$buscar2[$filtro].", <span style='color:#666666;'>". $buscar2['Nombres'].'</span>, <span style="color:#999999;">'.$buscar2['Direccion'].'</span></div><br>';
		}
		
		
		
	}else
		{
		echo"
		
		<div style='height:54px;'>
					<img src='img/no.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>Hubo un problema en la busqueda!. <br /><span style='color:#888888;font-size:11px;'>Intentelo de nuevo mas tarde.</span></div>
				</div>
		
		";	
		}
	
	
}

if(isset($_GET['datox']))
{
	
	if($data=mysql_query("SELECT * FROM Datos WHERE Id_Registro = '$_GET[datox]'",$conexion))
		{
			while($data2=mysql_fetch_array($data))
			{
				
				
				
				
				
				
				echo"	
					<img style='float:right;' onclick=\"deleteregistro('$_GET[datox]','mostradoralteraciones');\" src='img/baja.png' />
				<img src='img/actualizacion2.png' />
				<form action='' method='POST' onsubmit=\"actualizar('data.php','divdatos');return false\">
						<table class='text' border='0' width='100%'>
						<tr>
							<td width='100px'>
								Nombre:
							</td>	
							<td>
								<input type='text' name='nombre2' id='nombre2' value='$data2[Nombres]' class='textbox' />	
							</td>
						</tr>
						<tr>
							<td>
								Apellidos:
							</td>	
							<td>
								<input type='text' name='apellidos2' id='apellidos2' value='$data2[Apellidos]' class='textbox' />	
							</td>
						</tr>
						<tr>
							<td>
								Direccion:
							</td>	
							<td>
								<input type='text' name='direccion2' id='direccion2' value='$data2[Direccion]' class='textbox' />	
							</td>
						</tr>
						<tr>
							<td>
								Dui:
							</td>	
							<td>
								<input type='text' name='dui2' id='dui2' class='textbox' value='$data2[Dui]' style='width:150px;'/>	
							</td>
						</tr>
						<tr>
							<td>
								Edad:
							</td>	
							<td>
								<input type='text' name='edad' id='edad' class='textbox' value='$data2[Edad]' style='width:150px;'/>	
							</td>
						</tr>
						<tr>
							<td>
								Nivel Academico:
							</td>	
							<td>
								
								<select name='nivelacad2' id='nivelacad2'>
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
								<input type='text' name='nombreref' id='nombreref' value='$data2[NombreRef]'  class='textbox'/>	
							</td>
						</tr>
						<tr>
							<td>
								Direccion:
							</td>	
							<td>
								<input type='text' name='direccionref' id='direccionref' value='$data2[DireccionRef]' class='textbox'/>	
							</td>
						</tr>
						<tr>
							<td>
								Parentezco:
							</td>	
							<td>
								<select name='parentezco2' id='parentezco2'>
									<option value='Madre'>Madre</option>
									<option value='Padre'>Padre</option>
									<option value='Abuelos'>Abuelos</option>
									<option value='Hermanos'>Hermanos</option>
									<option value='Primos'>Primos</option>
									<option value='Tios'>Tios</option>
								</select>
								<input type='hidden' name='idregistro' id='idregistro' value='$_GET[datox]'>
							</td>
						</tr>
						
						<tr>
							<td colspan='2' align='right' style='font-weight:bold;color:#333333;'>
								<input type='submit' name='guardaractualizacion' id='guardar' class='btnsend' value='&nbsp;' /> 
								<input type='reset' name='cancelar' id='cancelar' class='btncancel' value='&nbsp;' /> 
											
							</td>
						</tr>
						</table>
						</form>";
				
				
				
				
				
				
				
				
				
				
				
			}
		}
		
		
	
}


if(isset($_GET['actualizacion']))
{
	
	if(mysql_query("UPDATE Datos SET Nombres='$_GET[nombre2]',Apellidos='$_GET[apellidos2]',Direccion='$_GET[direccion2]',Dui='$_GET[dui2]',Edad='$_GET[edad]',NivelAcad='$_GET[nivelacad2]',NombreRef='$_GET[nombreref]',DireccionRef='$_GET[direccionref]',ParentezcoRef='$_GET[parentezco2]' WHERE Id_Registro='$_GET[actualizacion]'",$conexion))
					{
						
						echo"<div style='height:54px;'>
									<img src='img/ok.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>Su registro se actualizo con exito!!!<br /><span style='color:#888888;font-size:11px;'>$_GET[apellidos2], $_GET[nombre2]</span></div>
								</div>";
						
					}else
					{
						
						echo"<div style='height:54px;'>
									<img src='img/no.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>Hubo un problema en la actualizacion del registro!. <br /><span style='color:#888888;font-size:11px;'>Intentelo de nuevo mas tarde.</span></div>
								</div>";
						
					}
	
}

if(isset($_GET['registroo']))
{
	
	
	if(mysql_query("DELETE FROM Datos WHERE Id_Registro='$_GET[registroo]'",$conexion))
	{
		
		echo"<div style='height:54px;'>
			<img src='img/ok.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>El registro se elimino con exito!!!<br /><span style='color:#888888;font-size:11px;'>Ok!</span></div>
		</div>";
		
	
	}else
		{
		
			echo"<div style='height:54px;'>
				<img src='img/no.png' style='float:left;'/><div style='padding-top:14px;font-size:12px;font-weight:bold;color:#43baf2;'>Hubo un problema en la eliminacion del registro!. <br /><span style='color:#888888;font-size:11px;'>Intentelo de nuevo mas tarde.</span></div>
			</div>";
			
		}


}


?>