<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
   
    public function run(Faker $faker): void
    {
        for ($i = 0; $i <= 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->name();
            $newTrain->stazione_di_partenza = $faker->name();
            $newTrain->stazione_di_arrivo = $faker->name();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(4);
            $newTrain->numero_carrozze= $faker->randomNumber(2);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data_di_partenza = $faker->date();
            $newTrain->save(); 
    }
}
}