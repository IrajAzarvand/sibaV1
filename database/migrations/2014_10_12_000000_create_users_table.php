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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('PersonnelCode');
            $table->string('MobileNumber')->nullable();
            $table->string('LocalNumber')->nullable();
            // $table->string('Branch')->nullable(); //شعبه
            $table->foreignId('branch_id')->nullable()->constrained();
            // $table->string('Unit')->nullable(); //واحد
            $table->foreignId('unit_id')->nullable()->constrained();
            // $table->string('Post')->nullable(); //سمت
            $table->foreignId('post_id')->nullable()->constrained();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('role_id')->nullable()->constrained();
            $table->string('password');
            $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            $table->longText('profile_photo')->nullable();
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
        Schema::dropIfExists('users');
    }
};