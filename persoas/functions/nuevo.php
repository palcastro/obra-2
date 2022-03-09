<?php
require '../../conexion/conexion.php';
require '../../conexion/sesion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Persoa</title>
<<<<<<< Updated upstream
  <!-- esto no sirve no? -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- ESTILOS DE LAS PESTAÑAS Y SU CONTENIDO -> MODIFICAR CON BOOTSTRAP O LO QUE SEA -->
  <link rel="stylesheet" href="../../tabs.css">
  <script type="text/javascript" src="/components/js/header.js"></script>

</head>

<body>
  <!-- HEADER -->
<header-component></header-component>
  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <h2 style="text-align:center">"Novo Rexistro" de Persoa</h2><br>
=======
  <link rel="stylesheet" href="../../assets/css/index.css">
    <script src="/components/js/header.js"></script>
  <script src="/components/js/footer.js"></script>
</head>

<body>
<header-component></header-component>
  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <h2 class="my-4 text-center text-primary">Novo rexistro de persoa</h2>
>>>>>>> Stashed changes

  <div class="t-container">

    <ul class="t-tabs">
<<<<<<< Updated upstream
      <li class="t-tab">Datos Personais</li>
=======
      <li class="t-tab">Datos Persoais</li>
>>>>>>> Stashed changes
      <li class="t-tab">Formación</li>
      <li class="t-tab">Experiencia</li>
      <li class="t-tab">Accións</li>
      <li class="t-tab">Ofertas</li>
<<<<<<< Updated upstream
      <!-- tengo sair aqui mientras no haya header -->
      <li class="t-tab"><a href="../../login/logout.php">Saír da sesión</a></li>
=======
      <!-- <li class="t-tab"><a href="../../login/logout.php">Saír da sesión</a></li> -->
>>>>>>> Stashed changes
    </ul>

    <ul class="t-contents">

      <li class="t-content">
        <!-- <p>Contenido Datos</p> -->
<<<<<<< Updated upstream
        <h3 class="p-5 text-center">NOVO REXISTRO - DATOS</h3>
=======
>>>>>>> Stashed changes

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">

          <div class="col-md-4">
            <label for="nome" class="control-label"> NOME:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="primeiro_apelido" class=" control-label">PRIMEIRO APELIDO:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="primeiro_apelido" placeholder="Primeiro Apelido" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="segundo_apelido" class="control-label">SEGUNDO APELIDO:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="segundo_apelido" placeholder="Segundo Apelido" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="nif" class=" control-label">DNI / NIF:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="nif" name="nif" placeholder="Número do DNI" pattern="[0-9]{8}+[A-Z]{1}" maxlength="9" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="data_nacemento" class="control-label">DATA DE NACEMENTO:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="data_nacemento" name="data_nacemento" placeholder="dd-mm-aa" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="sexo" class="control-label">SEXO:</label>
            <div class="col-sm-10">
              <select class="form-control" id="sexo" name="sexo">
              <option value="text" disabled selected hidden>...</option>
              <option value="HOME">Home</option>
                <option value="MULLER">Muller</option>
                <option value="OUTRO">Non definido</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="codigo_postal" class="control-label">CP:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal" maxlength="5" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">TELÉFONO:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="email" class="control-label">CORREO ELECTRÓNICO:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
            </div>
          </div>


          <div class="col-md-4">
<<<<<<< Updated upstream
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
=======
            <div class="my-4">
              <a href="../index.php" class="btn btn-default">VOLVER</a>
>>>>>>> Stashed changes
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
<<<<<<< Updated upstream
        <!-- <p>Contenido Formación</p> -->
        <h3 class="p-5 text-center">NOVO REXISTRO - FORMACIÓN</h3>
