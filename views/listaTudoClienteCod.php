<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");

?>
<div class="container m-5 p-5">
    <form action="listaTudoClienteCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Cliente: </label>
            <div class="col-sm-3">
                <input type="number" required name="CodCli"class="form-control" id="inputCodigo">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>

    </form>
</div>


<table class="table">
    <thead>
        <tr>
      <th scope="col">Código</th>
      <th scope="col">Usuario</th>
      <th scope="col">Nome do Cliente</th>      
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de Nascimento</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codCli = isset($_GET['CodCli'])?$_GET['CodCli']:0;
     
        if($codCli > 0){
            $Cliente = listaTudoClienteCod($conexao,$CodCli);
        if($Cliente){
        ?>
            <tr>
                <th scope="row"><?=$Cliente['CodCli'] ?></th>
                <td><?=$Cliente['codUsuFK'] ?></td>
                <td><?=$Cliente['nomeCli'] ?></td>
                <td><?=$Cliente['cpfCli'] ?></td>
                <td><?=$Cliente['foneCli'] ?></td>
                <td><?=$Cliente['datanasCli'] ?></td>
            </tr>
        <?php
    }
    }
        ?>
    </tbody>
</table>



<?php
include_once("footer.php");
?>