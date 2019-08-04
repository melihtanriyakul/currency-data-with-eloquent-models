<?php

namespace App\Repositories;

use App\CurrencyRate;

class CurrencyRates
{
    public function all()
    {
        return CurrencyRate::all();
    }
}