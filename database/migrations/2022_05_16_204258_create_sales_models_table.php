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
        Schema::create('sales_models', function (Blueprint $table) {
            $table->id();
            $table->string('custfirst');
            $table->string('custlast');
            $table->string('phone');
            $table->string('email');
            $table->string('occupation');
            $table->string('state');
            $table->string('status');
            $table->string('religion');
            $table->string('gender');
            $table->string('address');
            $table->string('estate');
            $table->string('model');
            $table->string('unit');
            $table->string('salesamount');
            $table->string('amount_paid');
            $table->string('remark');
            $table->string('account');
            $table->string('pay_date');
            $table->string('kinfirst')->nullable();
            $table->string('kinlast')->nullable();
            $table->string('kinphone')->nullable();
            $table->string('kinemail')->nullable();
            $table->string('relationship')->nullable();
            $table->string('kinaddress')->nullable();
            $table->string('code');
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
        Schema::dropIfExists('sales_models');
    }
};
