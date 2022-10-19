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
            'title' => 'EGYPT\'S GREATEST COMEBACK',
            'description' => 'Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.',
            'email' => 'info@ape-eg.com',
            'phone' => '(+202) 23438556',
            'mobile' => '(+202) 2341 2723',
            'fax' => '(+202) 23417149',
            'name:en' => 'Landing Page',
            'name:ar' => 'نظام التبرعات',
            'description:en' => 'Landing Page',
            'description:ar' => 'صفحة العرض',
            'meta_description:en' => 'Landing Page',
            'meta_description:ar' => 'صفحة العرض',
            'mail_subject' => 'Confirmation Contact Request',
            'mail_message' => 'Hello {user_name}, Your data Sent Successfully,You Are Welcome.',
            'thank_title' => 'THANK YOU!',
            'thank_desc' => 'Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.'
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
