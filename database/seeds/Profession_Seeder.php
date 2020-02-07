<?php

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use


class Profession_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        Profession::create([
            'title' => 'Ingeniero de Sistemas',
        ]);
        
        Profession::create([
            'title' => 'Ingeniero de mecatronica',
        ]);
        
        Profession::create([
            'title' => 'Ingeniero de software',
        ]);
        
        Profession::create([
            'title' => 'Ingeniero de ambiental',
        ]);
      
        */

        factory(Profession::class,50)->create();
    }
}
