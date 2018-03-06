<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pagina_Inicial</title>
</head>
<body>
	<div>
	<form method="post" action="dados_cadastro.php">
		<label>usuario</label>
		<input type="text" name="user"><br>
		<label>senha</label>
		<input type="password" name="senha"><br>
		<label>email</label>
		<input type="email" name="email"><br>
		<input type="submit" value="Enviar"><br>
		<select name="opc">
			<option>INSERIR</option>
			<option>REMOVER</option>
			<option>CONSULTAR</option>
			<option>ALTERAR</option>
		</select>		
	</form>
    </div>

</body>
</html>