<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('phone', 15);
            $table->string('photo');
            $table->string('legal_address',150);
            $table->string('actual_address',150);
            $table->date('registration_date');
            $table->string('tin', 10);
            $table->string('mes_license_photo');
            $table->string('mes_license_number',30);
            $table->date('mes_license_date');
            $table->string('ira_accreditation_photo');
            $table->string('ira_accreditation_number',30);
            $table->date('ira_accreditation_date');
            $table->string('electric_laboratory_license_photo');
            $table->string('electric_laboratory_license_number',30);
            $table->date('electric_laboratory_license_date');
            $table->string('educational_license_photo');
            $table->string('educational_license_number',30);
            $table->date('educational_license_date');
            $table->text('information');
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
        Schema::dropIfExists('contractors');
    }
}
