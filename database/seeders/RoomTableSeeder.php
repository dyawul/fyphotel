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
            [
                'type_id' => 1,
                'room_status_id' => 1,
                'slug' => 'junior-room',
                'number' => '10B',
                'capacity' => 2,
                'price' => 200000,
                'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'type_id' => 2,
                'room_status_id' => 1,
                'slug' => 'superior-room',
                'number' => '11C',
                'capacity' => 3,
                'price' => 300000,
                'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'type_id' => 3,
                'room_status_id' => 1,
                'slug' => 'deluxe-room',
                'number' => '12D',
                'capacity' => 5,
                'price' => 400000,
                'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()) 
            ],
            [
                'type_id' => 4,
                'room_status_id' => 1,
                'slug' => 'superior-room',
                'number' => '9A',
                'capacity' => 6,
                'price' => 500000,
                'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'type_id' => 5,
                'room_status_id' => 1,
                'slug' => 'suite-room',
                'number' => '5E',
                'capacity' => 7,
                'price' => 600000,
                'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'type_id' => 6,
                'room_status_id' => 1,
                'slug' => 'presidential-room',
                'number' => '6F',
                'capacity' => 8,
                'price' => 700000,
                'view' => 'Consequatur aperiam consequatur praesentium ut. Ip',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()) 
            ]
        ];
        Room::insert($rooms);
    }
}
