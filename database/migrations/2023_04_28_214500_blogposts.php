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
        //
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id();

          /* We started adding code here*/

            $table->text('user');  // Title of our blog post          
            $table->text('topic');   // Body of our blog post                  
            $table->text('content'); // user_id of our blog post author

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
