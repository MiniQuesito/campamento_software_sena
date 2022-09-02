<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;
use Illuminate\Support\Facades\Hash;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //algotimo para leer y recorrer los datos para que se creee un usuario

        //1. Leer el archivo users.json
        $json=FIle::get("database/_data/bootcamps.json");
        //2. Convertir el contenido a un arreglo en php
        //json_decode para decodificar archivos json
         $arreglo=json_decode($json);
         var_dump($arreglo);
        //3. Recorrer el arreglo en php /*
        foreach($arreglo as $b){
            //4. por cada uno de los elementos del arreglo crear users 
            $newBootcamp = new Bootcamp();
            $newBootcamp -> name = $b->name;
            $newBootcamp -> website = $b->website;
            $newBootcamp -> phone = $b->phone;
            $newBootcamp -> user_id = $b->user_id;
            $newBootcamp -> description = $b->description;
            $newBootcamp -> averange_cost = $b->averange_cost;
            $newBootcamp -> averange_rating = $b->averange_rating;
            $newBootcamp ->save();
        }
    }
}
