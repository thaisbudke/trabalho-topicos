<?php

use Illuminate\Database\Seeder;
use App\Atividade;

class atividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atividade::create([
            'title' => 'Prova de Matemática',
            'description' => 'Prova sobre geometria',
            'scheduledto' => '2018-09-01 13:15:00'
        ]);

        Atividade::create([
            'title' => 'Desenvolver o trabalho de Tópicos Especiais',
            'description' => 'Submeter o trabalho final no moodle',
            'scheduledto' => '2018-10-01 13:15:00'
        ]);

    }
}
