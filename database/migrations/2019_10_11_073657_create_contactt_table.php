<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactt', function (Blueprint $table) {
		$table->bigIncrements('id');
		$table->string('jobcategory');
		$table->string('checkboxgroup2');
		$table->string('name1');
		$table->string('url');
		$table->string('name2');
		$table->string('name3');
		$table->string('mail');
		$table->string('mail_confirmation');
		$table->string('tel');
		$table->string('renraku');
		$table->string('kikkake');
		$table->text('request');
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
        Schema::dropIfExists('contactt');
    }
}
