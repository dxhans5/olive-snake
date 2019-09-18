<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EmailListTableSeeder::class);
        $this->call(EmailTableSeeder::class);
        $this->call(FunnelTableSeeder::class);
        $this->call(OptinLinkTableSeeder::class);
    }
}
