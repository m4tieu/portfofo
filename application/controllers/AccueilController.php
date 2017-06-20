<?php

class AccueilController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SkillsModel', 'skills');
    }

    public function index() {

        $this->load->view('portfolioPage', array(
            "skills" => $this->skills->getAll()
        ));
    }

}
