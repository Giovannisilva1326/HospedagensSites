<?
	class db_index{

		//host
		private $host = 'localhost';

		//usuario
		private $usuario = 'sa';

		//senha
		private $senha = 'Mgf@1@12@@1';

		//banco de dados
		private $database = 'aeronautica';
	

		public function conecta_mysql(){
			//cria a conexao
			$conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
			
			//ajustar o charset de comunicação entre a aplicação e o banco de dados
			mysqli_set_charset($conn, 'utf8');
			
			//verificar se houve erro de conexão
			if(mysqli_connect_errno()){
				echo 'Erro na conexão do servidor: '.mysqli_connect_error();
			}
			return $conn;
		}

	}
?>