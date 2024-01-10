<?php

namespace Database\Seeders;

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


        // User::create([
        //     'name'      => 'Nelson Samosir',
        //     'email'     => 'nelsonsamosir36@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'      => 'Dodi',
        //     'email'     => 'dodi@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Category::create([
            'name'  => 'Web-Design',
            'slug'  => 'web-design'
        ]);

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'     => 'Judul Pertama',
        //     'slug'      => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed molestias beatae suscipit nihil eveniet tempora!',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, sed omnis, ullam doloribus ut est quisquam quasi quia voluptates impedit sapiente pariatur quidem! Quod nulla ut quibusdam ea dolore, est maiores aut? Distinctio tempora eaque aut quo beatae laborum accusantium atque odit quae sunt repellat harum, fugit itaque esse delectus libero soluta vero perspiciatis eligendi non recusandae similique hic porro excepturi. Repellat exercitationem, est illum voluptatum, quasi doloremque eius velit, animi commodi quos impedit? Laudantium ea, at saepe ad placeat, assumenda sint aliquid quidem accusamus, nam possimus voluptates unde? Facere voluptatem deleniti ea magni, consequatur inventore iusto ullam illum minima.',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     => 'Judul Kedua',
        //     'slug'      => 'judul-kedua',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed molestias beatae suscipit nihil eveniet tempora!',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, sed omnis, ullam doloribus ut est quisquam quasi quia voluptates impedit sapiente pariatur quidem! Quod nulla ut quibusdam ea dolore, est maiores aut? Distinctio tempora eaque aut quo beatae laborum accusantium atque odit quae sunt repellat harum, fugit itaque esse delectus libero soluta vero perspiciatis eligendi non recusandae similique hic porro excepturi. Repellat exercitationem, est illum voluptatum, quasi doloremque eius velit, animi commodi quos impedit? Laudantium ea, at saepe ad placeat, assumenda sint aliquid quidem accusamus, nam possimus voluptates unde? Facere voluptatem deleniti ea magni, consequatur inventore iusto ullam illum minima.',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);    

        // Post::create([
        //     'title'     => 'Judul Ketiga',
        //     'slug'      => 'judul-ketiga',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed molestias beatae suscipit nihil eveniet tempora!',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, sed omnis, ullam doloribus ut est quisquam quasi quia voluptates impedit sapiente pariatur quidem! Quod nulla ut quibusdam ea dolore, est maiores aut? Distinctio tempora eaque aut quo beatae laborum accusantium atque odit quae sunt repellat harum, fugit itaque esse delectus libero soluta vero perspiciatis eligendi non recusandae similique hic porro excepturi. Repellat exercitationem, est illum voluptatum, quasi doloremque eius velit, animi commodi quos impedit? Laudantium ea, at saepe ad placeat, assumenda sint aliquid quidem accusamus, nam possimus voluptates unde? Facere voluptatem deleniti ea magni, consequatur inventore iusto ullam illum minima.',
        //     'category_id'   => 2,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     => 'Judul Keempat',
        //     'slug'      => 'judul-keempat',
        //     'excerpt'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed molestias beatae suscipit nihil eveniet tempora!',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, sed omnis, ullam doloribus ut est quisquam quasi quia voluptates impedit sapiente pariatur quidem! Quod nulla ut quibusdam ea dolore, est maiores aut? Distinctio tempora eaque aut quo beatae laborum accusantium atque odit quae sunt repellat harum, fugit itaque esse delectus libero soluta vero perspiciatis eligendi non recusandae similique hic porro excepturi. Repellat exercitationem, est illum voluptatum, quasi doloremque eius velit, animi commodi quos impedit? Laudantium ea, at saepe ad placeat, assumenda sint aliquid quidem accusamus, nam possimus voluptates unde? Facere voluptatem deleniti ea magni, consequatur inventore iusto ullam illum minima.',
        //     'category_id'   => 2,
        //     'user_id'       => 2
        // ]);
    }
}
