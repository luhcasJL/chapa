<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
  public $user;

  public function __construct(){
		parent::__construct();

    $this->load->model("login_model", "login");
		$this->load->model("usuarios_model");
		$logado = $this->login->checkUser();
		if (!$logado || $_SESSION['usuario']['profile'] != 1) {
			redirect('/');
			exit();
		}

		$this->user = $this->login->user();
	}

	public function index()
	{
    $data['usuarios'] = $this->usuarios_model->fetch_usuarios();

		$this->load->view('usuarios/usuarios', $data);
	}

  public function cadastro()
	{
    if (isset($_POST['cadastrar_usuario'])) {
      $this->form_validation->set_rules('nome', 'nome', 'trim|required|min_length[2]');
      $this->form_validation->set_rules('perfil', 'perfil', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
      $this->form_validation->set_rules('senha', 'senha', 'trim|required|min_length[8]');
      $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");

      $sucess = $this->form_validation->run();

      if ($sucess) {
        $data = array("nome" => $this->input->post('nome'), 'perfil' => $this->input->post('perfil'), 'email' => $this->input->post('email'), 'senha' => $this->input->post('senha'));
  			$this->login->registerUser($data);

        redirect(base_url().'usuarios');
      }
    }
		$this->load->view('usuarios/cadastro');
	}

  public function detalhe($id){
    $data['usuario'] = $this->usuarios_model->fetch_usuario($id);

    $this->load->view('usuarios/detalhe', $data);
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
