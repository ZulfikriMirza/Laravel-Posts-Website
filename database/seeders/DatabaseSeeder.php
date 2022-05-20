<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Zulfikri Mirza',
            'username' => 'zulfikrimirza',
            'email' => 'zulfikrimirza3@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        // User::create([
        //     'name' => 'Doddy Ferdiana',
        //     'email' => 'doddyferdiana@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Developing',
            'slug' => 'web-developing'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post:: factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi iusto commodi velit debitis. Soluta maxime impedit neque. Veritatis officiis quisquam nisi est dicta laboriosam velit! Possimus similique laboriosam est voluptates! Quasi non nam nesciunt accusantium, doloribus suscipit, vitae in consectetur voluptatem dolor impedit optio ipsa rem soluta quaerat iusto, saepe nihil earum illum. Sint maxime in fuga nisi. Veniam accusamus quasi quia temporibus maiores repellat eligendi beatae porro aperiam expedita! Sed deleniti necessitatibus placeat pariatur incidunt tenetur eaque eum ex ratione? Inventore eveniet neque, beatae minima amet rerum, id corporis ipsa aperiam eius laborum distinctio!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi iusto commodi velit debitis. Soluta maxime impedit neque. Veritatis officiis quisquam nisi est dicta laboriosam velit! Possimus similique laboriosam est voluptates! Quasi non nam nesciunt accusantium, doloribus suscipit, vitae in consectetur voluptatem dolor impedit optio ipsa rem soluta quaerat iusto, saepe nihil earum illum. Sint maxime in fuga nisi. Veniam accusamus quasi quia temporibus maiores repellat eligendi beatae porro aperiam expedita! Sed deleniti necessitatibus placeat pariatur incidunt tenetur eaque eum ex ratione? Inventore eveniet neque, beatae minima amet rerum, id corporis ipsa aperiam eius laborum distinctio!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi iusto commodi velit debitis. Soluta maxime impedit neque. Veritatis officiis quisquam nisi est dicta laboriosam velit! Possimus similique laboriosam est voluptates! Quasi non nam nesciunt accusantium, doloribus suscipit, vitae in consectetur voluptatem dolor impedit optio ipsa rem soluta quaerat iusto, saepe nihil earum illum. Sint maxime in fuga nisi. Veniam accusamus quasi quia temporibus maiores repellat eligendi beatae porro aperiam expedita! Sed deleniti necessitatibus placeat pariatur incidunt tenetur eaque eum ex ratione? Inventore eveniet neque, beatae minima amet rerum, id corporis ipsa aperiam eius laborum distinctio!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis distinctio error recusandae. Aliquid animi iusto commodi velit debitis. Soluta maxime impedit neque. Veritatis officiis quisquam nisi est dicta laboriosam velit! Possimus similique laboriosam est voluptates! Quasi non nam nesciunt accusantium, doloribus suscipit, vitae in consectetur voluptatem dolor impedit optio ipsa rem soluta quaerat iusto, saepe nihil earum illum. Sint maxime in fuga nisi. Veniam accusamus quasi quia temporibus maiores repellat eligendi beatae porro aperiam expedita! Sed deleniti necessitatibus placeat pariatur incidunt tenetur eaque eum ex ratione? Inventore eveniet neque, beatae minima amet rerum, id corporis ipsa aperiam eius laborum distinctio!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

