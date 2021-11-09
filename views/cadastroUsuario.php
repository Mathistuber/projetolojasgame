<?php
    include("../views/header.php");
?>  
    <form method="Post" action="../controllers/inserirUsuario.php">
        <p>email <input type="email" name="emailUsuario"></p>
        <p>senha<input type="password" name="senhaUsuario"></p>
        <p>PIN<input type="text" name="pin"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
include("../views/footer.php");
?>



