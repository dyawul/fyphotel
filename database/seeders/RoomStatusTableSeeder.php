<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomStatus;

class RoomStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomStatuses = [
        [
            'name' => 'Vacant',
            'code' => 'V',
            'information' => 'Sebutan bagi kamar yang kosong'
        ],
        [
            'name' => 'Occupied',
            'code' => 'O',
            'information' => 'Suatu kamar yang sedang ditempati oleh sesorang secara sah dan teregister sebagai tamu hotel.'
        ],

        ];

        RoomStatus::insert($roomStatuses);
    }
}
