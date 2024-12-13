<?php 
   
   function pegar_pedidoproduto($conexao){

    $sql = "SELECT * FROM pedidos_produtos";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $pedidoproduto = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id_pedido = utf8_encode( $registro['id_pedido']);
        $id_produto = utf8_encode($registro['id_produto']);
        $qtd = utf8_encode( $registro['qtd']);
       
        $novo_pedidoproduto= new pedidoProduto($id_pedido, $id_produto, $qtd);
        array_push($pedidoproduto ,$novo_pedidoproduto);
    };
    
    fecharConexao($conexao);
    return $pedidoproduto;
   };

   
?>