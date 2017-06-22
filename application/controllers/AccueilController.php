<?php

class AccueilController extends CI_Controller {

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

    public function index() {

        $this->load->view('portfolioPage', array(
            "head" => $this->header->getAll()[0],
            "desc" => $this->moi->getAll(),
            "foot" => $this->footer->getAll()[0],
            "parc" => $this->parcours->getAll(),
            "pro" => $this->projet->getAll(),
            "rs" => $this->reseaux->getAll(),
            "skil" => $this->skill->getAll()
        ));
    }

}
