
<?php

    function inserirFucionario($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
        $query="insert into tbfuncionarios(codUsuFK,nomeFun,funcaoFun, foneFun,datanasFun)values
        ('{$codUsuFK}','{$nomeFun}','{$funcaoFun}','{$foneFun}','{$datanasFun}')";
    
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }
    
function listaTudoFuncionario($conexao){
    
    $query = "Select * From tbfuncionarios";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoFuncionarioCod($conexao,$codFun){
    $query = "Select * from tbfuncionarios where codUsuFk={$codFun}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}
function alterarFuncionario($conexao,$codigo,$nome,$funcao,$fone,$data){

    $query = "update tbfuncionarios set 
    nomeFun = '{$nome}', 
    funcaoFun = '{$funcao}', 
    foneFun = '{$fone}', 
    datanasFun = '{$data}' where codFun = $codigo";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

function deletarFuncionario($conexao,$codFundeletar){
    $query = "delete from tbfuncionarios where codFun = $codFundeletar";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
function listaTudoFuncionarioNome($conexao,$nomeFuncionario){
    $query = "Select * from tbfuncionarios where nomeCli like '%{$nomeFuncionario}%'";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
?>