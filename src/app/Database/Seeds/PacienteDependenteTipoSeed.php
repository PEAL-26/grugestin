<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PacienteDependenteTipoSeed extends Seeder
{
    public function run()
    {
        $data = array(
            ['paciente_dependente_tipo_id' => '1', 
            'paciente_tipo_id' => '2', 
            'nome' => 'Bicho de Estimação'],

            ['paciente_dependente_tipo_id' => '2',
            'paciente_tipo_id' => '1', 
            'nome' => 'Filho'],

            ['paciente_dependente_tipo_id' => '3',
            'paciente_tipo_id' => '1', 
            'nome' => 'Conjuge']
        );
        $this->db->table('paciente_dependente_tipo')->insertBatch($data);
    }
}
