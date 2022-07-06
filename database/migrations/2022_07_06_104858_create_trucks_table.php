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
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->unsignedTinyInteger('truck_type');
            $table->string('truck_number', 10);
            $table->string('truck_make', 100);
            $table->string('truck_model', 100);
            $table->year('truck_year');
            $table->string('truck_vin_number', 100);
            $table->date('truck_technical_inspection');
            $table->date('truck_insurance');
            $table->date('truck_cc_insurance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
};
