<?php
if (isset($_GET["validaciones"]) && !empty($_GET["validaciones"])) {
    require_once 'data/conexion.php';

    $puesto_sol = isset($_POST["puesto_sol"]) ? $_POST["puesto_sol"]  : '' ;
    $fecha_sol = isset($_POST["fecha_sol"]) ? $_POST["fecha_sol"]  : '00-00-0000' ;
    $sueldo_mensual = isset($_POST["sueldo_mensual"]) ? $_POST["sueldo_mensual"]  : '' ;
    $sueldo_anual = isset($_POST["sueldo_anual"]) ? $_POST["sueldo_anual"]  : '' ;
    $edu_pri_nom = isset($_POST["edu_pri_nom"]) ? $_POST["edu_pri_nom"]  : '' ;
    $edu_basic_nom = isset($_POST["edu_basic_nom"]) ? $_POST["edu_basic_nom"]  : '' ;
    $diver_nom = isset($_POST["diver_nom"]) ? $_POST["diver_nom"]  : '' ;
    $univer_nom = isset($_POST["univer_nom"]) ? $_POST["univer_nom"]  : '' ;
    $edu_comer_nom = isset($_POST["edu_comer_nom"]) ? $_POST["edu_comer_nom"]  : '' ;
    $edu_pri_ubi = isset($_POST["edu_pri_ubi"]) ? $_POST["edu_pri_ubi"]  : '' ;
    $edu_basic_ubi = isset($_POST["edu_basic_ubi"]) ? $_POST["edu_basic_ubi"]  : '' ;
    $diver_ubi = isset($_POST["diver_ubi"]) ? $_POST["diver_ubi"]  : '' ;
    $univer_ubi = isset($_POST["univer_ubi"]) ? $_POST["univer_ubi"]  : '' ;
    $edu_comer_ubi = isset($_POST["edu_comer_ubi"]) ? $_POST["edu_comer_ubi"]  : '' ;
    $edu_pri_date_de = isset($_POST["edu_pri_date_de"]) ? $_POST["edu_pri_date_de"]  : '' ;
    $edu_basic_date_de = isset($_POST["edu_basic_date_de"]) ? $_POST["edu_basic_date_de"]  : '' ;
    $diver_date_de = isset($_POST["diver_date_de"]) ? $_POST["diver_date_de"]  : '' ;
    $univer_date_de = isset($_POST["univer_date_de"]) ? $_POST["univer_date_de"]  : '' ;
    $edu_comer_date_de = isset($_POST["edu_comer_date_de"]) ? $_POST["edu_comer_date_de"]  : '' ;
    $edu_pri_date_hasta = isset($_POST["edu_pri_date_hasta"]) ? $_POST["edu_pri_date_hasta"]  : '' ;
    $edu_basic_date_hasta = isset($_POST["edu_basic_date_hasta"]) ? $_POST["edu_basic_date_hasta"]  : '' ;
    $diver_date_hasta = isset($_POST["diver_date_hasta"]) ? $_POST["diver_date_hasta"]  : '' ;
    $univer_date_hasta = isset($_POST["univer_date_hasta"]) ? $_POST["univer_date_hasta"]  : '' ;
    $edu_comer_date_hasta = isset($_POST["edu_comer_date_hasta"]) ? $_POST["edu_comer_date_hasta"]  : '' ;
    $edu_pri_a = isset($_POST["edu_pri_a"]) ? $_POST["edu_pri_a"]  : '' ;
    $edu_basic_a = isset($_POST["edu_basic_a"]) ? $_POST["edu_basic_a"]  : '' ;
    $diver_a = isset($_POST["diver_a"]) ? $_POST["diver_a"]  : '' ;
    $univer_a = isset($_POST["univer_a"]) ? $_POST["univer_a"]  : '' ;
    $edu_comer_a = isset($_POST["edu_comer_a"]) ? $_POST["edu_comer_a"]  : '' ;
    $edu_pri_titul = isset($_POST["edu_pri_titul"]) ? $_POST["edu_pri_titul"]  : '' ;
    $edu_basic_titul = isset($_POST["edu_basic_titul"]) ? $_POST["edu_basic_titul"]  : '' ;
    $diver_titul = isset($_POST["diver_titul"]) ? $_POST["diver_titul"]  : '' ;
    $univer_titul = isset($_POST["univer_titul"]) ? $_POST["univer_titul"]  : '' ;
    $edu_comer_titul = isset($_POST["edu_comer_titul"]) ? $_POST["edu_comer_titul"]  : '' ;
    $est_act_escuela = isset($_POST["est_act_escuela"]) ? $_POST["est_act_escuela"]  : '' ;
    $est_act_horario = isset($_POST["est_act_horario"]) ? $_POST["est_act_horario"]  : '' ;
    $est_act_curso = isset($_POST["est_act_curso"]) ? $_POST["est_act_curso"]  : '' ;
    $est_act_grado = isset($_POST["est_act_grado"]) ? $_POST["est_act_grado"]  : '' ;
    $idiomas = isset($_POST["idiomas"]) ? $_POST["idiomas"]  : '' ;
    $nivel_idioma = isset($_POST["nivel_idioma"]) ? $_POST["nivel_idioma"]  : '' ;
    $funcion_oficina_domin = isset($_POST["funcion_oficina_domin"]) ? $_POST["funcion_oficina_domin"]  : '' ;
    $uso_maquinas = isset($_POST["uso_maquinas"]) ? $_POST["uso_maquinas"]  : '' ;
    $software_domin = isset($_POST["software_domin"]) ? $_POST["software_domin"]  : '' ;
    $otr_funcion_domin = isset($_POST["otr_funcion_domin"]) ? $_POST["otr_funcion_domin"]  : '' ;
    $ape_pat = isset($_POST["ape_pat"]) ? $_POST["ape_pat"]  : '' ;
    $ape_mat = isset($_POST["ape_mat"]) ? $_POST["ape_mat"]  : '' ;
    $nombre_per = isset($_POST["nombre_per"]) ? $_POST["nombre_per"]  : '' ;
    $edad_per = isset($_POST["edad_per"]) ? $_POST["edad_per"]  : '' ;
    $sexo_per = isset($_POST["sexo_per"]) ? $_POST["sexo_per"]  : '' ;
    $domicilio_per = isset($_POST["domicilio_per"]) ? $_POST["domicilio_per"]  : '' ;
    $colonia_per = isset($_POST["colonia_per"]) ? $_POST["colonia_per"]  : '' ;
    $telefono_per = isset($_POST["telefono_per"]) ? $_POST["telefono_per"]  : '' ;
    $celular_per = isset($_POST["celular_per"]) ? $_POST["celular_per"]  : '' ;
    $vive_con = isset($_POST["vive_con"]) ? $_POST["vive_con"]  : '' ;
    $fecha_nac_per = isset($_POST["fecha_nac_per"]) ? $_POST["fecha_nac_per"]  : '' ;
    $estatura_per = isset($_POST["estatura_per"]) ? $_POST["estatura_per"]  : '' ;
    $peso_per = isset($_POST["peso_per"]) ? $_POST["peso_per"]  : '' ;
    $depende_de = isset($_POST["depende_de"]) ? $_POST["depende_de"]  : '' ;
    $estado_civil_per = isset($_POST["estado_civil_per"]) ? $_POST["estado_civil_per"]  : '' ;
    $cui_per = isset($_POST["comcui_perent"]) ? $_POST["cui_per"]  : '' ;
    $num_seg_social = isset($_POST["num_seg_social"]) ? $_POST["num_seg_social"]  : '' ;
    $nit_per = isset($_POST["nit_per"]) ? $_POST["nit_per"]  : '' ;
    $port_licencia = isset($_POST["port_licencia"]) ? $_POST["port_licencia"]  : '' ;
    $tipo_licencia = isset($_POST["tipo_licencia"]) ? $_POST["tipo_licencia"]  : '' ;
    $num_licencia = isset($_POST["num_licencia"]) ? $_POST["num_licencia"]  : '' ;
    $esta_solud_question_1 = isset($_POST["esta_solud_question_1"]) ? $_POST["esta_solud_question_1"]  : '' ;
    $esta_solud_question_2 = isset($_POST["esta_solud_question_2"]) ? $_POST["esta_solud_question_2"]  : '' ;
    $esta_solud_question_3 = isset($_POST["esta_solud_question_3"]) ? $_POST["esta_solud_question_3"]  : '' ;
    $esta_solud_question_4 = isset($_POST["esta_solud_question_4"]) ? $_POST["esta_solud_question_4"]  : '' ;
    $esta_solud_question_5 = isset($_POST["esta_solud_question_5"]) ? $_POST["esta_solud_question_5"]  : '' ;
    $esta_solud_question_6 = isset($_POST["esta_solud_question_6"]) ? $_POST["esta_solud_question_6"]  : '' ;
    $pat_nom = isset($_POST["pat_nom"]) ? $_POST["pat_nom"]  : '' ;
    $pat_vive = isset($_POST["pat_vive"]) ? $_POST["pat_vive"]  : '' ;
    $pat_finado = isset($_POST["pat_finado"]) ? $_POST["pat_finado"]  : '' ;
    $pat_domicilio = isset($_POST["pat_domicilio"]) ? $_POST["pat_domicilio"]  : '' ;
    $pat_ocupacion = isset($_POST["pat_ocupacion"]) ? $_POST["pat_ocupacion"]  : '' ;
    $mat_nom = isset($_POST["mat_nom"]) ? $_POST["mat_nom"]  : '' ;
    $mat_vive = isset($_POST["mat_vive"]) ? $_POST["mat_vive"]  : '' ;
    $mat_finado = isset($_POST["mat_finado"]) ? $_POST["mat_finado"]  : '' ;
    $mat_domicilio = isset($_POST["mat_domicilio"]) ? $_POST["mat_domicilio"]  : '' ;
    $mat_ocupacion = isset($_POST["mat_ocupacion"]) ? $_POST["mat_ocupacion"]  : '' ;
    $cony_nom = isset($_POST["cony_nom"]) ? $_POST["cony_nom"]  : '' ;
    $cony_vive = isset($_POST["cony_vive"]) ? $_POST["cony_vive"]  : '' ;
    $cony_finado = isset($_POST["cony_finado"]) ? $_POST["cony_finado"]  : '' ;
    $cony_domicilio = isset($_POST["cony_domicilio"]) ? $_POST["cony_domicilio"]  : '' ;
    $cony_ocupacion = isset($_POST["cony_ocupacion"]) ? $_POST["cony_ocupacion"]  : '' ;
    $fam_gen = isset($_POST["fam_gen"]) ? $_POST["fam_gen"]  : '' ;
    $emp_act_date_de = isset($_POST["emp_act_date_de"]) ? $_POST["emp_act_date_de"]  : '' ;
    $emp_act_date_hasta = isset($_POST["emp_act_date_hasta"]) ? $_POST["emp_act_date_hasta"]  : '' ;
    $emp_ant_1_date_de = isset($_POST["emp_ant_1_date_de"]) ? $_POST["emp_ant_1_date_de"]  : '' ;
    $emp_ant_1_date_hasta = isset($_POST["emp_ant_1_date_hasta"]) ? $_POST["emp_ant_1_date_hasta"]  : '' ;
    $emp_ant_2_date_de = isset($_POST["emp_ant_2_date_de"]) ? $_POST["emp_ant_2_date_de"]  : '' ;
    $emp_ant_2_date_hasta = isset($_POST["emp_ant_2_date_hasta"]) ? $_POST["emp_ant_2_date_hasta"]  : '' ;
    $emp_ant_3_date_de = isset($_POST["emp_ant_3_date_de"]) ? $_POST["emp_ant_3_date_de"]  : '' ;
    $emp_ant_3_date_hasta = isset($_POST["emp_ant_3_date_hasta"]) ? $_POST["emp_ant_3_date_hasta"]  : '' ;
    $emp_act_nomemp = isset($_POST["emp_act_nomemp"]) ? $_POST["emp_act_nomemp"]  : '' ;
    $emp_ant_1_nomemp = isset($_POST["emp_ant_1_nomemp"]) ? $_POST["emp_ant_1_nomemp"]  : '' ;
    $emp_ant_2_nomemp = isset($_POST["emp_ant_2_nomemp"]) ? $_POST["emp_ant_2_nomemp"]  : '' ;
    $emp_ant_3_nomemp = isset($_POST["emp_ant_3_nomemp"]) ? $_POST["emp_ant_3_nomemp"]  : '' ;
    $emp_act_dir = isset($_POST["emp_act_dir"]) ? $_POST["emp_act_dir"]  : '' ;
    $emp_ant_1_dir = isset($_POST["emp_ant_1_dir"]) ? $_POST["emp_ant_1_dir"]  : '' ;
    $emp_ant_2_dir = isset($_POST["emp_ant_2_dir"]) ? $_POST["emp_ant_2_dir"]  : '' ;
    $emp_ant_3_dir = isset($_POST["emp_ant_3_dir"]) ? $_POST["emp_ant_3_dir"]  : '' ;
    $emp_act_tel = isset($_POST["emp_act_tel"]) ? $_POST["emp_act_tel"]  : '' ;
    $emp_ant_1_tel = isset($_POST["emp_ant_1_tel"]) ? $_POST["emp_ant_1_tel"]  : '' ;
    $emp_ant_2_tel = isset($_POST["emp_ant_2_tel"]) ? $_POST["emp_ant_2_tel"]  : '' ;
    $emp_ant_3_tel = isset($_POST["emp_ant_3_tel"]) ? $_POST["emp_ant_3_tel"]  : '' ;
    $emp_act_puesto = isset($_POST["emp_act_puesto"]) ? $_POST["emp_act_puesto"]  : '' ;
    $emp_ant_1_puesto = isset($_POST["emp_ant_1_puesto"]) ? $_POST["emp_ant_1_puesto"]  : '' ;
    $emp_ant_2_puesto = isset($_POST["emp_ant_2_puesto"]) ? $_POST["emp_ant_2_puesto"]  : '' ;
    $emp_ant_3_puesto = isset($_POST["emp_ant_3_puesto"]) ? $_POST["emp_ant_3_puesto"]  : '' ;
    $emp_act_sueld_ini = isset($_POST["emp_act_sueld_ini"]) ? $_POST["emp_act_sueld_ini"]  : '' ;
    $emp_ant_1_sueld_ini = isset($_POST["emp_ant_1_sueld_ini"]) ? $_POST["emp_ant_1_sueld_ini"]  : '' ;
    $emp_ant_2_sueld_ini = isset($_POST["emp_ant_2_sueld_ini"]) ? $_POST["emp_ant_2_sueld_ini"]  : '' ;
    $emp_ant_3_sueld_ini = isset($_POST["emp_ant_3_sueld_ini"]) ? $_POST["emp_ant_3_sueld_ini"]  : '' ;
    $emp_act_sueld_fin = isset($_POST["emp_act_sueld_fin"]) ? $_POST["emp_act_sueld_fin"]  : '' ;
    $emp_ant_1_sueld_fin = isset($_POST["emp_ant_1_sueld_fin"]) ? $_POST["emp_ant_1_sueld_fin"]  : '' ;
    $emp_ant_2_sueld_fin = isset($_POST["emp_ant_2_sueld_fin"]) ? $_POST["emp_ant_2_sueld_fin"]  : '' ;
    $emp_ant_3_sueld_fin = isset($_POST["emp_ant_3_sueld_fin"]) ? $_POST["emp_ant_3_sueld_fin"]  : '' ;
    $emp_act_motivo_sup = isset($_POST["emp_act_motivo_sup"]) ? $_POST["emp_act_motivo_sup"]  : '' ;
    $emp_ant_1_motivo_sup = isset($_POST["emp_ant_1_motivo_sup"]) ? $_POST["emp_ant_1_motivo_sup"]  : '' ;
    $emp_ant_2_motivo_sup = isset($_POST["emp_ant_2_motivo_sup"]) ? $_POST["emp_ant_2_motivo_sup"]  : '' ;
    $emp_ant_3_motivo_sup = isset($_POST["emp_ant_3_motivo_sup"]) ? $_POST["emp_ant_3_motivo_sup"]  : '' ;
    $emp_act_jefe_nom = isset($_POST["emp_act_jefe_nom"]) ? $_POST["emp_act_jefe_nom"]  : '' ;
    $emp_ant_1_jefe_nom = isset($_POST["emp_ant_1_jefe_nom"]) ? $_POST["emp_ant_1_jefe_nom"]  : '' ;
    $emp_ant_2_jefe_nom = isset($_POST["emp_ant_2_jefe_nom"]) ? $_POST["emp_ant_2_jefe_nom"]  : '' ;
    $emp_ant_3_jefe_nom = isset($_POST["emp_ant_3_jefe_nom"]) ? $_POST["emp_ant_3_jefe_nom"]  : '' ;
    $emp_act_jefe_puesto = isset($_POST["emp_act_jefe_puesto"]) ? $_POST["emp_act_jefe_puesto"]  : '' ;
    $emp_ant_1_jefe_puesto = isset($_POST["emp_ant_1_jefe_puesto"]) ? $_POST["emp_ant_1_jefe_puesto"]  : '' ;
    $emp_ant_2_jefe_puesto = isset($_POST["emp_ant_2_jefe_puesto"]) ? $_POST["emp_ant_2_jefe_puesto"]  : '' ;
    $emp_ant_3_jefe_puesto = isset($_POST["emp_ant_3_jefe_puesto"]) ? $_POST["emp_ant_3_jefe_puesto"]  : '' ;
    $emp_act_info = isset($_POST["emp_act_info"]) ? $_POST["emp_act_info"]  : '' ;
    $emp_ant_1_info = isset($_POST["emp_ant_1_info"]) ? $_POST["emp_ant_1_info"]  : '' ;
    $emp_ant_2_info = isset($_POST["emp_ant_2_info"]) ? $_POST["emp_ant_2_info"]  : '' ;
    $emp_ant_3_info = isset($_POST["emp_ant_3_info"]) ? $_POST["emp_ant_3_info"]  : '' ;
    $ref_1_nom = isset($_POST["ref_1_nom"]) ? $_POST["ref_1_nom"]  : '' ;
    $ref_1_tel = isset($_POST["ref_1_tel"]) ? $_POST["ref_1_tel"]  : '' ;
    $ref_1_domicilio = isset($_POST["ref_1_domicilio"]) ? $_POST["ref_1_domicilio"]  : '' ;
    $ref_1_ocupacion = isset($_POST["ref_1_ocupacion"]) ? $_POST["ref_1_ocupacion"]  : '' ;
    $ref_1_tiempo = isset($_POST["ref_1_tiempo"]) ? $_POST["ref_1_tiempo"]  : '' ;
    $ref_2_nom = isset($_POST["ref_2_nom"]) ? $_POST["ref_2_nom"]  : '' ;
    $ref_2_tel = isset($_POST["ref_2_tel"]) ? $_POST["ref_2_tel"]  : '' ;
    $ref_2_domicilio = isset($_POST["ref_2_domicilio"]) ? $_POST["ref_2_domicilio"]  : '' ;
    $ref_2_ocupacion = isset($_POST["ref_2_ocupacion"]) ? $_POST["ref_2_ocupacion"]  : '' ;
    $ref_2_tiempo = isset($_POST["ref_2_tiempo"]) ? $_POST["ref_2_tiempo"]  : '' ;
    $ref_3_nom = isset($_POST["ref_3_nom"]) ? $_POST["ref_3_nom"]  : '' ;
    $ref_3_tel = isset($_POST["ref_3_tel"]) ? $_POST["ref_3_tel"]  : '' ;
    $ref_3_domicilio = isset($_POST["ref_3_domicilio"]) ? $_POST["ref_3_domicilio"]  : '' ;
    $ref_3_ocupacion = isset($_POST["ref_3_ocupacion"]) ? $_POST["ref_3_ocupacion"]  : '' ;
    $ref_3_tiempo = isset($_POST["ref_3_tiempo"]) ? $_POST["ref_3_tiempo"]  : '' ;
    $ref_4_nom = isset($_POST["ref_4_nom"]) ? $_POST["ref_4_nom"]  : '' ;
    $ref_4_tel = isset($_POST["ref_4_tel"]) ? $_POST["ref_4_tel"]  : '' ;
    $ref_4_domicilio = isset($_POST["ref_4_domicilio"]) ? $_POST["ref_4_domicilio"]  : '' ;
    $ref_4_ocupacion = isset($_POST["ref_4_ocupacion"]) ? $_POST["ref_4_ocupacion"]  : '' ;
    $ref_4_tiempo = isset($_POST["ref_4_tiempo"]) ? $_POST["ref_4_tiempo"]  : '' ;
    $dat_gen_question_1 = isset($_POST["dat_gen_question_1"]) ? $_POST["dat_gen_question_1"]  : '' ;
    $dat_gen_question_2 = isset($_POST["dat_gen_question_2"]) ? $_POST["dat_gen_question_2"]  : '' ;
    $dat_gen_question_3 = isset($_POST["dat_gen_question_3"]) ? $_POST["dat_gen_question_3"]  : '' ;
    $dat_gen_question_4 = isset($_POST["dat_gen_question_4"]) ? $_POST["dat_gen_question_4"]  : '' ;
    $dat_gen_question_5 = isset($_POST["dat_gen_question_5"]) ? $_POST["dat_gen_question_5"]  : '' ;
    $dat_gen_question_6 = isset($_POST["dat_gen_question_6"]) ? $_POST["dat_gen_question_6"]  : '' ;
    $dat_gen_question_7 = isset($_POST["dat_gen_question_7"]) ? $_POST["dat_gen_question_7"]  : '' ;
    $dat_gen_question_8 = isset($_POST["dat_gen_question_8"]) ? $_POST["dat_gen_question_8"]  : '' ;


    //$id = $_SESSION['adm_usr_id'];
    $fechaIng = date("Y-m-d");
    $strTipoValidacion = isset($_REQUEST["validaciones"]) ? $_REQUEST["validaciones"] : '';

    if ($strTipoValidacion == "insert_cv") {
        header('Content-Type: application/json');

        $var_consulta = "INSERT INTO soli_empleo (puesto_sol,fecha_sol,sueldo_mensual,sueldo_anual,edu_pri_nom,edu_basic_nom,diver_nom,univer_nom,edu_comer_nom,edu_pri_ubi,edu_basic_ubi,diver_ubi,univer_ubi,edu_comer_ubi,edu_pri_date_de,edu_basic_date_de,diver_date_de,univer_date_de,edu_comer_date_de,edu_pri_date_hasta,edu_basic_date_hasta,diver_date_hasta,univer_date_hasta,edu_comer_date_hasta,edu_pri_a,edu_basic_a,diver_a,univer_a,edu_comer_a,edu_pri_titul,edu_basic_titul,diver_titul,univer_titul,edu_comer_titul,est_act_escuela,est_act_horario,est_act_curso,est_act_grado,idiomas,nivel_idioma,funcion_oficina_domin,uso_maquinas,software_domin,otr_funcion_domin,ape_pat,ape_mat,nombre_per,edad_per,sexo_per,domicilio_per,colonia_per,telefono_per,celular_per,vive_con,fecha_nac_per,estatura_per,peso_per,depende_de,estado_civil_per,cui_per,num_seg_social,nit_per,port_licencia,tipo_licencia,num_licencia,esta_solud_question_1,esta_solud_question_2,esta_solud_question_3,esta_solud_question_4,esta_solud_question_5,esta_solud_question_6,pat_nom,pat_vive,pat_domicilio,pat_ocupacion,mat_nom,mat_vive,mat_domicilio,mat_ocupacion,cony_nom,cony_vive,cony_domicilio,cony_ocupacion,fam_gen,emp_act_date_de,emp_act_date_hasta,emp_ant_1_date_de,emp_ant_1_date_hasta,emp_ant_2_date_de,emp_ant_2_date_hasta,emp_ant_3_date_de,emp_ant_3_date_hasta,emp_act_nomemp,emp_ant_1_nomemp,emp_ant_2_nomemp,emp_ant_3_nomemp,emp_act_dir,emp_ant_1_dir,emp_ant_2_dir,emp_ant_3_dir,emp_act_tel,emp_ant_1_tel,emp_ant_2_tel,emp_ant_3_tel,emp_act_puesto,emp_ant_1_puesto,emp_ant_2_puesto,emp_ant_3_puesto,emp_act_sueld_ini,emp_ant_1_sueld_ini,emp_ant_2_sueld_ini,emp_ant_3_sueld_ini,emp_act_sueld_fin,emp_ant_1_sueld_fin,emp_ant_2_sueld_fin,emp_ant_3_sueld_fin,emp_act_motivo_sup,emp_ant_1_motivo_sup,emp_ant_2_motivo_sup,emp_ant_3_motivo_sup,emp_act_jefe_nom,emp_ant_1_jefe_nom,emp_ant_2_jefe_nom,emp_ant_3_jefe_nom,emp_act_jefe_puesto,emp_ant_1_jefe_puesto,emp_ant_2_jefe_puesto,emp_ant_3_jefe_puesto,emp_act_info,emp_ant_1_info,emp_ant_2_info,emp_ant_3_info,ref_1_nom,ref_1_tel,ref_1_domicilio,ref_1_ocupacion,ref_1_tiempo,ref_2_nom,ref_2_tel,ref_2_domicilio,ref_2_ocupacion,ref_2_tiempo,ref_3_nom,ref_3_tel,ref_3_domicilio,ref_3_ocupacion,ref_3_tiempo,ref_4_nom,ref_4_tel,ref_4_domicilio,ref_4_ocupacion,ref_4_tiempo,dat_gen_question_1,dat_gen_question_2,dat_gen_question_3,dat_gen_question_4,dat_gen_question_5,dat_gen_question_6,dat_gen_question_7,dat_gen_question_8) VALUES ('$puesto_sol','$fecha_sol','$sueldo_mensual','$sueldo_anual','$edu_pri_nom','$edu_basic_nom','$diver_nom','$univer_nom','$edu_comer_nom','$edu_pri_ubi','$edu_basic_ubi','$diver_ubi','$univer_ubi','$edu_comer_ubi','$edu_pri_date_de','$edu_basic_date_de','$diver_date_de','$univer_date_de','$edu_comer_date_de','$edu_pri_date_hasta','$edu_basic_date_hasta','$diver_date_hasta','$univer_date_hasta','$edu_comer_date_hasta','$edu_pri_a','$edu_basic_a','$diver_a','$univer_a','$edu_comer_a','$edu_pri_titul','$edu_basic_titul','$diver_titul','$univer_titul','$edu_comer_titul','$est_act_escuela','$est_act_horario','$est_act_curso','$est_act_grado','$idiomas','$nivel_idioma','$funcion_oficina_domin','$uso_maquinas','$software_domin','$otr_funcion_domin','$ape_pat','$ape_mat','$nombre_per','$edad_per','$sexo_per','$domicilio_per','$colonia_per','$telefono_per','$celular_per','$vive_con','$fecha_nac_per','$estatura_per','$peso_per','$depende_de','$estado_civil_per','$cui_per','$num_seg_social','$nit_per','$port_licencia','$tipo_licencia','$num_licencia','$esta_solud_question_1','$esta_solud_question_2','$esta_solud_question_3','$esta_solud_question_4','$esta_solud_question_5','$esta_solud_question_6','$pat_nom','$pat_vive','$pat_domicilio','$pat_ocupacion','$mat_nom','$mat_vive','$mat_domicilio','$mat_ocupacion','$cony_nom','$cony_vive','$cony_domicilio','$cony_ocupacion','$fam_gen','$emp_act_date_de','$emp_act_date_hasta','$emp_ant_1_date_de','$emp_ant_1_date_hasta','$emp_ant_2_date_de','$emp_ant_2_date_hasta','$emp_ant_3_date_de','$emp_ant_3_date_hasta','$emp_act_nomemp','$emp_ant_1_nomemp','$emp_ant_2_nomemp','$emp_ant_3_nomemp','$emp_act_dir','$emp_ant_1_dir','$emp_ant_2_dir','$emp_ant_3_dir','$emp_act_tel','$emp_ant_1_tel','$emp_ant_2_tel','$emp_ant_3_tel','$emp_act_puesto','$emp_ant_1_puesto','$emp_ant_2_puesto','$emp_ant_3_puesto','$emp_act_sueld_ini','$emp_ant_1_sueld_ini','$emp_ant_2_sueld_ini','$emp_ant_3_sueld_ini','$emp_act_sueld_fin','$emp_ant_1_sueld_fin','$emp_ant_2_sueld_fin','$emp_ant_3_sueld_fin','$emp_act_motivo_sup','$emp_ant_1_motivo_sup','$emp_ant_2_motivo_sup','$emp_ant_3_motivo_sup','$emp_act_jefe_nom','$emp_ant_1_jefe_nom','$emp_ant_2_jefe_nom','$emp_ant_3_jefe_nom','$emp_act_jefe_puesto','$emp_ant_1_jefe_puesto','$emp_ant_2_jefe_puesto','$emp_ant_3_jefe_puesto','$emp_act_info','$emp_ant_1_info','$emp_ant_2_info','$emp_ant_3_info','$ref_1_nom','$ref_1_tel','$ref_1_domicilio','$ref_1_ocupacion','$ref_1_tiempo','$ref_2_nom','$ref_2_tel','$ref_2_domicilio','$ref_2_ocupacion','$ref_2_tiempo','$ref_3_nom','$ref_3_tel','$ref_3_domicilio','$ref_3_ocupacion','$ref_3_tiempo','$ref_4_nom','$ref_4_tel','$ref_4_domicilio','$ref_4_ocupacion','$ref_4_tiempo','$dat_gen_question_1','$dat_gen_question_2','$dat_gen_question_3','$dat_gen_question_4','$dat_gen_question_5','$dat_gen_question_6','$dat_gen_question_7','$dat_gen_question_8');";
        $val = 1;
        if (mysqli_query($link, $var_consulta)) {
            $arrInfo['status'] = $val;
        } else {
            $arrInfo['status'] = 0;
            $arrInfo['error'] = $var_consulta;
        }
        //print_r($var_consulta);

        print json_encode($arrInfo);
        die();
    }

    die();
}


