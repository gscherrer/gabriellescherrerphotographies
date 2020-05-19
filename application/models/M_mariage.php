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

	public function setMariage($titre, $date, $date_crea, $file_link, $mdp, $snapshot_link, $mail){
			$data = array(
				'id' => '',
				'titre' => $titre,
				'date' => $date,
				'date_crea' => $date_crea,
				'dl_link' =>  $file_link,
				'mdp' =>  $mdp,
				'snapshot_link' =>  $snapshot_link,
        'email' =>  $mail
			);
			if($this->db->insert('mariage', $data)){
				return true;
			}
			else return false;
	}
	public function deleteMariage($id){
		$sql = "DELETE from mariage WHERE id=".$id;
		$query = $this->db->query($sql);
		return $query;
	}

	public function getMariageByTitle($titre){
        $sql = "SELECT * FROM mariage WHERE titreMariage='".$titre."'";
		$query = $this->db->query($sql);
        return $query->result_array();
	}

	public function getMariageById($id){
        $sql = "SELECT * FROM mariage WHERE idMariage='".$id."'";
		$query = $this->db->query($sql);
        return $query->result();
	}

  public function getMariageByMail($mail){
        $sql = "SELECT * FROM mariage WHERE email ='".$mail."'";
		$query = $this->db->query($sql);
        return $query->result();
	}

	public function getAllMariage(){
		$sql = 'SELECT * FROM mariage';
		$query = $this->db->query($sql);
        return $query->result_array();
	}

	public function setSnapshotName($id, $file_name){
		$sql = "UPDATE `mariage` SET `snapshot_link`='".$file_name."' WHERE `id`='".$id."'";
		$query = $this->db->query($sql);
        $file = 'snap.txt';
		// Ouvre un fichier pour lire un contenu existant
		$current = file_get_contents($file);
		// Ajoute une personne
		$current .= $file_name.'- '.$id.' ';
		// Écrit le résultat dans le fichier
		file_put_contents($file, $current);
	}
}
