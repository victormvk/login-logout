<?php 

session_start();

require_once('methods/verification.php');

verification('pages/login-page.php');


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Minha Conta</title>
  </head>
  <body>


    <div class="card">

        <div class="card-body">
            <h4>MINHA CONTA</h4>

            <p>Olá, nome_do_usuário!</p>

            <a href="methods/logout.php">
                <button class="btn">Sair</button>
            </a>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>