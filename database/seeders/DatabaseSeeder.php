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
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $user = User::factory()->create([
            'name' =>'John Doe'
        ]);
        Post::factory(5)->create([
            'user_id' =>$user->id
        ]);
        



//         $book1 = Category::create([
//              'name'=>'Book1',
//              'slug'=>'book1'
//         ]);

//         $book2 = Category::create([
//             'name'=>'Book2',
//             'slug'=>'book2'
//        ]);
//        $book3 = Category::create([
//         'name'=>'Book3',
//         'slug'=>'book3'
//    ]);
//        Post::create([
//         'user_id'=>$user->id,
//         'category_id' => $book2 ->id,
//         'title' => 'My Lucky1 Page',
//         'slug' => 'my-lucky1-page',
//         'excerpt' => '<p>I hope I can be happy every day!!!</p>',
//          'body' => '<p>Wishing you a day filled with joy and happiness! May your moments be sprinkled with laughter and your heart be light. In this journey called life, may the burdens be few, and may each step be a dance of delight. Let positivity be your guide, and may the sun of optimism shine brightly upon your path. May challenges be but fleeting clouds in the vast sky of your existence, and may the winds of contentment gently carry you forward. Here\'s to a day of smiles, togetherness, and the simple pleasures that make life truly beautiful. May your joy be contagious, and may each day bring you closer to a world where kindness reigns and worries fade away. Cheers to a day filled with sunshine and the warmth of happy moments!</p>',


//     ]);
//     Post::create([
//         'user_id'=>$user->id,
//         'category_id' => $book3 ->id,
//         'title' => 'My Lucky2 Page',
//         'slug' => 'my-lucky2-page',
//         'excerpt' => '<p>I hope I can be happy every day!!!</p>',
//          'body' => '<p>Wishing you a day filled with joy and happiness! May your moments be sprinkled with laughter and your heart be light. In this journey called life, may the burdens be few, and may each step be a dance of delight. Let positivity be your guide, and may the sun of optimism shine brightly upon your path. May challenges be but fleeting clouds in the vast sky of your existence, and may the winds of contentment gently carry you forward. Here\'s to a day of smiles, togetherness, and the simple pleasures that make life truly beautiful. May your joy be contagious, and may each day bring you closer to a world where kindness reigns and worries fade away. Cheers to a day filled with sunshine and the warmth of happy moments!</p>',


//     ]);
        

    }
}
