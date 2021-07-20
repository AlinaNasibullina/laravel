<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CteareNewsSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_sources', function (Blueprint $table) {
            $table->bigInteger('id_news')->unsigned();
            $table->foreign('id_news')->references('id')->on('news')
              ->restrictOnDelete()
              ->cascadeOnUpdate();
            $table->bigInteger('id_sources')->unsigned();
            $table->foreign('id_sources')->references('id')->on('sources')
              ->restrictOnDelete()
              ->cascadeOnUpdate();

            $table->primary(array('id_news', 'id_sources'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_sources');
    }
}