//////////////////// HOME //////////////////////////////////////////

$arrHome = array();
$var_consulta = "SELECT * FROM home";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrHome[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrHome[$rTMP["id"]]["title"] = $rTMP["title"];
    $arrHome[$rTMP["id"]]["content"] = $rTMP["content"];
    $arrHome[$rTMP["id"]]["img"] = $rTMP["img"];
    $arrHome[$rTMP["id"]]["coment"] = $rTMP["coment"];
}
mysqli_free_result($qTMP);




//////////////////// END HOME //////////////////////////////////////////
//////////////////// ABOUT //////////////////////////////////////////

$arrAbout = array();
$var_consulta = "SELECT * FROM about LIMIT 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrAbout[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrAbout[$rTMP["id"]]["inf_general"] = $rTMP["inf_general"];
    $arrAbout[$rTMP["id"]]["img_mision"] = $rTMP["img_mision"];
    $arrAbout[$rTMP["id"]]["ico_mision"] = $rTMP["ico_mision"];
    $arrAbout[$rTMP["id"]]["title_mision"] = $rTMP["title_mision"];
    $arrAbout[$rTMP["id"]]["content_mision"] = $rTMP["content_mision"];
    $arrAbout[$rTMP["id"]]["img_plan"] = $rTMP["img_plan"];
    $arrAbout[$rTMP["id"]]["ico_plan"] = $rTMP["ico_plan"];
    $arrAbout[$rTMP["id"]]["title_plan"] = $rTMP["title_plan"];
    $arrAbout[$rTMP["id"]]["content_plan"] = $rTMP["content_plan"];
    $arrAbout[$rTMP["id"]]["img_vision"] = $rTMP["img_vision"];
    $arrAbout[$rTMP["id"]]["ico_vision"] = $rTMP["ico_vision"];
    $arrAbout[$rTMP["id"]]["title_vision"] = $rTMP["title_vision"];
    $arrAbout[$rTMP["id"]]["content_vision"] = $rTMP["content_vision"];
}
mysqli_free_result($qTMP);

