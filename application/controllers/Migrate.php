<?php

if (!defined('BASEPATH'))
    exit("No direct script access allowed");

class Migrate extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->input->is_cli_request()
                or exit("Execute via command line: php index.php migrate");

        $this->load->library('migration');
    }

    public function index() {
        if (!$this->migration->latest()) {
            show_error($this->migration->error_string());
        } else {
            show_error('You don\'t have permission for this action');
            ;
        }
    }

    public function version($version) {
        if ($this->input->is_cli_request()) {
            $migration = $this->migration->version($version);
            if (!$migration) {
                echo $this->migration->error_string();
            } else {
                echo 'Migration(s) done' . PHP_EOL;
            }
        } else {
            show_error('You don\'t have permission for this action');
            ;
        }
    }
}
