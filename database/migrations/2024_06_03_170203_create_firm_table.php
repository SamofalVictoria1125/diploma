<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->string('name');

        });

        Schema::table('products', function (Blueprint $table){
           $table->dropColumn('firm');
            $table->foreignIdFor(\App\Models\Firm::class);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firms');
        Schema::table('products', function (Blueprint $table){
            $table->dropColumn('firm_id');
            $table->string('firm');
        });

    }
}
