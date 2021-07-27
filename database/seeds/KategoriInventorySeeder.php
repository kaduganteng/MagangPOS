<?php

use Illuminate\Database\Seeder;
use App\KategoriInventory;

class KategoriInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori =
            [
                'laptop',
                'dekstop',
                'printer',
                'webcam',
                'scanner',
                'bukanaset'

            ];
        foreach ($kategori as $k) {
            KategoriInventory::insert([
                'nama_kategori' => $k
            ]);
        }
    }
}
