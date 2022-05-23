<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games_model extends CI_Model {

/*
 *************************************
 * DADOS DA TABELA EM FORMATO DE ARRAY
 *************************************
 **/
	public function index()
	{
		return $this->db->get("tb_games")->result_array();
	}

/*
 *************************************
 * MÉTODO PARA CRIAR NOVO JOGO (INSERT)
 *************************************
 **/
	public function create($game)
	{
		$this->db->insert('tb_games', $game);
	}


	public function mostrar($id)
	{
		return $this->db->get_where("tb_games", array("id" => $id))->row_array();
	}

	public function atualizar($id, $game)
	{
		$this->db->where("id", $id);
		return $this->db->update("tb_games", $game);
	}

	public function deletado($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete('tb_games');
	}
}
