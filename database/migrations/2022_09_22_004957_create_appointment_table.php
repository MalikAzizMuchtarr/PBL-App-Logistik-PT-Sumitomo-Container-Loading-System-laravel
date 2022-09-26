<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_appointment_to_users');
            $table->date('eta_sin')->nullable();
            $table->date('eta_btm')->nullable();
            $table->date('ata_sbi')->nullable();
            $table->string('nomer_container')->nullable();
            $table->enum('size',[1,2])->nullable();
            $table->foreignId('port_of_origin_id')->nullable()->index('fk_appointment_to_port_of_origin');
            $table->enum('forwarder',[1,2,3])->nullable();
            $table->enum('place_lot',[1,2,3,4])->nullable();
            $table->date('free_charge_detention')->nullable();
            $table->date('free_charge_demurrage')->nullable();
            $table->string('fee_detention')->nullable();
            $table->string('fee_demurrage')->nullable();
            $table->string('subtotal_detention')->nullable();
            $table->string('subtotal_demurrage')->nullable();
            $table->string('total_stay')->nullable();
            $table->string('total_charge')->nullable();
            $table->string('subtotal_portOfOrigin')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
}
