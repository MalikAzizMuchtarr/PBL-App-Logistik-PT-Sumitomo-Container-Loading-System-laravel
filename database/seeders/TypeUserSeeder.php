<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\TypeUser;
use Illuminate\support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here
        $type_user = [
            'name' => 'operator',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        TypeUser::insert($type_user);
    }
}
