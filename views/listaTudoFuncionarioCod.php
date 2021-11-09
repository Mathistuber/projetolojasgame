<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoFuncionario.php");

?>
<div class="container m-5 p-5">
    <form action="listaTudoFuncionarioCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCodigo" class="col-sm-2 col-form-label">Digite o Código do Funcionario: </label>
            <div class="col-sm-3">
                <input type="number" required name="codFun"class="form-control" id="inputCodigo">
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
            <th scope="col">email</th>
            <th scope="col">senha</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $codFun = isset($_GET['codFun'])?$_GET['codFun']:0;
     
        if($codFun){
            $Fun = listaTudoUsuarioCod($conexao,$codFun);
        if($Fun){
        ?>
            <tr>
                <th scope="row"><?=$Fun['codFun'] ?></th>
                <td><?=$Fun['CodUSUFK'] ?></td>
                <td><?=$Fun['nomeFun'] ?></td>
                <td><?=$Fun['funcaoFun'] ?></td>
                <td><?=$Fun['foneFun'] ?></td>
                <td><?=$Fun['dataFun'] ?></td>
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