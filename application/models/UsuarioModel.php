<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	public function getUsuario(){
		return $this->db->query("SELECT * FROM usuario")-> result();
	}

	public function setUsuario(string $usuario, string $correo, string $pass){
		return $this->db->query("INSERT INTO usuario (usuario,correo,pass) values ({$usuario},{$correo},{$pass})");
	}

	public function getUser(int $id_usuario){
		return $this->db->query("SELECT * FROM usuario WHERE id_usuario={$id_usuario}")->row();
	}

	public function updateUsuario(int $id_usuario, string $usuario, string $correo, string $pass){
		return $this->db->query("UPDATE usuario SET usuario= {$usuario}, correo={$correo}, pass={$pass} WHERE id_usuario={$id_usuario}" );
	}

	public function deleteUsuario(int $id_usuario){
		return $this->db->query("DELETE FROM usuario WHERE id_usuario={$id_usuario}");
	}
}