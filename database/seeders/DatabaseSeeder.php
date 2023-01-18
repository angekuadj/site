<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('filieres')->insert([
            'nom'=>'IDA'
        
        ]);

        DB::table('typepaiements')->insert([
            'nom'=>'Orange Money'
        
        ]);
        $this->call([
            PermissionSeeder::class,
        ]); 

        DB::table('roles')->insert([
            'name'=>'User',
            'guard_name' => 'web'
        
        ]);

        DB::table('roles')->insert([
            'name'=>'Admin',
            'guard_name' => 'web'
        
        ]);

        DB::table('roles')->insert([
            'name'=>'Proffesseur',
            'guard_name' => 'web'
        
        ]);



        DB::table('typepaiements')->insert([
            'nom'=>'Mtn Money'
        
        ]);
        DB::table('typepaiements')->insert([
            'nom'=>'Moov Money'
        
        ]);
        DB::table('typepaiements')->insert([
            'nom'=>'Wave'
        
        ]);
       
        DB::table('matieres')->insert([
            'nom'=>'Anglais'
        
        ]);
        
        DB::table('matieres')->insert([
            'nom'=>'Informatique'
        
        ]);

        DB::table('matieres')->insert([
            'nom'=>'Français'
        
        ]);
        

        $this->call([
            AdminSeeder::class,
        ]);

        DB::table('classes')->insert([
            'nom'=>'IDA1'
        ]);
        DB::table('classes')->insert([
            'nom'=>'IDA2'
        ]); 
        DB::table('times')->insert([
            'nom'=>'08:00 - 08:30'
        ]); 
        DB::table('times')->insert([
            'nom'=>'08:30 - 09:00'
        ]);  
        DB::table('times')->insert([
            'nom'=>'09:00 - 09:30'
        ]);   
        DB::table('times')->insert([
            'nom'=>'09:30 - 10:00'
        ]);  
        DB::table('times')->insert([
            'nom'=>'10:00 - 10:30'
        ]);  
        DB::table('times')->insert([
            'nom'=>'10:30 - 11:00'
        ]);  
        DB::table('times')->insert([
            'nom'=>'11:00 - 11:30'
        ]);  
        DB::table('times')->insert([
            'nom'=>'11:30 - 12:00'
        ]);  
        DB::table('times')->insert([
            'nom'=>'12:00 - 12:30'
        ]); 
        DB::table('times')->insert([
            'nom'=>'12:30 - 13:00'
        ]);  
        DB::table('times')->insert([
            'nom'=>'13:00 - 13:30'
        ]);  
        DB::table('times')->insert([
            'nom'=>'13:30 - 14:00'
        ]);  
        DB::table('times')->insert([
            'nom'=>'14:00 - 14:30'
        ]);  
        DB::table('times')->insert([
            'nom'=>'14:30 - 15:00'
        ]);   
        DB::table('times')->insert([
            'nom'=>'15:00 - 15:30'
        ]);   
        DB::table('times')->insert([
            'nom'=>'15:30 - 16:00'
        ]);   
        DB::table('times')->insert([
            'nom'=>'16:00 - 16:30'
        ]); 
        DB::table('times')->insert([
            'nom'=>'16:30 - 17:00'
        ]);   
        DB::table('times')->insert([
            'nom'=>'17:00 - 17:30'
        ]);   
        DB::table('times')->insert([
            'nom'=>'17:30 - 18:00'
        ]);  
        
        DB::table('days')->insert([
            'nom'=>'Lundi'
        ]);   
        DB::table('days')->insert([
            'nom'=>'Mardi'
        ]);   
        DB::table('days')->insert([
            'nom'=>'Mercredi'
        ]);   
        DB::table('days')->insert([
            'nom'=>'Jeudi'
        ]);   
        DB::table('days')->insert([
            'nom'=>'Vendredi'
        ]);   
        DB::table('days')->insert([
            'nom'=>'Samedi'
        ]);  
        
        DB::table('profs')->insert([
            'nom'=>'Ange'
        ]);   


        // DB::table('filieres')->insert([
        //     'nom'=>'IDA'
        // ]); 

    }
}
