<?php
    error_reporting(0);
	include("conexion.php");
	class actualizar{
			static function nuevo($cod,$nom,$des,$val){
				$cnx=conexion::conectar();
				$q=" update producto set nombre = '$nom' , descripcion = '$des' , valor = $val where codigo = $cod ";
				print '<html>
				<head/>
					<body>
						<body background="../img/gusanitos.jpg"> </body>
						<center> <img  src="../img/logo.jpg" class="img-rounded" /> </center>
						<center><img border="0" src="../img/proAC.png" width="500" height="100"></center>
						<center><a href="../inicio.html"></center>
						<center><img border="0" src="../img/Flecha.jpg" width="100" height="100"></center>
						</a></center>
					</body>
				</html>';
				mysql_query($q,$cnx);
				mysql_close($cnx);
				
			}
		}
		$c=$_POST['txtCod'];
		$n=$_POST['txtNom'];
		$ds=$_POST['txtDes'];
		$vl=$_POST['txtVal'];
		actualizar::nuevo($c,$n,$ds,$vl);
?>