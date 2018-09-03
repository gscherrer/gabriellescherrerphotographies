<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vue extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function galleriePublique(){
		$this->load->view('galleriePublique.php');
	}
	public function galleriePrivee(){
		$this->load->view('galleriePrivee.php');
	}
}
