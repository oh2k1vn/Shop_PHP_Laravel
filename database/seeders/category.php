<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'id' => '1',
                'category_name' => 'Áo thun',
                'desc' => 'nội dung',
            ],
            [
                'id' => '2',
                'category_name' => 'Áo khoác varsity',
                'desc' => 'nội dung',
            ],
            [
                'id' => '3',
                'category_name' => 'Áo khoác Jacket',
                'desc' => 'nội dung',
            ],
            [
                'id' => '4',
                'category_name' => 'Nón',
                'desc' => 'nội dung',
            ],
        ]);
    }
}
