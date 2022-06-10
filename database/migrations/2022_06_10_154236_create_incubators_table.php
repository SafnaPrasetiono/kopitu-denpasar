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
        Schema::create('incubators', function (Blueprint $table) {
            $table->id('id_incubators');
            $table->char('code', 16);
            $table->char('nik', 16);
            $table->string('username');
            $table->string('email')->uniqie();
            $table->date('born');
            $table->string('gender');
            $table->char('phone', 12);
            $table->string('type');
            $table->string('status', 10);
            $table->string('avatar');
            $table->string('ktp');
            $table->string('city');
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->integer('postal_code');
            $table->text('address');
            $table->integer('province_id');
            $table->integer('regency_id');
            $table->integer('district_id');
            $table->char('village_id', 20);
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
        Schema::dropIfExists('incubators');
    }
};
