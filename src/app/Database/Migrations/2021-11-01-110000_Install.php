<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\Config;
use Config\Database;

class Install extends Migration
{
    public function up()
    {
        // $sql =  file_get_contents(APPPATH . '/Database/Migrations/db.sql');
        // $sqls = explode(';', $sql);
        // array_pop($sqls);
        // foreach ($sqls as $statement) {
        //     $statment = $statement . ";";
        //     $this->db->query($statement);
        // }
    }

    public function down()
    {
        $db = new Database();
        $this->forge->dropDatabase($db->default['database']);
    }
}
