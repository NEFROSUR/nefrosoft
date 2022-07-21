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
                    "direccion" => $data['7'],
                    "numHistoria" => $data['8'],
                    "regimen" => $data['9'],
                    "numAfiliacion" => $data['10'],
                    "turno" => $data['11'],
                    "fechaAfiliacion" => $data['12'],
                    "frecuencia" => $data['13'],
                    "estado" => $data['14']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
