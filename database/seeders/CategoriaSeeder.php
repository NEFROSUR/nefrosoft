<?php

namespace Database\Seeders;

use App\Models\categoriaP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        categoriaP::truncate();
  
        $csvFile = fopen(base_path("database/data/categoriaP.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                categoriaP::create([
                    "id" => $data['0'],
                    "nombreCategoria" => $data['1']                    
              
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
