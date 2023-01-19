<?php

namespace Database\Seeders;

use App\Models\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //producto::truncate(); ESTE NO TIRA ERRORES AL TENER CLAVES FORANEAS, SOLO SIRVE PARA CLASES SIN CLAVES FORANEAS
        producto::where('id', '>', 0)->delete();
        $csvFile = fopen(base_path("database/data/PRODUCTOS.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                producto::create([
                    "id" => $data['0'],
                    "codigoProd" => $data['1'],
                    "nombreProd" => $data['2'],
                    "categoria_id" => $data['3'],
                    "categoria" => $data['4'],
                    "marcaProd" => $data['5'],
                    "umedida" => $data['6'],
                    "um" => $data['7'],
                    "stock" => $data['8'],
                    "precioProm" => $data['9']                   

                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
