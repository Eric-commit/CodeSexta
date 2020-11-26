<?php

	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Compras</title>
<link rel="stylesheet" type="text/css" href="estilob2.css">>
	
</head>
<body>
	<div id="barraprincipal">
				<h2>Janis's Store</h2>
				<nav>  												<!-- aponta para uma secao com links de navegacao-->
						<ul id="botoes">
					<li><a href="sobrenos.html">Sobre Nos</a></li>
					<li><a href="contatos.html">Contatos</a></li>
					<li><a href="cadastro.html">Cadastro</a></li>
					<li><a href="promocoes.html">Promocoes</a></li>
					<li><a href="areadocliente">Area do Cliente</a></li>
					<li><a href=carrinho.html>Carrinho</a></li>
						</ul>
				</nav>

			</div>

	
	<div class="bodycar">

<?php
	$items = array([
		'nome'=>'Camiseta Masculina Bob Marley Branca',
		'imagem'=>'camisetabobmascw.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],

		['nome'=>'Camiseta Feminina Guns n Roses Cinza',
		'imagem'=>'camisetagnrc.jpg',
		'preco'=>'25.00',
		'amostra'=>'R$25,00'],

		[
		'nome'=>'Camiseta Masculina Queen Preta',
		'imagem'=>'camisetamascqueenb.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],

		[
		'nome'=>'Camiseta Feminina Queen Amarela',
		'imagem'=>'camisetaqueena.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],

		[
		'nome'=>'Camiseta Feminina Queen Preta',
		'imagem'=>'camisetaqueenb.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],

		[
		'nome'=>'Camiseta Feminina The Rolling Stones Branca',
		'imagem'=>'camisetarsb.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],

		[
		'nome'=>'Camiseta Feminina Sex Pistols Branca',
		'imagem'=>'camisetasexpistolsb.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],

[
		'nome'=>'Camiseta Feminina The Rolling Stones Preta',
		'imagem'=>'camisetatrsp.jpg',
		'preco'=>'20.00',
		'amostra'=>'R$20,00'],



	);

	foreach ($items as $key => $value){


?>

<div class="catalago">
	<font size="5"><?php echo $value['nome']  ?></font> </br> 
	<font size="+2"><?php echo $value['amostra'] ?></font>
	<img src="<?php echo $value['imagem']?>"/>
   <a   href="?adicionar=<?php echo $key ?>"><input type="submit" class="botao" name="adicionar" value="adicionar ao carrinho"></a>

</div>

<?php

}

?>
	</div>

<?php


	if(isset($_GET['adicionar'] )){
		$id = (int) $_GET['adicionar'];
		if(isset($items  [$id])){
			if(isset($_SESSION['carrinho'][$id])){
				$_SESSION['carrinho'] [$id]['quantidade']++;
			}else{

				$_SESSION['carrinho'][$id] = array('quantidade'=>1,'nome'=>$items[$id]['nome'],'preco'=>$items[$id]['preco']);
			}
			echo '<script> alert ("Item adicionado ao carrinho!")</script>';	

		}else{
			die('Carrinho vazio.');
		}

	}



?>
<h2 class='title'>Carrinho</h2>

<?php
foreach ($_SESSION['carrinho'] as $key => $value) {


	echo '<p>Item: '.$value['nome'].' | Quantidade: '.$value['quantidade'].'|Total: '.($value['quantidade']*$value['preco']).'</p>';

}

?>
<a href="b2.php"><input type="submit" name="cancela" class="botao" value="Cancelar"></a>

<a href="contatos.html" ><input type="submit" name="comprar" class="botao" value="Finalizar compra"></a>

	<script type="text/javascript">

		alet('Compra finalizada com sucesso');
	</script>

</body>
</html>

