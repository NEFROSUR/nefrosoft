<?php

namespace Database\Seeders;

use App\Models\paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        paciente::truncate();
  
        $csvFile = fopen(base_path("database/data/pacientes_demo2.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                paciente::create([
                    "id" => $data['0'],
                    "dni" => $data['1'],
                    "primerNombre" => $data['2'],
                    "otroNombre" => $data['3'],
                    "apellidoPaterno" => $data['4'],
                    "apellidoMaterno" => $data['5'],
                    "fechaNacimiento" => $data['6'],
                    "telefono" => $data['7'],
                    "direccion" => $data['8'],
                    "numHistoria" => $data['9'],
                    "regimen" => $data['10'],
                    "numAfiliacion" => $data['11'],
                    "turno" => $data['12'],
                    "fechaAfiliacion" => $data['13'],
                    "frecuencia" => $data['14'],
                    "estado" => $data['15']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
