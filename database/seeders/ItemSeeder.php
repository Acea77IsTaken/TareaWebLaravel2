<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <=50 ; $i++) { 
            Item::create([
                'title' => "Item $i",
                'description' => "descripcion de $i",
                'image' => "imagen de $i",
                'tags' => "etiqueta1,etiqueta2"
                ]);
        }
    }
}
