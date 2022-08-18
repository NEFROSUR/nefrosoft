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
  
        $csvFile = fopen(base_path("database/data/PACIENTES.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
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
                    "direccion1" => $data['8'],
                    "telefono" => $data['9'],
                    "telefono1" => $data['10'],
                    "telefono2" => $data['11'],
                    "numHistoria" => $data['12'],
                    "regimen" => $data['13'],
                    "numAfiliacion" => $data['14'],
                    "fechaAfiliacion" => $data['15'],
                    "turno" => $data['16'],
                    "frecuencia" => $data['17'],
                    "estado" => $data['18'],
                    "detalleEstado" => $data['19']

                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
