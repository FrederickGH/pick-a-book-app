<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('NIK')->unique();
            $table->string('id_card');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('password')
            $table->string('address');
            $table->date('DOB');
            $table->string('phonenum');
            $table->integer('borrowCount')->default('0');
            $table->decimal('Balance', 10, 2)->default('0.0');
            $table->rememberToken();
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
        Schema::dropIfExists('members');
    }
}
