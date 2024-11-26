<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tbl_category_product', function (Blueprint $table) {
            if (Schema::hasColumn('tbl_category_product', 'category_product_keywords')) {
                $table->renameColumn('category_product_keywords', 'meta_keywords');
            } else if (!Schema::hasColumn('tbl_category_product', 'meta_keywords')) {
                $table->string('meta_keywords')->nullable();
            }
        });
    }
    
    public function down()
    {
        Schema::table('tbl_category_product', function (Blueprint $table) {
            if (Schema::hasColumn('tbl_category_product', 'meta_keywords')) {
                $table->dropColumn('meta_keywords');
            }
        });
    }
};
