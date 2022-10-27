<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_details', function (Blueprint $table) {
           
            
            
            
            $table->increments('client_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('mannumber');
            $table->string('dob');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('is_blacklisted');
            $table->string('province_id');
            $table->string('town_id');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('position');
            $table->string('net_salary');
            $table->string('credit_limit');
            $table->string('next_of_kin_fname');
            $table->string('next_of_kin_lname');
            $table->string('next_of_kin_relationship');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_address');
            $table->string('bank_id');
            $table->string('bank_branch_id');
            $table->string('bank_swift_code');
            $table->string('bank_account_no');
            $table->string('bank_account_name');
            $table->string('mobile_money_no');
            $table->string('mobile_money_name');
            $table->integer('user_id')->unsigned();
            $table->string('created_by');
            $table->timestamp('created_dt');
            $table->foreign('user_id')->references('id')->on('users')
        ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_details');
    }
}
