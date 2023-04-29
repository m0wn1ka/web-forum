<?php

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
        Schema::create('tododatas', function (Blueprint $table) {
            $table->id();

          /* We started adding code here*/

            $table->text('date');           
            $table->text('task');                   
            $table->text('status');
            $table->text('time');
            $table->text("anything");

          /* We stopped adding code here*/

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
