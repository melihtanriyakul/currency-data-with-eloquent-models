<?php

namespace Tests\Feature;

use App\Http\Controllers\CurrencyRatesController;
use Tests\TestCase;

class CurrencyRateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $controller = new CurrencyRatesController();

        $this->assertEquals('EUR,CHF', $controller->getCurrencies());
        $this->assertEquals('USD', $controller->getSrcCurrency());
    }
}
