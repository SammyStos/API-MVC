

<?php 
   
   function editar_produto_parcialmente($conexao, $ID, $campo,$valor){
      $sql = "UPDATE Produtos SET $campo= '$valor' WHERE ID = $ID";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };
 
?>