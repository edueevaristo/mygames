<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('games_model');
	}


	public function index()
	{

		$data["games"] = $this->games_model->index();
		$data["title"] = 'Dashboard';


		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/end-js', $data);
	}

	public function novo_jogo()
	{
		$data['title'] =  'Novo Jogo';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/end-js', $data);
	}

	public function criar_jogo()
	{
		$game = $_POST;
		$this->games_model->create($game);
		redirect('dashboard');
	}


	public function mostrar($id)
	{
		$data['game'] = $this->games_model->mostrar($id);
		$data['title'] = 'Editar Jogo';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/end-js', $data);
	}

	public function atualizar($id)
	{
		$game = $_POST;
		$this->games_model->atualizar($id, $game);
		redirect('dashboard');
	}

	public function deletar($id)
	{
		$this->games_model->deletado($id);
		redirect('dashboard');
	}
}
