<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vue extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('menu');
		$this->load->view('home');
        $this->load->view('footer');
	}
	/*public function home()
	{
		$this->load->view('menu');
		$this->load->view('home');
	}*/
	public function galleriePublique(){
		$this->load->view('menu');
		$this->load->view('galleriePublique.php');
        $this->load->view('footer');
	}
	public function galleriePrivee(){
		$this->load->view('menu');
		$this->load->view('galleriePrivee.php');
        $this->load->view('footer');
	}
}
