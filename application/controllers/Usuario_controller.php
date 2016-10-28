<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('usuario/usuario');
	}

   public function recibirDatos()
   {
      $usuario= $this->input->post('usuario');
      $contrasena = $this->input->post('contrasena');

      echo 'usuario:' . $usuario . ' pass: ' . $contrasena ;
   }

   public function nuevo()
   {
      $this->load->view('usuario/crear');
   }

   public function guardar()
   {
      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $usuario = $this->input->post('usuario');
      $contrasena = $this->input->post('contrasena');

      $insert = array(
         'nombre' => $nombre,
         'apellido' => $apellido,
         'usuario' => $usuario,
         'clave' => $clave
         );

      print_r($insert)
   }
}
