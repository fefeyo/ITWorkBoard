<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(PostSeeder::class);
        $this->command->info('usertable_seeded!');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        for($i = 1;$i < 6;$i++){
            User::create([
                'name' => 'people'.$i,
                'is_student' => true,
                'email' => 'email@people'.$i.'.com',
                'password' => bcrypt('student')
                ]);
        }
        User::create([
            'name' => 'フェフェ株式会社',
            'is_student' => false,
            'email' => 'email@company.com',
            'password' => bcrypt('company')
            ]);
    }
}

class PostSeeder extends Seeder
{
    public function run()
    {
        for($i = 0; $i < 100; $i++){
            Post::create([
                'company_id' => $i,
                'company_name' => 'カンパニー'.$i,
                'title' => "タイトル".$i,
                'category_id' => $i,
                'reward' => $i * 10000,
                'remain' => $i,
                'limit' => Carbon::today()->addDays($i),
                'description' => "説明".$i
                ]);
        }
    }
}
