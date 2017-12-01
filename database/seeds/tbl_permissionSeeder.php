<?php

use Illuminate\Database\Seeder;

class tbl_permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  /**      $user= new \App\Permission();
        $user->pLabel='full';
        $user->pDescription='توانایی مدیریت تمامی بخش ها';
        $user->save();

       $user= new \App\Permission();
        $user->pLabel='half';
        $user->pDescription='دسترسی و مدیریت بعضی از بخشی ها';
        $user->save();
*/
         $user= new \App\Permission();
        $user->pLabel='limit';
        $user->pDescription='دستری به بخش هایی تعیین شده';
        $user->save();

    }
}
