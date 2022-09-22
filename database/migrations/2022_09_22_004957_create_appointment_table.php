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
            $table->integer('user_id');
            $table->date('eta_sin')->nullable();
            $table->date('eta_btm')->nullable();
            $table->date('ata_sbi')->nullable();
            $table->string('nomer_container')->nullable();
            $table->enum('size',[1,2]);
            $table->integer('port_of_origin_id');
            $table->enum('forwarder',[1,2,3]);
            $table->enum('place_lot',[1,2,3,4]);
            $table->date('free_charge_detention')->nullable();
            $table->date('free_charge_demurrage')->nullable();
            $table->string('fee_detention')->nullable();
            $table->string('fee_demurrage')->nullable();
            $table->string('subtotal_detention')->nullable();
            $table->string('subtotal_demurrage')->nullable();
            $table->string('total_stay')->nullable();
            $table->string('total_charge')->nullable();
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
