<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create([
            'codpais'=>'+51',
            'nompais'=>'Peru'
        ]);
        Pais::create([
            'codpais'=>'+52',
            'nompais'=>'Mexico'
        ]);
        Pais::create([
            'codpais'=>'+61',
            'nompais'=>'Australia'
        ]);
        Pais::create([
            'codpais'=>'+43',
            'nompais'=>'Austria'
        ]);
    }
}