<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'id' => '1',
                'brand_name' => 'Áo thun',
                'desc' => 'nội dung',
            ],
            [
                'id' => '2',
                'brand_name' => 'Áo khoác',
                'desc' => 'nội dung',
            ],
            [
                'id' => '3',
                'brand_name' => 'Nón',
                'desc' => 'nội dung',
            ],
        ]);
    }
}
