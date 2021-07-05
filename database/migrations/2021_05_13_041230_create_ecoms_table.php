<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoms', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Name');
            $table->string('rs');
            $table->string('Rating');
            $table->string('product_details');
            $table->string('quentity');
            $table->string('logo');
            $table->string('image');
            $table->timestamps();
        });
        return redirect()->back();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecoms');
    }
}
