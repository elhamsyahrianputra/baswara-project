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
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover_url');
            $table->string('pdf_url');
            $table->string('publisher');
            $table->string('author');
            $table->string('isbn');
            $table->string('edition');
            $table->date('published_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.mig
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
