<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name"=>"Lập trình",
            "description"=>"",
            "url_key"=>"lap-trinh",
            "uid"=>"ltpd213",
            "status"=>"1",
            "level"=>"1",
            "str_id"=>"",
            "description"=>"phuongnamgroupers@gmail.com"
        ]);

        DB::table('categories')->insert([
            "name"=>"Giải trí",
            "description"=>"",
            "url_key"=>"giai-tri",
            "uid"=>"tie1231s",
            "status"=>"1",
            "level"=>"1",
            "str_id"=>"",
            "description"=>"phuongnamgroupers@gmail.com"
        ]);
    }
}
