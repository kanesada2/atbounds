<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('body');
            $table->int('champion_id')->nullable()->index('articles_champion_id_index');
            $table->int('minion_id_1')->nullable()->index('articles_minion_id_1_index');
            $table->int('minion_id_2')->nullable()->index('articles_minion_id_2_index');
            $table->int('minion_id_3')->nullable()->index('articles_minion_id_3_index');
            $table->int('minion_id_4')->nullable()->index('articles_minion_id_4_index');
            $table->int('minion_id_5')->nullable()->index('articles_minion_id_5_index');
            $table->int('minion_id_6')->nullable()->index('articles_minion_id_6_index');
            $table->int('minion_id_7')->nullable()->index('articles_minion_id_7_index');
            $table->int('author_id')->index('articles_author_id_index');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
