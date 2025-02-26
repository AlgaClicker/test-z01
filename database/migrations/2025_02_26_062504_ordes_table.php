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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('amount', total: 8, places: 2);
            $table->string('status');
            $table->timestamp('order_at');
            $table->text('description')->nullable(true);
            $table->timestamps();
            $table->foreignId('goods_id')->constrained('goods')->onDelete('cascade');
                    
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('orders');
    }
};
