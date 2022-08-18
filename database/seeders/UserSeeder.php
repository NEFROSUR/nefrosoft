<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
  
        $csvFile = fopen(base_path("database/data/USUARIOS.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "id" => $data['0'],
                    "name" => $data['1'],
                    "email" => $data['2'],
                    "password" => $data['3']
              
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
