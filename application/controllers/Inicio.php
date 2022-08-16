<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Entradas_model');
        $this->load->helper('html');
        $this->load->database();
    }

	public function index()
	{
		$data['entradasb'] = $this->Entradas_model->get_all_entradas();
		$data['_view'] = 'inicio';
		$this->load->view('template', $data);
	}
}