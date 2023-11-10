<?
session_start();
if(isset($_REQUEST['correo']) && (isset($_REQUEST['pwd']))){
$correo=$_REQUEST['correo'];
$clave=$_REQUEST['pwd'];
}
$clave_crypt="";
$nfilas=0;
if( isset($correo) && isset($clave)){
include 'config/conexion.php';
$salt=substr($correo,0,2);
$salt=strtoupper($salt);
$clave_crypt=crypt($clave,$salt);
$sql="SELECT correo,clave,perfil 
 FROM tbl_usuarios 
 WHERE correo = '$correo' 
  AND clave = '$clave_crypt'";
$consulta=mysqli_query($con,$sql);
$nfilas=mysqli_num_rows($consulta);
while($reg=mysqli_fetch_array($consulta)){
     $_SESSION["correo_valido"]=$reg['correo'];
     $_SESSION["perfil"]=$reg['perfil'];
 }// fin while
mysqli_close($con);
}// fin si hay correo y clave
if($nfilas>0){
   $correo_valido=$correo; 
   $_SESSION['correo_valido']=$correo_valido;
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Whipped Cream</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
		<div class="container">


	
			 <?
        if(isset($_SESSION['correo_valido'])){
          
         if(isset($_SESSION['correo_valido'])  && ($_SESSION['perfil'])=='1'){
            include 'admin.php';
           }

            if(isset($_SESSION['correo_valido'])  && ($_SESSION['perfil'])=='0'){
            include 'carusel.php';
           }
          
        }else{
          include 'registrar.php';
        }




        ?>

                      
                      

	      
	</div>
</body>
</html>
