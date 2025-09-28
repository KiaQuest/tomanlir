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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('username')->unique();
            $table->text('password');
            $table->text('mobile')->nullable();
            $table->text('birthdate')->nullable();
            $table->text('nation')->nullable();
            $table->text('name')->nullable();
            $table->text('lastname')->nullable();
            $table->string('email')->nullable()->unique();
            $table->text('iban')->nullable();
            $table->text('ibanname')->nullable();
            $table->text('trbank')->nullable();
            $table->text('kart')->nullable();
            $table->text('irbank')->nullable();
            $table->text('shaba')->nullable();
            $table->text('address')->nullable();
            $table->text('insta')->nullable();
            $table->timestamp('createtime')->useCurrent()->nullable(false);
            $table->text('ircharge')->default(0);
            $table->text('trcharge')->default(0);
            $table->text('token')->default(0);
            $table->text('verify')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
