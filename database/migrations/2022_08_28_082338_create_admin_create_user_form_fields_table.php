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
        Schema::create('admin_create_user_form_fields', function (Blueprint $table) {
            $table->id();
            $table->string('UserType');
            $table->boolean('Fname')->default(1);
            $table->boolean('Lname')->default(1);
            $table->boolean('PersonnelCode')->default(1);
            $table->boolean('MobileNumber')->default(1);
            $table->boolean('LocalNumber')->default(0);
            $table->boolean('Branch')->default(0);
            $table->boolean('Unit')->default(0);
            $table->boolean('Post')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_create_user_form_fields');
    }
};