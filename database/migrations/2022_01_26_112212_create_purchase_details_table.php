<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->integer('purchase_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->decimal('quantity',20,2)->default(00.00);
            $table->decimal('price',20,2)->default(00.00);
            $table->decimal('total_price',20,2)->default(00.00);
            $table->integer('created_by')->nullable();
            $table->string('deleted_at',30)->nullable();
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
        Schema::dropIfExists('purchase_details');
    }
}
