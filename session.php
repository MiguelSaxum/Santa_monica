 <?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='Login/index.php'>Login</a>";
 

exit;
}

$now = time();
$_SESSION["usuario"];
$_SESSION["apellido"];
$n =$_SESSION["nivel"];
$us =$_SESSION["id"];




if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='../Login/index.php'>Necesita Hacer Login</a>";
exit;
}
?>