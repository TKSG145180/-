<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->inserta([
            'name' =>'青木',
            'email' => 'test@test',
            'email_verified_at' =>'test',
            'password' =>'testuser',
            ' created_at' =>'new DateTime()',
            'updated_at' =>'new DateTime()',
            ]);
    }
}
