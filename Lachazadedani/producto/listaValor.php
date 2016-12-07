<?php
    error_reporting(0);
	include("conexion.php");
	class listar{
		static function ver(){
			$cnx=conexion::conectar();
			$r=mysql_query("select nombre from producto ;",$cnx);
			$tabla='<html> 
							<head/>
							<body>
								<body background="../img/cookies.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /></center>								
								<center><img border="1" src="../img/productos.png" width="500" height="100"></center>
								<center><table style="border: 1"; bordercolor="Green"; width:10%";" border="1"; bgcolor="white" ><tr><th>Nombre</th></tr></center>';
			while($f=mysql_fetch_array($r)){
			$tabla.='<tr><td>'.$f['nombre'].'</td></tr>';
					
				}
			$tabla.='</table> 
			<center><a href="../menuListar.html">
								<img border="0" src="../img/Flecha.jpg" width="100" height="100">
								</a></center>
								
							</body>
						</html>';
			mysql_close($cnx);
			return $tabla;
		}
	
	} 	
	print listar::ver();
	
?>