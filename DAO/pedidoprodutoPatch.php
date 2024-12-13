

<?php 
   
   function editar_pedidoproduto_parcialmente($conexao, $id_pedidoproduto, $campo,$valor){
      $sql = "UPDATE pedidos_produtos SET $campo= '$valor' WHERE id_pedidoproduto = $id_pedidoproduto";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };
 
?>