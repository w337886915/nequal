<?php

use Illuminate\Database\Seeder;
use App\Models\App;

class AppsTableSeeder extends Seeder
{
    public function run()
    {
        $apps = factory(App::class)->times(50)->make()->each(function ($app, $index) {
            if ($index == 0) {
                // $app->field = 'value';
            }
        });

        // App::insert($apps->toArray());
    }

}

