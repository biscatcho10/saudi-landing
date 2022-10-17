<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Laraeast\LaravelSettings\Facades\Settings;

class SettingsDatabaseSeeder extends Seeder
{
    /**
     * The list of the files keys.
     *
     * @var array
     */
    protected $files = [
        'logo',
        'favicon',
        'loginLogo',
        'loginBackground',
        'cover',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $titles = [
            'email' => 'info@ape-eg.com',
            'phone' => '(+202) 23438556',
            'mobile' => '(+202) 2341 2723',
            'fax' => '(+202) 23417149',
            'name:en' => 'Landing Page',
            'name:ar' => 'نظام التبرعات',
            'description:en' => 'Landing Page',
            'description:ar' => 'صفحة العرض',
            'meta_description:en' => 'Landing Page',
            'meta_description:ar' => 'صفحة العرض'
        ];

        foreach ($titles as $key => $value) {
            Settings::set($key, $value);
        }



        // images
        foreach ($this->files as $file) {
            Settings::set($file)->addMedia(__DIR__ . '/images/' . $file . '.png')
                ->preservingOriginal()
                ->toMediaCollection($file);
        }
    }
}
