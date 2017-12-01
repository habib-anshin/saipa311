<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(tbl_userSeeder::class);
       //$this->call(tbl_roleSeeder::class);
      //  $this->call(tbl_permissionSeeder::class);
    }
}
