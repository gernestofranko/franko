<?php

function content($contenido)
{
?>
<html>
<head>
<title>
--Registro de Personas--
</title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
<script src='js/ajax.js' type='text/javascript' ></script>
</head>
<body bgcolor='black'>
<center>
<center><div style='margin:0;padding:0;width:700px;'><img src='img/banner.png' class='baner' /></div></center>
<div class='fondo'>
<table border='0' cellspacing='0' cellpadding='0' width='95%'>
	<tr>
		<td style='height:300px;' valign='top' style='padding:20px;'>
				
									<center><div class='menu'>
										<ul class='ulmenu'>
											<li class='limenu'><a href='index.php' class='enlace'>Registro</a></li>
											<li class='limenu' onclick='cargaralteraciones("alteraciones.php","cargadorajax"); return false;'>Alteraciones en Registros</li>
										</ul>
									</div></center>
									
			<div class='white-background-alpha' id='cargadorajax'>
			<?php
					
				echo $contenido;
					
			?>
			</div>
		
		</td>
	</tr>
</table>
</div>
</center>
</body>
</html>



<?php
}
?>