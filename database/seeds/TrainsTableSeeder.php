<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'destinazione' => 'Milano C.le',
                'partenza' => '20.01',
                'arrivo' => '21.01',
                'binario' => '3',
                'compagnia' => 'Trenord'
            ],
            [
                'destinazione' => 'Torino C.le',
                'partenza' => '21.01',
                'arrivo' => '22.01',
                'binario' => '4',
                'compagnia' => 'Trenitalia'
            ]

        ];

        foreach ($trains as $elem) {
            $newTrain = new Train();
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->partenza = $elem['partenza'];
            $newTrain->arrivo = $elem['arrivo'];
            $newTrain->binario = $elem['binario'];
            $newTrain->compagnia = $elem['compagnia'];
            $newTrain->save();
        }
    }
}
