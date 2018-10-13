<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vue extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('menu');
		$this->load->view('home');
        $this->load->view('footer');
	}
	public function logIn(){
		
	}

	public function galleriePublique(){
		$this->load->view('menu');
		$this->load->view('galleriePublique.php');
        $this->load->view('footer');
	}
	public function galleriePrivee(){
		$this->load->model('m_mariage');
		$data['mariage'] = $this->m_mariage->getAllMariage();
		$file = 'test.txt';
		
		$this->load->view('menu');
		$this->load->view('galleriePrivee.php', $data);
        $this->load->view('footer');
	}
	public function espacemaries(){
		if(!$this->isLogged()){
			redirect(base_url(''));
		}
	
		$this->load->view('menu');
		$this->load->view('espacemaries.php', $data);
        $this->load->view('footer');
	}
}
