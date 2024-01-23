<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->crearUsuario();
    }
    public function crearUsuario(){
        $u = new User();
        $u->name = "Jorge Ballivian";
        $u->email = "jorge@gmail.com";
        $u->password= bcrypt("235364");
        $u->save();


    }
}
