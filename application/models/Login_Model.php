<?php

class Login_model extends CI_Model {

  public $table = 'users';

  public function __construct(){
      parent::__construct();
  }

  public function insert_recuperar_senha(array $data){
    return $this->db->insert('recuperar_senha', $data);
  }

  public function autentica_email($email){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email', $email);
    $query = $this->db->get();
    return $query->result();
  }

  public function autentica_token($token){
    $this->db->select('*');
    $this->db->from('recuperar_senha');
    $this->db->where('token', $token);
    $query = $this->db->get();
    return $query->result();
  }

  public function autentica_login($email){
    $this->db->select('id');
    $this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();
    return $query->result();
  }

  public function registerUser($data) {
    # register user
    $senha = password_hash($data['password'], PASSWORD_BCRYPT);
    $user = $this->db->insert($this->table, array("name" => $data['name'], "profile" => 2, "email" => $data['email'], "password" => $senha, "city" => $data['city'], "state" => $data['state']));

    return $user;
  }

  public function updateUser($data) {
    # update user
    $updatedata = array();

    if (!empty($data['senha'])) {
      $senha = password_hash($data['senha'], PASSWORD_BCRYPT);
      $updatedata['senha'] = $senha;
    }

    // if (!empty($data['nome'])) {
    //   $updatedata['nome'] = $data['nome'];
    // }

    $user = $this->db->update($this->table, $updatedata, array("id" => $data['id']));

    return $user;
  }


  public function autentica($data = array()){
    if(!empty($data['email']) && !empty($data['password'])){

      // Primeiro valida o e-mail

      $return = $this->db->select('*')->where(array('email' => $data['email']))->get($this->table);

      if($return->num_rows()) {

        // usuário encontrado

        $user = $return->row_array();

        // faz a comparação da senha informada com a hash cadastrada;

        $validation = password_verify($data['password'], $user['senha']);

        if ($validation)
          // sucesso
          return $user;
        else
          // sem sucesso
          return array();
      }
      return array();
    }
    return array();
  }

  public function checkUser() {
    try {
      $user = $this->session->userdata('usuario');
    }
    catch(\Exception $ex) {
      $user = array();
    }
    return $user;
  }

  public function user() {
    return @$this->session->userdata('usuario');
  }

}
