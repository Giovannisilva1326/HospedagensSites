<?
$erro_usuario   = isset($_GET['erro_usuario'])  ? $_GET['erro_usuario'] : 0;
$erro_email   = isset($_GET['erro_email'])  ? $_GET['erro_email']   : 0;
$erro_cpf   = isset($_GET['erro_cpf'])  ? $_GET['erro_cpf']   : 0;
$erro_senha   = isset($_GET['erro_senha'])  ? $_GET['erro_senha']   : 0;

include 'bootstrap.php';
include 'css.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body class="form-control">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
     <img src="./imagens/cerebro.png" width="100" height="50">
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item">
      <a class="nav-link" href="singIn.php">Login<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Cadastrar <span class="sr-only">(current)</span></a>
    </li>

    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sobre nós
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">História</a>
        <a class="dropdown-item" href="#">Desenvolvimentos</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Jogos</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Voltar <span class="sr-only"></span></a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquise" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquise<i class="glyphicon glyphicon-search"></i></button>
  </form>
</div>
</nav>

<br>
<center>
  Cadastre seu usuário
</center>
<br>

<div id="center">
  <form method="post" action="verificaRegistroUser.php" id="formCadUser">
    <fieldset>
      <center>

        <div class="row">
          <div class="col-1">
            <label>Nome:</label>
          </div>
          <div class="col-3">
            <input type="text" name="nameCad" id="nameCad" class="form-control" placeholder="Nome">
          </div>
        </div>
        
        <br>

        <div class="row">
          <div class="col-1">
            <label>Sobrenome:</label>
          </div>
          <div class="col-3">
            <input type="text" name="sobrenomeCad" id="sobrenomeCad" class="form-control" placeholder="Sobrenome">
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-1">
            <label>CPF:</label>
          </div>
          <div class="col-3">
            <input type="cpf" name="cpfCad" id="cpfCad" class="form-control" placeholder="CPF">
            <?
            if($erro_cpf){
              echo '<font style="color: #FF0000">CPF já existe</font>';
            }
            ?>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-1">
            <label>Endereço:</label>
          </div>
          <div class="col-3">
            <input type="text" name="enderecoCad" id="enderecoCad" class="form-control" placeholder="Endereço">
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-1">
            <label>Telefone:</label>
          </div>
          <div class="col-1">
            <input type="text" name="DDDCad" id="DDDCad" class="form-control" placeholder="DDD">
          </div>
          <div class="col-2">
            <input type="text" name="numberCad" id="numberCad" class="form-control" placeholder="Telefone">
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-1">
            <label>Usuário:</label>
          </div>
          <div class="col-3">
            <input type="text" name="userCad" id="userCad" class="form-control" placeholder="Usuário">
            <?
            if($erro_usuario){
              echo '<font style="color: #FF0000">Usuário já existe</font>';
            }
            ?>
          </div>
        </div>

        <br>

        <div class="row"> 
          <div class="col-1">
            <label>Senha:</label>
          </div>
          <div class="col-3">
            <input type="password" name="passCad" id="passCad" class="form-control" placeholder="Senha">
            <?
            if($erro_senha){
              echo '<font style="color: #FF0000">Senhas divergente</font>';
            }
            ?>
          </div>
        </div>

        <br>

        <div class="row"> 
          <div class="col-1">
            <label>Confirmar Senha:</label>
          </div>
          <div class="col-3">
            <input type="password" name="passCadConf" id="passCadConf" class="form-control" placeholder="Confirmar Senha">
            <?
            if($erro_senha){
              echo '<font style="color: #FF0000">Senhas divergente</font>';
            }
            ?>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-1">
            <label>Lembrete de senha:</label>
          </div>
          <div class="col-3">
            <input type="text" name="lembreteSenha" id="lembreteSenha" class="form-control" placeholder="Lembrete de senha">
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-1">
            <label>Email:</label>
          </div>
          <div class="col-3">
            <input type="email" name="emailCad" id="emailCad" class="form-control" onblur="validacaoEmail(emailCad.email)" placeholder="email@email">

            <?
            if($erro_email){
              echo '<font style="color: #FF0000">E-mail já existe</font>';
            }
            ?>
          </div>
        </div>
      </center>
    </fieldset>
    <div>
      <button type="button" class="btn btn-dark" id="submitCad" onclick="Enviar()">Enviar</button>
    </div>
  </form>
</div>

<script type="text/javascript">

  function VerificaCPF(strCPF) {
    let Soma;
    let Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
      Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
      Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
  }

  //setTimeout(() => alert(VerificaCPF(strCPF)), 6000) // alert(VerificaCPF(strCPF))
  function Enviar(){

    let strCPF = document.querySelector('#cpfCad').value;

    strCPF = VerificaCPF(strCPF);

    if(strCPF == false){
      alert('O CPF não é válido');
      document.querySelector('#cpfCad').focus();
      return false;
    }
    if(document.querySelector('#nameCad').value == ''){
      alert('Preencha o campo Nome');
      document.querySelector('#nameCad').focus();
      return false;
    }
    if(document.querySelector('#sobrenomeCad').value == ''){
      alert('Preencha o campo Sobrenome');
      document.querySelector('#sobrenomeCad').focus();
      return false;
    }
    if(document.querySelector('#enderecoCad').value == ''){
      alert('Preencha o campo Endereço');
      document.querySelector('#enderecoCad').focus();
      return false;
    }
    if(document.querySelector('#DDDCad').value == ''){
      alert('Preencha o campo DDD');
      document.querySelector('#DDDCad').focus();
      return false;
    }
    if(document.querySelector('#numberCad').value == ''){
      alert('Preencha o campo Telefone');
      document.querySelector('#numberCad').focus();
      return false;
    }
    if(document.querySelector('#emailCad').value == ''){
      alert('Preencha o campo Email');
      document.querySelector('#emailCad').focus();
      return false;
    }
    document.querySelector('#formCadUser').submit()
  }
</script>
</body>
</html>