<?php
class Companies_model extends CI_Model {

  public $table = 'companies';

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
      'summary' => $posts['summary'],
    );
    $this->db->insert('companies', $data);
  }

  public function fetch_companies(){
    $this->db->select('c.*, t.description');
    $this->db->from('companies as c');
    $this->db->join('type_company as t', 'c.type = t.type');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_company($id){
    $this->db->select('c.name, c.email, c.summary, c.type, c.cep, c.adress, c.number, c.neighborhood, c.city, c.state, c.latitude, c.longitude');
    $this->db->from('companies as c');
    $this->db->where('c.id', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_types_company(){
    $this->db->select('type, description');
    $this->db->from('type_company');
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
