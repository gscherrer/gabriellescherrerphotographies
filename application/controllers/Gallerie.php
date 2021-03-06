<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallerie extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

    }
	function isLogged()
    {
        if ($this->session->userdata('id') != null ) {
            return true;
        }
        return false;
    }

    public function index()
    {

        if (!$this->isLogged()) {
            $this->session->set_flashdata('message-error', 'Vous devez vous connecté et être admin pour pouvoir accéder à cette page.');
            redirect(base_url());
        }
        $this->load->view('menu');
        $this->load->view('privee');
        $this->load->view('footer');
    }
	
	public function login()
	{
		$password = $this->input->post('userPassword');
		$mail = $this->input->post('userEmail');
		
		$this->load->model('m_user');
		$result = $this->m_user->getUser($mail);

		$hash = $result['0']['password'];
		$level = $result['0']['level'];
		$iduser = $result['0']['iduser'];
		$idmariage= $result['0']['mariage_idmariage'];
		
		$check = password_verify($password, $hash);
        if ($this->input->post('submit') and $check) 
		{
			$newdata = array(
				'iduser' 	=> $iduser,
				'email'     => $mail,
				'idmariage' => $idmariage,
				'logged_in' => TRUE,
				'level'		=> $level
			);
			$this->session->set_userdata($newdata);
			/*$file = 'test.txt';
			// Ouvre un fichier pour lire un contenu existant
			$current = file_get_contents($file);
			$current = $idmariage."\n";
			// Écrit le résultat dans le fichier
			file_put_contents($file, $this->session->email, FILE_APPEND);*/
			
			$this->session->set_flashdata('message-success', 'Bienvenue  <i class="fa fa-hand-peace-o"></i> ');
		}
		else{
			redirect(base_url());
		}
		if($this->session->logged_in == TRUE) {
			if($this->session->level == 'admin'){
				redirect(base_url('Admin'));
			}
			elseif($this->session->level == 'user'){
				redirect(base_url('Gallerie/espaceMaries/'.$idmariage));
			}
		}
	}
	public function logout(){
		//$_SESSION=array();
		session_destroy(); 
		redirect(base_url());
		
	}
    public function loginDl()
    {
        $password = $this->input->post('userPassword');
		$titre = $this->input->post('dlTitreMariage');
		$this->load->model('m_mariage');
		$var = $this->m_mariage->getMariageByTitle($titre);
		$hash = $var['0']['downloadPassword'];
		
		$check = password_verify($password, $hash);
		$fp = fopen('lidn.txt', 'w');
		fwrite($fp,"titre: ".$titre." check:".$check." password: ".$password." hash: ".$hash);
		fclose($fp);
		
		
        if ($check) 
		{
			$this->session->set_flashdata('message-success', 'Bienvenue  <i class="fa fa-hand-peace-o"></i> ');
			redirect(base_url('Gallerie/showpics/messe_'.$titre));
			var_dump($titre);
		}
		else
		{
			redirect(base_url('Vue/galleriePrivee'));
		}
	}
	
	public function show($titre)
	{
		//var_dump($titre);
		$title = explode('_', $titre);
		
		$data['title'] = $title;	
		$this->load->view('menu');
		$this->load->view('privee2', $data);
        $this->load->view('footer');
	}
	
	public function showPics($titre){
		//var_dump($titre);
		$title = explode('_', $titre);
		$data['titre'] = $title['1'];
		$data['title'] = $title;
		$this->load->view('menu');
		$this->load->view('privee2', $data);
        $this->load->view('footer');
	}
	public function espaceMaries($idmariage){
		$this->load->model('m_mariage');
		$data['mariage'] = $this->m_mariage->getMariagebyId($idmariage);
		
		$this->load->view('menu');
		$this->load->view('espacemaries', $data);
        $this->load->view('footer');
	}
}
