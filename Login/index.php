<?php

include("../conect.php");
session_start();
    
    if(isset($_SESSION["idusuario"])){
        header("location:../pages/index.php?nologin=true");
    }
    
    if(!empty($_POST))
    {
        $usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $error = '';
        
        
        
        $sql = "SELECT idUsuarios,  nomUs,  apellidoUs, passUs, nivelSeguridad_idnivelSeguridad  FROM usuarios where email='$usuario' AND   passUs ='$password'";
                $result=$conn->query($sql);
        $rows = $result->num_rows;
        
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['idUsuarios'];
            $_SESSION['usuario'] = $row['nomUs'];
            $_SESSION['apellido'] = $row[' apellidoUs'];
            $_SESSION['nivel'] = $row['nivelSeguridad_idnivelSeguridad'];
            $_SESSION['loggedin'] = true;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (367060 * 60);
            
            
            header("location:../index.php?nologin=true");
            } else {
            $error = "El nombre o password son incorrectos";
        }
    }
?>



<!DOCTYPE html>

<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>Santa Monica</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <div class="wrapper">

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"  class="form-signin">
        <p class="texto" style="text-align: center;"><img src="img/logo.jpg" width="337" height="103"> </p>
          <h2 class="form-signin-heading">Iniciar Sesion</h2>
            <input type="text" class="form-control" name="usuario" placeholder="Correo Electronico" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/> 

            <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordarme
            </label>

            
            <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
         <button class="btn btn-lg btn-success btn-block" type="submit">Iniciar</button>   
    </form>
   </div>
  
  
</body>
</html>