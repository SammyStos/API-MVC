<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
            $dados = json_decode(file_get_contents('php://input'));
            $Nome = isset($dados->Nome) ? $dados->Nome : null;
    $Endereco = isset($dados->Endereco) ? $dados->Endereco : null;
    $CPF = isset($dados->CPF) ? $dados->CPF : null;
    $Telefone = isset($dados->Telefone) ? $dados->Telefone : null;
    $Email = isset($dados->Email) ? $dados->Email : null;
    $DataNascimento = isset($dados->DataNascimento) ? $dados->DataNascimento : null;
           
            $user = new Cliente("", $Nome, $Endereco , $CPF , $Telefone , $Email , $DataNascimento );
            return $user;
        }
?>