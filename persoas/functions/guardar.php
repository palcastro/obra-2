<?php

require '../../conexion/conexion.php';
require '../../conexion/sesion.php';

$nome = $_POST['nome'];
$primeiro_apelido = $_POST['primeiro_apelido'];
$segundo_apelido = $_POST['segundo_apelido'];
$nif = $_POST['nif'];
$data_nacemento = $_POST['data_nacemento'];
$sexo = $_POST['sexo'];
$codigo_postal = $_POST['codigo_postal'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO persoas (nome, primeiro_apelido, segundo_apelido, nif, data_nacemento, sexo, codigo_postal, telefono, email) VALUES ('$nome', '$primeiro_apelido', '$segundo_apelido', '$nif', '$data_nacemento', '$sexo', '$codigo_postal', '$telefono', '$email')";
$resultado = $mysqli->query($sql);

?>

<html lang="gl">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="row" style="text-align:center">
        <?php if ($resultado) { ?>
          <h3>REXISTRO GARDADO</h3>
        <?php } else { ?>
          <h3>ERRO AO GARDAR</h3>
        <?php } ?>

        <a href="../index.php" class="btn btn-primary">VOLTAR</a>

      </div>
    </div>
  </div>

</body>

</html>
