<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News_model
 *
 * @author Yusuke
 */
class Blogs_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database();
    }

    public function get_news() {
        $query = $this->db->get('blog');
            return $query->result_array();
    }
    
}
