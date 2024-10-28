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
        User::factory(3)->create();

        User::factory()->create([
            'name' => 'alex',
            'email' => 'alex@mail.com',
        ]);

        User::factory()->create([
            'name' => 'pepe',
            'email' => 'pepe@mail.com',
        ]);

        $users = User::all();

        // Crear categorías en la base de datos
        $categories = [
            ['name' => 'deporte'],
            ['name' => 'tecnología'],
            ['name' => 'cine'],
            ['name' => 'música'],
            ['name' => 'viajes'],
            ['name' => 'moda'],
            ['name' => 'salud'],
            ['name' => 'gastronomía'],
            ['name' => 'literatura'],
            ['name' => 'política'],
            ['name' => 'historia'],
            ['name' => 'ciencia'],
            ['name' => 'arte'],
            ['name' => 'economía'],
            ['name' => 'educación'],
            ['name' => 'religión'],
            ['name' => 'medio ambiente'],
            ['name' => 'fotografía'],
            ['name' => 'humor'],
            ['name' => 'videojuegos']
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
