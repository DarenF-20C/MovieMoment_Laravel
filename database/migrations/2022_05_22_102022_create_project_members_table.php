<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('studentID');
            $table->string('batch');
            $table->string('telephoneNumber');
            $table->string('email');
            $table->string('location');
            $table->string('addtionalInformation');
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
        Schema::dropIfExists('project_members');
    }
}
