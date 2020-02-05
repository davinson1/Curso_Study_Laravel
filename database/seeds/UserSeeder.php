<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $profession = DB::table('professions')->where('id', '=' ,'1')->value('id');

        User::create([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com1',
            'password' => bcrypt('admin'),
            
        ]);

        $profession = DB::table('professions')->where('id', '=' ,'1')->value('id');

        User::create([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com2',
            'password' => bcrypt('admin'),
            
        ]);
        $profession = DB::table('professions')->where('id', '=' ,'2')->value('id');

        User::create([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com3',
            'password' => bcrypt('admin'),
            
        ]);
        $profession = DB::table('professions')->where('id', '=' ,'2')->value('id');

        User::create([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com4',
            'password' => bcrypt('admin'),
            
        ]);
        $profession = DB::table('professions')->where('id', '=' ,'2')->value('id');

        User::create([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com5',
            'password' => bcrypt('admin'),
            
        ]);
        $profession = DB::table('professions')->where('id', '=' ,'2')->value('id');

        User::create([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com6',
            'password' => bcrypt('admin'),
            
        ]);
//solo se comenta codigo
/*

        $profession = DB::table('profession')->where('id', '=' ,'2')->value('id');
        DB::table('users')->insert([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com1',
            'password' => bcrypt('admin'),
            
        ]);


        $profession = DB::table('profession')->where('id', '=' ,'3')->value('id');
        DB::table('users')->insert([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com2',
            'password' => bcrypt('admin'),
            
        ]);
        $profession = DB::table('profession')->where('id', '=' ,'4')->value('id');
        DB::table('users')->insert([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com3',
            'password' => bcrypt('admin'),
            
        ]);
        $profession = DB::table('profession')->where('id', '=' ,'5')->value('id');
        DB::table('users')->insert([
            'profession_id'=>$profession,
            'name' => 'Davinson Rocha Salazar',
            'email' => 'davinson.rochas@gmail.com4',
            'password' => bcrypt('admin'),
            
        ]);
        */
    }
    
}
