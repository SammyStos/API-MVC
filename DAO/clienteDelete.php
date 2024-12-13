<?php 
   

   function deletar_cliente($conexao, $ID) {
      $sqlPedidos = "DELETE FROM Pedidos WHERE numerocliente = (SELECT numerocliente FROM Clientes WHERE ID = $ID)";
      mysqli_query($conexao, $sqlPedidos) or die("Erro ao tentar deletar os pedidos associados");
  
    
      $sqlCliente = "DELETE FROM Clientes WHERE ID = $ID;";
      $res = mysqli_query($conexao, $sqlCliente) or die("Erro ao tentar deletar o cliente");
  
      fecharConexao($conexao);
      return $res;
  }
  
   
   
?>