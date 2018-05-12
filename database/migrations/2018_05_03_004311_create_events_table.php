<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned()->index();
            $table->string('event_name');
            $table->date('event_date');
            $table->time('event_time');
            $table->string('event_venue');
            $table->string('event_type');
            $table->integer('setlist_id')->unsigned()->index();
            $table->integer('invoice_id')->unsigned()->index();
            $table->integer('agreement_id')->unsigned()->index();
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
        Schema::dropIfExists('events');
    }
}
