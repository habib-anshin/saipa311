<?php

use Illuminate\Database\Seeder;

class tbl_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name='حبیب آنشین';
        $user->email='habibanshin';
        $user->password=Hash::make('123456');
        $user->state='1';
        $user->save();
    }
}
