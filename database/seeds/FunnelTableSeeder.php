<?php

use Illuminate\Database\Seeder;

class FunnelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('funnels')->insert([
          'name' => 'Test Funnel',
          'stage_1_email_id' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
