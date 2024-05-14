<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Admin User',
                'email' => 'admin@admin.com',
                'hp' => '08123456789',
                'alamat' => 'Jl. Admin No. 1',
                'is_admin' => 1,
                'password' => Hash::make('admin'),

            ],
            // [
            //     'name' => 'Regular User',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('password'),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
        // $table->id();
        // $table->string('nama');
        // $table->string('email')->unique();
        // $table->string('hp');
        // $table->string('alamat');
        // $table->integer('is_admin')->default(0);
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->rememberToken();
        // $table->timestamps();
    }
}
