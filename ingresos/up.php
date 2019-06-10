<html>
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Aprobar</h4>
<body>
<p>
<form action="update.php" method="post">
<input type="int" name="id" value=<?php echo $_GET['id'] ?> hidden> 
¿Se ha aprobado esta orden de compra? <br><br>
<input type="submit" name="submit" value="CONFIRMAR"/>
<input type="button" value="CANCELAR" OnClick="location.href='menu.php' ">
</form>
</p>
</body>
</html> 