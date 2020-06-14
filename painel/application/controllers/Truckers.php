<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Truckers extends CI_Controller {
  public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
    $this->load->model("usuarios_model");
    $this->load->model("truckers_model");
		$this->load->model("ratings_model");
		$logado = $this->login->checkUser();
		if (!$logado || $_SESSION['usuario']['profile'] != 1) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
	}

	public function index()
	{
    $data['truckers'] = $this->truckers_model->fetch_truckers();

		$this->load->view('truckers/truckers', $data);
	}


  public function detail($id){
    $data['trucker'] = $this->truckers_model->fetch_trucker($id);
    $data['ratings'] = $this->ratings_model->fetch_ratings_made($id);

    $this->load->view('truckers/detail', $data);
  }

  public function alterar_usuario(){
    $rows = array();

    $rows['nome'] = $this->security->xss_clean($this->input->post('nome'));
    $rows['email'] = $this->security->xss_clean($this->input->post('email'));
    $rows['perfil'] = $this->security->xss_clean($this->input->post('perfil'));
    $rows['observacao'] = $this->security->xss_clean($this->input->post('observacao'));
    $rows['situacao'] = $this->security->xss_clean($this->input->post('situacao'));
		$rows['id_usuario'] = $this->security->xss_clean($this->input->post('id_usuario'));

    $this->usuarios_model->update_usuario($rows);

    redirect(base_url().'usuarios/detalhe/'.$this->input->post('id_usuario'));
  }
}
