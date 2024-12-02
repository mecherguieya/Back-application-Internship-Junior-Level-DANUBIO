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
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); 
            $table->string('type'); 
            $table->string('address'); 
            $table->integer('size'); 
            $table->integer('bedrooms'); 
            $table->decimal('price', 10, 2); 
            $table->decimal('latitude', 10, 7)->nullable(); 
            $table->decimal('longitude', 10, 7)->nullable(); 
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
    Schema::table('properties', function (Blueprint $table) {
        $table->dropColumn(['latitude', 'longitude']);
    });
}
};
