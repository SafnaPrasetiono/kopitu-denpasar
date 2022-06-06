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
        Schema::create('members_permissions', function (Blueprint $table) {
            $table->id('id_members_permissions');
            $table->boolean('ud');
            $table->boolean('siup');
            $table->boolean('halal');
            $table->boolean('bpom');
            $table->boolean('pirt');
            $table->boolean('nib');
            $table->boolean('sku');
            $table->boolean('izin');
            $table->integer('members_id');
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
        Schema::dropIfExists('members_permissions');
    }
};
