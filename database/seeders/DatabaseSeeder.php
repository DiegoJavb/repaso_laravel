<?php

namespace Database\Seeders;

use App\Models\Author;
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
        $dato = new Author();
        $dato->nombre = 'Juan';
        $dato->email = 'juan@gmail.com';
        $dato->password = '123456';
        $dato->comentario = 'Hola';
        $dato->save();
    }
}
