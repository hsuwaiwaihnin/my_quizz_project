<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('subject_id')
                ->references('id')
                ->on('subjects')
                ->onDelete('cascade');
                $table->date('answer_date');
            $table->Integer('total');
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
        Schema::dropIfExists('marks');
    }
}
