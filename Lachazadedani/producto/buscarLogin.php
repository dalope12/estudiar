<?php
    error_reporting(0);
	include("conexion.php");
	class frmEditarOK{
		static function existe($usu,$pas){
			$cnx=conexion::conectar();
			$q = "select * from usuario where nombre = '". $usu ."' and password ='". $pas . "'";
			$r=mysql_query($q,$cnx);			
			if(mysql_num_rows($r)==0){
				print '<html>
							<head/>
							<body>
								<body background="../img/cookies.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /></center>								
								<center><img border="0" src="../img/login.png" width="500" height="100"></center>
								<center><a href="../index.html">
								<img border="0" src="../img/Flecha.jpg" width="100" height="100">
								</a></center>
								<center><a href="../buscarlogin.php">
								<img border="0" src="../img/volv.gif" width="100" height="100">
								</a></center>
							</body>
						</html>';
				}else{
					$formu='<html>
							<head/>
							<body>
								<body background="../img/tienda.jpg"> </body>
								<center> <img  src="../img/logo.jpg" class="img-rounded" /> </center>
								<center><a href="../inicio.html"><img border="0" src="../img/ingresar.png" width="500" height="100">
								</a></center>
		
								
							</body>
						</html>';
				print $formu;
				}
			mysql_close($cnx);
		}
	}
	$u=$_POST['txtUsu'];
	$p=$_POST['txtPassw'];
	frmEditarOK::existe($u,$p);
	?>