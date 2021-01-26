<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCensusRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('census_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('record_id');
            $table->string('firstname',32);
            $table->string('lastname',32);
            $table->integer('age');
            $table->enum('gender', ['Female','Male']);
            $table->enum('civil_status', ['Single','Married','Widowed']);
            $table->text('address');
            $table->date('birth_date');
            $table->text('education');
            $table->enum('role', ['Head','Member']);
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
        Schema::dropIfExists('census_records');
    }
}
