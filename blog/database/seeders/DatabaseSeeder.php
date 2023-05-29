<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'therecia olga',
            'email' => 'thereciaa@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ullam veniam beatae dolore eos vitae exercitationem dolores nulla',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ullam veniam beatae dolore eos vitae exercitationem dolores nulla ab omnis quisquam consectetur nihil neque cupiditate maxime velit vel commodi, a voluptate deleniti! Voluptatibus amet, laboriosam incidunt iusto id eveniet illum modi harum reiciendis beatae sint sequi rerum, sed delectus rem illo hic? Quos odit sed nemo! Distinctio iste ipsa perspiciatis ut! Asperiores tenetur animi sequi laborum, nostrum suscipit fuga cum hic non placeat saepe vero architecto nam repellendus repudiandae iste! Doloribus, soluta consequatur? Dolor odit doloribus nobis numquam libero velit voluptatum enim, quas voluptates quod, facilis quis quam et distinctio?.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ullam veniam beatae dolore eos vitae exercitationem dolores nulla',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ullam veniam beatae dolore eos vitae exercitationem dolores nulla ab omnis quisquam consectetur nihil neque cupiditate maxime velit vel commodi, a voluptate deleniti! Voluptatibus amet, laboriosam incidunt iusto id eveniet illum modi harum reiciendis beatae sint sequi rerum, sed delectus rem illo hic? Quos odit sed nemo! Distinctio iste ipsa perspiciatis ut! Asperiores tenetur animi sequi laborum, nostrum suscipit fuga cum hic non placeat saepe vero architecto nam repellendus repudiandae iste! Doloribus, soluta consequatur? Dolor odit doloribus nobis numquam libero velit voluptatum enim, quas voluptates quod, facilis quis quam et distinctio?.',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