=======
>>>>>>> Stashed changes

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">

          <div class="col-md-4">
            <label for="estudo" class="control-label">ESTUDOS BÁSICOS:</label>
            <div class="col-md-10">
              <select class="form-control" id="estudos" name="estudos">
                <option class="italic" value="text" disabled selected hidden> Formación básica</option>
                <option value="ESO">E.S.O</option>
                <option value="COU">C.O.U</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="superiores" class="control-label">ESTUDOS SUPERIORES:</label>
            <div class="col-md-10">
              <select class="form-control" id="superiores" name="superiores">
              <option value="text" disabled selected hidden>Formación superior</option>
                <option value="uni">Universitarios</option>
                <option value="nouni">Non Universitarios</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="universitarios" class="control-label">UNIVERSITARIOS:</label>
            <div class="col-md-10">
              <select class="form-control" id="universitarios" name="universitarios">
              <option value="text" disabled selected hidden>Formación universitaria</option>
                <option value="grao">Grao</option>
                <option value="master">Master</option>
                <option value="master">Doutorado</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="non-universitarios" class="control-label">NON UNIVERSITARIOS:</label>
            <div class="col-md-10">
              <select class="form-control" id="non-universitarios" name="nonuniversitarios">
              <option value="text" disabled selected hidden>...</option>
                <option value="bacharelato">Bacharelato</option>
                <option value="outros">Outros</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="fp" class="control-label">FORMACIÓN PROFESIONAL:</label>
            <div class="col-md-10">
              <select class="form-control" id="formacion" name="formacion">
              <option value="text" disabled selected hidden>Formación profesional</option>
                <option value="superior">Superior</option>
                <option value="media">Media</option>
                <option value="basica">Básica</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="familias" class="control-label">FAMILIAS PROFESIONAIS:</label>
            <div class="col-md-10">
              <select class="form-control" id="familias" name="familias">
              <option value="text" disabled selected hidden>Informática, administración...</option>
                <option value="informatica">Informática e comunicacións</option>
                <option value="admin">Administración e Xestión</option>
                <option value="madeira">Madeira, moble e corcho</option>
                <option value="auga">Enerxía e auga</option>
                <option value="imaxe">Imaxe persoal</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="complementaria" class="control-label">FORMACIÓN COMPLEMENTARIA:</label>
            <div class="col-md-10">
              <select class="form-control" id="complementaria" name="complementaria">
              <option value="text" disabled selected hidden>Formación complementaria</option>
                <option value="certificados">Certificados Oficiais</option>
                <option value="curso">Curso Manipulador de Alimentos</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="idiomas" class="control-label">IDIOMAS:</label>
            <div class="col-md-10"></div>
            <select class="form-control" id="idiomas" name="idiomas">
              <optgroup label="Niveis">
              <option value="text" disabled selected hidden>Niveis</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
              </optgroup>
            </select>

            <select class="form-control" id="idiomas" name="idiomas">
              <optgroup label="Curso">
              <option value="text" disabled selected hidden>Certificación</option>
                <option value="text">Cambridge</option>
                <option value="text">Oxford</option>
              </optgroup>
            </select>
          </div>

          <div class="col-md-4">
            <label for="otros" class="control-label">OUTROS:</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox1">
              <label class="form-check-label" for="defaultCheck">Viviu no estranxeiro</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
              <label class="form-check-label" for="defaultCheck">Homologado</label>
              <!-- <label>Homologado</label> -->
              <!-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Si
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"> Non -->
            </div>

          </div>

          <div class="form-group">
<<<<<<< Updated upstream
            <label for="exampleFormControlTextarea">Notas e consideracións</label>
=======
            <label for="exampleFormControlTextarea">NOTAS E CONSIDERACIÓNS:</label>
>>>>>>> Stashed changes
            <textarea class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
          </div>

          <div class="col-md-4">
<<<<<<< Updated upstream
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
=======
            <div class="my-4">
              <a href="../index.php" class="btn btn-default">VOLVER</a>
>>>>>>> Stashed changes
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>
      </li>

      <li class="t-content">
<<<<<<< Updated upstream
        <!-- <p>Contenido Experiencia</p> -->
        <h3 class="p-5 text-center">NOVO REXISTRO - EXPERIENCIA</h3>
=======
>>>>>>> Stashed changes

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
          <div class="col-md-4">
            <label for="ano_comezo" class="control-label">ANO DE COMEZO:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ano_comezo" name="ano_comezo" placeholder="Ano de comezo" maxlength="4" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="meses" class="control-label">DURACIÓN (en meses):</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Número de meses" id="meses" name="meses" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="posto" class="control-label">POSTO/CURSO:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Posto/curso" id="posto" name="posto" required>
            </div>
          </div>

          <div class="col-md-4">
