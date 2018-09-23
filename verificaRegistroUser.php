<?

include 'bd_index.php';

$ds_usuario = $_POST['userCad'];
$ds_email = $_POST['emailCad'];
$ds_senha = ($_POST['passCad']);
$ds_nome = ($_POST['nameCad']);
$ds_sobrenome = ($_POST['sobrenomeCad']);
$ds_cpf = ($_POST['cpfCad']);
$ds_endereco = ($_POST['enderecoCad']);
$cd_DDD = ($_POST['DDDCad']);
$cd_telefone = ($_POST['numberCad']);
$ds_lembrete_senha = ($_POST['lembreteSenha']);

$objBd = new db_index();
$link = $objBd->conecta_mysql();

$usuario_existe = false;
$email_existe = false;

	//verifica se usuario ja existe
$sql = "select * from tb_usuarios where ds_usuario = '$ds_usuario'";
if($resultado_id = mysqli_query($link, $sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario['ds_usuario'])){
		$usuario_existe = true;
	}

}else{
	echo 'Erro ao tentar localizar';
}

	//verifica se o e-mail ja existe

$sql = "select * from tb_usuarios where ds_email = '$ds_email'";
if($resultado_id = mysqli_query($link, $sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario['ds_email'])){
		$email_existe = true;
	}

}else{
	echo 'Erro ao tentar localizar';
}

if($usuario_existe || $email_existe){


	$retorno_get = '';

	if($usuario_existe){
		$retorno_get.= "erro_usuario=1&";
	}

	if($email_existe){
		$retorno_get.= "erro_email=1&";
	}

	
	header('Location: inscrevase.php?'.$retorno_get);
	die();
}


$sql = "procVerificaCadastro @opcao  = 'inscrever-se', @ds_nome = '".$ds_nome."', @ds_sobrenome = '".$ds_sobrenome."', @ds_cpf =" .$ds_cpf. ", @ds_endereco = '".$ds_endereco."', @cd_DDD = '".$cd_DDD."', @cd_telefone = '".$cd_telefone."', @ds_usuario = '".$ds_usuario."', @ds_senha = '".$ds_senha."', @ds_lembrete_senha = '".$ds_lembrete_senha."', @ds_email = '".$ds_email."' " ;

echo $sql;
	//executar a query
if(mysqli_query($link, $sql)){
	echo 'Uśuário registrado com sucesso';
}else{
	echo 'Erro ao registrar usuário';
}

?>