if (is_array($arrAbout) && (count($arrAbout) > 0)) {
    reset($arrAbout);
    foreach ($arrAbout as $rTMP['key'] => $rTMP['value']) {

        $id = $rTMP["value"]['id'];
        $inf_general = $rTMP["value"]['inf_general'];
        $img_mision = $rTMP["value"]['img_mision'];
        $ico_mision = $rTMP["value"]['ico_mision'];
        $title_mision = $rTMP["value"]['title_mision'];
        $content_mision = $rTMP["value"]['content_mision'];
        $img_plan = $rTMP["value"]['img_plan'];
        $ico_plan = $rTMP["value"]['ico_plan'];
        $title_plan = $rTMP["value"]['title_plan'];
        $content_plan = $rTMP["value"]['content_plan'];
        $img_vision = $rTMP["value"]['img_vision'];
        $ico_vision = $rTMP["value"]['ico_vision'];
        $title_vision = $rTMP["value"]['title_vision'];
        $content_vision = $rTMP["value"]['content_vision'];
    }
}



//////////////////// END ABOUT //////////////////////////////////////////
//////////////////// SERVICE //////////////////////////////////////////
$arrServiceCont = array();
$var_consulta = "SELECT * FROM services WHERE status_text = 1 LIMIT 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrServiceCont[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrServiceCont[$rTMP["id"]]["content_gen"] = $rTMP["content_gen"];
}
mysqli_free_result($qTMP);

