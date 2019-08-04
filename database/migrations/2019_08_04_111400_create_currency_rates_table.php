<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_rates', function (Blueprint $table) {
            $table->timestamp('date')->nullable(false);
            $table->char('src_currency', 3)->nullable(false);
            $table->char('dest_currency', 3)->nullable(false);
            $table->decimal('currency_rate', 19, 6);
            $table->primary(['date', 'src_currency', 'dest_currency']);
            $table->foreign('src_currency')->references('code')->on('currencies');
            $table->foreign('dest_currency')->references('code')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_rates');
    }
}
