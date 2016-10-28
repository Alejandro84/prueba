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
      <form class="" action="<?= site_url('usuario/login/verificar-datos');?>" method="post">
         nombre
         <input type="text" name="usuario" value="">
         contraseña
         <input type="password" name="contrasena" value="">
         <input type="submit" name="ingresar" value="Ingresar">
      </form>
   </body>
</html>
