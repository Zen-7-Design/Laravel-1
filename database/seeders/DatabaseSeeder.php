<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

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

    //     User::create([
    //             'name' => 'Azkia',
    //             'email' => 'azki@gmail.com',
    //             'password' => bcrypt('12345')
    //     ]);

    //     User::create([
    //         'name' => 'Ryuuzen',
    //         'email' => 'ryuuzen@gmail.com',
    //         'password' => bcrypt('12345')
    // ]);


    User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, velit sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam recusandae, molestiae tempora delectus quidem alias? Iusto qui neque rem? Numquam aliquam et asperiores quas delectus alias deserunt voluptate odit sequi. Beatae, exercitationem in magni eos vitae sequi aut. Praesentium ratione adipisci sequi consectetur. Ut voluptas magnam rem. Laborum at optio asperiores delectus corrupti, molestiae, sed reiciendis placeat quis provident labore voluptatem sint quae quibusdam facilis doloremque aliquam. Explicabo deserunt in quas officiis, esse, veniam labore inventore adipisci facilis, iusto incidunt tenetur suscipit illo quaerat illum assumenda nobis eius. Quos id repellat molestiae commodi quaerat minima placeat, ratione optio neque?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, velit sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam recusandae, molestiae tempora delectus quidem alias? Iusto qui neque rem? Numquam aliquam et asperiores quas delectus alias deserunt voluptate odit sequi. Beatae, exercitationem in magni eos vitae sequi aut. Praesentium ratione adipisci sequi consectetur. Ut voluptas magnam rem. Laborum at optio asperiores delectus corrupti, molestiae, sed reiciendis placeat quis provident labore voluptatem sint quae quibusdam facilis doloremque aliquam. Explicabo deserunt in quas officiis, esse, veniam labore inventore adipisci facilis, iusto incidunt tenetur suscipit illo quaerat illum assumenda nobis eius. Quos id repellat molestiae commodi quaerat minima placeat, ratione optio neque?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, velit sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam recusandae, molestiae tempora delectus quidem alias? Iusto qui neque rem? Numquam aliquam et asperiores quas delectus alias deserunt voluptate odit sequi. Beatae, exercitationem in magni eos vitae sequi aut. Praesentium ratione adipisci sequi consectetur. Ut voluptas magnam rem. Laborum at optio asperiores delectus corrupti, molestiae, sed reiciendis placeat quis provident labore voluptatem sint quae quibusdam facilis doloremque aliquam. Explicabo deserunt in quas officiis, esse, veniam labore inventore adipisci facilis, iusto incidunt tenetur suscipit illo quaerat illum assumenda nobis eius. Quos id repellat molestiae commodi quaerat minima placeat, ratione optio neque?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, velit sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam recusandae, molestiae tempora delectus quidem alias? Iusto qui neque rem? Numquam aliquam et asperiores quas delectus alias deserunt voluptate odit sequi. Beatae, exercitationem in magni eos vitae sequi aut. Praesentium ratione adipisci sequi consectetur. Ut voluptas magnam rem. Laborum at optio asperiores delectus corrupti, molestiae, sed reiciendis placeat quis provident labore voluptatem sint quae quibusdam facilis doloremque aliquam. Explicabo deserunt in quas officiis, esse, veniam labore inventore adipisci facilis, iusto incidunt tenetur suscipit illo quaerat illum assumenda nobis eius. Quos id repellat molestiae commodi quaerat minima placeat, ratione optio neque?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
     }
}
