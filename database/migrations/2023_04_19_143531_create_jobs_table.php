<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            
            /* We started adding code here */
            
            $table->integer('contact_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('open')->length(1);
            $table->integer('experience_id');
            $table->integer('no_vacancies');
            $table->text('description'); // Description of our humanr job
            
            /* We stopped adding code here */
            
            
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
        Schema::dropIfExists('jobs');
    }
};
