<?php

class m_mariage extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function login($titreMariage, $password){
		$sql = 'SELECT mariage.idMariage, mariage.downloadPassword, mariage.titreMariage FROM mariage WHERE titreMariage = "' . $titreMariage . '" AND downloadPassword = "' . $password . '"';
        $query = $this->db->query($sql);
        return $query->result_array();
	}
	
	public function setMariage(){
		
	}
	
	public function getMariageByTitle($titre){
        $sql = "SELECT * FROM mariage WHERE titreMariage='".$titre."'";
		$query = $this->db->query($sql);
        return $query->result_array();
	}
	
	public function getMariageById($id){
        $sql = "SELECT * FROM mariage WHERE idMariage='".$id."'";
		$query = $this->db->query($sql);
        return $query->result_array();
	}
	
	public function getAllMariage(){
		$sql = 'SELECT * FROM mariage';
		$query = $this->db->query($sql);
        return $query->result_array();
	}
}
