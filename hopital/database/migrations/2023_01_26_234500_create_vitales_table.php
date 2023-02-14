<?php

use App\Models\Patient;
use App\Models\User;
use App\Models\Visite;
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
        Schema::create('vitales', function (Blueprint $table) {
            $table->id();
            $table->string('systolic_B_P')->nullable();
            $table->string('diastolic_B_P')->nullable();
            $table->string('temperature')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('bmi')->nullable();
            $table->string('respiration')->nullable();
            $table->string('rythme_cardiaque')->nullable();
            $table->string('débit_urinaire')->nullable();
            $table->string('glycémie_f')->nullable();
            $table->string('glycémie_r')->nullable();
            $table->string('spo_2')->nullable();
            $table->string('avpu')->nullable();
            $table->string('traumatisme')->nullable();
            $table->string('mobilite')->nullable();
            $table->string('supplement_oxygene')->nullable();
            $table->string('commentaire')->nullable();

            $table->foreignIdFor(Patient::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Visite::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(User::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('vitales');
    }
};
