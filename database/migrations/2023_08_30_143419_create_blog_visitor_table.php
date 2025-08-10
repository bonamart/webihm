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
        Schema::create('blog_visitor', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('blog_id')->nullable()->index('f_blog_id');
            $table->string('ip', 16)->nullable();
            $table->string('ua')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_visitor');
    }
};
