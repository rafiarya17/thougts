<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Jakwan Amji',
            'username' => 'Jacky',
            'email' => 'jakwan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Elroy Gans',
            'username' => 'Elroy',
            'email' => 'elroy@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);

        Category::create([
            'name' => 'Places',
            'slug' => 'places'
        ]);

        Category::create([
            'name' => 'Games and E-Sports',
            'slug' => 'games-and-e-sports'
        ]);

        Post::create([
            'title' => 'Pemrograman PHP',
            'slug' => 'pemrograman-php',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima, eius nobis suscipit, aperiam omnis cumque adipisci deleniti voluptatem laboriosam voluptatum, et distinctio sequi nesciunt iste incidunt odit reiciendis sapiente modi eaque pariatur? Repellat aliquid necessitatibus eaque quos, vel illo numquam harum veritatis, inventore explicabo eligendi, dolores quam.</p> <p>Qui vitae laboriosam est exercitationem dolor in repellendus, iste suscipit quasi deserunt sequi fugiat molestias velit, ipsum non quas. Obcaecati facere nisi nobis ab ut aperiam ducimus maxime sit sint, odit eius fugit distinctio architecto unde? Illum aspernatur facere ratione, alias at eos dignissimos id tenetur reiciendis culpa perferendis nobis ab aliquam?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'ReactJS',
            'slug' => 'reactjs',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima, eius nobis suscipit, aperiam omnis cumque adipisci deleniti voluptatem laboriosam voluptatum, et distinctio sequi nesciunt iste incidunt odit reiciendis sapiente modi eaque pariatur? Repellat aliquid necessitatibus eaque quos, vel illo numquam harum veritatis, inventore explicabo eligendi, dolores quam.</p> <p>Qui vitae laboriosam est exercitationem dolor in repellendus, iste suscipit quasi deserunt sequi fugiat molestias velit, ipsum non quas. Obcaecati facere nisi nobis ab ut aperiam ducimus maxime sit sint, odit eius fugit distinctio architecto unde? Illum aspernatur facere ratione, alias at eos dignissimos id tenetur reiciendis culpa perferendis nobis ab aliquam?</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Pemrograman Java',
            'slug' => 'pemrograman-java',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima, eius nobis suscipit, aperiam omnis cumque adipisci deleniti voluptatem laboriosam voluptatum, et distinctio sequi nesciunt iste incidunt odit reiciendis sapiente modi eaque pariatur? Repellat aliquid necessitatibus eaque quos, vel illo numquam harum veritatis, inventore explicabo eligendi, dolores quam.</p> <p>Qui vitae laboriosam est exercitationem dolor in repellendus, iste suscipit quasi deserunt sequi fugiat molestias velit, ipsum non quas. Obcaecati facere nisi nobis ab ut aperiam ducimus maxime sit sint, odit eius fugit distinctio architecto unde? Illum aspernatur facere ratione, alias at eos dignissimos id tenetur reiciendis culpa perferendis nobis ab aliquam?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Coffee and Cookies',
            'slug' => 'coffee-and-cookies',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima, eius nobis suscipit, aperiam omnis cumque adipisci deleniti voluptatem laboriosam voluptatum, et distinctio sequi nesciunt iste incidunt odit reiciendis sapiente modi eaque pariatur? Repellat aliquid necessitatibus eaque quos, vel illo numquam harum veritatis, inventore explicabo eligendi, dolores quam.</p> <p>Qui vitae laboriosam est exercitationem dolor in repellendus, iste suscipit quasi deserunt sequi fugiat molestias velit, ipsum non quas. Obcaecati facere nisi nobis ab ut aperiam ducimus maxime sit sint, odit eius fugit distinctio architecto unde? Illum aspernatur facere ratione, alias at eos dignissimos id tenetur reiciendis culpa perferendis nobis ab aliquam?</p>',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Coding and Traveller',
            'slug' => 'coding-and-traveller',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima, eius nobis suscipit, aperiam omnis cumque adipisci deleniti voluptatem laboriosam voluptatum, et distinctio sequi nesciunt iste incidunt odit reiciendis sapiente modi eaque pariatur? Repellat aliquid necessitatibus eaque quos, vel illo numquam harum veritatis, inventore explicabo eligendi, dolores quam.</p> <p>Qui vitae laboriosam est exercitationem dolor in repellendus, iste suscipit quasi deserunt sequi fugiat molestias velit, ipsum non quas. Obcaecati facere nisi nobis ab ut aperiam ducimus maxime sit sint, odit eius fugit distinctio architecto unde? Illum aspernatur facere ratione, alias at eos dignissimos id tenetur reiciendis culpa perferendis nobis ab aliquam?</p>',
            'category_id' => 4,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Hobby and Working',
            'slug' => 'hobby-and-working',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe minima, eius nobis suscipit, aperiam omnis cumque adipisci deleniti voluptatem laboriosam voluptatum, et distinctio sequi nesciunt iste incidunt odit reiciendis sapiente modi eaque pariatur? Repellat aliquid necessitatibus eaque quos, vel illo numquam harum veritatis, inventore explicabo eligendi, dolores quam.</p> <p>Qui vitae laboriosam est exercitationem dolor in repellendus, iste suscipit quasi deserunt sequi fugiat molestias velit, ipsum non quas. Obcaecati facere nisi nobis ab ut aperiam ducimus maxime sit sint, odit eius fugit distinctio architecto unde? Illum aspernatur facere ratione, alias at eos dignissimos id tenetur reiciendis culpa perferendis nobis ab aliquam?</p>',
            'category_id' => 4,
            'user_id' => 2
        ]);
    }
}
