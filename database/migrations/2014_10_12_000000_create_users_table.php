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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id')->nullable();
            $table->string('nip');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_tlp');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img')->default('avatar.png');
            $table->string('level');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
