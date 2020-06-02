<?php

use App\Office;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        DB::table('users')->truncate();
        DB::table('offices')->truncate();
        factory(User::class, 1)->create();
        factory(Office::class, 100)->create();
    }
}
