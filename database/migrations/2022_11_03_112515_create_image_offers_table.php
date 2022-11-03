<?php

use App\Models\Image;
use App\Models\Offer;
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
        Schema::create('image_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Image::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Offer::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_offers');
    }
};
