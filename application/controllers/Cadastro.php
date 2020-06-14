<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("login_model", "login");
	}

	public function index()
	{
		if (isset($_POST['register'])) {
      $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[2]');
			$this->form_validation->set_rules('city', 'city', 'trim|required');
      $this->form_validation->set_rules('state', 'state', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

      $sucess = $this->form_validation->run();

      if ($sucess) {
        $data = array("name" => $this->input->post('name'), 'city' => $this->input->post('city'), 'state' => $this->input->post('state'), 'email' => $this->input->post('email'), 'password' => $this->input->post('password'));
  			$this->login->registerUser($data);

        redirect(base_url().'login');
      }
    }

		$this->load->view('cadastro');
	}
}
