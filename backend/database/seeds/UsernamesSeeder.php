<?php

use Illuminate\Database\Seeder;

class UsernamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Username::class, 4)->create();
    }
}
