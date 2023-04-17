<?php

use App\Models\Forms;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        Schema::create('clients', function (Blueprint $table) { 
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $forms_builders = Forms::all();
            foreach($forms_builders as $colonne) {
                 $table->string($colonne->label_name)->nullable();
            }
            $table->unsignedbigInteger('status')->default(0);
            $table->unsignedbigInteger('insurance_id')->nullable();
            $table->foreign('insurance_id')->references('id')->on('insurances');
            $table->unsignedbigInteger('partner_id')->nullable();
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
