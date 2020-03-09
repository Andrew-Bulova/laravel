<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OverUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('over_users')->insert([
            'name' => 'Булова Андрей Юрьевич',
            'email' => 'ghostrider2107@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        ]);
    }
}
