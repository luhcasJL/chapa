<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
header("Content-Type: application/json; charset=utf-8");

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  public function __construct(){
		parent::__construct();

    $this->load->model("sos_model");
    $this->load->model("companies_model");

	}

  public function fetch_companies(){
    $companies = $this->companies_model->fetch_companies();
    echo json_encode($companies);
  }

  public function fetch_company(){
    $id = $_GET['id'];
    $client = $this->companies_model->fetch_company($id);
    echo json_encode($client);
  }

  public function insert_sos(){
    $info = $this->input->get();
    $client = $this->sos_model->insert_sos($info);
    echo $client;
  }

  public function insert_rating(){
    $info = $this->input->get();
    $client = $this->ratings_model->insert_rating($info);
    echo $client;
  }

}
