<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Standard Room',
                'information' =>  'Seperti namanya, jenis kamar standard room adalah tipe kamar hotel yang paling dasar di hotel. Biasanya, kamar tipe ini dibanderol dengan harga yang relatif murah. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size. Namun, penawaran yang diberikan tergantung pada masing-masing hotel. Standard room hotel bintang 1 dan bintang 5 tentu berbeda.'
            ],
            [
                'name' => 'Superior Room',
                'information' => 'Pada dasarnya, superior room adalah tipe kamar yang sedikit lebih baik dari tipe standard room. Perbedaannya dapat berupa dari fasilitas yang diberikan, interior kamar, atau pemandangan dari kamar.'
            ],
            [
                'name' => 'Deluxe Room',
                'information' =>  'Di atas tipe kamar hotel superior room adalah deluxe room. Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah.'
            ],
            [
                'name' => 'Junior Suite Room',
                'information' => 'Tipe kamar hotel junior suite room ditandai dengan adanya ruang tamu. Namun, ruang tamu tersebut masih berada satu ruangan dengan tempat tidur. Ruang tamu tersebut biasanya dibatasi atau disekat dengan lemari besar agar tempat tidur tidak terlihat.'
            ],
            [
                'name' => 'Suite Room',
                'information' => 'Suite room berada di atas tipe kamar hotel junior suite room. Ruang tamu di kamar hotel ini terpisah dari kamar tidur. Dari segi fasilitas, tentu berbeda dari junior suite room. Selain ruang tamu, biasanya tipe kamar hotel ini dilengkapi dengan dapur.'
            ],
            [
                'name' => 'Presidential Suite',
                'information' => 'Presidential suite adalah tipe kamar hotel yang terbaik dan paling mahal. Bahkan, tidak semua hotel memiliki presidential suite. Fasilitas yang ditawarkan pun tentu yang terbaik, mulai dari interior, pemandangan kamar, dan masih banyak lainnya.'
            ]
        ];

        Type::insert($types);
    }
}
