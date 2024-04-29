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
        Schema::table('posts', function (Blueprint $table) {

           
            $table->foreignId('category_id')->nullable()->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
           
            // "tabella_campo_foreign"
            // questo ci rimuoverà SOLO il vincolo
            $table->dropForeign('posts_category_id_foreign');

            // poi dobbiamo cancellare la colonna
            $table->dropColumn('category_id');
        });
    }
};