<?php

use Illuminate\Database\Seeder;
use App\CurrencyRate;

class CurrencyRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CurrencyRate::create(
          [
              'date' => '2019-08-03 15:00:00',
              'src_currency' => 'EUR',
              'dest_currency' => 'USD',
              'currency_rate' => '6.575231'
          ]
        );
    }
}
