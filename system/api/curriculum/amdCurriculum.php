<?php
if (isset($_GET["validaciones"]) && !empty($_GET["validaciones"])) {
    require_once '../../interbase/conexion.php';

    //VARIABLES DE POST

    $strTipoValidacion = isset($_REQUEST["validaciones"]) ? $_REQUEST["validaciones"] : '';

    if ($strTipoValidacion == "proces_update") {
        if ($estatus == 1) {
            header('Content-Type: application/json');
            $status = 1;
            $var_consulta = "UPDATE vus_usuarios_solicitud_registro SET vus_solreg_estatus_aut = '$fechaIng', vus_solreg_estatus = '1'WHERE vus_solreg_id = $userId ;";
            $val = 1;
            if (pg_query($rmfUser, $var_consulta)) {
                $arrInfo['status'] = $val;
            } else {
                $arrInfo['status'] = 0;
                $arrInfo['error'] = $var_consulta;
            }
            //print_r($var_consulta);
            print json_encode($arrInfo);

            die();
        }
    } else if ($strTipoValidacion == "table_cv") {
        $buscarnombre_ = isset($_POST["nombre_"]) ? $_POST["nombre_"]  : '' ;
        $buscarpuesto_ = isset($_POST["puesto_"]) ? $_POST["puesto_"]  : '' ;
        $buscarfecha_ = isset($_POST["fecha_"]) ? $_POST["fecha_"]  : '' ;
        $buscarSueldo_ = isset($_POST["Sueldo_"]) ? $_POST["Sueldo_"]  : '' ;

        $strFilterpuesto_ = "";
        if (!empty($buscarpuesto_)) {
            $strFilterpuesto_ = " AND ( UPPER(puesto_sol) = UPPER('$buscarpuesto_') ) ";
        }

        $strFilternombre_ = "";
        if (!empty($buscarnombre_)) {
            $strFilternombre_ = " AND ( UPPER(nombre_per) = UPPER('$buscarnombre_') ) ";
        }

        $strFilterfecha_ = "";
        if (!empty($buscarfecha_)) {
            $strFilterfecha_ = " AND ( UPPER(fecha_sol) = UPPER('$buscarfecha_') ) ";
        }

        $strFilterSueldo_ = "";
        if (!empty($buscarSueldo_)) {
            $strFilterSueldo_ = " AND ( UPPER(sueldo_mensual) = UPPER('$buscarSueldo_') ) ";
        }
        
        $arrCurriculum = array();
        $var_consulta = "SELECT * FROM soli_empleo WHERE status = 1 $strFilterpuesto_ $strFilternombre_ $strFilterfecha_ $strFilterSueldo_";
        //print_r($var_consulta);
        $qTMP = mysqli_query($link, $var_consulta);
        while ($rTMP = mysqli_fetch_assoc($qTMP)) {
            $arrCurriculum[$rTMP["id"]]["id"]             = $rTMP["id"];

            $arrCurriculum[$rTMP["id"]]["ape_pat"]             = $rTMP["ape_pat"];
            $arrCurriculum[$rTMP["id"]]["ape_mat"]             = $rTMP["ape_mat"];
            $arrCurriculum[$rTMP["id"]]["nombre_per"]             = $rTMP["nombre_per"];

            $arrCurriculum[$rTMP["id"]]["puesto_sol"]             = $rTMP["puesto_sol"];
            $arrCurriculum[$rTMP["id"]]["fecha_sol"]             = $rTMP["fecha_sol"];
            $arrCurriculum[$rTMP["id"]]["sueldo_mensual"]             = $rTMP["sueldo_mensual"];
        }
        mysqli_free_result($qTMP);

?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es">EXTENCION PDF</a></th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>
                    <th><a target="_blank" href="https://chrome.google.com/webstore/detail/full-page-screen-capture/fdpohaocaechififmbbbbbknoalclacl?hl=es"></a> </th>

                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Sueldo</th>
                    <th scope="col">Ver</th>
                    <th scope="col">PDF</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrCurriculum) && (count($arrCurriculum) > 0)) {
                    reset($arrCurriculum);
                    foreach ($arrCurriculum as $rTMP['key'] => $rTMP['value']) {

                        $id = isset($rTMP["value"]["id"]) ? $rTMP["value"]["id"]  : '';
                        $ape_pat = isset($rTMP["value"]["ape_pat"]) ? $rTMP["value"]["ape_pat"]  : '';
                        $ape_mat = isset($rTMP["value"]["ape_mat"]) ? $rTMP["value"]["ape_mat"]  : '';
                        $nombre_per = isset($rTMP["value"]["nombre_per"]) ? $rTMP["value"]["nombre_per"]  : '';
                        $puesto_sol = isset($rTMP["value"]["puesto_sol"]) ? $rTMP["value"]["puesto_sol"]  : '';
                        $fecha_sol = isset($rTMP["value"]["fecha_sol"]) ? $rTMP["value"]["fecha_sol"]  : '';
                        $sueldo_mensual = isset($rTMP["value"]["sueldo_mensual"]) ? $rTMP["value"]["sueldo_mensual"]  : '';
                ?>
                        <tr>
                            <th scope="row"><?php echo $id ?></th>
                            <td><?php echo $nombre_per ?></td>
                            <td><?php echo $ape_pat ?></td>
                            <td><?php echo $ape_mat ?></td>
                            <td><?php echo $puesto_sol ?></td>
                            <td><?php echo $fecha_sol ?></td>
                            <td><?php echo $sueldo_mensual ?></td>
                            <td><a href="view/view_cv.php?id=<?php echo $id ?>" target="_blank"><i class="fas fa-2x fa-file-alt"></i></a></td>
                            <td><a href="view/pdf_cv.php?id=<?php echo $id ?>" target="_blank"><i class="fas fa-2x fa-file-pdf"></i></a></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
<?php
        die();
    }

    die();
}

require_once '../../interbase/conexion.php';



?>