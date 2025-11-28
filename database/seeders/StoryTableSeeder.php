<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\Axolotl;

class StoryTableSeeder extends Seeder
{
    public function run(): void
    {
        // Load the axolotl created in AxolotlTableSeeder
        $a1 = Axolotl::where('name', 'Borris')->first();

        $s1 = new Story;
        $s1->title   = "Borris' day out";
        $s1->content = "Borris went for a meal and a pint in his local, the Axolotl Arms";
        $s1->axolotl_id = $a1->id;
        $s1->save();
    }
}