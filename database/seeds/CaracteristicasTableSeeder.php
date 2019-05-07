<?php

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $caracteristica = new Caracteristica();
        $caracteristica->nombre = 'Proyector';
        $caracteristica->save();

        $caracteristica = new Caracteristica();
        $caracteristica->nombre = 'Aire Acondicionado';
        $caracteristica->save();

        $caracteristica = new Caracteristica();
        $caracteristica->nombre = 'Ventilador';
        $caracteristica->save();

        $caracteristica = new Caracteristica();
        $caracteristica->nombre = 'Pizarra';
        $caracteristica->save();

        $caracteristica = new Caracteristica();
        $caracteristica->nombre = 'Pizarron';
        $caracteristica->save();
    }
}
