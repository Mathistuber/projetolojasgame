<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Usuario</th>
      <th scope="col">Nome do Cliente</th>      
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php 
$Cliente = listaTudoCliente($conexao);
foreach($Cliente as $Clientes):
?>
  <tr>
      <th scope="row"><?=$Clientes['codCli']?></th>
      <td><?=$Clientes['codUsuFK']?></td>
      <td><?=$Clientes['nomeCli']?></td>
      <td><?=$Clientes['cpfCli']?></td>
      <td><?=$Clientes['foneCli']?></td>
      <td><?=$Clientes['datanasCli']?></td>
      <td>
        <form action="../controllers/deletarCliente.php" method="Post">
          <input type="hidden" name="codClientedeletar" value="<?=$Clientes['codCli']?>">
          <button type="submit" class="btn-small btn-danger"> X </button>
        </form>
      </td>
      <td>
        <form action="formAlterarCliente.php" method="Post">
          <input type="hidden" name="codClienteAlterar" value="<?=$Clientes['codCli']?>">
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