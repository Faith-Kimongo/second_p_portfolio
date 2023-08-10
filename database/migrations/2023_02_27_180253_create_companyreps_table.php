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
        Schema::create('companyreps', function (Blueprint $table) {
            $table->id();


            $table->string('company_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('rep_email')->nullable();
            $table->string('position')->nullable();
            $table->string('rep_phone')->nullable();
            $table->enum('status',[1,0])->default(0);
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
        Schema::dropIfExists('companyreps');
    }
};
