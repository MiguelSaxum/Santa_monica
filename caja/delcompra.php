<html>
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cancelar</h4>
<body>
<p>
<form action="deletecompra.php" method="post">
<input type="int" name="id_clientes" value=<?php echo $_GET['id'] ?> hidden> 
¿Esta seguro de querer cancelar este registro? <br><br>
<input type="submit" name="submit" value="CONFIRMAR"/>
<input type="button" value="CANCELAR" OnClick="location.href='menucompra.php' ">
</form>
</p>
</body>
</html> 