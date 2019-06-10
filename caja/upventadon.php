<html>
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cancelar</h4>
<body>
<p>
<form action="updatedon.php" method="post">
<input type="int" name="id" value=<?php echo $_GET['id'] ?> hidden> 
¿Esta orden de ingreso fue donada? <br><br>
<input type="submit" name="submit" value="CONFIRMAR"/>
<input type="button" value="CANCELAR" OnClick="location.href='menuventa.php' ">
</form>
</p>
</body>
</html> 