<?php
Class Dashboard extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		$this->load->view('Templates/Header');
		$this->load->view('Mahasiswa/index');
		$this->load->view('Templates/Footer');
	}
}
?>