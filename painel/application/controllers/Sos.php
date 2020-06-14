<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sos extends CI_Controller {
  public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
    $this->load->model("usuarios_model");
    $this->load->model("truckers_model");
    $this->load->model("ratings_model");
    $this->load->model("companies_model");
		$this->load->model("sos_model");
		$logado = $this->login->checkUser();
		if (!$logado || $_SESSION['usuario']['profile'] != 1) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
	}

	public function index()
	{
    $data['sos'] = $this->sos_model->fetch_sos();

		$this->load->view('sos/sos', $data);
	}


  public function detail($id){
    $data['sos'] = $this->sos_model->fetch_sos_detail($id);

    $this->load->view('sos/detail', $data);
  }
}
