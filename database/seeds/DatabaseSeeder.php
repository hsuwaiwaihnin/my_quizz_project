<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        //$this->call(RoleTableSeeder::class);
        $user=User::create([
        	'name' =>'Admin',
        	'email' =>'admin@gmail.com',
        	'password' =>bcrypt('12345678'),
        	'created_at' =>date("Y-m-d H:i:s")]);
        $user->assignRole('admin');
    }
}
