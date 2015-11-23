<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        $this->command->info('usertable_seeded!');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        for($i = 0;$i < 5;$i++){
            DB::table('users')->insert([
                'name' => 'people'.$i,
                'is_student' => "0",
                'email' => 'email@people'.$i.'.com',
                'password' => $i
                ]);
        }
        DB::table('users')->insert([
            'name' => 'フェフェ株式会社',
            'is_student' => "1",
            'email' => 'email@company.com',
            'password' => 'company'
            ]);
    }
}
