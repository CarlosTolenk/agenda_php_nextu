<?php

  require('conector.php');

  $con = new ConectorBD();
  $con->initConexion('agenda');


//**********Primera inseccion************//
  $hash = password_hash('123456', PASSWORD_DEFAULT);
  $data['username']= '"carlos.tolentino@gmail.com"';
  $data['password']= '"'.$hash.'"';
  $data['nombre']='"Carlos Tolentino"';
  $data['fecha_nacimiento']='"1991-11-23"';

  $con->insertData('usuarios', $data);


//**********Segunda inseccion************//
  $hash = password_hash('123456', PASSWORD_DEFAULT);
  $data['username']= '"paola.lazala@gmail.com"';
  $data['password']= '"'.$hash.'"';
  $data['nombre']='"Paola Lazala"';
  $data['fecha_nacimiento']='"1992-10-23"';

  $con->insertData('usuarios', $data);


//**********Tercera inseccion************//
  $hash = password_hash('123456', PASSWORD_DEFAULT);
  $data['username']= '"tolentinoe@gmail.com"';
  $data['password']= '"'.$hash.'"';
  $data['nombre']='"Carlos Tolentino"';
  $data['fecha_nacimiento']='"1991-11-23"';

  $con->insertData('usuarios', $data);

?>
