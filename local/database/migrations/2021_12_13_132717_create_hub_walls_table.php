<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHubWallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hub_walls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hubs_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('uid');
            $table->string('thumbnail_image')->nullable();
            $table->text('path')->nullable();
            $table->text('duration')->nullable();
            $table->integer('views')->default(0);
            $table->string('processed_file')->nullable();
            $table->enum('visibility',['private','public','unslited'])->default('private');
            
            $table->boolean('processed')->default(false);
            $table->boolean('allow_likes')->default(false);
            $table->boolean('allow_comments')->default(false);
            $table->string('processed_persentage')->default('fasle');
            
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
        Schema::dropIfExists('hub_walls');
    }
}
