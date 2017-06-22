<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FooterModel
 *
 * @author mathieu
 */
class FooterModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add($object) {

    }

    public function delete($id) {

    }

    public function get($id) {

    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM footer");
        return $query->result_array();
    }

    public function update($object) {

    }

}
