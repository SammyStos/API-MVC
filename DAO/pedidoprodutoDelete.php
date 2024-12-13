<?php 
   

   function deletar_pedidoproduto($conexao, $id_pedidoproduto){

        $sql = "DELETE FROM pedidos_produtos WHERE id_pedidoproduto = $id_pedidoproduto;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar deletar");


        fecharConexao($conexao);
        return $res;
   };

   
   
?>