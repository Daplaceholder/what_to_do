<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrewGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crew_groups', function (Blueprint $table) {
            $table->id();
            $table->string('code_name');
            $table->integer('deck_group_id');
            $table->integer('engine_group_id');
            $table->integer('status');
            $table->integer('current_work');
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
        Schema::dropIfExists('crew_groups');
    }
}
