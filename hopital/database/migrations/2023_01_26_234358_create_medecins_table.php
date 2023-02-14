<?php

use App\Models\Achat;
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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string('code_medicament');
            $table->string('nom_medicament');
            $table->string('prix_medicament');
            $table->string('profit_medicament');
            $table->integer('quantite_disponible')->default(0);
            $table->string('quantite_alert');
            
            $table->text('description');
            $table->tinyInteger('status')->default(0);

            $table->foreignIdFor(Achat::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignIdFor(CategorieMedecin::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medecins');
    }
};
