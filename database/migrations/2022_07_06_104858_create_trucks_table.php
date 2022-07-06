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
            $table->date('truck_technical_inspection_date');
            $table->date('truck_vignette_date');
            $table->string('truck_vignette_number', 100);
            $table->date('truck_insurance_date');
            $table->string('truck_insurance_number', 100);
            $table->date('truck_cc_insurance_date');
            $table->string('truck_cc_insurance_number', 100);
            $table->date('truck_transportation_date');
            $table->string('truck_transportation_number', 100);
            $table->date('truck_waste_date');
            $table->string('truck_waste_number', 100);
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
