

    
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
 

 
  
   <form action="updatefactura.php" method="post">
    <input type="int" name="id" value="<?php echo $id ?>" hidden>
     <table border="0" align="center">
       <tr>
           <td>
           <b>Capture numero de factura </b> </td>
           <td>
            <input type="int" name="iva"> </td>
         </tr>
         
         <td> <input type="submit" value="Continuar"> 
         <input type="button" value="CANCELAR" OnClick="location.href='menufactura.php' "></td>
            
            </table>


   
   </form>
   <?php
 }
 ?>
