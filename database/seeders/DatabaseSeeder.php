<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Alex',
            'last_name' => 'Maquina',
            'email' => 'alex@mail.es',
        ]);

        User::factory()->create([
            'name' => 'Pepe',
            'last_name' => 'Martinez',
            'email' => 'pepe@mail.es',
        ]);

        User::factory(3)->create();

        $users = User::all();

        // Crear categorías en la base de datos
        $categories = [
            ['name' => 'Deporte'],
            ['name' => 'Tecnología'],
            ['name' => 'Cine'],
            ['name' => 'Música'],
            ['name' => 'Viajes'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Obtiene todas las categorías como una colección de Eloquent
        $categoriesCollection = Category::all();

        // Crear posts y asignarles categorías aleatorias
        foreach ($users as $user) {
            $posts = Post::factory(10)->create(['user_id' => $user->id]);

            foreach ($posts as $post) {
                // Asigna entre una y dos categorías aleatorias a cada post
                $post->categories()->attach(
                    $categoriesCollection->random(rand(1, 3))->pluck('id')->toArray()
                );
            }
        }
    }
}
