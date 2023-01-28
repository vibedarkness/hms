<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Dr. Mr. Mdme. Mdlle.');
            $table->string('name');
            $table->string('username');
            $table->tinyInteger('status')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('genre')->comment('M=Masculin, F= Feminin');
            $table->date('date_naissance');
            $table->integer('age');
            $table->text('adresse_1')->nullable();
            $table->text('adresse_2')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
};
