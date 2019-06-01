<?php

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
        // La creación de datos de roles debe ejecutarse primero
    $this->call(RoleTableSeeder::class);

    // Los usuarios necesitarán los roles previamente generados
    $this->call(UserTableSeeder::class);
<<<<<<< HEAD
    // Creacion de Todo de un Aula
    $this->call(TodoTableSeeder::class);
=======
    // Creacion de Caracteristicas de un Aula
    $this->call(CaracteristicasTableSeeder::class);
>>>>>>> 28f44ac65dc3be210dcc38c967d61c5d3af42025
    }
}
