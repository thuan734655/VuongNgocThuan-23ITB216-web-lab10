<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('tbl_admin')->insert([
            'admin_email' => 'admin@example.com',
            'admin_password' => md5('admin123'), // Password: admin123
            'admin_name' => 'Admin',
            'admin_phone' => '1234567890',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
