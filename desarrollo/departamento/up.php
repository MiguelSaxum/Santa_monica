
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM departamento WHERE id_departamento=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { ?>
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar</h4>
 </head>

 <body>
  
   <form action="update.php" method="post">
    <input type="text" name="id" value="<?php echo $id ?>" hidden>
     <table border="1" align="center">
       <tr>
       
          
             
           <input type="int" name="id_departamento" value="<?php echo $row['id_departamento'] ?>" hidden>   
        
        <tr>
            Nombre de Departamento </tr>
          <tr> <input type="text" name="nomDep" value="<?php echo $row['nomDep'] ?>" required></tr><br><br>

         

          
            </tr>
            </tr>
       
</tr>
    <tr>
         <td></td>
         <td style="text-align: right;"> <input type="submit" value="GUARDAR"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menu.php' "></td>
            
            </table>
<?php  }
} else {
    echo "0 results";
}
?>
   </table>
   </form>
 </body>
</HTML>