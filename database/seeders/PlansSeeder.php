<?php

namespace Database\Seeders;

use App\Models\Benefit;
use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::firstOrCreate([
            'id' => 1,
            'name' => 'Básico',
            'joining' => 'Gratuita',
            'monthly_fee' => '38,00',
            'shortage' => '90 dias',
            'coverage' => 'Contratante + 5 beneficiários',
        ]);

        Benefit::firstOrCreate([
            'name' => 'Urna mortuária padrão básico (madeira de pinus, capacidade 100kg)',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Ornamentação com flores naturais e edredom',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Vestuário padrão',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Velas fúnebras e mesa de condolências',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Paramentação completa (castiçais)',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => '1 coroa de flores naturais (tamanho 1)',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Translado com franquia de 200km (ida e volta)',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Veículo para até 45 pessoas para o trajeto do velório ao sepultamento(franquia de 60km)',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Lembraça de 7° dia (50 unidades)',
            'plan_id' => 1,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Mini cesta',
            'plan_id' => 1,
        ]);

        Plan::firstOrCreate([
            'id' => 2,
            'name' => 'Master',
            'joining' => 'Gratuita',
            'monthly_fee' => '60,00',
            'shortage' => '90 dias',
            'coverage' => 'Contratante + 14 beneficiários',
        ]);

        Benefit::firstOrCreate([
            'name' => 'Urna mortuária padrão básico (madeira de pinus, capacidade 100kg)',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Ornamentação com flores naturais e edredom',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Vestuário padrão',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Velas fúnebras e mesa de condolências',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Paramentação completa (castiçais)',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => '1 coroa de flores naturais (tamanho 2)',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Translado com franquia de 400km (ida e volta)',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Veículo para até 45 pessoas para o trajeto do velório ao sepultamento(franquia de 100km)',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Lembraça de 7° dia (100 unidades)',
            'plan_id' => 2,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Mini cesta',
            'plan_id' => 2,
        ]);

        Plan::firstOrCreate([
            'id' => 3,
            'name' => 'Plus',
            'joining' => 'Gratuita',
            'monthly_fee' => '72,00',
            'shortage' => '90 dias',
            'coverage' => 'Contratante + 9 beneficiários',
        ]);

        Benefit::firstOrCreate([
            'name' => 'Urna mortuária semi luxo (madeira de pinus, capacidade 100kg)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Ornamentação com flores naturais e edredom',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Vestuário padrão',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Velas fúnebras e mesa de condolências',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Paramentação completa (castiçais)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => '2 coroa de flores naturais (tamanho 2)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Translado com franquia de 400km (ida e volta)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Veículo para até 45 pessoas para o trajeto do velório ao sepultamento(franquia de 100km)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Lembraça de 7° dia (150 unidades)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Serviço de tanatopraxia simples (conservação do corpo por até 40 horas)',
            'plan_id' => 3,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Mini cesta',
            'plan_id' => 3,
        ]);

        Plan::firstOrCreate([
            'id' => 4,
            'name' => 'Cremax',
            'joining' => 'Gratuita',
            'monthly_fee' => '74,00',
            'shortage' => '12 meses',
            'coverage' => 'Contratante + 3 beneficiários',
        ]);

        Benefit::firstOrCreate([
            'name' => 'Urna mortuária padrão básico (madeira de pinus, capacidade 100kg)',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Ornamentação com flores naturais e edredom',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Vestuário padrão',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Velas fúnebras e mesa de condolências',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Paramentação completa (castiçais)',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => '1 coroa de flores naturais (tamanho 2)',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Translado com franquia de 400km (ida e volta)',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Veículo para até 45 pessoas para o trajeto do velório ao sepultamento(franquia de 100km)',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Serviço de cremação no cemitério e crematório jardim do édem',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Lembraça de 7° dia (100 unidades)',
            'plan_id' => 4,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Mini cesta',
            'plan_id' => 4,
        ]);

        Plan::firstOrCreate([
            'id' => 5,
            'name' => 'Premiun',
            'joining' => 'Gratuita',
            'monthly_fee' => '120,00',
            'shortage' => '90 dias',
            'coverage' => 'Contratante + 9 beneficiários',
        ]);

        Benefit::firstOrCreate([
            'name' => 'Urna mortuária luxo (madeira de pinus, capacidade 100kg)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Ornamentação com flores naturais e edredom',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Vestuário padrão',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Velas fúnebras e mesa de condolências',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Paramentação completa (castiçais)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => '2 coroas de flores naturais (tamanho 2)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Translado com franquia de 400km (ida e volta)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Veículo para até 45 pessoas para o trajeto do velório ao sepultamento(franquia de 100km)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Lembraça de 7° dia (200 unidades)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Serviço de tanatopraxia simples (conservação do corpo por até 40 horas)',
            'plan_id' => 5,
        ]);
        Benefit::firstOrCreate([
            'name' => 'Mini cesta',
            'plan_id' => 5,
        ]);
    }
}
