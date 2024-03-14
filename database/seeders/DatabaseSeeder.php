<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\NavItem;
use Illuminate\Database\Seeder;

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

        \App\Models\User::factory()->create([
            'name' => 'Gustavo Seijas',
            'email' => 'gustavo@seijas.com',
        ]);
        NavItem::factory()->create([
            'label'=>'Hola',
            'link'=>'#hola'
        ]);
        NavItem::factory()->create([
            'label'=>'Proyectos',
            'link'=>'#proyectos'
        ]);
        NavItem::factory()->create([
            'label'=>'Contacto',
            'link'=>'#contacto'
        ]);


    }
}