if (is_array($arrServiceCont) && (count($arrServiceCont) > 0)) {
    reset($arrServiceCont);
    foreach ($arrServiceCont as $rTMP['key'] => $rTMP['value']) {
        $content_gen = $rTMP["value"]['content_gen'];
    }
}

$arrService = array();
$var_consulta = "SELECT * FROM services WHERE status_text = 2";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrService[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrService[$rTMP["id"]]["titulo"] = $rTMP["titulo"];
    $arrService[$rTMP["id"]]["ico"] = $rTMP["ico"];
    $arrService[$rTMP["id"]]["content"] = $rTMP["content"];
}
mysqli_free_result($qTMP);

//////////////////// END ABOUT //////////////////////////////////////////
//////////////////// HEADER INFO //////////////////////////////////////////
$arrHeader = array();
$var_consulta = "SELECT * FROM header_info LIMIT 1";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrHeader[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrHeader[$rTMP["id"]]["title"] = $rTMP["title"];
    $arrHeader[$rTMP["id"]]["content"] = $rTMP["content"];
    $arrHeader[$rTMP["id"]]["boton"] = $rTMP["boton"];
    $arrHeader[$rTMP["id"]]["url"] = $rTMP["url"];
}
mysqli_free_result($qTMP);

if (is_array($arrHeader) && (count($arrHeader) > 0)) {
    reset($arrHeader);
    foreach ($arrHeader as $rTMP['key'] => $rTMP['value']) {
        $title = $rTMP["value"]['title'];
        $content = $rTMP["value"]['content'];
        $boton = $rTMP["value"]['boton'];
        $url = $rTMP["value"]['url'];
    }
}
//////////////////// END HEADER INFO //////////////////////////////////////////
//////////////////// MENU PORFOLIO //////////////////////////////////////////
$arrMenuPorfolio = array();
$var_consulta = "SELECT * FROM nav_porfolio_class";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrMenuPorfolio[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrMenuPorfolio[$rTMP["id"]]["title"] = $rTMP["title"];
    $arrMenuPorfolio[$rTMP["id"]]["clase"] = $rTMP["clase"];
    $arrMenuPorfolio[$rTMP["id"]]["abreviatura"] = $rTMP["abreviatura"];
}
mysqli_free_result($qTMP);

