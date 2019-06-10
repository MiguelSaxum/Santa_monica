
<html>
 <head>
  <title>FORMULARIO</title>
    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM rubro WHERE idRubro=$id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) { ?>
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDITAR</h4>
 </head>

 <body>
  
   <form action="update.php" method="post">
    <input type="text" name="id" value="<?php echo $id ?>" hidden>
     <table border="1" align="center">
       
       
          
             
           <input type="int" name="idRubro" value="<?php echo $row['idRubro'] ?>" hidden>   
        
        <tr>
          <td>
            DESCRIPCIÓN 
          </td>
          <td>
           <input type="text" name="descripcion" value="<?php echo $row['descripcion'] ?>" required>
         </td>
       </tr>


           <tr>
            <td>
            DEPARTAMENTO
          </td>
          <td>
           <?php
    include("../conect.php");
    ?>

      <?php

            $query = 'SELECT * FROM departamento';

        $result = $conn->query($query);

        ?>
        <select name="id_departamento" >    
            <?php    
            while ( $row = $result->fetch_array() )    
            {
                ?>
            
                <option value="<?php echo $row['id_departamento'];?>">
                <?php echo $row['nomDep']; ?>
                </option>
                
                <?php
            } 

        ?>        
        </select>
         </td>
       </tr>


         

          
           
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