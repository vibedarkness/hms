<?php

use App\Models\User;
use App\Models\Docteur;
use App\Models\Specialite;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('num_registre')->nullable();
            $table->date('date_registre')->nullable();
            $table->integer('reference')->nullable()->comment('1= Oui, 2= Non');
            $table->string('refere_par')->nullable();
            $table->string('experience')->nullable();
            $table->integer('type_patient')->nullable()->comment('1 = interne , 2= externe');
            $table->string('title')->nullable()->comment('Mr. Mdme. Etc');
            $table->string('name')->nullable()->fulltext()->comment('Nom Complet du Patient');
            $table->date('date_naissance')->nullable();
            $table->integer('age')->nullable()->comment('entier seulement');
            $table->string('genre')->nullable()->comment('M=Masculin, F= Feminin');
            $table->string('situation_matrimoniale')->nullable()->comment('M= Marié, C= Celibataire, D = Divorcé');
            $table->string('email')->nullable();
            $table->string('groupe_sanguin')->nullable();
            $table->string('phone')->nullable();
            $table->string('religion')->nullable();
            $table->string('fonction')->nullable()->comment('Ouvrier, Etudiant, Professeur Etc...');
            $table->string('pays')->nullable();
            $table->text('adresse')->nullable();
            $table->string('nom_du_pere')->nullable();
            $table->string('nom_de_la_mere')->nullable();
            $table->string('mode_paiement')->nullable()->default(1)->comment('1 = cash');
            $table->text('symptômes')->nullable();
            $table->string('image')->nullable();

            


            $table->foreignIdFor(User::class)->nullable()->constrained();
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
        Schema::dropIfExists('patients');
    }
};
