<?

include 'bd_index.php';
include 'bootstrap.php';

$ds_usuario = $_POST['userCad'];
$ds_email = $_POST['emailCad'];
$ds_senha = ($_POST['passCad']);
$ds_Confirmsenha = ($_POST['passCadConf']);
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
$cpf_existe = false;
$registrado = true;

//echo $ds_senha;
//echo $ds_Confirmsenha;
//die();
	//verifica se usuario ja existe
$sql = "select * from tb_usuarios where ds_usuario = '$ds_usuario'";
//echo $sql;
//echo $link;
if($resultado_id = mysqli_query($link, $sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($dados_usuario['ds_usuario'])){
		$usuario_existe = true;

	//echo $dados_usuario;
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

	//verifica se o cpf ja existe

$sql = "select * from tb_usuarios where ds_email = '$ds_cpf'";
if($resultado_id = mysqli_query($link, $sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);
	if(isset($cpf['ds_cpf'])){
		$cpf_existe = true;
	}

}else{
	echo 'Erro ao tentar localizar';
}

if ($ds_senha != $ds_Confirmsenha || $ds_Confirmsenha != $ds_senha) {
	
	$retorno_get = '';

	$retorno_get="erro_senha=1&";

	header('Location: inscreverse.php?'.$retorno_get);
	die();

}
if($usuario_existe || $email_existe || $cpf_existe){


	$retorno_get = '';

	if($usuario_existe){
		$retorno_get.= "erro_usuario=1&";
	}

	if($email_existe){
		$retorno_get.= "erro_email=1&";
	}

	if($cpf_existe){
		$retorno_get.= "erro_cpf=1&";
	}

	
	header('Location: inscreverse.php?'.$retorno_get);
	die();
}


$sql = "insert into tb_usuarios (ds_nome, ds_sobrenome, ds_cpf, ds_endereco, cd_DDD, cd_telefone, ds_usuario, ds_senha, ds_lembrete, ds_email, cd_status, dt_operacao)  values ('$ds_nome', '$ds_sobrenome' , '$ds_cpf' , '$ds_endereco','$cd_DDD','$cd_telefone','$ds_usuario','$ds_senha','$ds_lembrete_senha','$ds_email', '15', now())";

//echo $sql;
	//executar a query
if(mysqli_query($link, $sql)){

	$registroOk = '';

	if ($registrado) {
		$registroOk.= "registroOk=1&";
	}

	header('Location: singIn.php?'.$registroOk);
}else{
	echo 'Erro ao registrar usuário';
}

?>