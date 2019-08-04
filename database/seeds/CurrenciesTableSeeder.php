<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create(
            [
                'code' => 'EUR',
                'number' => '978'
            ]
        );

        Currency::create(
            [
                'code' => 'USD',
                'number' => '840'
            ]);

        Currency::create(
            [
                'code' => 'CHF',
                'number' => '756'
            ]
        );

        Currency::create(
            [
                'code' => 'GBP',
                'number' => '826'
            ]);

        Currency::create(
            [
                'code' => 'TRY',
                'number' => '949'
            ]);
    }
}
