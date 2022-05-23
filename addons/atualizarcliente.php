<?php

require_once("../core/Query.php");
include_once("../web/head.php");
$oQuery = new Query();
require_once("formatar.php");


// informações vão vim pelo GET

if(isset($_GET['method']) && $_GET['method'] === 'alterar'){
  $codigo = $_GET['codigo'];
  if($codigo > 0){
    $nome = $_GET['nome'];
    $telefone = $_GET['telefone'];
    
    $html_form = '
            <form action="../index.php?method=atualizar" method="post">
            
            <input type="hidden" id="method" name="method" value="atualizar">
            <input type="hidden" id="codigo" name="codigo" value="'.$codigo.'">
            
            <label for="nome">Código:</label>
            <input type="text" placeholder="'.$codigo.'" id="fake-codigo" name="fake-codigo" disabled><br><br>
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" placeholder="'.$nome.'" name="nome"><br><br>
            
            <label for="telefone">Telefone:</label>
            <input type="text" maxlength="15" id="telefone" placeholder="'.$telefone.'" name="telefone"><br><br>
            
            <input type="submit" value="Submit">
            
          </form>';


    echo $html_form;
  }
}