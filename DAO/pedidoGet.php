<?php 
   
   function pegar_pedido($conexao){

    $sql = "SELECT * FROM Pedidos";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $Pedidos = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id_pedido = utf8_encode( $registro['id_pedido']);
        $numerocliente = utf8_encode($registro['numerocliente']);
        $datapedido = utf8_encode(  $registro['datapedido']);
       
        $novo_Pedidos= new Pedidos($id_pedido, $numerocliente, $datapedido);
        array_push($Pedidos ,$novo_Pedidos);
    };
    
    fecharConexao($conexao);
    return $Pedidos;
   };

   
?>