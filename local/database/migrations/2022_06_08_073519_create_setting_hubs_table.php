<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingHubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_hubs', function (Blueprint $table) {
            $table->id();
            $table->string('name_hubs')->nullable();
            $table->string('username_admin')->nullable();
            $table->string('hub_access')->nullable();
            $table->string('visiblity')->nullable();
            $table->string('link_profile')->nullable();
            $table->string('email_contact')->nullable();
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
        Schema::dropIfExists('setting_hubs');
    }
}
