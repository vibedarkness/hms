<?php

use App\Models\CategorieMedecin;
use App\Models\Fournisseur;
use App\Models\TypeMedecin;
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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->tinyInteger('name');
            $table->tinyInteger('type');

            $table->string('nom_generic_du_medicament')->nullable();
            $table->string('unite_du_medicament')->nullable();
            $table->string('dose_du_medicament')->nullable();
            $table->string('etagere_du_medicament')->nullable();

            $table->unsignedBigInteger('quantite')->default(0);
            $table->string('type_quantite')->nullable();
            $table->integer('prix')->nullable();
            $table->date('date_expiration')->nullable();
            $table->text('note')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);

            $table->foreignIdFor(Fournisseur::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(TypeMedecin::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(CategorieMedecin::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('achats');
    }
};
