

    
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
 

 
  
   <form action="updateventa.php" method="post">
    <input type="int" name="id" value="<?php echo $id ?>" hidden>
     <table border="0" align="center">
       <tr>
           <td>
           <b>Cantidad Neta </b>
            <?php echo "$".$row['totalCobrar']; ?> </td>
         </tr>
         
         <td> <input type="submit" value="Continuar"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menuventa.php' "></td>
            
            </table>


   
   </form>
   <?php
 }
 ?>
