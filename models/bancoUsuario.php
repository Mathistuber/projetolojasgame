<?php

function inserirUsuario($conexao,$emailUsuario,$senhaUsuario,$pin){
    $option = ['cost' => 8];
    $senhacryto = password_hash($senhaUsuario, PASSWORD_BCRYPT,$option);
    
    $query="insert into tbusuarios(emailUsu,senhaUsu,pinUsu)values('{$emailUsuario}','{$senhacryto}','{$pin}')";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoUsuario($conexao){
    
    $query = "Select * From tbusuarios";

    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}

function listaTudoUsuarioCod($conexao,$codUsuario){
    $query = "Select * from tbusuarios where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}
function alterarUsuario($conexao,$codUsu,$emailUsu,$senhaUsu){
    $option = ['cost' => 8];
    $senhacryto = password_hash($senhaUsu, PASSWORD_BCRYPT,$option);
    $query = "update tbusuarios set 
    emailUsu = '{$emailUsu}', 
    senhaUsu = '{$senhacryto}' where codUsu = $codUsu";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;

}

function deletarUsuario($conexao,$codUsudeletar){
    $query = "delete from tbusuarios where codUsu = $codUsudeletar";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
?>