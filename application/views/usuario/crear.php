<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <form class="" action="<?=ususario/crear?>" method="post">
         nombre:
         <input type="text" name="nombre" value="">
         apellido
         <input type="text" name="apellido" value="">
         usuario:
         <input type="text" name="usuario" value="">
         clave:
         <input type="password" name="contrasena" value="">
         <input type="submit" name="registrar" value="Registrar">
      </form>
   </body>
</html>
