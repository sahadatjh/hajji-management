<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHajjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajjis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('occupation')->nullable();
            $table->string('ng_number', 16)->unique();
            $table->string('tracking_number')->nullable();
            $table->string('pid_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_image')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('visa_image')->nullable();
            $table->string('ticket_number')->nullable();
            $table->string('ticket_image')->nullable();
            $table->date('flyte_date')->nullable();
            $table->string('mobile_number', 11);
            $table->string('nid_number', 32);
            $table->date('date_of_birth');
            $table->integer('district_id')->nullable();
            $table->string('district',64)->nullable();
            $table->string('gender',16);
            $table->string('address')->nullable();
            $table->integer('package_id');
            $table->double('package_price');
            $table->string('image')->nullable();
            $table->integer('hajji_status')->default(0)->comment('0 = pre-registered, 1 = running');
            $table->text('remarks')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('hajjis');
    }
}
