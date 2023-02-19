  <?php
    header('Content-Type: text/html; charset=utf-8');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (!isset($_POST['valor']) || !isset($_POST['hora']) || !isset($_POST['nome'])) {
          echo 'Parâmetros inválidos';
          http_response_code(400);
          exit;
      }
      $valor = $_POST['valor'];
      $hora = $_POST['hora'];
      file_put_contents('api/files/'.$_POST['nome'].'/valor.txt', $valor);
      file_put_contents('api/files/'.$_POST['nome'].'/hora.txt', $hora);
      file_put_contents('api/files/'.$_POST['nome'].'/log.txt', $hora.';'.$valor.PHP_EOL, FILE_APPEND);
      echo 'Sucesso';
  } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
      if (!isset($_GET['nome'])) {
            echo 'Parâmetros inválidos';
            http_response_code(400);
            exit;
      } else {
          $valor = file_get_contents('api/files/'.$_GET['nome'].'/valor.txt');
          echo $valor;
      }
  } else {
      echo 'Método não permitido';
      http_response_code(403);
      exit;
  }
  ?>


