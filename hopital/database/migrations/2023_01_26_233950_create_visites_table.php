<?php

use App\Models\User;
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
        Schema::create('visites', function (Blueprint $table) {
            $table->id();
            $table->string('num_visite')->nullable();
            $table->string('type_visite')->nullable();
            $table->date('date_visite')->nullable();
            $table->tinyInteger('status_visite')->default(0);
            $table->mediumText('description')->nullable();
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('visites');
    }
};
