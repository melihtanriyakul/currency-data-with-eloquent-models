<?php

namespace App\Http\Controllers;

use App\CurrencyRate;
use Carbon\Carbon;
use Exception;
Use OceanApplications\currencylayer;

class CurrencyRatesController extends Controller
{
    private $currencies = 'EUR,CHF';
    private $srcCurrency = 'USD';

    /**
     * Saves the currency rates from the API to the database
     * and return the currency.rates view.
     *
     * @return currency-rates view
     */
    public function saveAPICurrencies()
    {
        $currencylayer = new currencylayer\client('bf5dc38bbb40e9186c941e531508923b');
        $result = $currencylayer
            ->source($this->srcCurrency)
            ->currencies($this->currencies)
            ->live();

        $arrCurrencies = explode(',', $this->currencies);

        if ($result['success']) {
            $date = Carbon::createFromTimestamp($result['timestamp'])->toDateTimeString();
            $i = 0;

            foreach ($result['quotes'] as $quote) {
                try {
                    $currencyRate = new CurrencyRate();

                    $currencyRate->date = $date;
                    $currencyRate->src_currency = $this->srcCurrency;
                    $currencyRate->dest_currency = $arrCurrencies[$i];
                    $currencyRate->currency_rate = $quote;

                    $currencyRate->save();
                } catch (Exception $e) {
                }
                $i += 1;
            }
        }

        return view('currency-rates', ['results' => json_encode($result)]);
    }

    /**
     * @return string
     */
    public function getCurrencies(): string
    {
        return $this->currencies;
    }

    /**
     * @return string
     */
    public function getSrcCurrency(): string
    {
        return $this->srcCurrency;
    }
}
