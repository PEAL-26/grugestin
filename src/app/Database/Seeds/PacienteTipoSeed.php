<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PacienteTipoSeed extends Seeder
{
    public function run()
    {
        $data = array(
            ['paciente_tipo_id' => '1',
            'nome' => 'Humano'],

            ['paciente_tipo_id' => '2',
            'nome' => 'Veterinário']
        );

        $this->db->table('paciente_tipo')->insertBatch($data);
    }
}
