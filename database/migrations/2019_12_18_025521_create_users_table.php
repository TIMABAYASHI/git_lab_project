<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('users', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('user_name',32)->default("");
                    $table->string('email')->nullable();
                    $table->string('password')->nullable();
                    $table->string('birthday');
                    $table->string('bloodtype');
                    $table->integer('q1');
                    $table->integer('q2');
                    $table->integer('q3');
                    $table->integer('q4');
                    $table->integer('q5');
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
        }
        