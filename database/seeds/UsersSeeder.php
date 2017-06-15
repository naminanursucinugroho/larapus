<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin
        $adminRole = new Role();
        $adminRole->name ="admin";
        $adminRole->display_name ="Admin";
        $adminRole->save();

        //Membuat role member
        $memberRole = new Role();
        $memberRole->name ="member";
        $memberRole->display_name ="Member";
        $memberRole->save();

        //Membuat sample admin
        $adminRole = new User();
        $adminRole->name ='Admin Larapus';
        $adminRole->email ='admin@gmail.com';
        $adminRole->password =bcrypt('rahasia');
        $adminRole->save();
        $adminRole->attachRole($adminRole);

        //Membuat sample member
        $memberRole = new User();
        $memberRole->name ="Sample Member";
        $memberRole->email ='member@gmail.com';
        $memberRole->password =bcrypt('rahasia');
        $memberRole->save();
        $memberRole->attachRole($memberRole);
    }
}
