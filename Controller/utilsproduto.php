<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
   $dados = json_decode(file_get_contents('php://input'));
    $Nome = isset($dados->Nome) ? $dados->Nome : null;
    $Descricao = isset($dados->Descricao) ? $dados->Descricao : null;
    $Marca = isset($dados->Marca) ? $dados->Marca : null;
    $Preco = isset($dados->Preco) ? $dados->Preco : null;
    $Validade = isset($dados->Validade) ? $dados->Validade : null;
           
            $user = new Produto("", $Nome, $Descricao , $Marca , $Preco , $Validade );
            return $user;
        }
?>