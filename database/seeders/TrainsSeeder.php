<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train as ModelsTrain;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        /* -------------------------------------------------------------------------- */
        /*                                  metodo 1                                  */
        /* -------------------------------------------------------------------------- */


        // for($i=0; $i<20; $i++){
            
        //     $newTrain = new ModelsTrain();

        //     $newTrain->azienda = $faker->words(2, true);
        //     $newTrain->stazione_partenza = $faker->city();
        //     $newTrain->stazione_arrivo = $faker->city();
        //     $newTrain->orario_partenza = $faker->time();
        //     $newTrain->orario_arrivo = $faker->time();
        //     $newTrain->codice_treno = $faker->bothify('???-###');
        //     $newTrain->numero_carrozze = $faker->randomNumber(2,false);
        //     $newTrain->data_partenza = $faker->date();
        //     $newTrain->in_orario = $faker->boolean();
        //     $newTrain->cancellato = $faker->boolean();

        //     $newTrain->save();

        // }



        /* -------------------------------------------------------------------------- */
        /*                             metodo 2 (fle csv)                             */
        /* -------------------------------------------------------------------------- */

        // apro il file csv 
        $trainFile = fopen(__DIR__ . '/../trains.csv', 'r');

        // leggo e memorizzo la rpima riga del file che corrisponde ai titoli delle colonne della tabella
        $trainCSV = fgetcsv($trainFile);

        // inizio a leggere i dati dalla seconda riga
        $trainCSV = fgetcsv($trainFile);


        do{
            $newTrain = new ModelsTrain();

            $newTrain->azienda = $trainCSV[0];
            $newTrain->stazione_partenza = $trainCSV[1];
            $newTrain->stazione_arrivo = $trainCSV[2];
            $newTrain->orario_partenza = $trainCSV[3];
            $newTrain->orario_arrivo = $trainCSV[4];
            $newTrain->codice_treno = $trainCSV[5];
            $newTrain->numero_carrozze = $trainCSV[6];
            $newTrain->in_orario = $trainCSV[7];
            $newTrain->cancellato = $trainCSV[8];

            $newTrain-> save();

            $trainCSV = fgetcsv($trainFile);


        } while($trainCSV != false);

    }
}
