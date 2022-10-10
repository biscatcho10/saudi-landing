<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('about_us_id');
            $table->string('address')->nullable();
            $table->string('video_title')->nullable();
            $table->string('video_description')->nullable();
            $table->longText('foundation')->nullable();
            $table->longText('our_vision')->nullable();
            $table->longText('our_message')->nullable();
            $table->longText('our_mission')->nullable();
            $table->longText('our_goals')->nullable();
            $table->string('locale')->index();
            $table->unique(['about_us_id', 'locale']);
            $table->foreign('about_us_id')->references('id')->on('about_us')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us_translations');
    }
}
