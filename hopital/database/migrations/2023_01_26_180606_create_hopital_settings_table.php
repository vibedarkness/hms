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
        Schema::create('hopital_settings', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('pays')->nullable();
            $table->string('adresse')->nullable();
            $table->string('misenplace')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable(); 
            $table->string('size')->nullable();
            $table->string('type')->nullable();


            
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable(); 
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('youtube')->nullable();




            $table->string('driver')->nullable();
            $table->string('encryption')->nullable();
            $table->string('host')->nullable();
            $table->string('port')->nullable();
            $table->string('username')->nullable();
            $table->string('email_from')->nullable();
            $table->string('email_from_name')->nullable();


            $table->string('invoice_prefix')->nullable();
            $table->string('invoice_logo')->nullable();
            $table->string('user_prefix')->nullable();
            $table->string('patient_prefix')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('invoice_last_number')->nullable();


            $table->string('taxes')->default(0);
            $table->string('discount')->default(0);


            
            

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
        Schema::dropIfExists('hopital_settings');
    }
};
