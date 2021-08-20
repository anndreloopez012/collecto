<?php

require_once '../interbase/conexion.php';
session_start();

function validarUsuario($usuario, $pass)
{
    $v_result = 0;

    if (($pass <> '') && ($usuario <> '')) {
        $pass = openssl_encrypt($pass, COD, KEY);
        $pass = openssl_decrypt($pass, COD, KEY);
        $pass = str_replace("'", "''", $pass);
        $usuario = str_replace("'", "''", $usuario);

        $sql = "SELECT * FROM AXESO WHERE USUARIO  = '$usuario' AND CLAVE = '$pass' ";
        $result = mysqli_query($link, $sql);
        $count = mysqli_num_rows($result);
    if ($count == 1) {
        while ( $rTMP = mysqli_fetch_assoc ($result) ){
            //$pass = openssl_encrypt($pass, COD, KEY);
            $_SESSION['logged'] = true;
            $_SESSION['USUARIO'] = $v_reg[1];
            $_SESSION['CLAVE'] = $v_reg[2];
            $_SESSION['NOMBRE'] = $v_reg[0];
            //$_SESSION['PASSWEB'] = $pass;
            //$pass = openssl_decrypt($pass, COD, KEY);
            //$_SESSION['PASSWEB_DECRYPT'] = $pass;

           //$i = 1;
           //$j = 131;
           //$intContadorCampos = 5;
           //for ($x = $i; $x <= $j; $x++) {

           //    $_SESSION['A' . $x] = isset($v_reg[$intContadorCampos]) ? $v_reg[$intContadorCampos] : "NO se encontro";
           //    $intContadorCampos++;
           //}
            $v_result = 1;
        }
        

        header("location: app/catalogo.php");
    } else {
        header("location: index.php");
    }
        //die();
    }
    return $v_result;
}
