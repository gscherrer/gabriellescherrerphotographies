<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 06/09/2018
 * Time: 20:12
 */

class Admin extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

	function isLogged()
    {
        if ($this->session->userdata('iduser') !== null && $this->session->userdata('level') == 'admin' )
		{
            return true;
        }
        return false;
    }

    public function index()
    {
        /*if (!$this->isLogged())
		{
            $this->session->set_flashdata('message-error', 'Vous devez vous connecté et être admin pour pouvoir accéder à cette page.');
            redirect(base_url());
        }*/
		$this->load->model('m_mariage');

		$data['mariage'] = $this->m_mariage->getAllmariage();
        $this->load->view('menu');
        $this->load->view('admin/admin',$data);
        $this->load->view('footer');
    }

	public function listing(){

	}
	public function createUser(){
		$this->load->view('menu');
        $this->load->view('admin/newUser');
        $this->load->view('footer');
	}
	public function setUser(){
		$this->load->model('m_user');

		$name = $this->input->post('email');

		$password = $this->input->post('password');

		$hash = password_hash($password, PASSWORD_DEFAULT);


		if($this->m_user->setUser($name, $hash)){
			redirect(base_url('admin'));
		}
	}
	public function transliterateString($txt) {
		$transliterationTable = array('.' => '',' ' => '-', 'á' => 'a', 'Á' => 'A', 'à' => 'a', 'À' => 'A', 'ă' => 'a', 'Ă' => 'A', 'â' => 'a', 'Â' => 'A', 'å' => 'a',
		'Å' => 'A', 'ã' => 'a', 'Ã' => 'A', 'ą' => 'a', 'Ą' => 'A', 'ā' => 'a', 'Ā' => 'A', 'ä' => 'ae', 'Ä' => 'AE', 'æ' => 'ae', 'Æ' => 'AE', 'ḃ' => 'b',
		'Ḃ' => 'B', 'ć' => 'c', 'Ć' => 'C', 'ĉ' => 'c', 'Ĉ' => 'C', 'č' => 'c', 'Č' => 'C', 'ċ' => 'c', 'Ċ' => 'C', 'ç' => 'c', 'Ç' => 'C', 'ď' => 'd',
		'Ď' => 'D', 'ḋ' => 'd', 'Ḋ' => 'D', 'đ' => 'd', 'Đ' => 'D', 'ð' => 'dh', 'Ð' => 'Dh', 'é' => 'e', 'É' => 'E', 'è' => 'e', 'È' => 'E', 'ĕ' => 'e',
		'Ĕ' => 'E', 'ê' => 'e', 'Ê' => 'E', 'ě' => 'e', 'Ě' => 'E', 'ë' => 'e', 'Ë' => 'E', 'ė' => 'e', 'Ė' => 'E', 'ę' => 'e', 'Ę' => 'E', 'ē' => 'e',
		'Ē' => 'E', 'ḟ' => 'f', 'Ḟ' => 'F', 'ƒ' => 'f', 'Ƒ' => 'F', 'ğ' => 'g', 'Ğ' => 'G', 'ĝ' => 'g', 'Ĝ' => 'G', 'ġ' => 'g', 'Ġ' => 'G', 'ģ' => 'g',
		'Ģ' => 'G', 'ĥ' => 'h', 'Ĥ' => 'H', 'ħ' => 'h', 'Ħ' => 'H', 'í' => 'i', 'Í' => 'I', 'ì' => 'i', 'Ì' => 'I', 'î' => 'i', 'Î' => 'I', 'ï' => 'i',
		'Ï' => 'I', 'ĩ' => 'i', 'Ĩ' => 'I', 'į' => 'i', 'Į' => 'I', 'ī' => 'i', 'Ī' => 'I', 'ĵ' => 'j', 'Ĵ' => 'J', 'ķ' => 'k', 'Ķ' => 'K', 'ĺ' => 'l',
		'Ĺ' => 'L', 'ľ' => 'l', 'Ľ' => 'L', 'ļ' => 'l', 'Ļ' => 'L', 'ł' => 'l', 'Ł' => 'L', 'ṁ' => 'm', 'Ṁ' => 'M', 'ń' => 'n', 'Ń' => 'N', 'ň' => 'n',
		'Ň' => 'N', 'ñ' => 'n', 'Ñ' => 'N', 'ņ' => 'n', 'Ņ' => 'N', 'ó' => 'o', 'Ó' => 'O', 'ò' => 'o', 'Ò' => 'O', 'ô' => 'o', 'Ô' => 'O', 'ő' => 'o',
		'Ő' => 'O', 'õ' => 'o', 'Õ' => 'O', 'ø' => 'oe', 'Ø' => 'OE', 'ō' => 'o', 'Ō' => 'O', 'ơ' => 'o', 'Ơ' => 'O', 'ö' => 'oe', 'Ö' => 'OE', 'ṗ' => 'p',
		'Ṗ' => 'P', 'ŕ' => 'r', 'Ŕ' => 'R', 'ř' => 'r', 'Ř' => 'R', 'ŗ' => 'r', 'Ŗ' => 'R', 'ś' => 's', 'Ś' => 'S', 'ŝ' => 's', 'Ŝ' => 'S', 'š' => 's',
		'Š' => 'S', 'ṡ' => 's', 'Ṡ' => 'S', 'ş' => 's', 'Ş' => 'S', 'ș' => 's', 'Ș' => 'S', 'ß' => 'SS', 'ť' => 't', 'Ť' => 'T', 'ṫ' => 't', 'Ṫ' => 'T',
		'ţ' => 't', 'Ţ' => 'T', 'ț' => 't', 'Ț' => 'T', 'ŧ' => 't', 'Ŧ' => 'T', 'ú' => 'u', 'Ú' => 'U', 'ù' => 'u', 'Ù' => 'U', 'ŭ' => 'u', 'Ŭ' => 'U', 'û' => 'u', 'Û' => 'U', 'ů' => 'u', 'Ů' => 'U', 'ű' => 'u', 'Ű' => 'U', 'ũ' => 'u', 'Ũ' => 'U', 'ų' => 'u', 'Ų' => 'U', 'ū' => 'u', 'Ū' => 'U', 'ư' => 'u', 'Ư' => 'U', 'ü' => 'ue', 'Ü' => 'UE', 'ẃ' => 'w', 'Ẃ' => 'W', 'ẁ' => 'w', 'Ẁ' => 'W', 'ŵ' => 'w', 'Ŵ' => 'W', 'ẅ' => 'w', 'Ẅ' => 'W', 'ý' => 'y', 'Ý' => 'Y', 'ỳ' => 'y', 'Ỳ' => 'Y', 'ŷ' => 'y', 'Ŷ' => 'Y', 'ÿ' => 'y', 'Ÿ' => 'Y', 'ź' => 'z', 'Ź' => 'Z', 'ž' => 'z', 'Ž' => 'Z', 'ż' => 'z', 'Ż' => 'Z', 'þ' => 'th', 'Þ' => 'Th', 'µ' => 'u', 'а' => 'a', 'А' => 'a', 'б' => 'b', 'Б' => 'b', 'в' => 'v', 'В' => 'v', 'г' => 'g', 'Г' => 'g', 'д' => 'd', 'Д' => 'd', 'е' => 'e', 'Е' => 'E', 'ё' => 'e', 'Ё' => 'E', 'ж' => 'zh', 'Ж' => 'zh', 'з' => 'z', 'З' => 'z', 'и' => 'i', 'И' => 'i', 'й' => 'j', 'Й' => 'j', 'к' => 'k', 'К' => 'k', 'л' => 'l', 'Л' => 'l', 'м' => 'm', 'М' => 'm', 'н' => 'n', 'Н' => 'n', 'о' => 'o', 'О' => 'o', 'п' => 'p', 'П' => 'p', 'р' => 'r', 'Р' => 'r', 'с' => 's', 'С' => 's', 'т' => 't', 'Т' => 't', 'у' => 'u', 'У' => 'u', 'ф' => 'f', 'Ф' => 'f', 'х' => 'h', 'Х' => 'h', 'ц' => 'c', 'Ц' => 'c', 'ч' => 'ch', 'Ч' => 'ch', 'ш' => 'sh', 'Ш' => 'sh', 'щ' => 'sch',
		'Щ' => 'sch', 'ъ' => '', 'Ъ' => '', 'ы' => 'y', 'Ы' => 'y', 'ь' => '', 'Ь' => '', 'э' => 'e', 'Э' => 'e', 'ю' => 'ju', 'Ю' => 'ju', 'я' => 'ja',
		'Я' => 'ja');
		return strtolower(str_replace(array_keys($transliterationTable), array_values($transliterationTable), $txt));
	}
	public function setMariage(){
		$this->load->model('m_mariage');
		$titre = $this->input->post('titre');
		$date = $this->input->post('date');
    $mail = $this->input->post('mail');
		$date_crea = date('h:i:s-d-m-Y');
		$file_link = $this->transliterateString($titre);
		$snapshot_link = $file_link.'snap';
		$mdp = $this->generatePassword($titre);
		$this->m_mariage->setMariage($titre, $date, $date_crea, $file_link, $mdp, $snapshot_link, $mail);
		redirect(base_url('admin'));
	}
	public function deleteMariage($id){
		$this->load->model('m_mariage');

		$result = $this->m_mariage->deleteMariage($id);
		$_SESSION['db']= $result;
		redirect(base_url('admin/'));
	}

	 public function do_upload(){
		$this->load->library('session');
		$file_name = $this->input->post('file_name');
		$posted = $this->input->server('userfile/');

		$config['upload_path'] = 'assets/uploads/mariage_zip/';
		$config['allowed_types'] = 'zip';
		$config['max_size'] = '0';
		$config['remove_spaces'] = true;
		$config['file_name'] = $file_name;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('userfile') && isset($file_name)){
			$_SESSION['status'] = 'Le fichier a été correctemement chargé';
			redirect(base_url('admin/'));
		}
		else{
			$_SESSION['status'] = 'Le fichier a subit une erreur: '.$file_name.' - '.$this->upload->display_errors();
			redirect(base_url('admin/'));
		}
	}

	 public function uploadSnapshot(){
		$this->load->library('session');
		$posted = $this->input->server('userfile/');
		$id = $this->input->post('id');

		$config['upload_path'] = 'assets/uploads/mariage_snapshot/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = '10000000';
		$config['remove_spaces'] = true;
		//$config['file_name'] = $file_name;

		$this->load->library('upload', $config);
		$upload_data = $this->upload->do_upload('userfile1');
		if( $upload_data && isset($id)){
			$_SESSION['status'] = 'Le fichier a été correctemement chargé';
			$file_name=$this->upload->data('file_name');

			$this->load->model('m_mariage');
			$result = $this->m_mariage->setSnapshotName($id, $file_name);

			redirect(base_url('admin/'));
		}
		else{
			$_SESSION['status'] = 'La photo a subit une erreur: '.$file_name.' - '.$this->upload->display_errors();

			redirect(base_url('admin/'));
		}
	}

	public function generatePassword($titre){
		 $this->load->library('send');
		//génère une chaine de 10 char
		$string = substr(md5(microtime()), 0, 10);
		//envoyer le mdp par mail
		$subject="Mot de passe du mariage de: ".$titre;
		$mailBody=$string;

		$mail_res = $this->send->mail($from='no-reply@gabriellescherrerphotographies.fr', $to='guillaume.scherrer29@gmail.com', $senderName='',$subject, $mailBody);


		$mdp = password_hash($string, PASSWORD_DEFAULT);
		return $mdp;
	}
}
