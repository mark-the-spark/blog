<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePublishedAtOnArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function ($table) {
            DB::statement('ALTER TABLE articles MODIFY COLUMN published_at TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function ($table) {
            $table->dropColumn('published_at');
            $table->string('published_at');

        });
    }
}
