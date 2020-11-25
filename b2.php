<?php

	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Compras</title>

	
</head>
<body>
	<h2>Carrinho de compras</h2>
	<div class="carrinho-container">

<?php
	$items = array(['nome'=>'Camise masc','imagem'=>'camisetabobmascw.jpg','preco'=>'20.00'],
		['nome'=>'Camise masc','imagem'=>'camisetagnrc.jpg','preco'=>'25.00']);

	foreach ($items as $key => $value){


?>

<div class="produto">
	<img src="<?php echo $value['imagem']?>"/>
	<a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho</a>

</div>

<?php

}

?>
	</div>

<?php
	if(isset($_GET['adicionar'])){
		$idproduto = (int) $_GET['adicionar'];
		if(isset($items[$idproduto])){
			if(isset($_SESSION['carrinho'][$idproduto])){
				$_SESSION['carrinho'][$idproduto]['quantidade']++;
			}else{

				$_SESSION['carrinho'][$idproduto] = array('quantidade'=>1,'nome'=>$items[$idproduto]['nome'],'preco'=>$items[$idproduto]['preco']);
			}
			echo '<script> alert ("Item adicionado ao carrinho!")</script>';	

		}else{
			die('voce não pode adicionar um item que não existe.');
		}

	}

?>
<h2 class='title'>Carrinho</h2>

<?php
foreach ($_SESSION['carrinho'] as $key => $value) {
	
	echo '<p>Item: '.$value['nome'].' | Quantidade: '.$value['quantidade'].'|Total: '.($value['quantidade']*$value['preco']).'</p>';
}

?>


</body>
</html>


