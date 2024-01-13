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
            'name' => 'Standard Room',
            'information' =>  'Seperti namanya, jenis kamar standard room adalah tipe kamar hotel yang paling dasar di hotel. Biasanya, kamar tipe ini dibanderol dengan harga yang relatif murah. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size. Namun, penawaran yang diberikan tergantung pada masing-masing hotel. Standard room hotel bintang 1 dan bintang 5 tentu berbeda.',
        ];

        Type::insert($types);
    }
}
