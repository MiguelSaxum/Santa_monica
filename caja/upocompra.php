<html>
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmar</h4>
<body>
<p>
<form action="updateocompra.php" method="post">
<input type="int" name="id" value=<?php echo $_GET['id'] ?> hidden> 
¿Se ha pagado esta orden de compra? <br><br>
<input type="submit" name="submit" value="Confirmar"/>
<input type="button" value="Regresar" OnClick="location.href='menuocompra.php' ">
</form>
</p>
</body>
</html> 