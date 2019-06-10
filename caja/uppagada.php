

    
    <?php
    include ("../conect.php");
    $id=$_GET['id'];
    $sql = "SELECT * FROM listaventa WHERE idListaVenta=$id";
  $result = $conn->query($sql);
  
    while($row = $result->fetch_assoc()) {
      ?>
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pagar</h4>
 

 
  
   <form action="updatepagada.php" method="post">
    <input type="int" name="id" value="<?php echo $id ?>" hidden>
     ¿Esta factura ha sido pagada? <br><br>
<input type="submit" name="submit" value="CONFIRMAR"/>
         
         <input type="button" value="CANCELAR" OnClick="location.href='menufproceso.php' ">
            
            


   
   </form>
   <?php
 }
 ?>
