<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 08/09/2018
 * Time: 11:58
 */
class m_user extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	public function setUser($name, $password)
	{
			$data = array(
				'id' => '',
				'nom' => $name,
				'password' => $password,
			);
			if($this->db->insert('user', $data)){
				return true;
			}
			else return false;
	}
	
	public function getUserByMail($mail)
	{
        $sql = "SELECT * FROM user WHERE nom ='".$mail."'";
        $query = $this->db->query($sql);
        return $query->result();
	}
}
