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
                    $table->string('name',32)->default("");
                    $table->string('email')->unique();
                    $table->string('password')->nullable();
                    $table->string('birthday')->nullable();
                    $table->string('bloodtype')->nullable();
                    $table->integer('q1')->nullable();
                    $table->integer('q2')->nullable();
                    $table->integer('q3')->nullable();
                    $table->integer('q4')->nullable();
                    $table->integer('q5')->nullable();
                    $table->rememberToken()->nullable();
                    $table->timestamps()->nullable();
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
        