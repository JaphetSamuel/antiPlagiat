<?php

namespace Database\Seeders;

use App\Models\Pack;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pack::factory()
            ->count(10)
            ->state(
                ['value'=>6000],
                ['value'=>7500],
                ['value'=>10000],
            )->create();
    }
}
