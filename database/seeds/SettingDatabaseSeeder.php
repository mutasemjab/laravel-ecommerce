<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_local'=>'ar',
            'default_timezone'=>'Jordan/amman',
            'reviews_enabled'=>true,
            'auto_approve_review'=>true,
            'supported_currencies'=>['USD','JD'],
            'default_currency'=>'JD',
            'store_email'=>'mutasem@store.com',
            'search_engine'=>'mysql',
            'local_shipping_cost'=>0,
            'outer_shipping_cost'=>0,
            'free_shipping_cost'=>0,
            'translatable'=>[
                'store_name'=>'mutasem store',
                'free_shipping_label'=>'Free shipping',
                'local_label'=>'Local shipping',
                'outer_label'=>'Outer shipping',

            ],



        ]);
    }
}
