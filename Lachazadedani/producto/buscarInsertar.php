<?php
    error_reporting(0);
	include("conexion.php");
	class insertar{
		static function existe($cod,$nom,$des,$val){
			$cnx=conexion::conectar();
			$r=mysql_query("select * from producto where codigo=$cod ",$cnx);
			if(mysql_num_rows($r)==0){
				$q="insert into producto (codigo, nombre, descripcion, valor) values ($cod,'$nom','$des',$val)";
				mysql_query($q,$cnx);
				mysql_close($cnx);
						print '<html>
							<head/>
							<body>
								<body background="../img/cookies.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /></center>								
								<center><img border="0" src="../img/proIN.png" width="500" height="100"></center>
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
								<body background="../img/cookies.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /></center>								
								<center><img border="0" src="../img/proYE.png" width="500" height="100"></center>
								<center><a href="../frmNuevo.html">
								<img border="0" src="../img/volv.gif" width="400" height="100">
								</a></center>
								<center><a href="../inicio.html">
								<img border="0" src="../img/Flecha.jpg" width="100" height="100">
								</a></center>
								
							</body>
						</html>';
				print $formu;
				//donde dice type="button"  en la linea 18, ahí le pongo submit mientras lo estoy programando, sin la validacion por el momento
								
				}
			mysql_close($cnx);
		}
	}
	$c=$_POST['txtCod'];
	$n=$_POST['txtNom'];
	$ds=$_POST['txtDes'];
	$vl=$_POST['txtVal'];
	insertar::existe($c,$n,$ds,$vl);
	?>