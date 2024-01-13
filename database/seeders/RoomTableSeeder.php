<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            'type_id' => 1,
            'room_status_id' => 1,
            'slug' => 'junior-room',
            'number' => '10B',
            'capacity' => 2,
            'price' => 200,
            'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())


        ];
        Room::insert($rooms);
    }
}
