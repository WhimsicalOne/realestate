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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->text('description');

            $table->integer('sqf');
            $table->integer('price_per_sqf');

            $table->integer('price')->description('Price will be based on the type of listing this is. So, if rent, it will display monthly or if buy, it will show total price.');
            $table->integer('rooms')->description('The total amount of rooms.');

            $table->integer('bathrooms')->description('The total amount of bathrooms.');

            $table->string('address')->description('Address for listing.');
            $table->string('city')->nullable();
            $table->string('zip')->nullable();

            $table->foreignId('category_id')->on('categories');
            $table->foreignId('user_id')->nullable()->on('users');
            $table->foreignId('type_id')->on('types');
            $table->unsignedBigInteger('property_images_id')->nullable()->references('id')->on('property_images')->onDelete('cascade');

            $table->tinyInteger('on_sale')->default(0);
            $table->tinyInteger('is_featured')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};

// https://stackoverflow.com/questions/27877741/how-to-dynamically-generate-a-google-map-base-on-an-address
