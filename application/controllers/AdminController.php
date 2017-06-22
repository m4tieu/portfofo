<?php

class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DescriptionModel', 'moi');
        $this->load->model('FooterModel', 'footer');
        $this->load->model('HeaderModel', 'header');
        $this->load->model('ParcoursModel', 'parcours');
        $this->load->model('ProjetModel', 'projet');
        $this->load->model('ReseauxModel', 'reseaux');
        $this->load->model('SkillsModel', 'skill');
    }

    public function AdView() {
        $this->load->view('adminPage.php');
    }

}
