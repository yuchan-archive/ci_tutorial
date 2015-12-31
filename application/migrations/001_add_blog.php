<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_blog extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '140',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '64',
            ),
            'body' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('blog');
    }

    public function down() {
        $this->dbforge->drop_table('blog');
    }

}
