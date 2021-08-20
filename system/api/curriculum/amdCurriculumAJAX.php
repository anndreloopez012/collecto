<script>
    function fntDibujoTablaCV() {

        var strnombre_ = $("#nombre_").val();
        var strpuesto_ = $("#puesto_").val();
        var strfecha_ = $("#fecha_").val();
        var strSueldo_ = $("#Sueldo_").val();

        //alert(strCategori + "                                  strCategori");
        //document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "curriculum.php?validaciones=table_cv",
            data: {
                nombre_: strnombre_,
                puesto_: strpuesto_,
                fecha_: strfecha_,
                Sueldo_: strSueldo_,
            },
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#contenedor-cv").html("");
                $("#contenedor-cv").html(data);
               // document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    window.addEventListener('load', fntDibujoTablaCV, false)

</script>