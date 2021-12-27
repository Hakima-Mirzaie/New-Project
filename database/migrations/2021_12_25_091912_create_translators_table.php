<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translators', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("father_name");
            $table->string("email")->unique();
            $table->string("phone_number_1")->unique();
            $table->string("phone_number_2")->unique();
            $table->date("dob");
            $table->string("native_language");
            $table->string("nationality");
            $table->string("address");
            $table->string("description");
            $table->string("cv");
            $table->json("languages");
            $table->string("location");
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
        Schema::dropIfExists('translators');
    }
}
