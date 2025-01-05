<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\ConfigurationEnum;
use App\Models\Configuration;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cases = ConfigurationEnum::cases();

        foreach ($cases as $case) {
            Configuration::firstOrCreate([
                'id' => $case->value,
            ]);
        }
    }
}
