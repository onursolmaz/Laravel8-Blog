<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("title")->nullable();
            $table->string("keywords",100)->nullable();
            $table->string("description",200)->nullable();
            $table->string("email",50)->nullable();
            $table->string("phone",20)->nullable();
            $table->string("smtpserver",75)->nullable();
            $table->string("smtpemail",75)->nullable();
            $table->string("smtppassword",20)->nullable();
            $table->integer("smtpport")->nullable()->default(0);
            $table->string("facebook",50)->nullable();
            $table->string("twitter",50)->nullable();
            $table->string("instagram",50)->nullable();
            $table->text("aboutus")->nullable();
            $table->text("contact")->nullable();
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
        Schema::dropIfExists('settings');
    }
}
