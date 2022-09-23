<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;
use File;
use Illuminate\Support\Facades\Hash;

class CoursesSeeder extends Seeder
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
        $json=FIle::get("database/_data/courses.json");
        //2. Convertir el contenido a un arreglo en php
        //json_decode para decodificar archivos json
         $arreglo=json_decode($json);
         var_dump($arreglo);
        //3. Recorrer el arreglo en php /*
        foreach($arreglo as $b){
            //4. por cada uno de los elementos del arreglo crear users 
            $newCourses = new courses();
            $newCourses -> title = $b->title;
            $newCourses -> description = $b->description;
            $newCourses -> weeks = $b->weeks;
            $newCourses -> enroll_cost = $b->enroll_cost;
            $newCourses -> bootcamp_id = $b->bootcamp_id;
            $newCourses -> minimun_skill = $b->minimun_skill;
            $newCourses ->save();
        }
    }
}
