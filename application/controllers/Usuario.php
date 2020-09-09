<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("UsuarioModel");
	}

	public function index(){
		$Usuario = $this->UsuarioModel->getUsuario();
		$this->layout->view("Usuario", compact("Usuario"));
	}

	public function guardarUsuario(){
		if($this->input->post()){
			$usuario = $this->db->escape($_POST["usuario"]);			
			$correo = $this->db->escape($_POST["correo"]);
			$pass = $this->db->escape($_POST["pass"]);
			if ($this->UsuarioModel->setUsuario($usuario, $correo, $pass)){
				header("Location:".base_url()."Usuario");
			}
		}
	}

	public function modifyUsuario($id_usuario){
		if (!$id_usuario == null){
			$id_usuario = $this->db->escape((int)$id_usuario);
			$usuario = $this->UsuarioModel->getUser($id_usuario);
			$this->layout->view("modifyUsuario", compact("usuario"));
		}
		else{
			header("Location:".base_url()."Usuario");
		}
	}

	public function actualizarUsuario(){
		if($this->input->post()){
			$id = $this->db->escape((int)$_POST["id"]);
			$usuario = $this->db->escape($_POST["usuario"]);			
			$correo = $this->db->escape($_POST["correo"]);
			$pass = $this->db->escape($_POST["pass"]);
			if ($this->UsuarioModel->updateUsuario($id,$usuario, $correo, $pass)){
				header("Location:".base_url()."Usuario");
			}
		}
	}

	public function deleteUsuario(int $id_usuario){
			if ($this->UsuarioModel->deleteUsuario($id_usuario)){
				header("Location:".base_url()."Usuario");
			}
		

	}
}
