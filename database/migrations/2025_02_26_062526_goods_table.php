<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', total: 8, places: 2);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreignId('goods_category_id')->constrained('goods_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
        //
    }
};
