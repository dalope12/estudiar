<?php
    error_reporting(0);
	include("conexion.php");
	class listar{
		static function ver(){
			$cnx=conexion::conectar();
			$r=mysql_query("select * from producto",$cnx);
			$tabla='<html> 
							<head/>
							<body>
								<body background="../img/cookies.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /></center>								
								<center><img border="0" src="../img/productos.png" width="500" height="100"></center>
								<center><table style="border: 1px solid #000;width:50%";" border="1"; bgcolor="white" ><tr><th>Codigo</th><th>Nombre</th><th>Descripcion</th><th>Valor</th></tr></center>';
			while($f=mysql_fetch_array($r)){
			$tabla.='<tr><td>'.$f['codigo'].'</td><td>'.$f['nombre'].'</td><td>'.$f['descripcion'].'</td><td>'.$f['valor'].'</td></tr>';
					
				}
			$tabla.='</table> 
			<center><a href="../inicio.html">
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