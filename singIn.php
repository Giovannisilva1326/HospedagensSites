<?
$registroOk   = isset($_GET['registroOk'])  ? $_GET['registroOk']   : 0;
$modalErro   = isset($_GET['modalErro'])  ? $_GET['modalErro']   : 0;
include 'bd_index.php';
include 'bootstrap.php'

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

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
        <a class="nav-link" href="#">Sing in <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inscreverse.php">Sing up</a>
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="modals">
  <?
  if ($registroOk) {
    ?>

    <div class="modal" id="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Usuário registrado com sucesso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Para acessar clique em acesso ou feche a aba e vá até o meu de acesso e logue - se.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closebtn" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary acessobtn">Acessar</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $("#modal").show();
      $("#modalAcesso").hide();

      $(".close").click(() => {
        $("#modal").hide()
      });
      $(".closebtn").click(() => {
        $("#modal").hide()
      });

      $(".acessobtn").click(() =>{
        $("#modal").hide();
        $("#modalAcesso").show();
      })
    </script>

    <?
  }
  ?>

  <form method="post" action="logar.php" id="formLogar">

    <div class='modal' id='modalAcesso' tabindex='-1' role='dialog'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title'>Acesso</h5>
            <button type="button" class="closeAcess" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class='modal-body'>
            <div class='row'>
              <div class='col-2'>
                <label>Usuário:</label>
              </div>
              <div class='col-6'><input type='text' name='userAcess' id='userAcess' class='form-control'></div>
            </div>
            <div class='row'>
              <div class='col-2'>
                <label>Senha:</label>
              </div>
              <div class='col-6'><input type='password' name='passAcess' id='passAcess' class='form-control'></div>
            </div>
          </div>
          <center>
            <?if ($modalErro) {
              echo '<font style="color: #FF0000">Usuário ou senha incorreto</font>';
           }?>
         </center>
         <div class='modal-footer'>
          <button type='button' class='btn btn-secondary closebtnAcess' data-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-primary acessobtnAcess'>Acessar</button>
        </div>
      </div>
    </div>
  </div>

</div>

</form>

<script type="text/javascript">

  $(".closeAcess").click(() => {
    $("#modalAcesso").hide();
  });


  $(".closebtnAcess").click(() => {
    $("#modalAcesso").hide();
  });

  $(".acessobtnAcess").click(() => {
    $("#formLogar").submit();
  });

</script>

<?if ($registroOk == false){?>
  <script type="text/javascript" src="javascript.js"></script>
  <?
}
?>

</body>
</html>