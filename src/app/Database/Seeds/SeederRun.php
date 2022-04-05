<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederRun extends Seeder
{
        public function run()
        {
                $this->call('PacienteTipoSeed');
                $this->call('PacienteHumanoTipoSeed');
                $this->call('PacienteDependenteTipoSeed');
        }
}
