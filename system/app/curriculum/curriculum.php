<?php

session_start();

//if (isset($_SESSION['tiempo'])) {
//    $inactivo = 10*60;
//    $vida_session = time() - $_SESSION['tiempo'];
//
//    if ($vida_session > $inactivo) {
//        session_unset();
//        session_destroy();
//        header("Location:../../index.php");
//        exit();
//    }
//}
//$_SESSION['tiempo'] = time();

if (!isset($_SESSION["USUARIO"])) {
    header("Location: ../../index.php");
    exit();
}
?>

<?php
    
    $logout = '../../interbase/logout.php';
    $windowHome = '../../home.php';
    $title = 'CURRICULUMS';

    require_once '../../interbase/conexion.php';

    require_once '../../api/curriculum/amdCurriculumAJAX.php';

    require_once '../dependenciasHead.php';
    
    require_once '../../api/admMenu.php';

    require_once '../../api/varrGlobal.php';

    require_once '../../api/curriculum/amdCurriculum.php';

    require_once '../../layout/navDesarrollo.php';

    //require_once '../../layout/menu.php';

    require_once '../../layout/curriculum/curriculumComponent.php';
    
    require_once '../dependenciasFooter.php';

?>
