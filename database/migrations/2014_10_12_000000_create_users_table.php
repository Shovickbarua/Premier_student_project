<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('roleId');
            $table->string('email_verified_at')->nullable();
            $table->boolean('status')->comment('0 => Inactive, 1=> Active, 2=> Pending, 3=> Block ');
            $table->string('password');
            $table->timestamps();
        });
        DB::table('users')->insert([
            [
            'name'      => 'admin',
            'username'  => 'admin',
            'email'     => 'admin@gmail.com',
            'password'      => md5('123456'),
            'status'        =>  1,
            'roleId'        => 1,
            'created_at'    =>  carbon::now()
            ],
            [
                'name'      => 'faculty',
                'username'  => 'faculty',
                'email'     => 'faculty@gmail.com',
                'password'      => md5('123456'),
                'status'        =>  1,
                'roleId'        => 2,
                'created_at'    =>  carbon::now()
            ],
            [
                'name'      => 'student',
                'username'  => 'student',
                'email'     => 'student@gmail.com',
                'password'      => md5('123456'),
                'status'        =>  1,
                'roleId'        => 3,
                'created_at'    =>  carbon::now()
            ]     
        ]);
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
