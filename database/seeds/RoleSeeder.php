<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'administrador'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'gerente'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'vendedor'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'bodeguero'
        ]);
        DB::table('roles')->insert([
            'nombre' => 'proveedor'
        ]);
    }
}
