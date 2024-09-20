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
        Schema::table('product_comment', function(Blueprint $table){

            $table->text('comment');
        });
    }


    // php artisan migrate:rollback

   
    public function down(): void
    {
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn('view');
        });
    }
};