//////////////////// END MENU PORFOLIO //////////////////////////////////////////
////////////////////  PORFOLIO //////////////////////////////////////////
$arrPorfolio = array();
$var_consulta = "SELECT * FROM porfolio";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrPorfolio[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrPorfolio[$rTMP["id"]]["tittle"] = $rTMP["tittle"];
    $arrPorfolio[$rTMP["id"]]["content"] = $rTMP["content"];
    $arrPorfolio[$rTMP["id"]]["img"] = $rTMP["img"];
    $arrPorfolio[$rTMP["id"]]["url"] = $rTMP["url"];
    $arrPorfolio[$rTMP["id"]]["coment"] = $rTMP["coment"];
    $arrPorfolio[$rTMP["id"]]["abreviatura"] = $rTMP["abreviatura"];
}
mysqli_free_result($qTMP);

//////////////////// END PORFOLIO //////////////////////////////////////////
//////////////////// MENU WORK //////////////////////////////////////////
$arrMenuWork = array();
$var_consulta = "SELECT * FROM info_work";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrMenuWork[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrMenuWork[$rTMP["id"]]["parametro"] = $rTMP["parametro"];
}
mysqli_free_result($qTMP);

//////////////////// END MENU WORK //////////////////////////////////////////
//////////////////// MENU CURRICULUM //////////////////////////////////////////
$arrMenuCv = array();
$var_consulta = "SELECT * FROM info_cv";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrMenuCv[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrMenuCv[$rTMP["id"]]["parametro"] = $rTMP["parametro"];
}
mysqli_free_result($qTMP);

