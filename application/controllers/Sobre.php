<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller
{

	public function index()
	{
		$data["title"] = 'Sobre mim';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/sobre-mim', $data);
		$this->load->view('templates/end-js', $data);
	}
}
