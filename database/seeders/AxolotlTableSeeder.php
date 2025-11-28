<?php

namespace Database\Seeders;

use App\Models\Axolotl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AxolotlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $a1 = new Axolotl;
        $a1->name = "Borris";
        $a1->colour = "grey";
        $a1->age = 4;
        $a1->save();
    }
}
