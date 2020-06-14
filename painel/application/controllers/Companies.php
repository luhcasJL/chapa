<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {
  public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
    $this->load->model("usuarios_model");
    $this->load->model("truckers_model");
    $this->load->model("ratings_model");
		$this->load->model("companies_model");
		$logado = $this->login->checkUser();
		if (!$logado || $_SESSION['usuario']['profile'] != 1) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
	}

	public function index()
	{
    $data['companies'] = $this->companies_model->fetch_companies();

		$this->load->view('companies/companies', $data);
	}


  public function detail($id){
    $data['company'] = $this->companies_model->fetch_company($id);
    $data['ratings'] = $this->ratings_model->fetch_ratings_received($id);

    $this->load->view('companies/detail', $data);
  }

  public function register()
	{
    if (isset($_POST['cadastrar_usuario'])) {
      $this->form_validation->set_rules('name', 'nome', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('type', 'type', 'trim|required');
      $this->form_validation->set_rules('cep', 'cep', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

      $sucess = $this->form_validation->run();

      if ($sucess) {
        $posts = $this->security->xss_clean($this->input->post());
        $this->companies_model->insert($posts);

        redirect(base_url().'companies');
      }
    }
    $data['types_company'] = $this->companies_model->fetch_types_company();

		$this->load->view('companies/register', $data);
	}
}
