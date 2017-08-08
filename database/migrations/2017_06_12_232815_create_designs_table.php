<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDesignsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('published')->default(1);
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('button_code')->nullable();
            $table->text('short_details')->nullable();
            $table->text('details')->nullable();
            $table->decimal('price', 11, 2)->nullable();
            $table->string('availability')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designs');
    }
}
