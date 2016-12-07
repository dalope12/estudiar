<?php
    error_reporting(0);
	include("conexion.php");
	class frmEditarOK{
		static function existe($cod){
			$cnx=conexion::conectar();
			$r=mysql_query("select * from producto where codigo=$cod ",$cnx);
			if(mysql_num_rows($r)==0){
				print '<html>
							<head/>
							<body>
								<body background="../img/cookies.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /></center>								
								<center><img border="0" src="../img/proNE.png" width="500" height="100"></center>
								<center><a href="../frmActualizar.html">
								<img border="0" src="../img/volv.gif" width="400" height="100">
								</a></center>
								<center><a href="../inicio.html">
								<img border="0" src="../img/Flecha.jpg" width="100" height="100">
								</a></center>
								
							</body>
						</html>';
				
				}else{
				$f=mysql_fetch_array($r);
				$formu='<html>
							<head/>
							<body>
								<body background="../img/varios.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /> 
								<form name="f1" method="POST" action="actualizar.php">
								<FONT FACE="arial" SIZE=5 COLOR=black>Codigo:</FONT><input type="text" name="txtCod" value="'.$f['codigo'].'" required   /><br/>
								<FONT FACE="arial" SIZE=5 COLOR=black>Nombre:</FONT><input type="text" name="txtNom" value="'.$f['nombre'].'" required   /><br/>
								<FONT FACE="arial" SIZE=5 COLOR=black>Descripcion:</FONT><input type="text" name="txtDes" value="'.$f['descripcion'].'" required  /><br/>
								<FONT FACE="arial" SIZE=5 COLOR=black>Producto:</FONT><input type="text" name="txtVal" value="'.$f['valor'].'" required   /><br/>
								<input type="submit" name="OK" onclick="validar()"/>
								</form>
								
							</body>
						</html>';
				print $formu;
				//donde dice type="button"  en la linea 18, ahí le pongo submit mientras lo estoy programando, sin la validacion por el momento
								
				}
			mysql_close($cnx);
		}
	}
	//<script src="../scripts/frmEditar.js"></script>
	$c=$_POST['txtCodigo'];
	frmEditarOK::existe($c);
	?>