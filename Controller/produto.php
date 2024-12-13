<?php
    require 'utilsproduto.php';
    require_once '../DAO/conexao.php';
    require_once '../DAO/produtoGet.php';
    require_once '../DAO/produtoPost.php';
    require_once '../DAO/produtoPut.php';
    require_once '../DAO/produtoPatch.php';
    require '../DAO/produtoDelete.php';
    require '../Model/produto.php';
    require '../Model/Resposta.php';

    $req = $_SERVER;
    $conexao = conectar();
    
    //echo $req["REQUEST_METHOD"];
     switch ($req["REQUEST_METHOD"]) {
         case 'GET':
            $produto = json_encode(pegar_produto($conexao));
            echo $produto;
             break;
         case 'POST':
             
             $u = receberDados();
             
    
             $resp = incluir_produto($conexao, $u);
             
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
            $ID = $dados->ID;

            $u = receberDados();

            $resp = editar_produto($conexao, $u, $ID);

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
                $ID= $dados-> ID;
                $campo= $dados-> campo;
                $valor=$dados->valor;
     
     
                $resp = editar_produto_parcialmente($conexao, $ID, $campo, $valor);
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
            $ID = $dados->ID;
           // echo $id;
            $resp = deletar_produto($conexao, $ID);
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