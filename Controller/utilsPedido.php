<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
            $dados = json_decode(file_get_contents('php://input'));
            $numerocliente = isset($dados-> numerocliente) ? $dados-> numerocliente : null;
    $datapedido = isset($dados->datapedido) ? $dados->datapedido : null;
   
            $user = new Pedidos("", $numerocliente, $datapedido );
            return $user;
        }
?>