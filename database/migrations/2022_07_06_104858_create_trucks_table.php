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
            $table->string('truck_vin_number', 100)->default('');
            $table->date('truck_technical_inspection_date')->default('0000-00-00');
            $table->date('truck_vignette_date')->default('0000-00-00');
            $table->string('truck_vignette_number', 100)->default('');
            $table->date('truck_insurance_date')->default('0000-00-00');
            $table->string('truck_insurance_number', 100)->default('');
            $table->date('truck_cc_insurance_date')->default('0000-00-00');
            $table->string('truck_cc_insurance_number', 100)->default('');
            $table->date('truck_transportation_date')->default('0000-00-00');
            $table->string('truck_transportation_number', 100)->default('');
            $table->date('truck_waste_date')->default('0000-00-00');
            $table->string('truck_waste_number', 100)->default('');
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

    /*

    INSERT INTO `trucks` (`id`, `created_at`, `updated_at`, `deleted_at`, `truck_type`, `truck_number`, `truck_make`, `truck_model`, `truck_year`, `truck_vin_number`, `truck_technical_inspection_date`, `truck_vignette_date`, `truck_vignette_number`, `truck_insurance_date`, `truck_insurance_number`, `truck_cc_insurance_date`, `truck_cc_insurance_number`, `truck_transportation_date`, `truck_transportation_number`, `truck_waste_date`, `truck_waste_number`) VALUES
    (1, NULL, '2022-07-07 08:47:44', NULL, 2, 'RF 1431', 'Volvo', 'FM7', 2022, '5342345321234', '2022-07-08', '2022-07-15', '34534', '2022-07-02', '222', '2022-07-03', '333', '2022-07-27', 'yryr6', '2022-07-22', '456456'),
    (2, NULL, '2022-07-07 13:19:25', NULL, 3, 'TB 5341', 'Scania', 'LT', 2021, '12312341234', '2022-07-14', '2022-07-15', 'FS34534534G-2', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (3, NULL, NULL, NULL, 4, 'CA 3191', 'Volvo', 'FM3', 2020, '53422345341234', '2022-07-14', '2022-07-15', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (4, '2022-07-07 10:23:59', '2022-07-07 13:28:20', NULL, 4, 'TR 1523', 'VOLVO', 'FM6', 2020, '', '2022-06-01', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (5, '2022-07-07 10:24:20', '2022-07-07 13:29:37', NULL, 4, 'IF 7564', 'VOLVO', 'FM4', 1932, '', '0000-00-00', '2022-07-08', 'RRT5345324DASD', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (6, '2022-07-07 10:26:35', '2022-07-07 13:29:00', NULL, 4, 'UE 3421', 'VOLVO', 'FM7', 2004, '6651FDSEFEWEF', '2022-07-21', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (7, '2022-07-07 10:27:22', '2022-07-07 10:27:22', NULL, 4, '562', 'Nisi temporibus do veritatis qui quidem et quo consequat Esse voluptatum et id aut laboriosam vo', 'Consectetur ut quisquam harum eaque omnis pariatur', 1995, '2733', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (8, '2022-07-07 10:29:25', '2022-07-07 13:28:41', NULL, 2, 'GV 5412', 'VOLVO', 'FH', 2008, '518', '2022-07-07', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (9, '2022-07-07 12:06:08', '2022-07-07 12:06:08', NULL, 1, '997', 'Alias voluptatem consequatur alias minim eos laboriosam corporis delectus autem aliquid ipsa vol', 'Veniam facilis dolor autem praesentium quidem laborum', 2018, '297', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (10, '2022-07-07 12:06:47', '2022-07-07 12:06:47', NULL, 1, '989', 'Et et natus architecto enim et consequuntur ut aut modi est modi rerum ratione veniam harum rerum e', 'Qui distinctio Nesciunt explicabo Ut non veniam dolor ad ea occaecat eius labore', 2018, '453', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (11, '2022-07-07 12:07:00', '2022-07-07 13:21:39', NULL, 4, 'LL 1231', 'MERCEDES', 'ACTROS', 1985, '885', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
    (12, '2022-07-07 13:21:00', '2022-07-07 13:21:13', NULL, 4, 'RO 4124', 'SCANIA', 'LM-15', 1995, '225FERASD534', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '');

    */
};
