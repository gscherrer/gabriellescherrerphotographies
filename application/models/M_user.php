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
}