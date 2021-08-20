<?php
//if (!isset($_SESSION["USUARIO"])) {
//  header("Location: index.php");
//  exit();
//}
require_once 'data/conexion.php';
require_once 'api/adm_index.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COLLECTO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

  <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<?php require_once 'api/adm_indexAJAX.php'; ?>

<style>
  #header {
    background: rgba(42, 44, 57, 0.9) !important;
  }
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">COLLECTO</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>SOLICITUD DE EMPLEO</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>SOLICITUD DE EMPLEO</li>
          </ol>
        </div>

      </div>

      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li>POR FAVOR INGRESAR TODOS LOS DATOS QUE EL FORMULARIO PRESENTA A CONTINUACION SON TODOS OBLIGATORIOS.</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <form id="formData" method="POST">
          <div class="form-row">
            <div class="form-group btn-info col-md-10">
              <label for="inputEmail4">PUESTO SOLICITADO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">FECHA</label>
            </div>
            <div class="form-group col-md-10">
              <input type="text" class="form-control" id="puesto_sol" name="puesto_sol">
            </div>
            <div class="form-group col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="fecha_sol" name="fecha_sol">
            </div>
            <div class="form-group btn-info col-md-8"></div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">SUELDO MENSUAL DESEADO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">SUELDO ANUAL DESEADO</label>
            </div>
            <div class="form-group col-md-8"></div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="sueldo_mensual" name="sueldo_mensual">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="sueldo_anual" name="sueldo_anual">
            </div>
            <div class="col-12">
              <hr>
              <h2>ESCOLARIDAD</h2><br>
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">NOMBRE DE LA ESCUELA</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">UBICACION</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">FECHAS</label>
            </div>
            <div class="form-group btn-info col-md-1">
              <label for="inputEmail4">AÑOS</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">RECIBO DE TITULO</label>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="edu_pri_nom" name="edu_pri_nom" placeholder="Educacion Primaria">
              <input type="text" class="form-control" id="edu_basic_nom" name="edu_basic_nom" placeholder="Educacion Basica">
              <input type="text" class="form-control" id="diver_nom" name="diver_nom" placeholder="Diversificado">
              <input type="text" class="form-control" id="univer_nom" name="univer_nom" placeholder="Universitaria">
              <input type="text" class="form-control" id="edu_comer_nom" name="edu_comer_nom" placeholder="Comercial u otras">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="edu_pri_ubi" name="edu_pri_ubi">
              <input type="text" class="form-control" id="edu_basic_ubi" name="edu_basic_ubi">
              <input type="text" class="form-control" id="diver_ubi" name="diver_ubi">
              <input type="text" class="form-control" id="univer_ubi" name="univer_ubi">
              <input type="text" class="form-control" id="edu_comer_ubi" name="edu_comer_ubi">
            </div>
            <div class="form-group col-md-1">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="edu_pri_date_de" name="edu_pri_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="edu_basic_date_de" name="edu_basic_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="diver_date_de" name="diver_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="univer_date_de" name="univer_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="edu_comer_date_de" name="edu_comer_date_de">
            </div>
            <div class="form-group col-md-1">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="edu_pri_date_hasta" name="edu_pri_date_hasta">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="edu_basic_date_hasta" name="edu_basic_date_hasta">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="diver_date_hasta" name="diver_date_hasta">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="univer_date_hasta" name="univer_date_hasta">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="edu_comer_date_hasta" name="edu_comer_date_hasta">
            </div>
            <div class="form-group col-md-1">
              <input type="text" class="form-control" id="edu_pri_a" name="edu_pri_a">
              <input type="text" class="form-control" id="edu_basic_a" name="edu_basic_a">
              <input type="text" class="form-control" id="diver_a" name="diver_a">
              <input type="text" class="form-control" id="univer_a" name="univer_a">
              <input type="text" class="form-control" id="edu_comer_a" name="edu_comer_a">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="edu_pri_titul" name="edu_pri_titul">
              <input type="text" class="form-control" id="edu_basic_titul" name="edu_basic_titul">
              <input type="text" class="form-control" id="diver_titul" name="diver_titul">
              <input type="text" class="form-control" id="univer_titul" name="univer_titul">
              <input type="text" class="form-control" id="edu_comer_titul" name="edu_comer_titul">
            </div>
            <div class="form-group btn-info col-md-12">
              <label for="inputEmail4">ESTUDIOS QUE ESTA REALIZANDO EN LA ACTUALIDAD:</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">ESCUELA</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">HORARIO</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">CURSO O CARRERA</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">GRADO</label>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="est_act_escuela" name="est_act_escuela">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="est_act_horario" name="est_act_horario">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="est_act_curso" name="est_act_curso">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="est_act_grado" name="est_act_grado">
            </div>
            <div class="col-12">
              <hr>
              <h2>CONOCIMIENTOS GENERALES</h2><br>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">IDIOMAS HABLA (APARTE DEL NATIVO)</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">INDIQUE SU NIVEL DE INGLES 50%, 75%, 100%</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">FUNCIONES DE OFICINA QUE DOMINA</label>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="idiomas" name="idiomas">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nivel_idioma" name="nivel_idioma">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="funcion_oficina_domin" name="funcion_oficina_domin">
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">MAQUINAS DE OFICINA O TALLER QUE SEPA MANEJAR</label>
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">SOFTWARE QUE DOMINA</label>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="uso_maquinas" name="uso_maquinas">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="software_domin" name="software_domin">
            </div>
            <div class="form-group btn-info col-md-12">
              <label for="inputEmail4">OTRAS FUNCIONES QUE DOMINA</label>
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" id="otr_funcion_domin" name="otr_funcion_domin">
            </div>
            <div class="col-12">
              <hr>
              <h2>DATOS PERSONALES</h2><br>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">APELLIDO PATERNO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">APELLIDO MATERNO</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">NOMBRE(S)</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">EDAD</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">SEXO</label>
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="ape_pat" name="ape_pat">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="ape_mat" name="ape_mat">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="nombre_per" name="nombre_per">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="edad_per" name="edad_per">
            </div>
            <div class="form-group col-md-2">
              <select id="sexo_per" name="sexo_per" class="form-control">
                <option value="no selecciono" selected>Seleccionar</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
              </select>
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">DOMICILIO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">COLONIA</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">TELEFONO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">TELEFONO CELULAR</label>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="domicilio_per" name="domicilio_per">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="colonia_per" name="colonia_per">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="telefono_per" name="telefono_per">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="celular_per" name="celular_per">
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">VIVE CON</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">FECHA DE NACIMIENTO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">ESTATURA</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">PESO</label>
            </div>
            <div class="form-group col-md-6">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="vive_con" id="vive_con" value="PADRES" checked>
              <label class="form-check-label" for="vive_con">
                PADRES
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="vive_con" id="vive_con" value="PARINTES">
              <label class="form-check-label" for="vive_con">
                PARIENTES
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="vive_con" id="vive_con" value="SOLO">
              <label class="form-check-label" for="vive_con">
                SOLO
              </label>
            </div>
            <div class="form-group col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="fecha_nac_per" name="fecha_nac_per">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="estatura_per" name="estatura_per">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="peso_per" name="peso_per">
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">PERSONAS QUE DEPENDEN DE USTED</label>
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">ESTADO CIVIL</label>
            </div>
            <div class="form-group col-md-6">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="depende_de" id="depende_de" value="HIJOS" checked>
              <label class="form-check-label" for="depende_de">
                HIJOS
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="depende_de" value="PADRES">
              <label class="form-check-label" for="depende_de">
                PADRES
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="depende_de" id="depende_de" value="CONYUGUE">
              <label class="form-check-label" for="depende_de">
                CONYUGUE
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="depende_de" id="depende_de" value="NINGUNO">
              <label class="form-check-label" for="depende_de">
                NINGUNO
              </label>
            </div>
            <div class="form-group col-md-6">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="estado_civil_per" id="estado_civil_per" value="SOLTERO" checked>
              <label class="form-check-label" for="estado_civil_per">
                SOLTERO
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="estado_civil_per" id="estado_civil_per" value="CASADO">
              <label class="form-check-label" for="estado_civil_per">
                CASADO
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="estado_civil_per" id="estado_civil_per" value="OTRO">
              <label class="form-check-label" for="estado_civil_per">
                OTRO
              </label>
            </div>
            <div class="col-12">
              <hr>
              <h2>DOCUMENTACION</h2><br>
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">CODIGO UNICO DE IDENTIFICACION (CUI)</label>
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">NUMERO DE SEGURIDAD SOCIAL</label>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="cui_per" name="cui_per">
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="num_seg_social" name="num_seg_social">
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">NIT</label>
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">PORTA LICENCIA?</label>
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">TIPO DE LICENCIA</label>
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">NUMERO DE LICENCIA</label>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="nit_per" name="nit_per">
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="port_licencia" name="port_licencia">
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="tipo_licencia" name="tipo_licencia">
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="num_licencia" name="num_licencia">
            </div>
            <div class="col-12">
              <hr>
              <h2>ESTADO DE SALUD Y HABITOS PERSONALES</h2><br>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">COMO CONSIDERA SU ESTADO DE SALUD ACTUAL?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PADECE ALGUNA ENFERMEDAD CRONICA?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PERTENECE A ALGUN CLUB SOCIAL O DEPORTIVO?</label>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="esta_solud_question_1" name="esta_solud_question_1">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="esta_solud_question_2" name="esta_solud_question_2">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="esta_solud_question_3" name="esta_solud_question_3">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PRACTICA ALGUN DEPORTE?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">CUAL ES SU PASATIEMPO FAVORITO?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">CUAL ES SU META DE VIDA?</label>
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="esta_solud_question_4" name="esta_solud_question_4">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="esta_solud_question_5" name="esta_solud_question_5">
            </div>
            <div class="form-group col-md-4">
              <input type="text" class="form-control" id="esta_solud_question_6" name="esta_solud_question_6">
            </div>
            <div class="col-12">
              <hr>
              <h2>DATOS FAMILIARES</h2><br>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">NOMBRE</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">ESTADO</label>
            </div>
            <div class="form-group btn-info col-md-6">
              <label for="inputEmail4">DOMICILIO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">OCUPACION</label>
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="pat_nom" name="pat_nom" placeholder="PADRE">
            </div>
            <div class="form-group col-md-2">
              <select id="pat_vive" name="pat_vive" class="form-control">
                <option value="no selecciono" selected>Seleccionar</option>
                <option value="vive">vive</option>
                <option value="fallecido">fallecido</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="pat_domicilio" name="pat_domicilio">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="pat_ocupacion" name="pat_ocupacion">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="mat_nom" name="mat_nom" placeholder="MADRE">
            </div>
            <div class="form-group col-md-2">
              <select id="mat_vive" name="mat_vive" class="form-control">
                <option value="no selecciono" selected>Seleccionar</option>
                <option value="vive">vive</option>
                <option value="fallecido">fallecido</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="mat_domicilio" name="mat_domicilio">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="mat_ocupacion" name="mat_ocupacion">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="cony_nom" name="cony_nom" placeholder="CONYUGUE">
            </div>
            <div class="form-group col-md-2">
              <select id="cony_vive" name="cony_vive" class="form-control">
                <option value="no selecciono" selected>Seleccionar</option>
                <option value="vive">vive</option>
                <option value="fallecido">fallecido</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" id="cony_domicilio" name="cony_domicilio">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="cony_ocupacion" name="cony_ocupacion">
            </div>
            <div class="form-group btn-info col-md-12">
              <label for="inputEmail4">NOMRE, EDADES Y OCUPACION DE LOS HIJOS</label>
            </div>
            <div class="form-group col-md-12">
              <textarea class="form-control" id="fam_gen" name="fam_gen" rows="6"></textarea>
            </div>
            <div class="col-12">
              <hr>
              <h2>EMPLEO ACTUAL Y ANTERIORES</h2><br>
            </div>
            <div class="form-group btn-info col-md-4">
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">EMPLEO ACTUAL O ULTIMO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">EMPLEO ANTERIOR</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">EMPLEO ANTERIOR</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">EMPLEO ANTERIOR</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">TIEMPO QUE PRESTO SERVICIOS FECHAS DE HASTA</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_act_date_de" name="emp_act_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_act_date_hasta" name="emp_act_date_hasta">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_ant_1_date_de" name="emp_ant_1_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_ant_1_date_hasta" name="emp_ant_1_date_hasta">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_ant_2_date_de" name="emp_ant_2_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_ant_2_date_hasta" name="emp_ant_2_date_hasta">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_ant_3_date_de" name="emp_ant_3_date_de">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="emp_ant_3_date_hasta" name="emp_ant_3_date_hasta">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">NOMBRE DE LA EMPRESA</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_nomemp" name="emp_act_nomemp">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_nomemp" name="emp_ant_1_nomemp">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_nomemp" name="emp_ant_2_nomemp">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_nomemp" name="emp_ant_3_nomemp">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">DIRECCION</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_dir" name="emp_act_dir">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_dir" name="emp_ant_1_dir">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_dir" name="emp_ant_2_dir">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_dir" name="emp_ant_3_dir">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">TELEFONO</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_tel" name="emp_act_tel">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_tel" name="emp_ant_1_tel">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_tel" name="emp_ant_2_tel">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_tel" name="emp_ant_3_tel">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PUESTO DESENPEÑADO</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_puesto" name="emp_act_puesto">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_puesto" name="emp_ant_1_puesto">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_puesto" name="emp_ant_2_puesto">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_puesto" name="emp_ant_3_puesto">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">SUELDO MENSUAL INICIAL</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_sueld_ini" name="emp_act_sueld_ini">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_sueld_ini" name="emp_ant_1_sueld_ini">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_sueld_ini" name="emp_ant_2_sueld_ini">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_sueld_ini" name="emp_ant_3_sueld_ini">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">SUELDO MENSUAL FINAL</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_sueld_fin" name="emp_act_sueld_fin">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_sueld_fin" name="emp_ant_1_sueld_fin">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_sueld_fin" name="emp_ant_2_sueld_fin">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_sueld_fin" name="emp_ant_3_sueld_fin">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">MOTIVO DE SU SUPERACION</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_motivo_sup" name="emp_act_motivo_sup">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_motivo_sup" name="emp_ant_1_motivo_sup">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_motivo_sup" name="emp_ant_2_motivo_sup">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_motivo_sup" name="emp_ant_3_motivo_sup">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">NOMBRE DE SU JEFE DIRECTO</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_jefe_nom" name="emp_act_jefe_nom">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_jefe_nom" name="emp_ant_2_jefe_nom">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_jefe_nom" name="emp_ant_3_jefe_nom">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_jefe_puesto" name="emp_act_jefe_puesto">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PUESTO DE SU JEFE DIRECTO</label>
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_act_jefe_puesto" name="emp_act_jefe_puesto">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_1_jefe_puesto" name="emp_ant_1_jefe_puesto">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_2_jefe_puesto" name="emp_ant_2_jefe_puesto">
            </div>
            <div class="form-group  col-md-2">
              <input type="text" class="form-control" id="emp_ant_3_jefe_puesto" name="emp_ant_3_jefe_puesto">
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PODEMOS SOLICITAR INFORMACION SOBRE USTED</label>
            </div>
            <div class="form-group  col-md-2">
              <textarea class="form-control" id="emp_act_info" name="emp_act_info" placeholder="SI o NO. POR QUE?"></textarea>
            </div>
            <div class="form-group  col-md-2">
              <textarea class="form-control" id="emp_ant_1_info" name="emp_ant_1_info" placeholder="SI o NO. POR QUE?"></textarea>
            </div>
            <div class="form-group  col-md-2">
              <textarea class="form-control" id="emp_ant_2_info" name="emp_ant_2_info" placeholder="SI o NO. POR QUE?"></textarea>
            </div>
            <div class="form-group  col-md-2">
              <textarea class="form-control" id="emp_ant_3_info" name="emp_ant_3_info" placeholder="SI o NO. POR QUE?"></textarea>
            </div>

            <div class="col-12">
              <hr>
              <h2>REFERENCIAS PERSONALES (no incluir parientes ni jefes anteriores)</h2><br>
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">NOMBRE</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">TELEFONO</label>
            </div>
            <div class="form-group btn-info col-md-3">
              <label for="inputEmail4">DOMICILIO</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">OCUPACION</label>
            </div>
            <div class="form-group btn-info col-md-2">
              <label for="inputEmail4">TIEMPO DE CONOCERLO </label>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="ref_1_nom" name="ref_1_nom">
              <input type="text" class="form-control" id="ref_2_nom" name="ref_2_nom">
              <input type="text" class="form-control" id="ref_3_nom" name="ref_3_nom">
              <input type="text" class="form-control" id="ref_4_nom" name="ref_4_nom">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="ref_1_tel" name="ref_1_tel">
              <input type="text" class="form-control" id="ref_2_tel" name="ref_2_tel">
              <input type="text" class="form-control" id="ref_3_tel" name="ref_3_tel">
              <input type="text" class="form-control" id="ref_4_tel" name="ref_4_tel">
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="ref_1_domicilio" name="ref_1_domicilio">
              <input type="text" class="form-control" id="ref_2_domicilio" name="ref_2_domicilio">
              <input type="text" class="form-control" id="ref_3_domicilio" name="ref_3_domicilio">
              <input type="text" class="form-control" id="ref_4_domicilio" name="ref_4_domicilio">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="ref_1_ocupacion" name="ref_1_ocupacion">
              <input type="text" class="form-control" id="ref_2_ocupacion" name="ref_2_ocupacion">
              <input type="text" class="form-control" id="ref_3_ocupacion" name="ref_3_ocupacion">
              <input type="text" class="form-control" id="ref_4_ocupacion" name="ref_4_ocupacion">
            </div>
            <div class="form-group col-md-2">
              <input type="text" class="form-control" id="ref_1_tiempo" name="ref_1_tiempo">
              <input type="text" class="form-control" id="ref_2_tiempo" name="ref_2_tiempo">
              <input type="text" class="form-control" id="ref_3_tiempo" name="ref_3_tiempo">
              <input type="text" class="form-control" id="ref_4_tiempo" name="ref_4_tiempo">
            </div>

            <div class="col-12">
              <hr>
              <h2>DATOS GENERALES</h2><br>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">COMO SUPO DEL EMPLEO?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">TIENE PARIENTES TRABAJANDO EN ESTA EMPRESA?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">HA ESTADO AFILIADO A ALGUN SINDICATO?</label>
            </div>
            <div class="form-group col-md-4">
              <select id="dat_gen_question_1" name="dat_gen_question_1" class="form-control">
                <option value="no selecciono" selected>Seleccionar</option>
                <option value="internet">internet</option>
                <option value="anuncio">anuncio</option>
                <option value="otro">otro</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_2" id="dat_gen_question_2" value="SI" checked>
              <label class="form-check-label" for="dat_gen_question_2">
                SI
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="dat_gen_question_2" id="dat_gen_question_2" value="NO">
              <label class="form-check-label" for="dat_gen_question_2">
                NO
              </label>
            </div>
            <div class="form-group col-md-4">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_3" id="dat_gen_question_3" value="SI" checked>
              <label class="form-check-label" for="dat_gen_question_3">
                SI
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="dat_gen_question_3" id="dat_gen_question_3" value="NO">
              <label class="form-check-label" for="dat_gen_question_3">
                NO
              </label>
            </div>



            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">TIENE DISPONIBILIDAD DE HORARIOS?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">PROBLEMAS DE TRASLADO?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">DISPOSICION DE VIAJAR?</label>
            </div>
            <div class="form-group col-md-4">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_4" id="dat_gen_question_4" value="SI" checked>
              <label class="form-check-label" for="dat_gen_question_4">
                SI
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="dat_gen_question_4" id="dat_gen_question_4" value="NO">
              <label class="form-check-label" for="dat_gen_question_">
                NO
              </label>
            </div>
            <div class="form-group col-md-4">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_5" id="dat_gen_question_5" value="SI" checked>
              <label class="form-check-label" for="dat_gen_question_5">
                SI
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="dat_gen_question_5" id="dat_gen_question_5" value="NO">
              <label class="form-check-label" for="dat_gen_question_5">
                NO
              </label>
            </div>
            <div class="form-group col-md-4">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_6" id="dat_gen_question_6" value="SI" checked>
              <label class="form-check-label" for="dat_gen_question_6">
                SI
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="dat_gen_question_6" id="dat_gen_question_6" value="NO">
              <label class="form-check-label" for="dat_gen_question_6">
                NO
              </label>
            </div>

            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">DISPONIBILIDAD DE CAMBIAR DE RECIDENCIA?</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4">FECHA EN QUE PODRIA PRESENTARSE A TRABAJAR</label>
            </div>
            <div class="form-group btn-info col-md-4">
              <label for="inputEmail4"></label>
            </div>
            <div class="form-group col-md-4">
              &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_7" id="dat_gen_question_7" value="SI" checked>
              <label class="form-check-label" for="dat_gen_question_7">
                SI
              </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="form-check-input" type="radio" name="dat_gen_question_7" id="dat_gen_question_7" value="NO">
              <label class="form-check-label" for="dat_gen_question_7">
                NO
              </label>
            </div>
            <div class="form-group col-md-2">
              <input type="text" placeholder="DD/MM/YYYY" class="form-control" id="dat_gen_question_8" name="dat_gen_question_8">
            </div>
            <div class="form-group col-md-6">
            </div>
          </div>
          <button type="button" onclick="fntInsertHome()" class="btn btn-outline-primary">. ENVIAR FORMULARIO .</button>
      </div>
      </form>
      </div>
    </section>
  </main><!-- End #main -->

  <footer id="footer">
    <div class="container">
      <h3>COLLECTO</h3>
      <p>SLOGAN.</p>

      <div class="copyright">
        &copy; Copyright <strong><span>SPI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Servicios Profesionales De Informatica</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <div id="loading-screen" style="display:none">
    <img src="admin/assets/img/spinning-circles.svg">
  </div>


  <style>
   

    #loading-screen {
      background-color: rgba(36, 113, 163, 0.2);
      height: 100%;
      width: 100%;
      position: fixed;
      z-index: 9999;
      margin-top: 0;
      top: 0;
      text-align: center;
    }

    #loading-screen img {
      width: 200px;
      height: 200px;
      position: relative;
      margin-top: -50px;
      margin-left: -50px;
      top: 50%;
    }
    
  </style>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Font Osome -->
  <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

  <!-- ALERTS MODAL JS -->
  <script src="lib/alertify/alertify.js"></script>
  <script src="lib/alertify/alertify.min.js"></script>
  <!-- SEC  JS -->
  <!-- UPLOAD -->
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>


</body>

</html>