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
        Schema::create('goods_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $list_categories = [
            ['id'=>1,"name"=>"Легкий","created_at"=>now()],
            ['id'=>2,"name"=>"Хрупкий","created_at"=>now()],
            ['id'=>3,"name"=>"Тяжелвй","created_at"=>now()],
        ];
        DB::table('goods_categories')->insert($list_categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods_categories');
        //
    }
};
