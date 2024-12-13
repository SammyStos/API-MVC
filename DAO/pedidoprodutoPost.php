<?php 
   
   function incluir_pedidoproduto($conexao, $u){

        $sql = "INSERT INTO pedidos_produtos (id_pedido,id_produto ,qtd ) VALUES ('$u->id_pedido', '$u->id_produto','$u->qtd');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>