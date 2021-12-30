<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('firstname');
            $table->date('birth_date');
            $table->string('address');
            $table->string('linkedin')->nullable();;
            $table->string('website')->nullable();;
            $table->string('phone_number');
            $table->string('photo');
            $table->string('cv');
            $table->integer('profile_completed')->default(0);
            $table->boolean('is_profile_completed')->default(0);
            $table->timestamps();

            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status')->onDelete('cascade');
            $table->foreignId('degree_id')->constrained('degrees')->onDelete('cascade');
            $table->foreignId('training_id')->constrained('trainings')->onDelete('cascade');
            $table->foreignId('year_exp_id')->constrained('year_exps')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