<<<<<<< Updated upstream
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
=======
            <div class="my-4">
              <a href="../index.php" class="btn btn-default">VOLVER</a>
>>>>>>> Stashed changes
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>
      </li>

      <li class="t-content">
<<<<<<< Updated upstream
        <!-- <p>Contenido Acciones</p> -->
        <h3 class="p-5 text-center">NOVO REXISTRO - ACCIÓNS</h3>

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
=======
               <form class="row g-3 mt-4" method="POST" action="guardar.php" autocomplete="off">
>>>>>>> Stashed changes

          <div class="col-md-4">
            <label for="data_nacemento" class="control-label">DATA DA 1ª ENTREVISTA:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="data_entrevista" name="data_entrevista" placeholder="dd-mm-aa" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="orientador" class="control-label">ORIENTADOR/A:</label>
            <div class="col-sm-10">
              <select class="form-control" id="orientador" name="orientador">
              <option value="text" disabled selected hidden>...</option>
              <option value="">Cea Rodríguez, Alberte</option>
                <option value="">García Barbosa, Eva</option>
                <option value="">De Monasterio Roldan, Celia</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="canle" class="control-label">CANLE DE ACCESO:</label>
            <div class="col-sm-10">
              <select class="form-control" id="canle" name="canle">
              <option value="text" disabled selected hidden>...</option>
              <option value="">Web</option>
                <option value="">Física</option>
                <option value="">Por contacto</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="canle" class="control-label">SEGUEMENTO:</label>
            <div class="col-sm-10">
              <select class="form-control" id="canle" name="canle">
              <option value="text" disabled selected hidden>...</option>
              <option value="">Web</option>
                <option value="">Física</option>
                <option value="">Por contacto</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label for="canle" class="control-label">ACCIÓNS DO SOL:</label>
            <div class="col-sm-10">
              <select class="form-control" id="canle" name="canle">
              <option value="text" disabled selected hidden>...</option>
              <option value="">Web</option>
                <option value="">Física</option>
                <option value="">Por contacto</option>
              </select>
            </div>
          </div>

          <div class="form-group">
<<<<<<< Updated upstream
            <label for="exampleFormControlTextarea1">Notas e consideracións</label>
=======
            <label for="exampleFormControlTextarea1">NOTAS E CONSIDERACIÓNS:</label>
>>>>>>> Stashed changes
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="col-md-4">
<<<<<<< Updated upstream
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
=======
            <div class="my-4">
              <a href="../index.php" class="btn btn-default">VOLVER</a>
>>>>>>> Stashed changes
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
<<<<<<< Updated upstream
        <!-- <p>Contenido Ofertas</p> -->
        <h3 class="p-5 text-center">NOVO REXISTRO - OFERTAS</h3>
=======
>>>>>>> Stashed changes

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
          <div class="col-md-4">
            <label for="ofertade" class="control-label">TIPO DE OFERTA:</label>
            <div class="col-sm-10">
              <select class="form-control" id="ofertade" name="ofertade">
                <option disabled selected>Elixe</option>
                <option value="contratacion">Contratación</option>
                <option value="formacion">Formación</option>
                <option value="axuda">Axuda á contratación</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertaemp" class="control-label">EMPRESA:</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Empresa" class="form-control" id="ofertaemp" name="ofertaemp">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertapost" class="control-label">POSTO:</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Posto" class="form-control" id="ofertapost" name="ofertapost">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertanum" class="control-label">Nº DE OFERTAS:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="ofertanum" name="ofertanum" placeholder="...">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertadata" class="control-label">DATA DA OFERTA:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="ofertadata" name="ofertadata">
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertadata" class="control-label">FIN DA OFERTA:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="ofertadata" name="ofertadata">
            </div>
          </div>
          
          <div class="col-md-4">
<<<<<<< Updated upstream
            <div class="">
              <a href="../index.php" class="btn btn-default">VOLTAR</a>
=======
            <div class="my-4">
              <a href="../index.php" class="btn btn-default">VOLVER</a>
>>>>>>> Stashed changes
              <button type="submit" class="btn btn-primary">GARDAR</button>
            </div>
          </div>
</li>
        </form>
    </ul>
  </div>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes

  <footer-component></footer-component>
  <script src="../../tabs.js"></script>

</body>

</html>
