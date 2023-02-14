<?php

use App\Models\OrdonnanceDocteur;
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
        Schema::create('facturation_achats', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_achat')->default(0);
            $table->integer('total')->default(0);
            $table->integer('montant_en_attente')->default(0);
            $table->integer('montant_paiement')->default(0);
            $table->string('note')->nullable();
            $table->string('note_rabais')->nullable();
            $table->integer('montant_rabais')->default(0);
            $table->integer('tax')->nullable();
            $table->integer('frais_supplementaire')->default(0);
            $table->tinyInteger('mood')->default(0);
            $table->tinyInteger('status')->default(0);
            
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Visite::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(OrdonnanceDocteur::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('approuved_by_id')-> nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('facturation_achats');
    }
};