//////////////////// END MENU CURRICULUM //////////////////////////////////////////
////////////////////QUESTION //////////////////////////////////////////
$arrQuest = array();
$var_consulta = "SELECT * FROM question";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrQuest[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrQuest[$rTMP["id"]]["question"] = $rTMP["question"];
    $arrQuest[$rTMP["id"]]["answer"] = $rTMP["answer"];
}
mysqli_free_result($qTMP);

//////////////////// END QUESTION //////////////////////////////////////////
////////////////////  CLIENTS //////////////////////////////////////////
$arrClients = array();
$var_consulta = "SELECT * FROM clients ";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrClients[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrClients[$rTMP["id"]]["coment"] = $rTMP["coment"];
    $arrClients[$rTMP["id"]]["url"] = $rTMP["url"];
    $arrClients[$rTMP["id"]]["img"] = $rTMP["img"];
}
mysqli_free_result($qTMP);

//////////////////// END CLIENTS //////////////////////////////////////////
////////////////////  TEAM //////////////////////////////////////////
$arrTeam = array();
$var_consulta = "SELECT * FROM team ";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrTeam[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrTeam[$rTMP["id"]]["title"] = $rTMP["title"];
    $arrTeam[$rTMP["id"]]["twitter"] = $rTMP["twitter"];
    $arrTeam[$rTMP["id"]]["facebook"] = $rTMP["facebook"];
    $arrTeam[$rTMP["id"]]["google"] = $rTMP["google"];
    $arrTeam[$rTMP["id"]]["link"] = $rTMP["link"];
    $arrTeam[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
    $arrTeam[$rTMP["id"]]["img"] = $rTMP["img"];
}
mysqli_free_result($qTMP);

//////////////////// END TEAM //////////////////////////////////////////
////////////////////  CONTACT //////////////////////////////////////////
$arrContact = array();
$var_consulta = "SELECT * FROM contact ";

//$var_resultado = $conexion->query($var_consulta);
$qTMP = mysqli_query($link, $var_consulta);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrContact[$rTMP["id"]]["id"] = $rTMP["id"];
    $arrContact[$rTMP["id"]]["descrip"] = $rTMP["descrip"];
    $arrContact[$rTMP["id"]]["dress"] = $rTMP["dress"];
    $arrContact[$rTMP["id"]]["ubi"] = $rTMP["ubi"];
    $arrContact[$rTMP["id"]]["telefono"] = $rTMP["telefono"];
    $arrContact[$rTMP["id"]]["mail"] = $rTMP["mail"];
}
mysqli_free_result($qTMP);

if (is_array($arrContact) && (count($arrContact) > 0)) {
    reset($arrContact);
    foreach ($arrContact as $rTMP['key'] => $rTMP['value']) {
        $descrip = $rTMP["value"]['descrip'];
        $dress = $rTMP["value"]['dress'];
        $ubi = $rTMP["value"]['ubi'];
        $telefono = $rTMP["value"]['telefono'];
        $mail = $rTMP["value"]['mail'];
    }
}

//////////////////// END CONTACT //////////////////////////////////////////
