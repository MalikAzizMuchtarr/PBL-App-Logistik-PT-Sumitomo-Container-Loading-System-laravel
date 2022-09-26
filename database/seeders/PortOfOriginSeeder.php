<?php

namespace Database\Seeders;

use App\Models\MasterData\PortOfOrigin;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class PortOfOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $port_of_originn = [
            [
                'country' =>'Philippines',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'country' =>'Thailand',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'country' =>'Japan',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'country' =>'Surabaya',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'country' =>'Jakarta',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'country' =>'Vietnam',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'country' =>'Singapore',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ],
        ];


        PortOfOrigin::insert($port_of_originn);
    }
}
