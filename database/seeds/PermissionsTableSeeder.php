<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Create admin + student role
        $roles = array(
        	[
        		'name' => 'admin'
        	],
        	[
        		'name' => 'mentor'
        	],
        	[
        		'name'=>'intern'
        	]
        );
 		foreach ($roles as $role) {
        	Role::create($role);
        }
        
        Permission::create(['name' => 'create user']); 
    }
}
