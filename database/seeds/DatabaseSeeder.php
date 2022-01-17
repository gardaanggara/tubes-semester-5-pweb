<?php

use Illuminate\Database\Seeder;
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
        $admin = new User();
		$admin->name = 'Garda Anggara';
		$admin->email = 'garda@gmail.com';
		$admin->password = bcrypt('rizal123');
		$admin->save();
    }
}
