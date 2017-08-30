<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Spatie\Permission\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
        	[
        		'email' => 'admin@eldohub.co.ke',
        		'name' => 'Amdin',
        		'password' => 'admin',
        		'confirmation_code' => Uuid::uuid4(), // attacched to email for confirm email
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	]);

        // attach admin role
        $admin = User::where('email', $user->email)->first();

        $admin->roles()->attach(Role::where('name', 'amdin')->first());
    }
}
