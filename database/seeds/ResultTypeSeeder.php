<?php

use Illuminate\Database\Seeder;

class ResultTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            'KO', 'TKO', 'SUBMISSION', 'UNANIMOUS DECISION', 'SPLIT DECISION',
            'MAJORITY DECISION', 'UNANIMOUS DRAW','SPLIT DRAW','MAJORITY DRAW',
            'DISQUALIFICATION', 'NO CONTEST'
        ];

        foreach($list as $item){
            \App\ResultType::create(['description' => $item]);
        }
    }
}
