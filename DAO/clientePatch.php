

<?php 
   
   function editar_cliente_parcialmente($conexao, $ID, $campo,$valor){
      $sql = "UPDATE Clientes SET $campo= '$valor' WHERE ID = $ID";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };
 
?>