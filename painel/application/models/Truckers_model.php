<?php
class Truckers_model extends CI_Model {

  public $table = 'truckers';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_truckers(){
    $this->db->select('u.id, u.name, u.email, u.state, u.city');
    $this->db->from('users as u');
    $this->db->where('u.profile', 2);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_trucker($id){
    $this->db->select('u.id, u.name, u.email, u.state, u.city');
    $this->db->from('users as u');
    $this->db->where('u.id', $id);
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
