<?php
require('../server/lib.php');

$con = new ConectorBD();

if ($con->initConexion()=='OK'){
    $datos['nombres'] = "'Carlos Tolentino'";
    $datos['correo'] = "'carlostolentino@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'12/05/1990'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Paola Lazala'";
    $datos['correo'] = "'paolalazala@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'01/08/1991'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";

    $datos['nombres'] = "'Raul Mondesi'";
    $datos['correo'] = "'rmondesi@gmail.com'";
    $datos['password'] = "'".password_hash("123",PASSWORD_DEFAULT)."'";
    $datos['fecnac'] = "'09/11/1986'";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se han registrado los datos correctamente";
    }else echo "Se ha producido un error en la actualización";


    $con->cerrarConexion();
}else {
    echo "Se presentó un error en la conexión";
}

?>-
