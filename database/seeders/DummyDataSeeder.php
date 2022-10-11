<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Accounts\Database\Seeders\UsersTableSeeder;
use Modules\Frontend\Database\Seeders\RequestSeederTableSeeder;
use Modules\HowKnow\Database\Seeders\ReasonSeederTableSeeder;
use Modules\Settings\Database\Seeders\SettingsDatabaseSeeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsDatabaseSeeder::class);
        $this->call(ReasonSeederTableSeeder::class);
        $this->call(RequestSeederTableSeeder::class);
    }
}
