<?php 
   
   function pegar_produto($conexao){

    $sql = "SELECT * FROM Produtos";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $produto = [];

    while ($registro = mysqli_fetch_array($res)) {
        $ID = utf8_encode( $registro['ID']);
        $Nome = utf8_encode($registro['Nome']);
        $Descricao = utf8_encode(  $registro['Descricao']);
        $Marca = utf8_encode( $registro['Marca']);
        $Preco = utf8_encode( $registro['Preco']);
        $Validade = utf8_encode( $registro['Validade']);
        
        $novo_produto= new Produto($ID, $Nome, $Descricao, $Marca, $Preco, $Validade);
        array_push($produto ,$novo_produto);
    };
    
    fecharConexao($conexao);
    return $produto;
   };

   
?>