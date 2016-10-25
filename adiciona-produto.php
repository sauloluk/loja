
<?= include("cabecalho.php")?>
<?php
	
	$produto = $_GET['produto'];
	$preco = $_GET['preco'];

	$conexao = mysqli_connect('localhost', 'root', '', 'loja');
	$query = "insert into produtos (nome, preco) values ('{$produto}',{$preco})";
	mysqli_query($conexao, $query);

	if(mysqli_query($conexao, $query)) {
	//echo "Produto {$produto} adicionado com sucesso! Valor: R$ {$preco}";
?>
	<p class="alert-success">Produto <?= $produto; ?>, R$ <?= $preco; ?> adicionado com sucesso!</p>
<?php
	} else {
?>
	<p class="alert-danger">O produto <?= $produto; ?> não foi adicionado</p>
<?php
}
?>

<?= include("rodape.php")?>