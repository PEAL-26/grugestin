<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class PacienteHumanoTipoSeed extends Seeder
{
    public function run()
    {
        $data = array(
            ['paciente_humano_tipo_id' => '1', 
            'paciente_tipo_id' => '1', 
            'nome' => 'Clínico'],
            
            ['paciente_humano_tipo_id' => '2',
            'paciente_tipo_id' => '1', 
            'nome' => 'Odontológico']
        );
        $this->db->table('paciente_humano_tipo')->insertBatch($data);
    }
}