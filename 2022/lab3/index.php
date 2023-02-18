<?php
/*
    if (isset($_POST['username'])){
        echo "Bem-vindo " . $_POST['username'];
    }
    if (isset($_POST['password'])){
        echo "Bem-vindo " . $_POST['password'];
    }
*/
    $username = "admin";
    $password = "admin";
    if (isset($_POST['username']) && isset($_POST['password'])){
        if ($_POST['username'] == $username && $_POST['password'] == $password){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "<script>alert('Username ou password incorretos!')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plataforma IoT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form class="formLab" method="post">
            <a href="index.php"><img src="img/estg.jpg" class="img-fluid"></a>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Escreva o username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Escreva a password" required>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
