<?php

namespace Database\Seeders;

use App\Models\proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        proveedor::truncate();
  
        $csvFile = fopen(base_path("database/data/PROVEEDORES.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                proveedor::create([
                    "id" => $data['0'],
                    "rucProv" => $data['1'],
                    "nameProv" => $data['2'],
                    "telefonoProv" => $data['3'],
                    "categoriaProv" => $data['4'],
                    "correoProv" => $data['5'],
                    "direccionProv" => $data['6'],
                    "detalleProv" => $data['7']                 

                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
