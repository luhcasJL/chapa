<?php
class Sos_model extends CI_Model {

  public $table = 'sos';

  public function __construct(){
      parent::__construct();
  }

  public function insert($posts){
    $data = array(
      'name' => $posts['name'],
      'email' => $posts['email'],
      'type' => $posts['type'],
      'cep' => $posts['cep'],
      'adress' => $posts['rua'],
      'number' => $posts['numero'],
      'neighborhood' => $posts['bairro'],
      'city' => $posts['cidade'],
      'state' => $posts['uf'],
      'latitude' => $posts['latitude'],
      'longitude' => $posts['longitude'],
    );
    $this->db->insert('companies', $data);
  }

  public function fetch_sos(){
    $this->db->select('s.*, u.name, t.description');
    $this->db->from('sos as s');
    $this->db->join('users as u', 's.trucker = u.id');
    $this->db->join('type_sos as t', 's.type = t.type');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_sos_detail($id){
    $this->db->select('s.*, u.name, t.description');
    $this->db->from('sos as s');
    $this->db->join('users as u', 's.trucker = u.id');
    $this->db->join('type_sos as t', 's.type = t.type');
    $this->db->where('s.id', $id);
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
