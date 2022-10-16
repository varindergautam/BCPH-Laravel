<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin  = new User();
        $admin->applicant_name = "Admin";
        $admin->email = 'admin@gmail.com';
        $admin->password = \Hash::make('12345678');
        $admin->user_type = '1';
        $admin->save();
    }
}
