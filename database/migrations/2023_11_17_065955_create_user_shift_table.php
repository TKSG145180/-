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
        Schema::create('user_shift', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('shifts');
            $table->foreignId('shift_id')->constrained('users');
            $table->primary(['user_id', 'shift_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
};
