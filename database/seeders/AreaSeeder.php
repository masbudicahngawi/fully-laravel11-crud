<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            "Surakarta",
            "Sukoharjo",
            "Boyolali",
            "Karanganyar",
            "Sragen",
            "Klaten",
            "Wonogiri",
            "Madiun",
            "Ngawi",
            "Magetan",
            "Ponorogo",
            "Pacitan"
        ];

        for($i = 0; $i < count($areas); $i++){
            Area::create([
                "nama" => $areas[$i]
            ]);
        }
    }
}
