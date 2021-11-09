<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoFuncionario.php");

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Código do Usuario</th>
      <th scope="col">Nome</th>
      <th scope="col">Função</th>
      <th scope="col">Fone</th>
      <th scope="col">Data</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php 
$Fun = listaTudoFuncionario($conexao);
foreach($Fun as $Funcionarios):
?>
  <tr>
      <th scope="row"><?=$Funcionarios['codFun']?></th>
      <td><?=$Funcionarios['codUsuFK']?></td>
      <td><?=$Funcionarios['nomeFun']?></td>
      <td><?=$Funcionarios['funcaoFun']?></td>
      <td><?=$Funcionarios['foneFun']?></td>
      <td><?=$Funcionarios['datanasFun']?></td>
      <td>
        <form action="../controllers/deletarFuncionario.php" method="Post">
          <input type="hidden" name="codFundeletar" value="<?=$Funcionarios['codFun']?>">
          <button type="submit" class="btn-small btn-danger"> X </button>
        </form>
      </td>
      <td>
        <form action="formAlterarFuncionario.php" method="Post">
          <input type="hidden" name="codFunalterar" value="<?=$Funcionarios['codFun']?>">
          <button type="submit" class="btn-small btn-danger"> Alterar</button>
        </form>
      </td>
    </tr>
<?php
endforeach;
?>
  </tbody>
</table>





<?php
include_once("footer.php");
?>