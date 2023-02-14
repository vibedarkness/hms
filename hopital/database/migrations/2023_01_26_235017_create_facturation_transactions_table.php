<?php

use App\Models\Facturation;
use App\Models\FacturationAchat;
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
        Schema::create('facturation_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('montant_paiement')->default(0);
            $table->tinyInteger('mood')->default(0);
            $table->tinyInteger('status')->default(0);

            $table->foreignIdFor(Visite::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(FacturationAchat::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('facturation_transactions');
    }
};
