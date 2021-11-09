<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoUsuario.php");
include_once("../models/bancoFuncionario.php");

?>
<div class="container m-5 p-5">
    <form action="cadastroFuncionario.php" method="POST">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do usuário: </label>
            <div class="col-sm-3">
                <input type="number" required name="CodUsuario"class="form-control" id="inputCodigo">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>

    </form>
</div>
<?php
$codUsuario = isset($_POST['CodUsuario'])?$_POST['CodUsuario']:0;
$usuario = listaTudoUsuarioCod($conexao,$codUsuario);
    if($usuario){



?>
<form method="Post" action="../controllers/inserirFuncionario.php">
        <p>Código Usuario <input type="text" name="codUsuFK" readonly value="<?=$codUsuario?>"></p>
        <p>Nome<input type="text" name="nomeFun"></p>
        <p>CPF<input type="text" name="funcaoFun"></p>
        <p>Fone <input type="text" name="foneFun"></p>
        <p>Data De Nascimento<input type="date" name="datanasFun"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
}
?>
<?php
include_once("footer.php");
?>