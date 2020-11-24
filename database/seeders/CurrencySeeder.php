<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create(['iso' => 'eur']);
        Currency::create(['iso' => 'usd']);
        Currency::create(['iso' => 'gbp']);
    }
}
