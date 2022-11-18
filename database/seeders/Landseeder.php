<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Land;

class LandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Land::create([
                'Naam' => 'Nederland',
                'Landcode' => 'NL',
                'MuntEenheid' => 'Euro',
                'Regeringsvorm' => 'Monarchie',
                'inwonersaantal' => '17.000.000',
                'staatshoofd' => 'Koning Willem-Alexander',
                'oppervlakte' => '41.543 km2',
                'budget' => '€'
            ]);
    }
}