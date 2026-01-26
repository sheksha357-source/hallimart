<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

            $table->string('name')->change();
            $table->decimal('price', 10, 2)->change();
            $table->integer('stock')->change();

            $table->string('image')->nullable()->change();

            $table->boolean('status')->default(1)->change();
            $table->boolean('is_active')->default(1)->change();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // rollback if needed
        });
    }
};
