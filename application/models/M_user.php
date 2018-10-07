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
	public function setUser(){
		
	}
	
	public function login(){
		
	}
	public function getUser($mail){
        $sql = "SELECT * FROM user WHERE user.mail ='".$mail."'";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
}
