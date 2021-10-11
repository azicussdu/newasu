<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items=[
            ['name'=>'Русские'],
            ['name'=>'Украинцы'],
            ['name'=>'Белорусы'],
            ['name'=>'Узбеки'],
            ['name'=>'Казахи'],
            ['name'=>'Грузины'],
            ['name'=>'Азербайджанцы'],
            ['name'=>'Литовцы'],
            ['name'=>'Молдаване'],
            ['name'=>'Латышы'],
            ['name'=>'Кыргызы'],
            ['name'=>'Таджики'],
            ['name'=>'Армяне'],
            ['name'=>'Туркмены'],
            ['name'=>'Эстонцы'],
            ['name'=>'Абхазы'],
            ['name'=>'Балкарцы'],
            ['name'=>'Башкиры'],
            ['name'=>'Буряты'],
            ['name'=>'Аварцы'],
        ];
        foreach ($items as $item){
            Nationality::create($item);
        }
    }
}
