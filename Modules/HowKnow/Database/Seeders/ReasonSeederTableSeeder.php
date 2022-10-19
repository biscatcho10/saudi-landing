<?php

namespace Modules\HowKnow\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\HowKnow\Entities\Reason;

class ReasonSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            "Facebook" => "فيس بوك",
            "Instagram" => "إنستجرام",
            "Website" => "الموقع الألكتروني",
            "Friend" => "صديق",
            "TV Show" => "حوار تليفزيوني",
            // "Other" => "غير ذلك",
        ];


        foreach ($reasons as $key => $reason) {
            Reason::create([
                'reason' => $key,
            ]);
        }
    }
}
