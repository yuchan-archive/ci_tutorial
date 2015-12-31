<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_comment extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'username' => array(
              'type' => 'VARCHAR',
              'constraint' => '64',
              'null' => FALSE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '140',
            ),
            'body' => array(
                'type' => 'TEXT',
                'null' => FALSE,
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('comment');
    }

    public function down() {
        $this->dbforge->drop_table('comment');
    }

}
