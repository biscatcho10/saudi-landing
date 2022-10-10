<?php

namespace Modules\Settings\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Settings\Entities\Award;

class AwardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $awards = [
            'logo-1' => [
                'name:en' => 'Dubai International award in the field of paper recycling.',
                'name:ar' => 'جوافة دبي على مستخدمي الأوراق المستخدمة للتخلص من الورق.',
                'url' => 'https://www.awardimages.io/logo-1/',
                'date' => '2000-01-01',
            ],
            'logo-2' => [
                'name:en' => 'Dubai International award in the field of paper recycling.',
                'name:ar' => 'جوافة دبي على مستخدمي الأوراق المستخدمة للتخلص من الورق.',
                'url' => 'https://www.awardimages.io/logo-2/',
                'date' => '2020-01-01',
            ],
            'logo-2' => [
                'name:en' => 'Dubai International award in the field of paper recycling.',
                'name:ar' => 'جوافة دبي على مستخدمي الأوراق المستخدمة للتخلص من الورق.',
                'url' => 'https://www.awardimages.io/logo-2/',
                'date' => '2014-01-01',
            ],
            'logo-4' => [
                'name:en' => 'Dubai International award in the field of paper recycling.',
                'name:ar' => 'جوافة دبي على مستخدمي الأوراق المستخدمة للتخلص من الورق.',
                'url' => 'https://www.awardimages.io/logo-4/',
                'date' => '1999-01-01',
            ],
            'logo-5' => [
                'name:en' => 'Dubai International award in the field of paper recycling.',
                'name:ar' => 'جوافة دبي على مستخدمي الأوراق المستخدمة للتخلص من الورق.',
                'url' => 'https://www.awardimages.io/logo-5/',
                'date' => '1980-01-01',
            ],
            'logo-6' => [
                'name:en' => 'Dubai International award in the field of paper recycling.',
                'name:ar' => 'جوافة دبي على مستخدمي الأوراق المستخدمة للتخلص من الورق.',
                'url' => 'https://www.awardimages.io/logo-6/',
                'date' => '2010-01-01',
            ],
        ];

        foreach ($awards as $key => $award) {
            $award = Award::create($award);
            // add logo image
            $award->addMedia(__DIR__ . '/awards/' . $key . '.png')
                ->preservingOriginal()
                ->toMediaCollection('images');
        }

    }
}
