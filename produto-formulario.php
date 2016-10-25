
<?= include("cabecalho.php")?>

<h1>Formulario de cadastro</h1>
<form action="adiciona-produto.php">
	Nome: <input type="text" name="produto" /><br/>
    Preço: <input type="number" name="preco" /><br/>

    <input type="submit" value="Cadastrar" />
</form>
<?= include("rodape.php")?>

