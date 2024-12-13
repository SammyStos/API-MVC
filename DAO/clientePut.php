<?php 
   
   function editar_cliente($conexao, $u, $ID){

        $sql = "UPDATE Clientes SET Nome = '$u->Nome', Endereco = '$u->Endereco', CPF = '$u->CPF', Telefone = '$u->Telefone', Email='$u->Email', DataNascimento = '$u->DataNascimento' WHERE ID = $ID;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>