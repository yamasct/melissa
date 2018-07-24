<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
	         parent::__construct();
					 $this->load->helper(array('form', 'url'));
					 $this->load->model('admin_model');
					 $this->load->library('session');
	}
 	public function index()
	{
		$this->load->view('admin/knocknock');
	}
	public function login(){
		$data = $this->admin_model->login();
		if($data){
			$this->session->set_userdata('boleh', 'boleh');
			echo true;
		}else{
			unset($_SESSION['boleh']);
			echo false;
		}
	}
	public function logout(){
		unset($_SESSION['boleh']);
		header('Location: '.base_url()."admin");
	}
	// journal area //
	public function journal(){
		$data['data'] = $this->admin_model->getjournal();
		$this->load->view("admin/admin_journal", $data);

	}
	public function selectjournal(){
		 $data = $this->admin_model->getjournal();
		 echo json_encode($data);
	}
	public function addjournal()
	{
		$data = $this->admin_model->addjournal();
		if($data){
			echo true;
		}else{
			echo false;
		}
	}
	public function editjournal()
	{
		$data = $this->admin_model->editjournal();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
	public function deletejournal()
	{
		$data = $this->admin_model->deletejournal();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
	// journal area end //
	// catalogue area //
	public function catalogue(){
		$data['data'] = $this->admin_model->getcatalog();
		$data['type'] = $this->admin_model->getcatalogtype();
		$this->load->view("admin/admin_catalogue", $data);

	}
	public function selectcatalogue(){
		 $data = $this->admin_model->getcatalog();
		 echo json_encode($data);
	}
	public function addcatalogue()
	{
		$data = $this->admin_model->addcatalogue();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
	public function editcatalogue()
	{
		$data = $this->admin_model->editcatalogue();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
	public function deletecatalogue()
	{
		$data = $this->admin_model->deletecatalogue();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
// catalogue area end //
	// about area //
	public function about(){
		$data['data'] = $this->admin_model->getabout();
		$this->load->view("admin/admin_about", $data);

	}
	public function selectabout(){
		 $data = $this->admin_model->getabout();
		 echo json_encode($data);
	}
	public function addabout()
	{
		$data = $this->admin_model->addabout();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
	public function editabout()
	{
		$data = $this->admin_model->editabout();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
	public function deleteabout()
	{
		$data = $this->admin_model->deleteabout();
		if($data){
			echo true;
		}else{
			echo false;
		}

	}
// catalogue area end //

	public function uploadimage($image)
	{
		$config['upload_path']          = '../assets/images/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1000;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
    {
            // $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
						return false;
    }
    else
    {
			return true;
            // $data = array('upload_data' => $this->upload->data());

            // $this->load->view('upload_success', $data);
    }
		// return true;
	}
}
