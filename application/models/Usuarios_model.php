<?php
class Usuarios_model extends CI_Model {

  public $table = 'admin';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_usuarios(){
    $this->db->select('u.id, u.nome, u.email, t.descricao');
    $this->db->from('admin as u');
    $this->db->join('tipo_cadastro as t', 'u.perfil = t.perfil');
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_usuario($id){
    $this->db->select('id, nome, email, observacao, perfil, situacao');
    $this->db->from('admin');
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function update_usuario($rows){
    $this->db->set('nome', $rows['nome']);
    $this->db->set('email', $rows['email']);
    $this->db->set('perfil', $rows['perfil']);
    $this->db->set('observacao', $rows['observacao']);
    $this->db->set('situacao', $rows['situacao']);
		$this->db->where('id', $rows['id_usuario']);
		$this->db->update('admin');
  }

}
