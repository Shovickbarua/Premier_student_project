<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('type',20)->unique();
            $table->string('identity',30)->unique();
            $table->timestamps();
        });

        /*Default Role To Insert */
        DB::table('roles')->insert([
            [
                'type'          =>'admin',
                'identity'      =>'admin',
                'created_at'    => Carbon::now()   
            ],
            [
                'type'          =>'Faculty',
                'identity'      =>'faculty',
                'created_at'    => Carbon::now()   
            ],
            [
                'type'          =>'Student',
                'identity'      =>'student',
                'created_at'    => Carbon::now()   
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
        Schema::dropIfExists('roles');
    }
}
