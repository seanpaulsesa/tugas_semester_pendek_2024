<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => '',
            'image' => '',
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('admin@gmail.com')
        ]);

        $admin->assignRole('admin');

       $editor = User::create([
            'first_name' => 'Editor',
            'last_name' => '',
            'image' => '',
            'email' => 'editor@gmail.com',
            'password' =>  bcrypt('editor@gmail.com')
        ]);

        $editor->assignRole('editor');
    }
}
