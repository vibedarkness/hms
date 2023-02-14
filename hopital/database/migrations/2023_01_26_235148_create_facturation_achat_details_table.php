<?php

use App\Models\FacturationAchat;
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
        Schema::create('facturation_achat_details', function (Blueprint $table) {
            $table->id();

            $table->integer('montant_article')->default(0);
            $table->integer('montant_total_article')->default(0);
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
        Schema::dropIfExists('facturation_achat_details');
    }
};
