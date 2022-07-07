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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->string('empl_name', 100);
            $table->string('empl_surname', 100);
            $table->string('empl_phone', 100);
            $table->string('empl_address', 100);
            $table->date('empl_driver_license_date')->default('0000-00-00');;
            $table->date('empl_health_date')->default('0000-00-00');;
            $table->date('empl_insurance_date')->default('0000-00-00');;
            $table->date('empl_work_safety_date')->default('0000-00-00');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
