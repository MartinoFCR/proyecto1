<?php

namespace Database\Seeders;

use App\Models\Browser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array('nombre' => 'Camisas', 'porcentaje'  => '61.4'),
            array('nombre' => 'Sudaderas', 'porcentaje'  => '11.8'),
            array('nombre' => 'Camibuso', 'porcentaje'  => '10.9'),
            array('nombre' => 'Gorras', 'porcentaje'  => '4.7'),
            array('nombre' => 'Maletas', 'porcentaje'  => '4.2'),
            array('nombre' => 'Ropa Interior', 'porcentaje'  => '1.6'),

        ];
        Browser::insert($data);
    }
}
