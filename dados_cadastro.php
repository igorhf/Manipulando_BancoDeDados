<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
    requere_once("bd.inc");

	$user=isset($_POST["user"])?$_POST["user"]:"usuario invalido !!!";
	$senha=isset($_POST["senha"])?$_POST["senha"]:"senha invalida !!!";
	$email=isset($_POST["email"])?$_POST["email"]:"email invalidor !!!";
	$opc=isset($_POST["opc"])?$_POST["opc"]:"opção invalidar";

	switch ($opc) {
	 	case 'INSERIR':
			$inserir=mysqli_query($conn,"insert into usuario(user,senha,email)value('$user','$senha','$email')");
			mysqli_close($conn);
			break;
		case 'ALTERAR':
		    $alterar=mysqli_query($con,"update usuario  set usuario='$user', senha='$senha', email='$email' where id=$id ");
		    mysqli_close($conn);
		break;
		case 'REMOVER':
			$deletar=mysqli_query($conn,"delete from usuario where id=$id");
			mysqli_close($conn);
			break;
		case 'CONSULTAR':
			# code...
			break;
		default:
			# code...
			break;
	}




	?>
	<br><a href="index.php">Volatar</a>

</body>
</html>