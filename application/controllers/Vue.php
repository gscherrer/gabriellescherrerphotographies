<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vue extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->helper('url');
		 $this->load->library('session');
		 $this->load->helper('download');
    }
	public function index()
	{
		$this->load->helper('directory');

		$map = directory_map('assets/images/public/');
		$data['photo'] = $map;

		$this->load->view('menu');
		$this->load->view('home', $data);
        $this->load->view('footer');
	}

	public function logIn(){

	}

	public function galleriePublique(){
		$this->load->view('menu');
		$this->load->view('galleriePublique.php');
        $this->load->view('footer');
	}

	/**
	 * TODO: à remplacer par une fonction affichant l'ensemble des mariages publié et proposant qq photos (extraits)!
	 * @return
	 */
	public function galleriePrivee(){
		$this->load->model('m_mariage');
		$data['mariage'] = $this->m_mariage->getAllMariage();

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
	public function dlPhoto(){
		$mail = $this->input->post('mail');
		$mdp = $this->input->post('mdp');
		$this->load->model('m_mariage');
		$mariage = $this->m_mariage->getMariageByMail($mail);

		if(password_verify($mdp,$mariage['0']->mdp)){
			$dlLink = $mariage['0']->dl_link;
			$link = $this->download($dlLink);
		//	var_dump($link);
		}
		else{
			echo 'Mauvais mot de passe';
		}
	}

	public function download($fileName = NULL) {
		$fileName = $fileName.".zip";
		if ($fileName) {
			$file = "assets/uploads/mariage_zip/".$fileName;
			// check file exists
			if (file_exists ( $file )) {
			 // get file content
			 $data = file_get_contents ( $file );
			 //force download
			 force_download ( $fileName, $data);
			 redirect ( base_url ('vue/galleriePrivee') );
			} else {
			 // Redirect to base url
			 redirect ( base_url ('vue/galleriePrivee') );
			}
	   }
	}
	//@TODO: rajouter un champ "sujet" dans le formulaire
	public function contact(){
		$this->load->library('send');
		$senderName = $this->input->post('name');
		$from = $this->input->post('email');
		$phone = $this->input->post('phone');
		$subject = 'A venir';
		$message = $this->input->post('message');
		$mailBody = $message.'\n de la part de: '.$senderName;

		if( isset($senderName) && isset($from) && isset($message)){
			$resMail =	$this->send->mail($from, $to='guillaume.scherrer29@gmail.com', $senderName, $subject, $mailBody);
			$data['resMail'] = $resMail;
			$this->load->view('menu');
			$this->load->view('home', $data);
			$this->load->view('footer');
		}
		else{
			$this->load->view('menu');
			$this->load->view('home');
			$this->load->view('footer');
		}
	}
}
