<?php 
   
   function editar_pedidoproduto($conexao, $u, $id_pedidoproduto){

        $sql = "UPDATE pedidos_produtos SET id_pedido = '$u->id_pedido', id_produto = '$u->id_produto', qtd = '$u->qtd' WHERE id_pedidoproduto = $id_pedidoproduto;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>