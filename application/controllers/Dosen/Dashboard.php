<?php
Class Dashboard extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		$this->load->view('Templates/Header');
		$this->load->view('Dosen/index');
		$this->load->view('Templates/Footer');
	}
}
?>