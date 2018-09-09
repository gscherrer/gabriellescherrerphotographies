<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 06/09/2018
 * Time: 20:13
 */

class Gallerie extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

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

        $mail = $this->input->post('mail');
        $mail = html_escape($mail);
        $password = $this->input->post('password');


        if ($this->input->post('submit')) {
            $this->load->model('m_user');
            $u = $this->m_user->getUser($mail, md5($password));
            if (!empty($u)) {
                $s['id'] = $u[0]['id_user'];
                $s['level'] = $u[0]['level'];
                $s['mail'] = $u[0]['mail'];
                $s['name'] = $u[0]['name'];
                $s['picture'] = $u[0]['picture'];
                $s['creation'] = $u[0]['creation'];
                if (!empty($u[0]['ville'])) {
                    $s['ville'] = $u[0]['ville'];
                }
                $this->m_user->updateconnexion($s['id']);

                $this->session->set_userdata($s);

                $this->session->set_flashdata('message-success', 'Bienvenue ' . $s['name'] . ' ! <i class="fa fa-hand-peace-o"></i> ');
            }
        }
    }
}