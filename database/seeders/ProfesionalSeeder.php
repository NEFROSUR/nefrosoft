<?php

namespace Database\Seeders;
use App\Models\profesional;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //profesional::truncate(); ESTE NO TIRA ERRORES AL TENER CLAVES FORANEAS, SOLO SIRVE PARA CLASES SIN CLAVES FORANEAS
        profesional::where('id', '>', 0)->delete();
        $csvFile = fopen(base_path("database/data/PROFESIONALES.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                profesional::create([
                    "id" => $data['0'],
                    "dniP" => $data['1'],
                    "primerNombreP" => $data['2'],
                    "otroNombreP" => $data['3'],
                    "apellidoPaternoP" => $data['4'],
                    "apellidoMaternoP" => $data['5'],
                    "direccionP" => $data['6'],
                    "telefonoP" => $data['7'],
                    "colegiatura" => $data['8'],
                    "especialidad" => $data['9']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
