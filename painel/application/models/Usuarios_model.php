<?php
class Usuarios_model extends CI_Model {

  public $table = 'admin';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_usuarios(){
    $this->db->select('u.id, u.name, u.email, t.description');
    $this->db->from('users as u');
    $this->db->join('type_user as t', 'u.profile = t.profile');
    $this->db->where('u.profile', 1);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_usuario($id){
    $this->db->select('id, name, email, profile');
    $this->db->from('users');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function update_usuario($rows){
    $this->db->set('name', $rows['nome']);
    $this->db->set('email', $rows['email']);
    $this->db->set('profile', $rows['perfil']);
		$this->db->where('id', $rows['id_usuario']);
		$this->db->update('users');
  }

}
