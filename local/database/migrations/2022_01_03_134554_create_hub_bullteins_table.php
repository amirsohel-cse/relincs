<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHubBullteinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hub_bulletins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hubs_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('link');
            // $table->enum('visibility',['private','public','unslited'])->default('private');
            $table->boolean('allow_likes')->default(false);
            $table->boolean('allow_comments')->default(false);

            $table->foreign('hubs_id')->references('id')->on('hubs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('hub_bullteins');
    }
}
