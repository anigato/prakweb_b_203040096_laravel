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
        // User::create([
        //     'name'=>'khoerul anam',
        //     'email'=>'khoerulanam@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=>'anigato',
        //     'email'=>'anigato@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        User::create([
            'name'=>'adminnya saya',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'is_admin'=>'1'
        ]);

        User::factory(10)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programing'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personoal'
        ]);
        Category::create([
            'name'=>'Robotic',
            'slug'=>'robotic'
        ]);

        
        Post::factory(100)->create();

        // Post::create([
        //     'title'=>'Hari Pertama',
        //     'slug'=>'hari-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui autem aut. Voluptatum, nobis quos aut quia minus veritatis saepe?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero debitis est dicta magni, atque enim eligendi, nostrum sunt et consequuntur aperiam! A voluptatibus laudantium suscipit asperiores beatae quibusdam id reprehenderit iure non officiis, omnis quod, vitae nulla nihil ab consequatur voluptates, harum molestiae maiores aperiam dolore eum placeat illum!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores cumque rerum iste quos molestias obcaecati voluptatibus quam unde ullam nam!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rem quidem ab odit quam eum praesentium soluta harum sit in dolor incidunt impedit fuga quia dolorum reprehenderit iure, dolores cum tempore, aliquam error velit blanditiis quasi! Exercitationem, sapiente minima. Necessitatibus, doloribus! Quisquam ipsa eligendi quod reiciendis molestiae, nostrum placeat aspernatur nam at! Rerum nesciunt veritatis omnis quod dicta amet. Magnam officia, temporibus ea debitis, aliquid hic recusandae veniam, et soluta exercitationem repellendus nemo? Dolore impedit modi esse nemo officiis soluta rerum, quisquam totam laudantium sed quaerat quidem doloremque eligendi fugiat optio minima eum iusto pariatur. Aliquam eos veritatis cupiditate esse.</p>',
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Hari Kedua',
        //     'slug'=>'hari-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui autem aut. Voluptatum, nobis quos aut quia minus veritatis saepe?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero debitis est dicta magni, atque enim eligendi, nostrum sunt et consequuntur aperiam! A voluptatibus laudantium suscipit asperiores beatae quibusdam id reprehenderit iure non officiis, omnis quod, vitae nulla nihil ab consequatur voluptates, harum molestiae maiores aperiam dolore eum placeat illum!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores cumque rerum iste quos molestias obcaecati voluptatibus quam unde ullam nam!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rem quidem ab odit quam eum praesentium soluta harum sit in dolor incidunt impedit fuga quia dolorum reprehenderit iure, dolores cum tempore, aliquam error velit blanditiis quasi! Exercitationem, sapiente minima. Necessitatibus, doloribus! Quisquam ipsa eligendi quod reiciendis molestiae, nostrum placeat aspernatur nam at! Rerum nesciunt veritatis omnis quod dicta amet. Magnam officia, temporibus ea debitis, aliquid hic recusandae veniam, et soluta exercitationem repellendus nemo? Dolore impedit modi esse nemo officiis soluta rerum, quisquam totam laudantium sed quaerat quidem doloremque eligendi fugiat optio minima eum iusto pariatur. Aliquam eos veritatis cupiditate esse.</p>',
        //     'category_id'=> 2,
        //     'user_id'=>3
        // ]);
        // Post::create([
        //     'title'=>'Hari Ketiga',
        //     'slug'=>'hari-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui autem aut. Voluptatum, nobis quos aut quia minus veritatis saepe?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero debitis est dicta magni, atque enim eligendi, nostrum sunt et consequuntur aperiam! A voluptatibus laudantium suscipit asperiores beatae quibusdam id reprehenderit iure non officiis, omnis quod, vitae nulla nihil ab consequatur voluptates, harum molestiae maiores aperiam dolore eum placeat illum!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores cumque rerum iste quos molestias obcaecati voluptatibus quam unde ullam nam!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rem quidem ab odit quam eum praesentium soluta harum sit in dolor incidunt impedit fuga quia dolorum reprehenderit iure, dolores cum tempore, aliquam error velit blanditiis quasi! Exercitationem, sapiente minima. Necessitatibus, doloribus! Quisquam ipsa eligendi quod reiciendis molestiae, nostrum placeat aspernatur nam at! Rerum nesciunt veritatis omnis quod dicta amet. Magnam officia, temporibus ea debitis, aliquid hic recusandae veniam, et soluta exercitationem repellendus nemo? Dolore impedit modi esse nemo officiis soluta rerum, quisquam totam laudantium sed quaerat quidem doloremque eligendi fugiat optio minima eum iusto pariatur. Aliquam eos veritatis cupiditate esse.</p>',
        //     'category_id'=> 1,
        //     'user_id'=>2
        // ]);
        // Post::create([
        //     'title'=>'Hari Keempat',
        //     'slug'=>'hari-keempat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui autem aut. Voluptatum, nobis quos aut quia minus veritatis saepe?',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero debitis est dicta magni, atque enim eligendi, nostrum sunt et consequuntur aperiam! A voluptatibus laudantium suscipit asperiores beatae quibusdam id reprehenderit iure non officiis, omnis quod, vitae nulla nihil ab consequatur voluptates, harum molestiae maiores aperiam dolore eum placeat illum!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores cumque rerum iste quos molestias obcaecati voluptatibus quam unde ullam nam!</p>
        //     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum rem quidem ab odit quam eum praesentium soluta harum sit in dolor incidunt impedit fuga quia dolorum reprehenderit iure, dolores cum tempore, aliquam error velit blanditiis quasi! Exercitationem, sapiente minima. Necessitatibus, doloribus! Quisquam ipsa eligendi quod reiciendis molestiae, nostrum placeat aspernatur nam at! Rerum nesciunt veritatis omnis quod dicta amet. Magnam officia, temporibus ea debitis, aliquid hic recusandae veniam, et soluta exercitationem repellendus nemo? Dolore impedit modi esse nemo officiis soluta rerum, quisquam totam laudantium sed quaerat quidem doloremque eligendi fugiat optio minima eum iusto pariatur. Aliquam eos veritatis cupiditate esse.</p>',
        //     'category_id'=> 2,
        //     'user_id'=>2
        // ]);
    }
}
