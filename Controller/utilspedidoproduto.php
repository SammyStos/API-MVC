<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
   $dados = json_decode(file_get_contents('php://input'));
    $id_pedido = isset($dados->id_pedido) ? $dados->id_pedido : null;
    $id_produto = isset($dados->id_produto) ? $dados->id_produto : null;
    $qtd = isset($dados->qtd) ? $dados->qtd : null;
   
            $user = new pedidoProduto("", $id_pedido, $id_produto , $qtd );
            return $user;
        }
?>