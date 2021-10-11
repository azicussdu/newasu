<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['name'=>'Мужской'],
            ['name'=>'Женский']
        ];
        foreach ($items as $item){
            Gender::create($item);
        }
    }
}
