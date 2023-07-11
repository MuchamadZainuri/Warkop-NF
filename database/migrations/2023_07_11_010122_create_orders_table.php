<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->char('code', 7);
            $table->date('date');
            $table->enum('status',['Waiting','Processed','Finish'])->default('Waiting');
            $table->integer('qty');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
