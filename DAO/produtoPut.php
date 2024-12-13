<?php 
   
   function editar_produto($conexao, $u, $ID){

        $sql = "UPDATE Produtos SET Nome = '$u->Nome', Descricao = '$u->Descricao', Marca = '$u->Marca', Preco='$u->Preco', Validade = '$u->Validade' WHERE ID = $ID;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>