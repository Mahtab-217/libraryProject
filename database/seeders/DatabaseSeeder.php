<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Author;
=======
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
<<<<<<< HEAD
        Book::factory(40)->create();
        // Author::factory(5)->create();

=======
         Book::factory(30)->create();
>>>>>>> da273e84915e6bc5185f8b0cd39f6ff499cb6896
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
