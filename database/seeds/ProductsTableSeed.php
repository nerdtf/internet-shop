<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Canon EOS 1300D EF-S',
                'slug' => 'canon_eos_1300d',
                'price' => '15999',
                'description' => 'Матрица 22.3 x 14.9 мм, 18 Мп / Объектив EF-S 18-55mm III + EF 75-300mm f/4-5.6 III USM / Зум: 3.05х (оптический) / поддержка карт памяти SD/SDHC/SDXC / LCD-дисплей 3" / FullHD-видео / Wi-Fi / NFC / питание от литий-ионного аккумулятора / 129 х 147.6 х 101.3 мм, 685 г / черный',
                'image' => 'Canon_EOS_1300D_EF-S.jpg'
            ],
            [
                'title' => 'Nikon D850 Body',
                'slug' => 'nikon_d850',
                'price' => '114999',
                'description' => 'Матрица 35.9 x 23.9 мм, 45.7 Мп / поддержка карт памяти SD/SDHC/SDXC/XQD / ЖК-дисплей 3.2" / питание от литий-ионного аккумулятора / 146 x 124 x 78.5 мм, 1005 г',
                'image' => 'Nikon_D850_Body.jpg'
            ],
            [
                'title' => 'Sony Alpha 77M2',
                'slug' => 'sony_alpha_77m2',
                'price' => '51999',
                'description' => 'Матрица 23.5 x 15.6 мм, 24.3 Мп / объектив DT 16 - 50 мм F2.8 SSM / Зум: 3.1х (оптический), 4х (цифровой) / поддержка карт памяти Memory Stick PRO Duo, Memory Stick PRO-HG Duo, Memory Stick XC-HG Duo, SD, SDHC, SDXC, microSDHC / поворотный ЖК-экран 3" / FullHD видео / Wi-Fi / NFC / питание от литий-ионного аккумулятора / 142.6 x 168.9 x 104.2 мм, 1303 г / черный',
                'image' => 'Sony_Alpha_77M2.png'
            ],
            [
                'title' => 'Nikon D5600 AF-S',
                'slug' => 'nikon_d5600',
                'price' => '23999',
                'description' => 'Матрица 23.5 x 15.6 мм, 24.2 Мп / объектив 18-105mm f/3.5-5.6G VR / Зум: 0.82х / поддержка карт памяти SD/SDHC/SDXC / ЖК-дисплей 3.2" / Full HD-видео / питание от литий-ионного аккумулятора / 124 x 97 x 159 мм, 815 г / черный',
                'image' => 'Nikon_D5600_AF-S.jpg'
            ],
            [
                'title' => 'Canon EOS 5D',
                'slug' => 'canon_eos_5d',
                'price' => '76899',
                'description' => 'Матрица 36 x 24 мм, 30.4 Мп / поддержка карт памяти CompactFlash Type I, SD, SDHC, SDXC (UHS-I) / LCD-дисплей 3.2" / 4K-видео / питание от литий-ионного аккумулятора / 150.7 x 116.4 x 75.9 мм, 800 г (только корпус) / черный',
                'image' => 'Canon_EOS_5D.jpg'
            ],
            [
                'title' => 'Nikon D7200',
                'slug' => 'nikon_d7200',
                'price' => '24123',
                'description' => 'Матрица 23.5 x 15.7 мм, 20.9 Мп / поддержка карт памяти SD/SDHC/SDXC/XQD / LCD-дисплей 3.2" / 4K-видео / питание от литий-ионного аккумулятора / 147 x 115 x 81 мм, 860 г / черный',
                'image' => 'Nikon_D7200.jpg'
            ],
        ]);
    }
}
