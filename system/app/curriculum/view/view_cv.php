<?php

require_once '../../../../data/conexion.php';
$id = $_GET['id'];
$arrCurriculum = array();
$stmt = "SELECT *  FROM soli_empleo WHERE id = $id";
//print_r($stmt);

$qTMP = mysqli_query($link, $stmt);
while ($rTMP = mysqli_fetch_assoc($qTMP)) {
    $arrCurriculum[$rTMP["id"]]["id"]             = $rTMP["id"];
    $arrCurriculum[$rTMP["id"]]["puesto_sol"]             = $rTMP["puesto_sol"];
    $arrCurriculum[$rTMP["id"]]["fecha_sol"]             = $rTMP["fecha_sol"];
    $arrCurriculum[$rTMP["id"]]["sueldo_mensual"]             = $rTMP["sueldo_mensual"];
    $arrCurriculum[$rTMP["id"]]["sueldo_anual"]             = $rTMP["sueldo_anual"];
    $arrCurriculum[$rTMP["id"]]["edu_pri_nom"]             = $rTMP["edu_pri_nom"];
    $arrCurriculum[$rTMP["id"]]["edu_basic_nom"]             = $rTMP["edu_basic_nom"];
    $arrCurriculum[$rTMP["id"]]["diver_nom"]             = $rTMP["diver_nom"];
    $arrCurriculum[$rTMP["id"]]["univer_nom"]             = $rTMP["univer_nom"];
    $arrCurriculum[$rTMP["id"]]["edu_comer_nom"]             = $rTMP["edu_comer_nom"];
    $arrCurriculum[$rTMP["id"]]["edu_pri_ubi"]             = $rTMP["edu_pri_ubi"];
    $arrCurriculum[$rTMP["id"]]["edu_basic_ubi"]             = $rTMP["edu_basic_ubi"];
    $arrCurriculum[$rTMP["id"]]["diver_ubi"]             = $rTMP["diver_ubi"];
    $arrCurriculum[$rTMP["id"]]["univer_ubi"]             = $rTMP["univer_ubi"];
    $arrCurriculum[$rTMP["id"]]["edu_comer_ubi"]             = $rTMP["edu_comer_ubi"];
    $arrCurriculum[$rTMP["id"]]["edu_pri_date_de"]             = $rTMP["edu_pri_date_de"];
    $arrCurriculum[$rTMP["id"]]["edu_basic_date_de"]             = $rTMP["edu_basic_date_de"];
    $arrCurriculum[$rTMP["id"]]["diver_date_de"]             = $rTMP["diver_date_de"];
    $arrCurriculum[$rTMP["id"]]["univer_date_de"]             = $rTMP["univer_date_de"];
    $arrCurriculum[$rTMP["id"]]["edu_comer_date_de"]             = $rTMP["edu_comer_date_de"];
    $arrCurriculum[$rTMP["id"]]["edu_pri_date_hasta"]             = $rTMP["edu_pri_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["edu_basic_date_hasta"]             = $rTMP["edu_basic_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["diver_date_hasta"]             = $rTMP["diver_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["univer_date_hasta"]             = $rTMP["univer_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["edu_comer_date_hasta"]             = $rTMP["edu_comer_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["edu_pri_a"]             = $rTMP["edu_pri_a"];
    $arrCurriculum[$rTMP["id"]]["edu_basic_a"]             = $rTMP["edu_basic_a"];
    $arrCurriculum[$rTMP["id"]]["diver_a"]             = $rTMP["diver_a"];
    $arrCurriculum[$rTMP["id"]]["univer_a"]             = $rTMP["univer_a"];
    $arrCurriculum[$rTMP["id"]]["edu_comer_a"]             = $rTMP["edu_comer_a"];
    $arrCurriculum[$rTMP["id"]]["edu_pri_titul"]             = $rTMP["edu_pri_titul"];
    $arrCurriculum[$rTMP["id"]]["edu_basic_titul"]             = $rTMP["edu_basic_titul"];
    $arrCurriculum[$rTMP["id"]]["diver_titul"]             = $rTMP["diver_titul"];
    $arrCurriculum[$rTMP["id"]]["univer_titul"]             = $rTMP["univer_titul"];
    $arrCurriculum[$rTMP["id"]]["edu_comer_titul"]             = $rTMP["edu_comer_titul"];
    $arrCurriculum[$rTMP["id"]]["est_act_escuela"]             = $rTMP["est_act_escuela"];
    $arrCurriculum[$rTMP["id"]]["est_act_horario"]             = $rTMP["est_act_horario"];
    $arrCurriculum[$rTMP["id"]]["est_act_curso"]             = $rTMP["est_act_curso"];
    $arrCurriculum[$rTMP["id"]]["est_act_grado"]             = $rTMP["est_act_grado"];
    $arrCurriculum[$rTMP["id"]]["idiomas"]             = $rTMP["idiomas"];
    $arrCurriculum[$rTMP["id"]]["nivel_idioma"]             = $rTMP["nivel_idioma"];
    $arrCurriculum[$rTMP["id"]]["funcion_oficina_domin"]             = $rTMP["funcion_oficina_domin"];
    $arrCurriculum[$rTMP["id"]]["uso_maquinas"]             = $rTMP["uso_maquinas"];
    $arrCurriculum[$rTMP["id"]]["software_domin"]             = $rTMP["software_domin"];
    $arrCurriculum[$rTMP["id"]]["otr_funcion_domin"]             = $rTMP["otr_funcion_domin"];
    $arrCurriculum[$rTMP["id"]]["ape_pat"]             = $rTMP["ape_pat"];
    $arrCurriculum[$rTMP["id"]]["ape_mat"]             = $rTMP["ape_mat"];
    $arrCurriculum[$rTMP["id"]]["nombre_per"]             = $rTMP["nombre_per"];
    $arrCurriculum[$rTMP["id"]]["edad_per"]             = $rTMP["edad_per"];
    $arrCurriculum[$rTMP["id"]]["sexo_per"]             = $rTMP["sexo_per"];
    $arrCurriculum[$rTMP["id"]]["domicilio_per"]             = $rTMP["domicilio_per"];
    $arrCurriculum[$rTMP["id"]]["colonia_per"]             = $rTMP["colonia_per"];
    $arrCurriculum[$rTMP["id"]]["telefono_per"]             = $rTMP["telefono_per"];
    $arrCurriculum[$rTMP["id"]]["celular_per"]             = $rTMP["celular_per"];
    $arrCurriculum[$rTMP["id"]]["vive_con"]             = $rTMP["vive_con"];
    $arrCurriculum[$rTMP["id"]]["fecha_nac_per"]             = $rTMP["fecha_nac_per"];
    $arrCurriculum[$rTMP["id"]]["estatura_per"]             = $rTMP["estatura_per"];
    $arrCurriculum[$rTMP["id"]]["peso_per"]             = $rTMP["peso_per"];
    $arrCurriculum[$rTMP["id"]]["depende_de"]             = $rTMP["depende_de"];
    $arrCurriculum[$rTMP["id"]]["estado_civil_per"]             = $rTMP["estado_civil_per"];
    $arrCurriculum[$rTMP["id"]]["cui_per"]             = $rTMP["cui_per"];
    $arrCurriculum[$rTMP["id"]]["num_seg_social"]             = $rTMP["num_seg_social"];
    $arrCurriculum[$rTMP["id"]]["nit_per"]             = $rTMP["nit_per"];
    $arrCurriculum[$rTMP["id"]]["port_licencia"]             = $rTMP["port_licencia"];
    $arrCurriculum[$rTMP["id"]]["tipo_licencia"]             = $rTMP["tipo_licencia"];
    $arrCurriculum[$rTMP["id"]]["num_licencia"]             = $rTMP["num_licencia"];
    $arrCurriculum[$rTMP["id"]]["esta_solud_question_1"]             = $rTMP["esta_solud_question_1"];
    $arrCurriculum[$rTMP["id"]]["esta_solud_question_2"]             = $rTMP["esta_solud_question_2"];
    $arrCurriculum[$rTMP["id"]]["esta_solud_question_3"]             = $rTMP["esta_solud_question_3"];
    $arrCurriculum[$rTMP["id"]]["esta_solud_question_4"]             = $rTMP["esta_solud_question_4"];
    $arrCurriculum[$rTMP["id"]]["esta_solud_question_5"]             = $rTMP["esta_solud_question_5"];
    $arrCurriculum[$rTMP["id"]]["esta_solud_question_6"]             = $rTMP["esta_solud_question_6"];
    $arrCurriculum[$rTMP["id"]]["pat_nom"]             = $rTMP["pat_nom"];
    $arrCurriculum[$rTMP["id"]]["pat_vive"]             = $rTMP["pat_vive"];
    $arrCurriculum[$rTMP["id"]]["pat_finado"]             = $rTMP["pat_finado"];
    $arrCurriculum[$rTMP["id"]]["pat_domicilio"]             = $rTMP["pat_domicilio"];
    $arrCurriculum[$rTMP["id"]]["pat_ocupacion"]             = $rTMP["pat_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["mat_nom"]             = $rTMP["mat_nom"];
    $arrCurriculum[$rTMP["id"]]["mat_vive"]             = $rTMP["mat_vive"];
    $arrCurriculum[$rTMP["id"]]["mat_finado"]             = $rTMP["mat_finado"];
    $arrCurriculum[$rTMP["id"]]["mat_domicilio"]             = $rTMP["mat_domicilio"];
    $arrCurriculum[$rTMP["id"]]["mat_ocupacion"]             = $rTMP["mat_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["cony_nom"]             = $rTMP["cony_nom"];
    $arrCurriculum[$rTMP["id"]]["cony_vive"]             = $rTMP["cony_vive"];
    $arrCurriculum[$rTMP["id"]]["cony_finado"]             = $rTMP["cony_finado"];
    $arrCurriculum[$rTMP["id"]]["cony_domicilio"]             = $rTMP["cony_domicilio"];
    $arrCurriculum[$rTMP["id"]]["cony_ocupacion"]             = $rTMP["cony_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["fam_gen"]             = $rTMP["fam_gen"];
    $arrCurriculum[$rTMP["id"]]["emp_act_date_de"]             = $rTMP["emp_act_date_de"];
    $arrCurriculum[$rTMP["id"]]["emp_act_date_hasta"]             = $rTMP["emp_act_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_date_de"]             = $rTMP["emp_ant_1_date_de"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_date_hasta"]             = $rTMP["emp_ant_1_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_date_de"]             = $rTMP["emp_ant_2_date_de"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_date_hasta"]             = $rTMP["emp_ant_2_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_date_de"]             = $rTMP["emp_ant_3_date_de"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_date_hasta"]             = $rTMP["emp_ant_3_date_hasta"];
    $arrCurriculum[$rTMP["id"]]["emp_act_nomemp"]             = $rTMP["emp_act_nomemp"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_nomemp"]             = $rTMP["emp_ant_1_nomemp"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_nomemp"]             = $rTMP["emp_ant_2_nomemp"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_nomemp"]             = $rTMP["emp_ant_3_nomemp"];
    $arrCurriculum[$rTMP["id"]]["emp_act_dir"]             = $rTMP["emp_act_dir"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_dir"]             = $rTMP["emp_ant_1_dir"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_dir"]             = $rTMP["emp_ant_2_dir"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_dir"]             = $rTMP["emp_ant_3_dir"];
    $arrCurriculum[$rTMP["id"]]["emp_act_tel"]             = $rTMP["emp_act_tel"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_tel"]             = $rTMP["emp_ant_1_tel"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_tel"]             = $rTMP["emp_ant_2_tel"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_tel"]             = $rTMP["emp_ant_3_tel"];
    $arrCurriculum[$rTMP["id"]]["emp_act_puesto"]             = $rTMP["emp_act_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_puesto"]             = $rTMP["emp_ant_1_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_puesto"]             = $rTMP["emp_ant_2_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_puesto"]             = $rTMP["emp_ant_3_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_act_sueld_ini"]             = $rTMP["emp_act_sueld_ini"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_sueld_ini"]             = $rTMP["emp_ant_1_sueld_ini"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_sueld_ini"]             = $rTMP["emp_ant_2_sueld_ini"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_sueld_ini"]             = $rTMP["emp_ant_3_sueld_ini"];
    $arrCurriculum[$rTMP["id"]]["emp_act_sueld_fin"]             = $rTMP["emp_act_sueld_fin"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_sueld_fin"]             = $rTMP["emp_ant_1_sueld_fin"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_sueld_fin"]             = $rTMP["emp_ant_2_sueld_fin"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_sueld_fin"]             = $rTMP["emp_ant_3_sueld_fin"];
    $arrCurriculum[$rTMP["id"]]["emp_act_motivo_sup"]             = $rTMP["emp_act_motivo_sup"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_motivo_sup"]             = $rTMP["emp_ant_1_motivo_sup"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_motivo_sup"]             = $rTMP["emp_ant_2_motivo_sup"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_motivo_sup"]             = $rTMP["emp_ant_3_motivo_sup"];
    $arrCurriculum[$rTMP["id"]]["emp_act_jefe_nom"]             = $rTMP["emp_act_jefe_nom"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_jefe_nom"]             = $rTMP["emp_ant_1_jefe_nom"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_jefe_nom"]             = $rTMP["emp_ant_2_jefe_nom"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_jefe_nom"]             = $rTMP["emp_ant_3_jefe_nom"];
    $arrCurriculum[$rTMP["id"]]["emp_act_jefe_puesto"]             = $rTMP["emp_act_jefe_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_jefe_puesto"]             = $rTMP["emp_ant_1_jefe_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_jefe_puesto"]             = $rTMP["emp_ant_2_jefe_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_jefe_puesto"]             = $rTMP["emp_ant_3_jefe_puesto"];
    $arrCurriculum[$rTMP["id"]]["emp_act_info"]             = $rTMP["emp_act_info"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_1_info"]             = $rTMP["emp_ant_1_info"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_2_info"]             = $rTMP["emp_ant_2_info"];
    $arrCurriculum[$rTMP["id"]]["emp_ant_3_info"]             = $rTMP["emp_ant_3_info"];
    $arrCurriculum[$rTMP["id"]]["ref_1_nom"]             = $rTMP["ref_1_nom"];
    $arrCurriculum[$rTMP["id"]]["ref_1_tel"]             = $rTMP["ref_1_tel"];
    $arrCurriculum[$rTMP["id"]]["ref_1_domicilio"]             = $rTMP["ref_1_domicilio"];
    $arrCurriculum[$rTMP["id"]]["ref_1_ocupacion"]             = $rTMP["ref_1_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["ref_1_tiempo"]             = $rTMP["ref_1_tiempo"];
    $arrCurriculum[$rTMP["id"]]["ref_2_nom"]             = $rTMP["ref_2_nom"];
    $arrCurriculum[$rTMP["id"]]["ref_2_tel"]             = $rTMP["ref_2_tel"];
    $arrCurriculum[$rTMP["id"]]["ref_2_domicilio"]             = $rTMP["ref_2_domicilio"];
    $arrCurriculum[$rTMP["id"]]["ref_2_ocupacion"]             = $rTMP["ref_2_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["ref_2_tiempo"]             = $rTMP["ref_2_tiempo"];
    $arrCurriculum[$rTMP["id"]]["ref_3_nom"]             = $rTMP["ref_3_nom"];
    $arrCurriculum[$rTMP["id"]]["ref_3_tel"]             = $rTMP["ref_3_tel"];
    $arrCurriculum[$rTMP["id"]]["ref_3_domicilio"]             = $rTMP["ref_3_domicilio"];
    $arrCurriculum[$rTMP["id"]]["ref_3_ocupacion"]             = $rTMP["ref_3_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["ref_3_tiempo"]             = $rTMP["ref_3_tiempo"];
    $arrCurriculum[$rTMP["id"]]["ref_4_nom"]             = $rTMP["ref_4_nom"];
    $arrCurriculum[$rTMP["id"]]["ref_4_tel"]             = $rTMP["ref_4_tel"];
    $arrCurriculum[$rTMP["id"]]["ref_4_domicilio"]             = $rTMP["ref_4_domicilio"];
    $arrCurriculum[$rTMP["id"]]["ref_4_ocupacion"]             = $rTMP["ref_4_ocupacion"];
    $arrCurriculum[$rTMP["id"]]["ref_4_tiempo"]             = $rTMP["ref_4_tiempo"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_1"]             = $rTMP["dat_gen_question_1"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_2"]             = $rTMP["dat_gen_question_2"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_3"]             = $rTMP["dat_gen_question_3"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_4"]             = $rTMP["dat_gen_question_4"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_5"]             = $rTMP["dat_gen_question_5"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_6"]             = $rTMP["dat_gen_question_6"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_7"]             = $rTMP["dat_gen_question_7"];
    $arrCurriculum[$rTMP["id"]]["dat_gen_question_8"]             = $rTMP["dat_gen_question_8"];
}
//ibase_free_result($v_query);



if (is_array($arrCurriculum) && (count($arrCurriculum) > 0)) {
    reset($arrCurriculum);
    foreach ($arrCurriculum as $rTMP['key'] => $rTMP['value']) {

        $puesto_sol = isset($rTMP["value"]["puesto_sol"]) ? $rTMP["value"]["puesto_sol"]  : '';
        $fecha_sol = isset($rTMP["value"]["fecha_sol"]) ? $rTMP["value"]["fecha_sol"]  : '00-00-0000';
        $sueldo_mensual = isset($rTMP["value"]["sueldo_mensual"]) ? $rTMP["value"]["sueldo_mensual"]  : '';
        $sueldo_anual = isset($rTMP["value"]["sueldo_anual"]) ? $rTMP["value"]["sueldo_anual"]  : '';
        $edu_pri_nom = isset($rTMP["value"]["edu_pri_nom"]) ? $rTMP["value"]["edu_pri_nom"]  : '';
        $edu_basic_nom = isset($rTMP["value"]["edu_basic_nom"]) ? $rTMP["value"]["edu_basic_nom"]  : '';
        $diver_nom = isset($rTMP["value"]["diver_nom"]) ? $rTMP["value"]["diver_nom"]  : '';
        $univer_nom = isset($rTMP["value"]["univer_nom"]) ? $rTMP["value"]["univer_nom"]  : '';
        $edu_comer_nom = isset($rTMP["value"]["edu_comer_nom"]) ? $rTMP["value"]["edu_comer_nom"]  : '';
        $edu_pri_ubi = isset($rTMP["value"]["edu_pri_ubi"]) ? $rTMP["value"]["edu_pri_ubi"]  : '';
        $edu_basic_ubi = isset($rTMP["value"]["edu_basic_ubi"]) ? $rTMP["value"]["edu_basic_ubi"]  : '';
        $diver_ubi = isset($rTMP["value"]["diver_ubi"]) ? $rTMP["value"]["diver_ubi"]  : '';
        $univer_ubi = isset($rTMP["value"]["univer_ubi"]) ? $rTMP["value"]["univer_ubi"]  : '';
        $edu_comer_ubi = isset($rTMP["value"]["edu_comer_ubi"]) ? $rTMP["value"]["edu_comer_ubi"]  : '';
        $edu_pri_date_de = isset($rTMP["value"]["edu_pri_date_de"]) ? $rTMP["value"]["edu_pri_date_de"]  : '';
        $edu_basic_date_de = isset($rTMP["value"]["edu_basic_date_de"]) ? $rTMP["value"]["edu_basic_date_de"]  : '';
        $diver_date_de = isset($rTMP["value"]["diver_date_de"]) ? $rTMP["value"]["diver_date_de"]  : '';
        $univer_date_de = isset($rTMP["value"]["univer_date_de"]) ? $rTMP["value"]["univer_date_de"]  : '';
        $edu_comer_date_de = isset($rTMP["value"]["edu_comer_date_de"]) ? $rTMP["value"]["edu_comer_date_de"]  : '';
        $edu_pri_date_hasta = isset($rTMP["value"]["edu_pri_date_hasta"]) ? $rTMP["value"]["edu_pri_date_hasta"]  : '';
        $edu_basic_date_hasta = isset($rTMP["value"]["edu_basic_date_hasta"]) ? $rTMP["value"]["edu_basic_date_hasta"]  : '';
        $diver_date_hasta = isset($rTMP["value"]["diver_date_hasta"]) ? $rTMP["value"]["diver_date_hasta"]  : '';
        $univer_date_hasta = isset($rTMP["value"]["univer_date_hasta"]) ? $rTMP["value"]["univer_date_hasta"]  : '';
        $edu_comer_date_hasta = isset($rTMP["value"]["edu_comer_date_hasta"]) ? $rTMP["value"]["edu_comer_date_hasta"]  : '';
        $edu_pri_a = isset($rTMP["value"]["edu_pri_a"]) ? $rTMP["value"]["edu_pri_a"]  : '';
        $edu_basic_a = isset($rTMP["value"]["edu_basic_a"]) ? $rTMP["value"]["edu_basic_a"]  : '';
        $diver_a = isset($rTMP["value"]["diver_a"]) ? $rTMP["value"]["diver_a"]  : '';
        $univer_a = isset($rTMP["value"]["univer_a"]) ? $rTMP["value"]["univer_a"]  : '';
        $edu_comer_a = isset($rTMP["value"]["edu_comer_a"]) ? $rTMP["value"]["edu_comer_a"]  : '';
        $edu_pri_titul = isset($rTMP["value"]["edu_pri_titul"]) ? $rTMP["value"]["edu_pri_titul"]  : '';
        $edu_basic_titul = isset($rTMP["value"]["edu_basic_titul"]) ? $rTMP["value"]["edu_basic_titul"]  : '';
        $diver_titul = isset($rTMP["value"]["diver_titul"]) ? $rTMP["value"]["diver_titul"]  : '';
        $univer_titul = isset($rTMP["value"]["univer_titul"]) ? $rTMP["value"]["univer_titul"]  : '';
        $edu_comer_titul = isset($rTMP["value"]["edu_comer_titul"]) ? $rTMP["value"]["edu_comer_titul"]  : '';
        $est_act_escuela = isset($rTMP["value"]["est_act_escuela"]) ? $rTMP["value"]["est_act_escuela"]  : '';
        $est_act_horario = isset($rTMP["value"]["est_act_horario"]) ? $rTMP["value"]["est_act_horario"]  : '';
        $est_act_curso = isset($rTMP["value"]["est_act_curso"]) ? $rTMP["value"]["est_act_curso"]  : '';
        $est_act_grado = isset($rTMP["value"]["est_act_grado"]) ? $rTMP["value"]["est_act_grado"]  : '';
        $idiomas = isset($rTMP["value"]["idiomas"]) ? $rTMP["value"]["idiomas"]  : '';
        $nivel_idioma = isset($rTMP["value"]["nivel_idioma"]) ? $rTMP["value"]["nivel_idioma"]  : '';
        $funcion_oficina_domin = isset($rTMP["value"]["funcion_oficina_domin"]) ? $rTMP["value"]["funcion_oficina_domin"]  : '';
        $uso_maquinas = isset($rTMP["value"]["uso_maquinas"]) ? $rTMP["value"]["uso_maquinas"]  : '';
        $software_domin = isset($rTMP["value"]["software_domin"]) ? $rTMP["value"]["software_domin"]  : '';
        $otr_funcion_domin = isset($rTMP["value"]["otr_funcion_domin"]) ? $rTMP["value"]["otr_funcion_domin"]  : '';
        $ape_pat = isset($rTMP["value"]["ape_pat"]) ? $rTMP["value"]["ape_pat"]  : '';
        $ape_mat = isset($rTMP["value"]["ape_mat"]) ? $rTMP["value"]["ape_mat"]  : '';
        $nombre_per = isset($rTMP["value"]["nombre_per"]) ? $rTMP["value"]["nombre_per"]  : '';
        $edad_per = isset($rTMP["value"]["edad_per"]) ? $rTMP["value"]["edad_per"]  : '';
        $sexo_per = isset($rTMP["value"]["sexo_per"]) ? $rTMP["value"]["sexo_per"]  : '';
        $domicilio_per = isset($rTMP["value"]["domicilio_per"]) ? $rTMP["value"]["domicilio_per"]  : '';
        $colonia_per = isset($rTMP["value"]["colonia_per"]) ? $rTMP["value"]["colonia_per"]  : '';
        $telefono_per = isset($rTMP["value"]["telefono_per"]) ? $rTMP["value"]["telefono_per"]  : '';
        $celular_per = isset($rTMP["value"]["celular_per"]) ? $rTMP["value"]["celular_per"]  : '';
        $vive_con = isset($rTMP["value"]["vive_con"]) ? $rTMP["value"]["vive_con"]  : '';
        $fecha_nac_per = isset($rTMP["value"]["fecha_nac_per"]) ? $rTMP["value"]["fecha_nac_per"]  : '';
        $estatura_per = isset($rTMP["value"]["estatura_per"]) ? $rTMP["value"]["estatura_per"]  : '';
        $peso_per = isset($rTMP["value"]["peso_per"]) ? $rTMP["value"]["peso_per"]  : '';
        $depende_de = isset($rTMP["value"]["depende_de"]) ? $rTMP["value"]["depende_de"]  : '';
        $estado_civil_per = isset($rTMP["value"]["estado_civil_per"]) ? $rTMP["value"]["estado_civil_per"]  : '';
        $cui_per = isset($rTMP["value"]["comcui_perent"]) ? $rTMP["value"]["cui_per"]  : '';
        $num_seg_social = isset($rTMP["value"]["num_seg_social"]) ? $rTMP["value"]["num_seg_social"]  : '';
        $nit_per = isset($rTMP["value"]["nit_per"]) ? $rTMP["value"]["nit_per"]  : '';
        $port_licencia = isset($rTMP["value"]["port_licencia"]) ? $rTMP["value"]["port_licencia"]  : '';
        $tipo_licencia = isset($rTMP["value"]["tipo_licencia"]) ? $rTMP["value"]["tipo_licencia"]  : '';
        $num_licencia = isset($rTMP["value"]["num_licencia"]) ? $rTMP["value"]["num_licencia"]  : '';
        $esta_solud_question_1 = isset($rTMP["value"]["esta_solud_question_1"]) ? $rTMP["value"]["esta_solud_question_1"]  : '';
        $esta_solud_question_2 = isset($rTMP["value"]["esta_solud_question_2"]) ? $rTMP["value"]["esta_solud_question_2"]  : '';
        $esta_solud_question_3 = isset($rTMP["value"]["esta_solud_question_3"]) ? $rTMP["value"]["esta_solud_question_3"]  : '';
        $esta_solud_question_4 = isset($rTMP["value"]["esta_solud_question_4"]) ? $rTMP["value"]["esta_solud_question_4"]  : '';
        $esta_solud_question_5 = isset($rTMP["value"]["esta_solud_question_5"]) ? $rTMP["value"]["esta_solud_question_5"]  : '';
        $esta_solud_question_6 = isset($rTMP["value"]["esta_solud_question_6"]) ? $rTMP["value"]["esta_solud_question_6"]  : '';
        $pat_nom = isset($rTMP["value"]["pat_nom"]) ? $rTMP["value"]["pat_nom"]  : '';
        $pat_vive = isset($rTMP["value"]["pat_vive"]) ? $rTMP["value"]["pat_vive"]  : '';
        $pat_finado = isset($rTMP["value"]["pat_finado"]) ? $rTMP["value"]["pat_finado"]  : '';
        $pat_domicilio = isset($rTMP["value"]["pat_domicilio"]) ? $rTMP["value"]["pat_domicilio"]  : '';
        $pat_ocupacion = isset($rTMP["value"]["pat_ocupacion"]) ? $rTMP["value"]["pat_ocupacion"]  : '';
        $mat_nom = isset($rTMP["value"]["mat_nom"]) ? $rTMP["value"]["mat_nom"]  : '';
        $mat_vive = isset($rTMP["value"]["mat_vive"]) ? $rTMP["value"]["mat_vive"]  : '';
        $mat_finado = isset($rTMP["value"]["mat_finado"]) ? $rTMP["value"]["mat_finado"]  : '';
        $mat_domicilio = isset($rTMP["value"]["mat_domicilio"]) ? $rTMP["value"]["mat_domicilio"]  : '';
        $mat_ocupacion = isset($rTMP["value"]["mat_ocupacion"]) ? $rTMP["value"]["mat_ocupacion"]  : '';
        $cony_nom = isset($rTMP["value"]["cony_nom"]) ? $rTMP["value"]["cony_nom"]  : '';
        $cony_vive = isset($rTMP["value"]["cony_vive"]) ? $rTMP["value"]["cony_vive"]  : '';
        $cony_finado = isset($rTMP["value"]["cony_finado"]) ? $rTMP["value"]["cony_finado"]  : '';
        $cony_domicilio = isset($rTMP["value"]["cony_domicilio"]) ? $rTMP["value"]["cony_domicilio"]  : '';
        $cony_ocupacion = isset($rTMP["value"]["cony_ocupacion"]) ? $rTMP["value"]["cony_ocupacion"]  : '';
        $fam_gen = isset($rTMP["value"]["fam_gen"]) ? $rTMP["value"]["fam_gen"]  : '';
        $emp_act_date_de = isset($rTMP["value"]["emp_act_date_de"]) ? $rTMP["value"]["emp_act_date_de"]  : '';
        $emp_act_date_hasta = isset($rTMP["value"]["emp_act_date_hasta"]) ? $rTMP["value"]["emp_act_date_hasta"]  : '';
        $emp_ant_1_date_de = isset($rTMP["value"]["emp_ant_1_date_de"]) ? $rTMP["value"]["emp_ant_1_date_de"]  : '';
        $emp_ant_1_date_hasta = isset($rTMP["value"]["emp_ant_1_date_hasta"]) ? $rTMP["value"]["emp_ant_1_date_hasta"]  : '';
        $emp_ant_2_date_de = isset($rTMP["value"]["emp_ant_2_date_de"]) ? $rTMP["value"]["emp_ant_2_date_de"]  : '';
        $emp_ant_2_date_hasta = isset($rTMP["value"]["emp_ant_2_date_hasta"]) ? $rTMP["value"]["emp_ant_2_date_hasta"]  : '';
        $emp_ant_3_date_de = isset($rTMP["value"]["emp_ant_3_date_de"]) ? $rTMP["value"]["emp_ant_3_date_de"]  : '';
        $emp_ant_3_date_hasta = isset($rTMP["value"]["emp_ant_3_date_hasta"]) ? $rTMP["value"]["emp_ant_3_date_hasta"]  : '';
        $emp_act_nomemp = isset($rTMP["value"]["emp_act_nomemp"]) ? $rTMP["value"]["emp_act_nomemp"]  : '';
        $emp_ant_1_nomemp = isset($rTMP["value"]["emp_ant_1_nomemp"]) ? $rTMP["value"]["emp_ant_1_nomemp"]  : '';
        $emp_ant_2_nomemp = isset($rTMP["value"]["emp_ant_2_nomemp"]) ? $rTMP["value"]["emp_ant_2_nomemp"]  : '';
        $emp_ant_3_nomemp = isset($rTMP["value"]["emp_ant_3_nomemp"]) ? $rTMP["value"]["emp_ant_3_nomemp"]  : '';
        $emp_act_dir = isset($rTMP["value"]["emp_act_dir"]) ? $rTMP["value"]["emp_act_dir"]  : '';
        $emp_ant_1_dir = isset($rTMP["value"]["emp_ant_1_dir"]) ? $rTMP["value"]["emp_ant_1_dir"]  : '';
        $emp_ant_2_dir = isset($rTMP["value"]["emp_ant_2_dir"]) ? $rTMP["value"]["emp_ant_2_dir"]  : '';
        $emp_ant_3_dir = isset($rTMP["value"]["emp_ant_3_dir"]) ? $rTMP["value"]["emp_ant_3_dir"]  : '';
        $emp_act_tel = isset($rTMP["value"]["emp_act_tel"]) ? $rTMP["value"]["emp_act_tel"]  : '';
        $emp_ant_1_tel = isset($rTMP["value"]["emp_ant_1_tel"]) ? $rTMP["value"]["emp_ant_1_tel"]  : '';
        $emp_ant_2_tel = isset($rTMP["value"]["emp_ant_2_tel"]) ? $rTMP["value"]["emp_ant_2_tel"]  : '';
        $emp_ant_3_tel = isset($rTMP["value"]["emp_ant_3_tel"]) ? $rTMP["value"]["emp_ant_3_tel"]  : '';
        $emp_act_puesto = isset($rTMP["value"]["emp_act_puesto"]) ? $rTMP["value"]["emp_act_puesto"]  : '';
        $emp_ant_1_puesto = isset($rTMP["value"]["emp_ant_1_puesto"]) ? $rTMP["value"]["emp_ant_1_puesto"]  : '';
        $emp_ant_2_puesto = isset($rTMP["value"]["emp_ant_2_puesto"]) ? $rTMP["value"]["emp_ant_2_puesto"]  : '';
        $emp_ant_3_puesto = isset($rTMP["value"]["emp_ant_3_puesto"]) ? $rTMP["value"]["emp_ant_3_puesto"]  : '';
        $emp_act_sueld_ini = isset($rTMP["value"]["emp_act_sueld_ini"]) ? $rTMP["value"]["emp_act_sueld_ini"]  : '';
        $emp_ant_1_sueld_ini = isset($rTMP["value"]["emp_ant_1_sueld_ini"]) ? $rTMP["value"]["emp_ant_1_sueld_ini"]  : '';
        $emp_ant_2_sueld_ini = isset($rTMP["value"]["emp_ant_2_sueld_ini"]) ? $rTMP["value"]["emp_ant_2_sueld_ini"]  : '';
        $emp_ant_3_sueld_ini = isset($rTMP["value"]["emp_ant_3_sueld_ini"]) ? $rTMP["value"]["emp_ant_3_sueld_ini"]  : '';
        $emp_act_sueld_fin = isset($rTMP["value"]["emp_act_sueld_fin"]) ? $rTMP["value"]["emp_act_sueld_fin"]  : '';
        $emp_ant_1_sueld_fin = isset($rTMP["value"]["emp_ant_1_sueld_fin"]) ? $rTMP["value"]["emp_ant_1_sueld_fin"]  : '';
        $emp_ant_2_sueld_fin = isset($rTMP["value"]["emp_ant_2_sueld_fin"]) ? $rTMP["value"]["emp_ant_2_sueld_fin"]  : '';
        $emp_ant_3_sueld_fin = isset($rTMP["value"]["emp_ant_3_sueld_fin"]) ? $rTMP["value"]["emp_ant_3_sueld_fin"]  : '';
        $emp_act_motivo_sup = isset($rTMP["value"]["emp_act_motivo_sup"]) ? $rTMP["value"]["emp_act_motivo_sup"]  : '';
        $emp_ant_1_motivo_sup = isset($rTMP["value"]["emp_ant_1_motivo_sup"]) ? $rTMP["value"]["emp_ant_1_motivo_sup"]  : '';
        $emp_ant_2_motivo_sup = isset($rTMP["value"]["emp_ant_2_motivo_sup"]) ? $rTMP["value"]["emp_ant_2_motivo_sup"]  : '';
        $emp_ant_3_motivo_sup = isset($rTMP["value"]["emp_ant_3_motivo_sup"]) ? $rTMP["value"]["emp_ant_3_motivo_sup"]  : '';
        $emp_act_jefe_nom = isset($rTMP["value"]["emp_act_jefe_nom"]) ? $rTMP["value"]["emp_act_jefe_nom"]  : '';
        $emp_ant_1_jefe_nom = isset($rTMP["value"]["emp_ant_1_jefe_nom"]) ? $rTMP["value"]["emp_ant_1_jefe_nom"]  : '';
        $emp_ant_2_jefe_nom = isset($rTMP["value"]["emp_ant_2_jefe_nom"]) ? $rTMP["value"]["emp_ant_2_jefe_nom"]  : '';
        $emp_ant_3_jefe_nom = isset($rTMP["value"]["emp_ant_3_jefe_nom"]) ? $rTMP["value"]["emp_ant_3_jefe_nom"]  : '';
        $emp_act_jefe_puesto = isset($rTMP["value"]["emp_act_jefe_puesto"]) ? $rTMP["value"]["emp_act_jefe_puesto"]  : '';
        $emp_ant_1_jefe_puesto = isset($rTMP["value"]["emp_ant_1_jefe_puesto"]) ? $rTMP["value"]["emp_ant_1_jefe_puesto"]  : '';
        $emp_ant_2_jefe_puesto = isset($rTMP["value"]["emp_ant_2_jefe_puesto"]) ? $rTMP["value"]["emp_ant_2_jefe_puesto"]  : '';
        $emp_ant_3_jefe_puesto = isset($rTMP["value"]["emp_ant_3_jefe_puesto"]) ? $rTMP["value"]["emp_ant_3_jefe_puesto"]  : '';
        $emp_act_info = isset($rTMP["value"]["emp_act_info"]) ? $rTMP["value"]["emp_act_info"]  : '';
        $emp_ant_1_info = isset($rTMP["value"]["emp_ant_1_info"]) ? $rTMP["value"]["emp_ant_1_info"]  : '';
        $emp_ant_2_info = isset($rTMP["value"]["emp_ant_2_info"]) ? $rTMP["value"]["emp_ant_2_info"]  : '';
        $emp_ant_3_info = isset($rTMP["value"]["emp_ant_3_info"]) ? $rTMP["value"]["emp_ant_3_info"]  : '';
        $ref_1_nom = isset($rTMP["value"]["ref_1_nom"]) ? $rTMP["value"]["ref_1_nom"]  : '';
        $ref_1_tel = isset($rTMP["value"]["ref_1_tel"]) ? $rTMP["value"]["ref_1_tel"]  : '';
        $ref_1_domicilio = isset($rTMP["value"]["ref_1_domicilio"]) ? $rTMP["value"]["ref_1_domicilio"]  : '';
        $ref_1_ocupacion = isset($rTMP["value"]["ref_1_ocupacion"]) ? $rTMP["value"]["ref_1_ocupacion"]  : '';
        $ref_1_tiempo = isset($rTMP["value"]["ref_1_tiempo"]) ? $rTMP["value"]["ref_1_tiempo"]  : '';
        $ref_2_nom = isset($rTMP["value"]["ref_2_nom"]) ? $rTMP["value"]["ref_2_nom"]  : '';
        $ref_2_tel = isset($rTMP["value"]["ref_2_tel"]) ? $rTMP["value"]["ref_2_tel"]  : '';
        $ref_2_domicilio = isset($rTMP["value"]["ref_2_domicilio"]) ? $rTMP["value"]["ref_2_domicilio"]  : '';
        $ref_2_ocupacion = isset($rTMP["value"]["ref_2_ocupacion"]) ? $rTMP["value"]["ref_2_ocupacion"]  : '';
        $ref_2_tiempo = isset($rTMP["value"]["ref_2_tiempo"]) ? $rTMP["value"]["ref_2_tiempo"]  : '';
        $ref_3_nom = isset($rTMP["value"]["ref_3_nom"]) ? $rTMP["value"]["ref_3_nom"]  : '';
        $ref_3_tel = isset($rTMP["value"]["ref_3_tel"]) ? $rTMP["value"]["ref_3_tel"]  : '';
        $ref_3_domicilio = isset($rTMP["value"]["ref_3_domicilio"]) ? $rTMP["value"]["ref_3_domicilio"]  : '';
        $ref_3_ocupacion = isset($rTMP["value"]["ref_3_ocupacion"]) ? $rTMP["value"]["ref_3_ocupacion"]  : '';
        $ref_3_tiempo = isset($rTMP["value"]["ref_3_tiempo"]) ? $rTMP["value"]["ref_3_tiempo"]  : '';
        $ref_4_nom = isset($rTMP["value"]["ref_4_nom"]) ? $rTMP["value"]["ref_4_nom"]  : '';
        $ref_4_tel = isset($rTMP["value"]["ref_4_tel"]) ? $rTMP["value"]["ref_4_tel"]  : '';
        $ref_4_domicilio = isset($rTMP["value"]["ref_4_domicilio"]) ? $rTMP["value"]["ref_4_domicilio"]  : '';
        $ref_4_ocupacion = isset($rTMP["value"]["ref_4_ocupacion"]) ? $rTMP["value"]["ref_4_ocupacion"]  : '';
        $ref_4_tiempo = isset($rTMP["value"]["ref_4_tiempo"]) ? $rTMP["value"]["ref_4_tiempo"]  : '';
        $dat_gen_question_1 = isset($rTMP["value"]["dat_gen_question_1"]) ? $rTMP["value"]["dat_gen_question_1"]  : '';
        $dat_gen_question_2 = isset($rTMP["value"]["dat_gen_question_2"]) ? $rTMP["value"]["dat_gen_question_2"]  : '';
        $dat_gen_question_3 = isset($rTMP["value"]["dat_gen_question_3"]) ? $rTMP["value"]["dat_gen_question_3"]  : '';
        $dat_gen_question_4 = isset($rTMP["value"]["dat_gen_question_4"]) ? $rTMP["value"]["dat_gen_question_4"]  : '';
        $dat_gen_question_5 = isset($rTMP["value"]["dat_gen_question_5"]) ? $rTMP["value"]["dat_gen_question_5"]  : '';
        $dat_gen_question_6 = isset($rTMP["value"]["dat_gen_question_6"]) ? $rTMP["value"]["dat_gen_question_6"]  : '';
        $dat_gen_question_7 = isset($rTMP["value"]["dat_gen_question_7"]) ? $rTMP["value"]["dat_gen_question_7"]  : '';
        $dat_gen_question_8 = isset($rTMP["value"]["dat_gen_question_8"]) ? $rTMP["value"]["dat_gen_question_8"]  : '';
    }
}

?>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>COLLECTO</title>

<link rel="icon" href="asset/img/favicon.ico" type="ico">
<link href="//netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Material Design Login Form -->
<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-5715866801509976" data-ad-slot="3213535644"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="d-flex justify-content-between align-items-center">
            <h2>SOLICITUD DE EMPLEO</h2>
        </div>
    </div>

    <div class="col-1"></div>
</section><!-- End Breadcrumbs -->

<section class="inner-page row">
    <div class="col-1"></div>
    <div class="col-10">
        <form id="formData" method="POST">
            <div class="form-row">
                <div class="form-group btn-info col-md-10">
                    <label for="inputEmail4">PUESTO SOLICITADO</label>
                </div>
                <div class="form-group btn-info col-md-2">
                    <label for="inputEmail4">FECHA</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" value="<?php echo $puesto_sol ?>" id="puesto_sol" name="puesto_sol">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $fecha_sol ?>" id="fecha_sol" name="fecha_sol">
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
                    <input type="text" class="form-control" value="<?php echo $sueldo_mensual ?>" id="sueldo_mensual" name="sueldo_mensual">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $sueldo_anual ?>" id="sueldo_anual" name="sueldo_anual">
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
                    <input type="text" class="form-control" value="<?php echo $edu_pri_nom ?>" id="edu_pri_nom" name="edu_pri_nom" placeholder="Educacion Primaria">
                    <input type="text" class="form-control" value="<?php echo $edu_basic_nom ?>" id="edu_basic_nom" name="edu_basic_nom" placeholder="Educacion Basica">
                    <input type="text" class="form-control" value="<?php echo $diver_nom ?>" id="diver_nom" name="diver_nom" placeholder="Diversificado">
                    <input type="text" class="form-control" value="<?php echo $univer_nom ?>" id="univer_nom" name="univer_nom" placeholder="Universitaria">
                    <input type="text" class="form-control" value="<?php echo $edu_comer_nom ?>" id="edu_comer_nom" name="edu_comer_nom" placeholder="Comercial u otras">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $edu_pri_ubi ?>" id="edu_pri_ubi" name="edu_pri_ubi">
                    <input type="text" class="form-control" value="<?php echo $edu_basic_ubi ?>" id="edu_basic_ubi" name="edu_basic_ubi">
                    <input type="text" class="form-control" value="<?php echo $diver_ubi ?>" id="diver_ubi" name="diver_ubi">
                    <input type="text" class="form-control" value="<?php echo $univer_ubi ?>" id="univer_ubi" name="univer_ubi">
                    <input type="text" class="form-control" value="<?php echo $edu_comer_ubi ?>" id="edu_comer_ubi" name="edu_comer_ubi">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" value="<?php echo $edu_pri_date_de ?>" id="edu_pri_date_de" name="edu_pri_date_de">
                    <input type="text" class="form-control" value="<?php echo $edu_basic_date_de ?>" id="edu_basic_date_de" name="edu_basic_date_de">
                    <input type="text" class="form-control" value="<?php echo $diver_date_de ?>" id="diver_date_de" name="diver_date_de">
                    <input type="text" class="form-control" value="<?php echo $univer_date_de ?>" id="univer_date_de" name="univer_date_de">
                    <input type="text" class="form-control" value="<?php echo $edu_comer_date_de ?>" id="edu_comer_date_de" name="edu_comer_date_de">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" value="<?php echo $edu_pri_date_hasta ?>" id="edu_pri_date_hasta" name="edu_pri_date_hasta">
                    <input type="text" class="form-control" value="<?php echo $edu_basic_date_hasta ?>" id="edu_basic_date_hasta" name="edu_basic_date_hasta">
                    <input type="text" class="form-control" value="<?php echo $diver_date_hasta ?>" id="diver_date_hasta" name="diver_date_hasta">
                    <input type="text" class="form-control" value="<?php echo $univer_date_hasta ?>" id="univer_date_hasta" name="univer_date_hasta">
                    <input type="text" class="form-control" value="<?php echo $edu_comer_date_hasta ?>" id="edu_comer_date_hasta" name="edu_comer_date_hasta">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" value="<?php echo $edu_pri_a ?>" id="edu_pri_a" name="edu_pri_a">
                    <input type="text" class="form-control" value="<?php echo $edu_basic_a ?>" id="edu_basic_a" name="edu_basic_a">
                    <input type="text" class="form-control" value="<?php echo $diver_a ?>" id="diver_a" name="diver_a">
                    <input type="text" class="form-control" value="<?php echo $univer_a ?>" id="univer_a" name="univer_a">
                    <input type="text" class="form-control" value="<?php echo $edu_comer_a ?>" id="edu_comer_a" name="edu_comer_a">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $edu_pri_titul ?>" id="edu_pri_titul" name="edu_pri_titul">
                    <input type="text" class="form-control" value="<?php echo $edu_basic_titul ?>" id="edu_basic_titul" name="edu_basic_titul">
                    <input type="text" class="form-control" value="<?php echo $diver_titul ?>" id="diver_titul" name="diver_titul">
                    <input type="text" class="form-control" value="<?php echo $univer_titul ?>" id="univer_titul" name="univer_titul">
                    <input type="text" class="form-control" value="<?php echo $edu_comer_titul ?>" id="edu_comer_titul" name="edu_comer_titul">
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
                    <input type="text" class="form-control" value="<?php echo $est_act_escuela ?>" id="est_act_escuela" name="est_act_escuela">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $est_act_horario ?>" id="est_act_horario" name="est_act_horario">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $est_act_curso ?>" id="est_act_curso" name="est_act_curso">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $est_act_grado ?>" id="est_act_grado" name="est_act_grado">
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
                    <input type="text" class="form-control" value="<?php echo $idiomas ?>" id="idiomas" name="idiomas">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $nivel_idioma ?>" id="nivel_idioma" name="nivel_idioma">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $funcion_oficina_domin ?>" id="funcion_oficina_domin" name="funcion_oficina_domin">
                </div>
                <div class="form-group btn-info col-md-6">
                    <label for="inputEmail4">MAQUINAS DE OFICINA O TALLER QUE SEPA MANEJAR</label>
                </div>
                <div class="form-group btn-info col-md-6">
                    <label for="inputEmail4">SOFTWARE QUE DOMINA</label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $uso_maquinas ?>" id="uso_maquinas" name="uso_maquinas">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $software_domin ?>" id="software_domin" name="software_domin">
                </div>
                <div class="form-group btn-info col-md-12">
                    <label for="inputEmail4">OTRAS FUNCIONES QUE DOMINA</label>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" value="<?php echo $otr_funcion_domin ?>" id="otr_funcion_domin" name="otr_funcion_domin">
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
                    <input type="text" class="form-control" value="<?php echo $ape_pat ?>" id="ape_pat" name="ape_pat">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $ape_mat ?>" id="ape_mat" name="ape_mat">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $nombre_per ?>" id="nombre_per" name="nombre_per">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $edad_per ?>" id="edad_per" name="edad_per">
                </div>
                <div class="form-group col-md-2">
                    <select id="sexo_per" name="sexo_per" class="form-control">
                        <option value=" ">Seleccionar</option>
                        <option value="masculino" <?php if ($sexo_per == 'masculino') {
                                                        $selected = 'selected';
                                                        echo $selected;
                                                    } ?>>Masculino</option>
                        <option value="femenino" <?php if ($sexo_per == 'femenino') {
                                                        $selected = 'selected';
                                                        echo $selected;
                                                    } ?>>Femenino</option>
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
                    <input type="text" class="form-control" value="<?php echo $domicilio_per ?>" id="domicilio_per" name="domicilio_per">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $colonia_per ?>" id="colonia_per" name="colonia_per">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $telefono_per ?>" id="telefono_per" name="telefono_per">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $celular_per ?>" id="celular_per" name="celular_per">
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
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="vive_con" id="vive_con" value="PADRES" <?php if ($vive_con == 'PADRES') {
                                                                                                                                        $checked = 'checked';
                                                                                                                                        echo $checked;
                                                                                                                                    } ?>>
                    <label class="form-check-label" for="vive_con">
                        PADRES
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="vive_con" id="vive_con" value="PARINTES" <?php if ($vive_con == 'PARINTES') {
                                                                                                                    $checked = 'checked';
                                                                                                                    echo $checked;
                                                                                                                } ?>>
                    <label class="form-check-label" for="vive_con">
                        PARIENTES
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="vive_con" id="vive_con" value="SOLO" <?php if ($vive_con == 'SOLO') {
                                                                                                                $checked = 'checked';
                                                                                                                echo $checked;
                                                                                                            } ?>>
                    <label class="form-check-label" for="vive_con">
                        SOLO
                    </label>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $fecha_nac_per ?>" id="fecha_nac_per" name="fecha_nac_per">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $estatura_per ?>" id="estatura_per" name="estatura_per">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $peso_per ?>" id="peso_per" name="peso_per">
                </div>
                <div class="form-group btn-info col-md-6">
                    <label for="inputEmail4">PERSONAS QUE DEPENDEN DE USTED</label>
                </div>
                <div class="form-group btn-info col-md-6">
                    <label for="inputEmail4">ESTADO CIVIL</label>
                </div>
                <div class="form-group col-md-6">
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="depende_de" id="depende_de" value="HIJOS" <?php if ($depende_de == 'HIJOS') {
                                                                                                                                            $checked = 'checked';
                                                                                                                                            echo $checked;
                                                                                                                                        } ?>>
                    <label class="form-check-label" for="depende_de">
                        HIJOS
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="depende_de" value="PADRES" <?php if ($depende_de == 'PADRES') {
                                                                                                                            $checked = 'checked';
                                                                                                                            echo $checked;
                                                                                                                        } ?>>
                    <label class="form-check-label" for="depende_de">
                        PADRES
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="depende_de" id="depende_de" value="CONYUGUE" <?php if ($depende_de == 'CONYUGUE') {
                                                                                                                        $checked = 'checked';
                                                                                                                        echo $checked;
                                                                                                                    } ?>>
                    <label class="form-check-label" for="depende_de">
                        CONYUGUE
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="depende_de" id="depende_de" value="NINGUNO" <?php if ($depende_de == 'NINGUNO') {
                                                                                                                        $checked = 'checked';
                                                                                                                        echo $checked;
                                                                                                                    } ?>>
                    <label class="form-check-label" for="depende_de">
                        NINGUNO
                    </label>
                </div>
                <div class="form-group col-md-6">
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="estado_civil_per" id="estado_civil_per" value="SOLTERO" <?php if ($estado_civil_per == 'SOLTERO') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="estado_civil_per">
                        SOLTERO
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="estado_civil_per" id="estado_civil_per" value="CASADO" <?php if ($estado_civil_per == 'CASADO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
                    <label class="form-check-label" for="estado_civil_per">
                        CASADO
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="estado_civil_per" id="estado_civil_per" value="OTRO" <?php if ($estado_civil_per == 'OTRO') {
                                                                                                                                $checked = 'checked';
                                                                                                                                echo $checked;
                                                                                                                            } ?>>
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
                    <input type="text" class="form-control" value="<?php echo $cui_per ?>" id="cui_per" name="cui_per">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $num_seg_social ?>" id="num_seg_social" name="num_seg_social">
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
                    <input type="text" class="form-control" value="<?php echo $nit_per ?>" id="nit_per" name="nit_per">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" value="<?php echo $port_licencia ?>" id="port_licencia" name="port_licencia">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" value="<?php echo $tipo_licencia ?>" id="tipo_licencia" name="tipo_licencia">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" value="<?php echo $num_licencia ?>" id="num_licencia" name="num_licencia">
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
                    <input type="text" class="form-control" value="<?php echo $esta_solud_question_1 ?>" id="esta_solud_question_1" name="esta_solud_question_1">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $esta_solud_question_2 ?>" id="esta_solud_question_2" name="esta_solud_question_2">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $esta_solud_question_3 ?>" id="esta_solud_question_3" name="esta_solud_question_3">
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
                    <input type="text" class="form-control" value="<?php echo $esta_solud_question_4 ?>" id="esta_solud_question_4" name="esta_solud_question_4">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $esta_solud_question_5 ?>" id="esta_solud_question_5" name="esta_solud_question_5">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="<?php echo $esta_solud_question_6 ?>" id="esta_solud_question_6" name="esta_solud_question_6">
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
                    <input type="text" class="form-control" value="<?php echo $pat_nom ?>" id="pat_nom" name="pat_nom" placeholder="PADRE">
                </div>
                <div class="form-group col-md-2">
                    <select id="pat_vive" name="pat_vive" class="form-control">
                        <option value="no selecciono">Seleccionar</option>
                        <option value="vive" <?php if ($pat_vive == 'vive') {
                                                    $selected = 'selected';
                                                    echo $selected;
                                                } ?>>vive</option>
                        <option value="fallecido" <?php if ($pat_vive == 'fallecido') {
                                                        $selected = 'selected';
                                                        echo $selected;
                                                    } ?>>fallecido</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $pat_domicilio ?>" id="pat_domicilio" name="pat_domicilio">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $pat_ocupacion ?>" id="pat_ocupacion" name="pat_ocupacion">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $mat_nom ?>" id="mat_nom" name="mat_nom" placeholder="MADRE">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" value="<?php echo $mat_vive ?>" id="mat_vive" name="mat_vive">
                </div>
                <div class="form-group col-md-2">
                    <select id="mat_vive" name="mat_vive" class="form-control">
                        <option value="no selecciono">Seleccionar</option>
                        <option value="vive" <?php if ($mat_vive == 'vive') {
                                                    $selected = 'selected';
                                                    echo $selected;
                                                } ?>>vive</option>
                        <option value="fallecido" <?php if ($mat_vive == 'fallecido') {
                                                        $selected = 'selected';
                                                        echo $selected;
                                                    } ?>>fallecido</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $mat_domicilio ?>" id="mat_domicilio" name="mat_domicilio">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $mat_ocupacion ?>" id="mat_ocupacion" name="mat_ocupacion">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $cony_nom ?>" id="cony_nom" name="cony_nom" placeholder="CONYUGUE">
                </div>
                <div class="form-group col-md-1">
                    <input type="text" class="form-control" value="<?php echo $cony_vive ?>" id="cony_vive" name="cony_vive">
                </div>
                <div class="form-group col-md-2">
                    <select id="cony_vive" name="cony_vive" class="form-control">
                        <option value="no selecciono">Seleccionar</option>
                        <option value="vive" <?php if ($cony_vive == 'vive') {
                                                    $selected = 'selected';
                                                    echo $selected;
                                                } ?>>vive</option>
                        <option value="fallecido" <?php if ($cony_vive == 'fallecido') {
                                                        $selected = 'selected';
                                                        echo $selected;
                                                    } ?>>fallecido</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" value="<?php echo $cony_domicilio ?>" id="cony_domicilio" name="cony_domicilio">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $cony_ocupacion ?>" id="cony_ocupacion" name="cony_ocupacion">
                </div>
                <div class="form-group btn-info col-md-12">
                    <label for="inputEmail4">NOMRE, EDADES Y OCUPACION DE LOS HIJOS</label>
                </div>
                <div class="form-group col-md-12">
                    <textarea class="form-control" id="fam_gen" name="fam_gen" rows="6"><?php echo $fam_gen ?></textarea>
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
                    <input type="text" class="form-control" value="<?php echo $emp_act_date_de ?>" id="emp_act_date_de" name="emp_act_date_de">
                    <input type="text" class="form-control" value="<?php echo $emp_act_date_hasta ?>" id="emp_act_date_hasta" name="emp_act_date_hasta">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_date_de ?>" id="emp_ant_1_date_de" name="emp_ant_1_date_de">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_date_hasta ?>" id="emp_ant_1_date_hasta" name="emp_ant_1_date_hasta">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_date_de ?>" id="emp_ant_2_date_de" name="emp_ant_2_date_de">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_date_hasta ?>" id="emp_ant_2_date_hasta" name="emp_ant_2_date_hasta">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_date_de ?>" id="emp_ant_3_date_de" name="emp_ant_3_date_de">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_date_hasta ?>" id="emp_ant_3_date_hasta" name="emp_ant_3_date_hasta">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">NOMBRE DE LA EMPRESA</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_nomemp ?>" id="emp_act_nomemp" name="emp_act_nomemp">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_nomemp ?>" id="emp_ant_1_nomemp" name="emp_ant_1_nomemp">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_nomemp ?>" id="emp_ant_2_nomemp" name="emp_ant_2_nomemp">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_nomemp ?>" id="emp_ant_3_nomemp" name="emp_ant_3_nomemp">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">DIRECCION</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_dir ?>" id="emp_act_dir" name="emp_act_dir">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_dir ?>" id="emp_ant_1_dir" name="emp_ant_1_dir">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_dir ?>" id="emp_ant_2_dir" name="emp_ant_2_dir">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_dir ?>" id="emp_ant_3_dir" name="emp_ant_3_dir">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">TELEFONO</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_tel ?>" id="emp_act_tel" name="emp_act_tel">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_tel ?>" id="emp_ant_1_tel" name="emp_ant_1_tel">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_tel ?>" id="emp_ant_2_tel" name="emp_ant_2_tel">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_tel ?>" id="emp_ant_3_tel" name="emp_ant_3_tel">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">PUESTO DESENPEÑADO</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_puesto ?>" id="emp_act_puesto" name="emp_act_puesto">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_puesto ?>" id="emp_ant_1_puesto" name="emp_ant_1_puesto">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_puesto ?>" id="emp_ant_2_puesto" name="emp_ant_2_puesto">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_puesto ?>" id="emp_ant_3_puesto" name="emp_ant_3_puesto">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">SUELDO MENSUAL INICIAL</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_sueld_ini ?>" id="emp_act_sueld_ini" name="emp_act_sueld_ini">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_sueld_ini ?>" id="emp_ant_1_sueld_ini" name="emp_ant_1_sueld_ini">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_sueld_ini ?>" id="emp_ant_2_sueld_ini" name="emp_ant_2_sueld_ini">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_sueld_ini ?>" id="emp_ant_3_sueld_ini" name="emp_ant_3_sueld_ini">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">SUELDO MENSUAL FINAL</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_sueld_fin ?>" id="emp_act_sueld_fin" name="emp_act_sueld_fin">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_sueld_fin ?>" id="emp_ant_1_sueld_fin" name="emp_ant_1_sueld_fin">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_sueld_fin ?>" id="emp_ant_2_sueld_fin" name="emp_ant_2_sueld_fin">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_sueld_fin ?>" id="emp_ant_3_sueld_fin" name="emp_ant_3_sueld_fin">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">MOTIVO DE SU SUPERACION</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_motivo_sup ?>" id="emp_act_motivo_sup" name="emp_act_motivo_sup">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_motivo_sup ?>" id="emp_ant_1_motivo_sup" name="emp_ant_1_motivo_sup">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_motivo_sup ?>" id="emp_ant_2_motivo_sup" name="emp_ant_2_motivo_sup">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_motivo_sup ?>" id="emp_ant_3_motivo_sup" name="emp_ant_3_motivo_sup">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">NOMBRE DE SU JEFE DIRECTO</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_jefe_nom ?>" id="emp_act_jefe_nom" name="emp_act_jefe_nom">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_jefe_nom ?>" id="emp_ant_2_jefe_nom" name="emp_ant_2_jefe_nom">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_jefe_nom ?>" id="emp_ant_3_jefe_nom" name="emp_ant_3_jefe_nom">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_jefe_puesto ?>" id="emp_act_jefe_puesto" name="emp_act_jefe_puesto">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">PUESTO DE SU JEFE DIRECTO</label>
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_act_jefe_puesto ?>" id="emp_act_jefe_puesto" name="emp_act_jefe_puesto">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_1_jefe_puesto ?>" id="emp_ant_1_jefe_puesto" name="emp_ant_1_jefe_puesto">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_2_jefe_puesto ?>" id="emp_ant_2_jefe_puesto" name="emp_ant_2_jefe_puesto">
                </div>
                <div class="form-group  col-md-2">
                    <input type="text" class="form-control" value="<?php echo $emp_ant_3_jefe_puesto ?>" id="emp_ant_3_jefe_puesto" name="emp_ant_3_jefe_puesto">
                </div>
                <div class="form-group btn-info col-md-4">
                    <label for="inputEmail4">PODEMOS SOLICITAR INFORMACION SOBRE USTED</label>
                </div>
                <div class="form-group  col-md-2">
                    <textarea class="form-control" id="emp_act_info" name="emp_act_info" placeholder="SI o NO. POR QUE?"><?php echo $emp_act_info ?></textarea>
                </div>
                <div class="form-group  col-md-2">
                    <textarea class="form-control" id="emp_ant_1_info" name="emp_ant_1_info" placeholder="SI o NO. POR QUE?"><?php echo $emp_ant_1_info ?></textarea>
                </div>
                <div class="form-group  col-md-2">
                    <textarea class="form-control" id="emp_ant_2_info" name="emp_ant_2_info" placeholder="SI o NO. POR QUE?"><?php echo $emp_ant_2_info ?></textarea>
                </div>
                <div class="form-group  col-md-2">
                    <textarea class="form-control" id="emp_ant_3_info" name="emp_ant_3_info" placeholder="SI o NO. POR QUE?"><?php echo $emp_ant_3_info ?></textarea>
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
                    <input type="text" class="form-control" value="<?php echo $ref_1_nom ?>" id="ref_1_nom" name="ref_1_nom">
                    <input type="text" class="form-control" value="<?php echo $ref_2_nom ?>" id="ref_2_nom" name="ref_2_nom">
                    <input type="text" class="form-control" value="<?php echo $ref_3_nom ?>" id="ref_3_nom" name="ref_3_nom">
                    <input type="text" class="form-control" value="<?php echo $ref_4_nom ?>" id="ref_4_nom" name="ref_4_nom">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $ref_1_tel ?>" id="ref_1_tel" name="ref_1_tel">
                    <input type="text" class="form-control" value="<?php echo $ref_2_tel ?>" id="ref_2_tel" name="ref_2_tel">
                    <input type="text" class="form-control" value="<?php echo $ref_3_tel ?>" id="ref_3_tel" name="ref_3_tel">
                    <input type="text" class="form-control" value="<?php echo $ref_4_tel ?>" id="ref_4_tel" name="ref_4_tel">
                </div>
                <div class="form-group col-md-3">
                    <input type="text" class="form-control" value="<?php echo $ref_1_domicilio ?>" id="ref_1_domicilio" name="ref_1_domicilio">
                    <input type="text" class="form-control" value="<?php echo $ref_2_domicilio ?>" id="ref_2_domicilio" name="ref_2_domicilio">
                    <input type="text" class="form-control" value="<?php echo $ref_3_domicilio ?>" id="ref_3_domicilio" name="ref_3_domicilio">
                    <input type="text" class="form-control" value="<?php echo $ref_4_domicilio ?>" id="ref_4_domicilio" name="ref_4_domicilio">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $ref_1_ocupacion ?>" id="ref_1_ocupacion" name="ref_1_ocupacion">
                    <input type="text" class="form-control" value="<?php echo $ref_2_ocupacion ?>" id="ref_2_ocupacion" name="ref_2_ocupacion">
                    <input type="text" class="form-control" value="<?php echo $ref_3_ocupacion ?>" id="ref_3_ocupacion" name="ref_3_ocupacion">
                    <input type="text" class="form-control" value="<?php echo $ref_4_ocupacion ?>" id="ref_4_ocupacion" name="ref_4_ocupacion">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $ref_1_tiempo ?>" id="ref_1_tiempo" name="ref_1_tiempo">
                    <input type="text" class="form-control" value="<?php echo $ref_2_tiempo ?>" id="ref_2_tiempo" name="ref_2_tiempo">
                    <input type="text" class="form-control" value="<?php echo $ref_3_tiempo ?>" id="ref_3_tiempo" name="ref_3_tiempo">
                    <input type="text" class="form-control" value="<?php echo $ref_4_tiempo ?>" id="ref_4_tiempo" name="ref_4_tiempo">
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
                        <option value="no selecciono">Seleccionar</option>
                        <option value="internet" <?php if ($dat_gen_question_1 == 'internet') {
                                                        $selected = 'selected';
                                                        echo $selected;
                                                    } ?>>internet</option>
                        <option value="anuncio" <?php if ($dat_gen_question_1 == 'anuncio') {
                                                    $selected = 'selected';
                                                    echo $selected;
                                                } ?>>anuncio</option>
                        <option value="otro" <?php if ($dat_gen_question_1 == 'otro') {
                                                    $selected = 'selected';
                                                    echo $selected;
                                                } ?>>otro</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_2" id="dat_gen_question_2" value="SI" <?php if ($dat_gen_question_2 == 'SI') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="dat_gen_question_2">
                        SI
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="dat_gen_question_2" id="dat_gen_question_2" value="NO" <?php if ($dat_gen_question_2 == 'NO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
                    <label class="form-check-label" for="dat_gen_question_2">
                        NO
                    </label>
                </div>
                <div class="form-group col-md-4">
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_3" id="dat_gen_question_3" value="SI" <?php if ($dat_gen_question_3 == 'SI') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="dat_gen_question_3">
                        SI
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="dat_gen_question_3" id="dat_gen_question_3" value="NO" <?php if ($dat_gen_question_3 == 'NO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
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
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_4" id="dat_gen_question_4" value="SI" <?php if ($dat_gen_question_4 == 'SI') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="dat_gen_question_4">
                        SI
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="dat_gen_question_4" id="dat_gen_question_4" value="NO" <?php if ($dat_gen_question_4 == 'NO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
                    <label class="form-check-label" for="dat_gen_question_">
                        NO
                    </label>
                </div>
                <div class="form-group col-md-4">
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_5" id="dat_gen_question_5" value="SI" <?php if ($dat_gen_question_5 == 'SI') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="dat_gen_question_5">
                        SI
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="dat_gen_question_5" id="dat_gen_question_5" value="NO" <?php if ($dat_gen_question_5 == 'NO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
                    <label class="form-check-label" for="dat_gen_question_5">
                        NO
                    </label>
                </div>
                <div class="form-group col-md-4">
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_6" id="dat_gen_question_6" value="SI" <?php if ($dat_gen_question_6 == 'SI') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="dat_gen_question_6">
                        SI
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="dat_gen_question_6" id="dat_gen_question_6" value="NO" <?php if ($dat_gen_question_6 == 'NO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
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
                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="radio" name="dat_gen_question_7" id="dat_gen_question_7" value="SI" <?php if ($dat_gen_question_7 == 'SI') {
                                                                                                                                                        $checked = 'checked';
                                                                                                                                                        echo $checked;
                                                                                                                                                    } ?>>
                    <label class="form-check-label" for="dat_gen_question_7">
                        SI
                    </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input class="form-check-input" type="radio" name="dat_gen_question_7" id="dat_gen_question_7" value="NO" <?php if ($dat_gen_question_7 == 'NO') {
                                                                                                                                    $checked = 'checked';
                                                                                                                                    echo $checked;
                                                                                                                                } ?>>
                    <label class="form-check-label" for="dat_gen_question_7">
                        NO
                    </label>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" value="<?php echo $dat_gen_question_8 ?>" id="dat_gen_question_8" name="dat_gen_question_8">
                </div>
                <div class="form-group col-md-6">
                </div>
            </div><br><br><br><br>
    </div>
    </form>
    <div class="col-1"></div>
</section>