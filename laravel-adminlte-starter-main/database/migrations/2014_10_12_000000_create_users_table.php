<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->boolean('is_aproved')->default(false)->nullable();
            $table->enum('role', ['admin', 'Retail Outlet Officer','Retail Territory Manager']);
            $table->boolean('is_locked')->default(true)->nullable();
            $table->string('ref_number_roo_rtm');
            $table->integer('referer_id');                                                                      
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_superadmin')->default(false)->nullable();
            $table->string('image')->nullable();
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
}
