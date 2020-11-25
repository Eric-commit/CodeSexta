<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
</head>
<body>
	<h2>Carrinho</h2>
	<div class="carrinho-container">

<?php
	
	$items = array(['imagem' => 'item1.png','preco'=>'200'],
		['nome'=>'curso1','imagem' => 'item2.png','preco' => '250'],
		['imagem' => 'item3.png','preco' => '230']);

	foreach ($items as $key => $value) {

?>

	<div class="produto">
		<img src="<?php echo $value['imagem'] ?>" />
		<a href="?Adicionar=<?php echo $key ?> ">Adicionar ao carrinho</a>
	</div>

<?php 
	}
?>

</div>

<?php
	if(isset($_GET['adicionar'])){
		$idproduto = (int) $_GET['adcionar'];
		if(isset($items[$idproduto])){
			if(isset($_session[$idproduto])){
				$_session[$idproduto]['quantidade']++;
			}else{
				$_session[$idproduto] *  array('quantidade'=>1,);
			}



			echo "O produto exite";

		}else{
			die ("o produto não exite");
		}

	}


?>

</body>
</html>


