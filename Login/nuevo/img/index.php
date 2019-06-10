<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
        
         //datos de acceso
         $host="localhost:3306";
         $usuario="saxum";
         $contra="admin31";
         $db="bd1";
         
         //establecer la conexion
        $testconec= mysql_pconnect($host,$usuario,$contra) or die ("No se puede conectar");
        mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $nombre=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         $consulta="SELECT id, nombre,pass FROM users where nombre='$nombre' AND pass='$contrasena'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //guardamos en sesion el nombre del usuario 
             $_SESSION["usuario"]=$nombre;
             header("location:../marefu-admin/index.php?nologin=true");
         }               
      }
?>



<!DOCTYPE html>

<html>
<head>
    <title>Marefu admin</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <p class="texto"><img src="img/logo.png" width="600" height="200"> </p>

    <div id="form">
        <p style="color: #ffffff">Ingresa los datos correspondientes</p>

        <form action="index.php" method=
        "post">
            <p>Usuario:</p><input name="usuario" type="text"><br>

            <p>Contraseña:</p><input name="contra" type="password"><br>
            <input name="entrar" type="submit" value="ENTRAR" style="margin-top: 20px"><br>
            <?php if ($valido==false) {
                echo '<p>Datos incorrectos <br/><a href="index.php">Intente de nuevo</a></p>';
            }?>
        </form>
    </div>
</body>
</html>