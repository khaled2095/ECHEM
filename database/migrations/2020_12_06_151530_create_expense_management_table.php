<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_management', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->string('product_name');
            $table->string('order_num');
            $table->string('payable_amount');
            $table->string('due_collection');
            $table->string('previous_collection');
            $table->string('current_collection');
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
        Schema::dropIfExists('expense_management');
    }
}
