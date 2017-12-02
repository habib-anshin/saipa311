<?php

use Illuminate\Database\Seeder;

class tbl_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /**    $user = new \App\Role();
        $user->roSubject='user';
        $user->roDescription='کاربر';
        $user->save();

     /**   $user2= new \App\Role();
        $user2->roSubject='operator';
        $user2->roDescription='اپراتور';
        $user2->save();
*/
        $user = new \App\Role();
        $user->roSubject='admin';
        $user->roDescription='مدیریت';
        $user->save();

    }
}
