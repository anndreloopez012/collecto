<script>
    function fntInsertHome() {
        var datos = $('#formData').serialize();

        valor = document.getElementById("puesto_sol").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("fecha_sol").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("sueldo_mensual").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("sueldo_anual").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_pri_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_basic_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("diver_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("univer_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_comer_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_pri_ubi").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_basic_ubi").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("diver_ubi").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("univer_ubi").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_comer_ubi").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_pri_date_de").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_basic_date_de").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("diver_date_de").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("univer_date_de").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_comer_date_de").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_pri_date_hasta").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_basic_date_hasta").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("diver_date_hasta").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("univer_date_hasta").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_comer_date_hasta").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_pri_a").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_basic_a").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("diver_a").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("univer_a").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_comer_a").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_pri_titul").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_basic_titul").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("diver_titul").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("univer_titul").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edu_comer_titul").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("est_act_escuela").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("est_act_horario").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("est_act_curso").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("est_act_grado").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("idiomas").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("nivel_idioma").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("funcion_oficina_domin").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("uso_maquinas").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("software_domin").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("otr_funcion_domin").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ape_pat").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ape_mat").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("nombre_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("edad_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("sexo_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("domicilio_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("colonia_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("telefono_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("celular_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("vive_con").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("fecha_nac_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("estatura_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("peso_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("depende_de").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("estado_civil_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("cui_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("num_seg_social").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("nit_per").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("port_licencia").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("tipo_licencia").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("num_licencia").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("esta_solud_question_1").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("esta_solud_question_2").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("esta_solud_question_3").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("esta_solud_question_4").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("esta_solud_question_5").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("esta_solud_question_6").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("pat_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("pat_vive").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("pat_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("pat_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("mat_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("mat_vive").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("mat_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("mat_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("cony_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("cony_vive").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("cony_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("cony_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("fam_gen").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }

        valor = document.getElementById("ref_1_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_1_tel").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_1_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_1_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_1_tiempo").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_2_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_2_tel").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_2_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_2_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_2_tiempo").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_3_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_3_tel").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_3_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_3_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_3_tiempo").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_4_nom").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_4_tel").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_4_domicilio").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_4_ocupacion").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("ref_4_tiempo").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_1").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_2").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_3").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_4").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_5").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_6").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_7").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }
        valor = document.getElementById("dat_gen_question_8").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor llenar todo el formulario');
            return false;
        }



        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "cv.php?ajax=true&validaciones=insert_cv",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#formData")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        } else if (r.status == 0) {
                            alertify.alert('Aviso', 'Por favor llenar todo el formulario!');
                            //location.reload(); 
                        }
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };
</script>