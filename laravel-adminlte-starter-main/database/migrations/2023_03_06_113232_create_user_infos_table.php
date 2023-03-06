<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) 
        {
            $table->id();
            $table->enum('gender',['male','female','other']);
            $table->string('birthplace');
            $table->dateTime('dob');
            $table->string('phone');
            $table->string('address');
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('district_id')->constrained()->onDelete('cascade');
            // $table->foreignId('location_id')->constrained()->onDelete('cascade');
            // $table->foreignId('division_id')->constrained()->onDelete('cascade');
            // $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->string('postal_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
