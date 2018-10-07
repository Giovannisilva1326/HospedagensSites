<? 
session_start();

include 'bd_index.php';

$usuario = $_POST['userAcess'];
$senha = $_POST['passAcess'];
$modalError = false;

$sql = "select * from tb_usuarios where ds_usuario = '$usuario' and ds_senha = '$senha'";

$objBd = new db_index();
	$link = $objBd->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['ds_usuario'])){

			$_SESSION['ds_usuario'] = $dados_usuario['cd_usuario'];
			$_SESSION['ds_usuario'] = $dados_usuario['ds_usuario'];
			$_SESSION['ds_email'] = $dados_usuario['ds_email'];

			header('Location: home.php');
		}else{
			$modalErro = '';
		
			$modalErro.="modalErro=1&";


		header("Location: singIn.php?".$modalErro);
		}
	} else{
		$modalErro = '';

			$modalErro.="modalErro=1&";

		header("Location: singIn.php?".$modalErro);
	}

?>