<?php

use App\Models\Investigation;
use App\Models\Laboratoire;
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
        Schema::create('collecte_echantillons', function (Blueprint $table) {
            $table->id();
            $table->string('code_echantillon')->nullable();
            $table->dateTime('date_collecte')->nullable();
            $table->dateTime('date_expedition')->nullable();
            $table->dateTime('date_annulation_expedition')->nullable();
            $table->string('status')->default(0);
            $table->foreignIdFor(Investigation::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Laboratoire::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('approuved_by_id')-> nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('collecte_echantillons');
    }
};
