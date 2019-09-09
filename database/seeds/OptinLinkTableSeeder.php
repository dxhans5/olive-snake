<?php

use Illuminate\Database\Seeder;

class OptinLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('optin_links')->insert([
          'funnel_id' => 1,
          'iframe' => 'https://www.self.com/story/myth-of-running-and-weight-loss',
          'page_title' => 'Xixxix LLC - Let’s Talk About the Myth of Running for Weight Loss',
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
