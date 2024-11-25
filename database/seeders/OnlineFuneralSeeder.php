<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OnlineFuneral;

class OnlineFuneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OnlineFuneral::firstOrCreate([
            'room_name' => 'Sala 1',
            'room_password' => 'sala01',
            'cam_link' => 'https://rtsp.me/embed/6TiNKR9s',
            'is_active' => true,
        ]);

        OnlineFuneral::firstOrCreate([
            'room_name' => 'Sala 2',
            'room_password' => 'sala02',
            'cam_link' => 'https://rtsp.me/embed/zdHB3NrQ',
            'is_active' => true,
        ]);

        OnlineFuneral::firstOrCreate([
            'room_name' => 'Sala 3',
            'room_password' => 'sala03',
            'cam_link' => 'https://rtsp.me/embed/9FYQ82d7',
            'is_active' => true,
        ]);
    }
}
