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

    /*

    INSERT INTO `employees` (`id`, `created_at`, `updated_at`, `deleted_at`, `empl_name`, `empl_surname`, `empl_phone`, `empl_address`, `empl_driver_license_date`, `empl_health_date`, `empl_insurance_date`, `empl_work_safety_date`) VALUES
    (1, NULL, '2022-07-07 13:18:09', NULL, 'Uldis', 'Zariņš2', '22222222', 'adreses iela 2, adrese', '2022-07-16', '2022-07-08', '2022-07-15', '2022-07-04'),
    (2, '2022-07-07 11:41:41', '2022-07-07 13:18:16', NULL, 'Aiko Maldonado', 'Hutchinson', '54563456', 'Dolor elit dignissimos praesentium qui ipsum omnis molestias qui aliquam commodo', '2022-06-27', '0000-00-00', '0000-00-00', '2022-07-15'),
    (3, '2022-07-07 11:51:49', '2022-07-07 13:16:24', NULL, 'Chastity Lancaster', 'Burnett', '52345234', 'Maiores et architecto recusandae Voluptas suscipit saepe explicabo In tempor veniam voluptatem I', '0000-00-00', '2022-07-22', '0000-00-00', '0000-00-00'),
    (4, '2022-07-07 11:53:37', '2022-07-07 13:14:17', NULL, 'Ella Todd', 'Sellers', '35345345', 'Eu eligendi eu culpa in et eum ullam earum labore excepteur', '0000-00-00', '0000-00-00', '2022-06-06', '0000-00-00'),
    (5, '2022-07-07 12:04:46', '2022-07-07 13:16:11', NULL, 'Josephine Graham', 'Cochran', '34234523', 'Ut doloribus sint labore eu est nihil blanditiis et sunt impedit ipsa', '0000-00-00', '2022-05-30', '0000-00-00', '0000-00-00');

    */
};
