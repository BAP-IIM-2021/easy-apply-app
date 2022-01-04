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
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('photo')->nullable();
            $table->string('cv')->nullable();
            $table->integer('profile_completed')->default(0);
            $table->boolean('is_profile_completed')->default(0);
            $table->timestamps();

            $table->foreignId('location_id')->nullable()->constrained('locations')->onDelete('cascade');
            $table->foreignId('status_id')->nullable()->constrained('status')->onDelete('cascade');
            $table->foreignId('degree_id')->nullable()->constrained('degrees')->onDelete('cascade');
            $table->foreignId('training_id')->nullable()->constrained('trainings')->onDelete('cascade');
            $table->foreignId('year_exp_id')->nullable()->constrained('year_exps')->onDelete('cascade');
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
