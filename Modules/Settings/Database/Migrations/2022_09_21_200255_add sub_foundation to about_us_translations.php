<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubFoundationToAboutUsTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_us_translations', function (Blueprint $table) {
            $table->text('sub_foundation')->nullable()->after('foundation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_us_translations', function (Blueprint $table) {
            $table->dropColumn('sub_foundation');
        });
    }
}
