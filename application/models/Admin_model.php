<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
  public function __construct()
	{
	         parent::__construct();
           $this->load->database();
	}

 	public function index()
	{
	}
  public function login()
  {
    $this->db->where('username',$this->input->post('user'));
    $this->db->where('pass',md5($this->input->post('pass')));
    $query = $this->db->get('user');
    return $query->result();
  }
  // journal area //
	public function getjournal()
  {
    if($this->input->post('id')){
      $this->db->where('ID',$this->input->post('id'));
    }
    $query = $this->db->get('journal');
    return $query->result();
	}
  public function addjournal()
  {
    $data = array(
   'Date' => $this->input->post('date') ,
   'Title' => $this->input->post('title') ,
   'Description' => $this->input->post('content'),
   'Image' => $this->input->post('picture')
    );

    $result = $this->db->insert('journal', $data);

    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function editjournal()
  {
    $data = array(
   'Date' => $this->input->post('date') ,
   'Title' => $this->input->post('title') ,
   'Description' => $this->input->post('content'),
   'Image' => $this->input->post('picture')
    );

    $this->db->where('ID', $this->input->post('id'));
    $result = $this->db->update('journal', $data);

    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function deletejournal()
  {
    $result = $this->db->delete('journal', array('ID' => $this->input->post('id')));

    if($result){
      return true;
    }else{
      return false;
    }
  }
  // journal area end //
  // Catalogue area //
  public function getcatalog()
  {
    if($this->input->post('id')){
      $this->db->where('ID',$this->input->post('id'));
    }
    $query = $this->db->get('catalogue');
    return $query->result();
	}
  public function getcatalogtype()
  {
    $this->db->group_by('Type');
    $query = $this->db->get('catalogue');
    return $query->result();
	}

  public function addcatalogue()
  {
    $data = array(
   'Date' => $this->input->post('date') ,
   'Type' => $this->input->post('type') ,
   'Title' => $this->input->post('title') ,
   'Content' => $this->input->post('content'),
   'Image' => $this->input->post('picture')
    );

    $result = $this->db->insert('catalogue', $data);

    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function editcatalogue()
  {
    $data = array(
   'Date' => $this->input->post('date') ,
   'Title' => $this->input->post('title') ,
   'Type' => $this->input->post('type') ,
   'Content' => $this->input->post('content'),
   'Image' => $this->input->post('picture')
    );

    $this->db->where('ID', $this->input->post('id'));
    $result = $this->db->update('catalogue', $data);

    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function deletecatalogue()
  {
    $result = $this->db->delete('catalogue', array('ID' => $this->input->post('id')));

    if($result){
      return true;
    }else{
      return false;
    }
  }
  // catalogue area end //
  // about area //
  public function getabout()
  {
    if($this->input->post('id')){
      $this->db->where('ID',$this->input->post('id'));
    }
    $query = $this->db->get('about');
    return $query->result();
	}
  public function addabout()
  {
    $data = array(
   'Date' => $this->input->post('date') ,
   'Content' => $this->input->post('content'),
   'Image' => $this->input->post('picture')
    );

    $result = $this->db->insert('about', $data);

    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function editabout()
  {
    $data = array(
   'Date' => $this->input->post('date') ,
   'Content' => $this->input->post('content'),
   'Image' => $this->input->post('picture')
    );

    $this->db->where('ID', $this->input->post('id'));
    $result = $this->db->update('about', $data);

    if($result){
      return true;
    }else{
      return false;
    }
  }
  public function deleteabout()
  {
    $result = $this->db->delete('about', array('ID' => $this->input->post('id')));

    if($result){
      return true;
    }else{
      return false;
    }
  }
  // about area end //

}
