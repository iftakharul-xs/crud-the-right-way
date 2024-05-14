<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offers = \App\Models\Offer::factory(5)->create();

        /**
         * Attach random categories and locations to each offer
         * location and category are connected through pivot table
         * needed to define relationship in model and table
         */
        $offers->each(function ($offer) {
            $offer->locations()->attach(\App\Models\Location::all()->random(3));
            $offer->categories()->attach(\App\Models\Category::all()->random(3));
        });
    }
}
