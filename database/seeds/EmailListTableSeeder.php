<?php

use Illuminate\Database\Seeder;

class EmailListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('email_lists')->insert([
          'name' => 'Cinderella Solution',
          'vendorId' => 'poundinc',
          'trackingId' => 'fe4453b2-95c9-4aed-a625-64d979938d30',
          'hoplink' => 'https://hop.clickbank.net/?affiliate=dhansen197&vendor=poundinc&tid=fe4453b2-95c9-4aed-a625-64d979938d30',
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
