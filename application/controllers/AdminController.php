<?php

class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SkillsModel', 'skills');
    }

    public function AdView() {
        $this->load->view('adminPage.php');
    }

}
