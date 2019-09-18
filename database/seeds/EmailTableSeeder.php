<?php

use Illuminate\Database\Seeder;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('emails')->insert([
          'name' => '30HealthySnacksToKeepAtYourDesk',
          'body' => "Hey - Donny from <a href='https://www.xixxixllc'>Xixxix,
                     LLC</a> here...<br/>Having healthy snacks for work on-hand
                     at the office is key for staying fueled and focused when
                     you need it most. Whether you are in the middle of a big
                     project or you're chained to your desk with a looming
                     deadline, they'll help keep your energy up and your blood
                     sugar stable during an afternoon slump.<br/>A solid snack
                     should have some protein and fiber to keep you satisfied
                     until your next meal.<br/><a href='[[[ downloadlink ]]]'>
                     <b>Here are 30 snack options you can keep right at your
                     desk</b></a><br/>No jockeying for fridge space or dealing
                     with thieving coworkers.",
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
