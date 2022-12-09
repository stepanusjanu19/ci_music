<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
		$this->load->model('Data_Lagu','MLagu');
	}
	
	public function index()
	{
		$data = [
			"title" => "Music App | Songs Page",
			"subtitle" => "Songs",
			"list_lagu" => $this->MLagu->get_data()
		];
		$this->load->view('page/header', $data);
		$this->load->view('page/sidebar');
		$this->load->view('home/view-home', $data);
		$this->load->view('page/footer');
	}
}