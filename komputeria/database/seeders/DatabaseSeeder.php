<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'jenis_perangkat' => 'Processor',
         ]);
        Kategori::create([
            'jenis_perangkat' => 'VGA',
         ]);
        Kategori::create([
            'jenis_perangkat' => 'RAM',
         ]);
        Kategori::create([
            'jenis_perangkat' => 'Power Supply',
         ]);
        Kategori::create([
            'jenis_perangkat' => 'Storage',
         ]);
        Kategori::create([
            'jenis_perangkat' => 'Motherboard',
         ]);
        Kategori::create([
            'jenis_perangkat' => 'Gaming Gear',
         ]);
    }
}
