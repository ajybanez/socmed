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
        //
        Schema::create('students', function(Blueprint $table){
            $table->id('sn');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('email');
            $table->string('course');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};



