<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "fullname"=>"Trần Phương Nam",
            "username"=>"namtran",
            "password"=>"namtran24537",
            "email"=>"phuongnamgroupers@gmail.com",
            "phone"=>"0358150744",
            "avatar"=>"https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.6435-9/110007479_2847261028834683_7374212855848057932_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=fU7O9rrZe_cAX8jgFCU&_nc_ht=scontent.fsgn2-5.fna&oh=7efcfcf6096d5feaa5c1da69424e11bf&oe=60BCA37A",
            "type"=>"1",
            "description"=>"phuongnamgroupers@gmail.com"
        ]);
    }
}
