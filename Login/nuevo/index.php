
<?php

include("conect.php");
session_start();
    
    if(isset($_SESSION["idusuario"])){
        header("location:../marefu-admin/index.php?nologin=true");
    }
    
    if(!empty($_POST))
    {
        $usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $error = '';
        
        
        
        $sql = "SELECT id, nombre,pass FROM users where nombre='$usuario' AND pass='$password'";
                $result=$conn->query($sql);
        $rows = $result->num_rows;
        
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['usuario'] = $row['id'];
            
            
            header("location:../marefu-admin/index.php?nologin=true");
            } else {
            $error = "El nombre o contraseña son incorrectos";
        }
    }
?>
<html>
    <head>
        <title>Marefu admin</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
    <p class="texto"><img src="img/logo.png" width="600" height="200"> </p>
     <div id="form">
        <p style="color: #ffffff">Ingresa los datos correspondientes</p>

        
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
            <div><label>Usuario:</label><input id="usuario" name="usuario" type="text" ></div>
            <br />
            <div><label>Password:</label><input id="password" name="password" type="password"></div>
            <br />
            <div><input name="login" type="submit" value="login"></div> 
        </form> 
        
        <br />
        
        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
  </div>
</body>
</html>