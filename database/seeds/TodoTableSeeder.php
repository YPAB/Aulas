<?php
use Illuminate\Database\Seeder;
use App\Models\Caracteristica;
use App\Models\Edificio;
use App\Models\Piso;


class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    //
    public function run()
    {
        // Seeder Caracteristicas
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

        // Seeder Edificio
        $edificio = new Edificio();
        $edificio->nombre = '9 de julio';
        $edificio->save();

        $edificio = new Edificio();
        $edificio->nombre = 'Campus Exactas';
        $edificio->save();

        $edificio = new Edificio();
        $edificio->nombre = 'Campus Ingeniería';
        $edificio->save();

        // Seeder piso
        $piso = new Piso();
        $piso->nombre = 'PB ';
        $piso->save();

        $piso = new Piso();
        $piso->nombre = '1° Piso';
        $piso->save();

        $piso = new Piso();
        $piso->nombre = '2° Piso';
        $piso->save();

        $piso = new Piso();
        $piso->nombre = '3° Piso';
        $piso->save();
    }
}
