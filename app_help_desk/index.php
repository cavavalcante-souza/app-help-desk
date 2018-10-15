<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <? if(isset($_GET['login']) && $_GET['login']=='erro') { ?>
      <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Usuário ou senha invalido(s)</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <? } ?>

    <? if(isset($_GET['login']) && $_GET['login']=='erro2') { ?>
      <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Por favor realize seu Login</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <? } ?>
      

    <div class="container">    
      <div class="row">
          <div class="card-login">
              <div class="card">
                <div class="card-header">
                  Login
                </div>
                <div class="card-body">
                  <form action="http://localhost/app_help_desk/valida_login.php" method="post"><!--caminho relativo ou absoluto-->
                    <div class="form-group">
                      <input required name="email" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <input required name="senha" type="password" class="form-control" placeholder="Senha">
                    </div>
                    <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                  </form>
                </div><!--card body-->
              </div><!--card-->
           </div><!--card login-->
        </div><!--row-->
    </div><!--container-->

    <!--Jquery Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!--Popper Bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!--JS Bootstrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>