<?
	class db_index{

		//host
		private $host = 'localhost';

		//usuario
		private $usuario = 'sa';

		//senha
		private $senha = 'HospedagensSites73573';

		//banco de dados
		private $database = 'HospedagensSites';

	

		public function conecta_mysql(){
			//cria a conexao
			$conn = mssql_connect($this->host, $this->usuario, $this->senha, $this->database);
			//$connClose = mysql_close();
			
			//ajustar o charset de comunicação entre a aplicação e o banco de dados
			mssql_set_charset($conn, 'utf8');
			
			//verificar se houve erro de conexão
			if(mssql_errno()){
				echo 'Erro na conexão do servidor: '.mssql_connect_error();
			}
			return $conn;
		}

	}
?>