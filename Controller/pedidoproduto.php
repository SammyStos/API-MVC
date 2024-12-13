<?php
    require 'utilspedidoproduto.php';
    require_once '../DAO/conexao.php';
    require_once '../DAO/pedidoprodutoGet.php';
    require_once '../DAO/pedidoprodutoPost.php';
    require_once '../DAO/pedidoprodutoPut.php';
    require_once '../DAO/pedidoprodutoPatch.php';
    require '../DAO/pedidoprodutoDelete.php';
    require '../Model/pedidoproduto.php';
    require '../Model/Resposta.php';

    $req = $_SERVER;
    $conexao = conectar();
    
    //echo $req["REQUEST_METHOD"];
     switch ($req["REQUEST_METHOD"]) {
         case 'GET':
            $pedidoproduto = json_encode(pegar_pedidoproduto($conexao));
            echo $pedidoproduto;
             break;
         case 'POST':
             
             $u = receberDados();
             
    
             $resp = incluir_pedidoproduto($conexao, $u);
             
             $in = new Resposta('', '');
                if($resp){
                   $in = criarResposta('200', 'Incluso com sucesso');
                } else {
                  $in = criarResposta('400', 'não incluso');
                }
             
             echo json_encode($in);
          
             break;
         case 'PUT':
            $dados = json_decode(file_get_contents('php://input'));
            $id_pedido = $dados->id_pedido;

            $u = receberDados();

            $resp = editar_pedidoproduto($conexao, $u, $id_pedido);

            $in = new Resposta('', '');
                if($resp){
                   $in = criarResposta('204', 'Atualizado com sucesso');
                } else {
                  $in = criarResposta('400', 'Não atualizado');
                }

            echo json_encode($in);
             break;
             case 'PATCH':
                $dados = json_decode(file_get_contents('php://input'));
                
              $u= receberDados();
                $id_pedidoproduto= $dados-> id_pedidoproduto;
                $campo= $dados-> campo;
                $valor=$dados->valor;
     
     
                $resp = editar_pedidoproduto_parcialmente($conexao, $id_pedidoproduto, $campo, $valor);
                $resposta = new Resposta('','');
                if($resp){
                    $resposta = criarResposta(204, 'Atualizado com sucesso');
                } else{
                   $resposta = criarResposta('400', 'Não atualizado');
                }
                 echo 'Fiz um PATCH';
                 break;
         case 'DELETE':
            $dados = json_decode(file_get_contents('php://input'));
            $id_pedidoproduto = $dados->id_pedidoproduto;
           // echo $id;
            $resp = deletar_pedidoproduto($conexao, $id_pedidoproduto);
            $resposta = new Resposta('', '');
            if($resp){
                $resposta = criarResposta('204', 'Excluido com suceso');
            } else {
                $resposta = criarResposta('400', 'Não excluido');
            }
             echo json_encode($resposta);
             break;          
         default:
             # code...
             break;
     }





?>