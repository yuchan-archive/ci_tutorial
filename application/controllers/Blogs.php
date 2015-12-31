<?php

class Blogs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('blogs_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['blogs'] = $this->blogs_model->get_news();
    }
}
