<?php
    require 'utils.php';
    require_once '../DAO/conexao.php';
    require_once '../DAO/clienteGet.php';
    require_once '../DAO/clientePost.php';
    require_once '../DAO/clientePut.php';
    require_once '../DAO/clientePatch.php';
    require '../DAO/clienteDelete.php';
    require '../Model/cliente.php';
    require '../Model/Resposta.php';

    $req = $_SERVER;
    $conexao = conectar();
    
    //echo $req["REQUEST_METHOD"];
     switch ($req["REQUEST_METHOD"]) {
         case 'GET':
            $Cliente = json_encode(pegar_cliente($conexao));
            echo $Cliente;
             break;
         case 'POST':
             
             $u = receberDados();
             
    
             $resp = incluir_cliente($conexao, $u);
             
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

            $resp = editar_cliente($conexao, $u, $ID);

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
     
     
                $resp = editar_cliente_parcialmente($conexao, $ID, $campo, $valor);
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
            $resp = deletar_cliente($conexao, $ID);
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