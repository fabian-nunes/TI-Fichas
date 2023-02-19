<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("refres:5;url=index.php");
        die("Acesso Restrito");
    }
    $valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
    $hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");
    $nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5">
    <title>Plataforma IoT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dashboard EI-TI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Histórico</a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="logout.php">
          <button class="btn btn-outline-secondary" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container mt-4">
    <div class="card">
      <div class="card-body">
        <img src="img/ipl.png" class="float-end" width="300px">
        <h1 class="card-title">Servidor IoT</h1>
        <p class="card-subtitle mb-2 text-muted">Bem vindo <b>UTILIZADOR XPTO</b></p>
        <p class="card-text">Tecnologias de Internet - Engenharia Informática</p>
      </div>

    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-header">
            <b>Luminosidade: 80%</b>
          </div>
          <div class="card-body">
            <img src="img/dia.png">
          </div>
          <div class="card-footer">
            <p class="m-0"><b>Atualização:</b> 2022/03/01 14:31 -</p>
            <a class="text-center" href="#">Histórico</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-header">
            <b>Temperatura: <?php echo $valor_temperatura; ?>º</b>
          </div>
          <div class="card-body">
            <img src="img/temperature.png">
          </div>
          <div class="card-footer">
            <p class="m-0"><b>Atualização:</b> <?php echo $hora_temperatura ?> -</p>
            <a class="text-center" href="#">Histórico</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-header">
            <b>Porta: Fechada</b>
          </div>
          <div class="card-body">
            <img src="img/door.png">
          </div>
          <div class="card-footer">
            <p class="m-0"><b>Atualização:</b> 2022/03/01 14:31 -</p>
            <a class="text-center" href="#">Histórico</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="card">
      <h5 class="card-header">Tabela de Sensores</h5>
      <div class="card-body">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">Tipo de Dispositivo IoT</th>
            <th scope="col">Valor</th>
            <th scope="col">Data de Atualização</th>
            <th scope="col">Estado de Alertas</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
          <tr>
            <td>Sensor de Luz</td>
            <td>1000</td>
            <td>2021/03/01</td>
            <td>
              <span class="badge rounded-pill text-bg-success">Ativo</span>
            </td>
          </tr>
          <tr>
            <td><?php echo $nome_temperatura?></td>
            <td><?php echo $valor_temperatura ?>º</td>
            <td><?php echo $hora_temperatura ?></td>
            <td>
              <span class="badge rounded-pill text-bg-danger">Desativo</span>
            </td>
          </tr>
          <tr>
            <td>Humidade</td>
            <td>85%</td>
            <td>2021/03/01</td>
            <td>
              <span class="badge rounded-pill text-bg-warning">Warning</span>
            </td>
          </tr>
          <tr>
            <td>Luminosidade</td>
            <td>80%</td>
            <td>2021/03/01</td>
            <td>
              <span class="badge rounded-pill text-bg-danger">Muito Forte</span>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>