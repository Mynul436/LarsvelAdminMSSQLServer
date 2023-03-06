<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('rewards', function (Blueprint $table) {
                    $table->id();

                    // $table->string('type')->default('points');

                    $table->enum('type', ['points', 'percentage'])
                    ->default('points');
                    $table->integer('points')->default(0);
                    $table->decimal('percentage', 5, 2)->nullable();
                    // $table->foreignId('campaign_id')
                    // ->constrained('campaigns')->onDelete('cascade');

                    $table->foreignId('event_based_campaign_id')
            ->constrained('event_based_campaigns')->onDelete('cascade');

                    $table->foreignId('user_id')
                    ->constrained('users')->onDelete('cascade');


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
        Schema::dropIfExists('rewards');
    }
}
