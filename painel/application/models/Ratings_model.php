<?php
class Ratings_model extends CI_Model {

  public $table = 'ratings';

  public function __construct(){
      parent::__construct();
  }

  public function fetch_ratings_made($id){
    $this->db->select('r.rating, r.testimony, r.company');
    $this->db->from('ratings as r');
    $this->db->where('r.trucker', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function fetch_ratings_received($id){
    $this->db->select('r.rating, r.testimony, r.company');
    $this->db->from('ratings as r');
    $this->db->where('r.company', $id);
    $query = $this->db->get();
    return $query->result();
  }

}
