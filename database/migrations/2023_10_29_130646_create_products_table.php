<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('image_address');
            $table->string('tag');
            $table->string('tag_icon');

            $table->boolean('is_exist')->default(true);
            $table->boolean('active')->default(true);
            $table->boolean('offer')->default(false);
            $table->boolean('vip')->nullable()->unique();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
