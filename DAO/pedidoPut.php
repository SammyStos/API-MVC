<?php 
   
   function editar_pedido($conexao, $u, $id_pedido){

        $sql = "UPDATE Pedidos SET numerocliente = '$u->numerocliente', datapedido = '$u->datapedido' WHERE id_pedido = $id_pedido;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>