<?php 
   
   function incluir_pedido($conexao, $u){

        $sql = "INSERT INTO Pedidos (numerocliente, datapedido) VALUES ('$u->numerocliente', '$u->datapedido ');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>