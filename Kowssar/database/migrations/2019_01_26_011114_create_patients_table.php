<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FullName');
            $table->string('FileNumber');
            $table->string('PhoneNumber');
            $table->string('NationalCode');
            $table->string('Insurance')->nullable();
            $table->string('Service')->nullable();
            $table->string('ReferralPhysician')->nullable();
            $table->string('ReportDoctor')->nullable();
            $table->string('AttachedFile')->nullable();
            $table->string('Amount')->nullable();
            $table->string('PaymentStatus')->nullable();
            $table->string('PaksFile')->nullable();
            $table->string('VersionFile')->nullable();
            $table->string('FileFinal')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}