<?php

use App\Models\User;
use App\Models\Visite;
use App\Models\Patient;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificat_medicals', function (Blueprint $table) {
            $table->id();
            $table->string('contenu')->nullable()->comment("Moyenne des statistiques");
            $table->string('finaliser')->nullable()->comment('Oui=1, Non=0');
            $table->tinyInteger('status')->default(0);
            
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
        Schema::dropIfExists('certificat_medicals');
    }
};
