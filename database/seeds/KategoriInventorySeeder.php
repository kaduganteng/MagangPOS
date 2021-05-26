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
            'notebook',
            'printer',
            'kamera',
            'webcam',
            'scanner'

        ];
        foreach ($kategori as $k){
            KategoriInventory::insert([
                'nama_kategori' => $k 
            ]);
        }
    }
}
