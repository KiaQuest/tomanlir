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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->text('user_id')->index();
            $table->text('sender_name');
            $table->text('amount');
            $table->text('time');
            $table->text('key');
            $table->text('verify')->default(0);

//            $table->timestamp('createtime')->useCurrent()->nullable(false);
            $table->timestamps();
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
