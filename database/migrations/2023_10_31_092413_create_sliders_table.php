<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('image_address')->unique();
            $table->string('link')->unique();

            $table->boolean('active')->default(true);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
