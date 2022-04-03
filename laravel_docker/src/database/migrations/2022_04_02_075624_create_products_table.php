<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('sub_subcategory_id')->nullable();
            $table->string('product_name_en');
            $table->string('product_name_vn');
            $table->string('product_slug_en');
            $table->string('product_slug_vn');
            $table->string('product_code')->nullable();
            $table->string('product_qty');
            $table->string('product_tags_en')->nullable();
            $table->string('product_tags_vn')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_color_en')->nullable();
            $table->string('product_color_vn')->nullable();
            $table->unsignedInteger('purchase_price')->nullable();
            $table->unsignedInteger('selling_price');
            $table->unsignedInteger('discount_price')->nullable();
            $table->text('short_description_en')->nullable();
            $table->text('short_description_vn')->nullable();
            $table->longText('long_description_en')->nullable();
            $table->longText('long_description_vn')->nullable();
            $table->string('product_thumvnail')->nullable()->default('thumvnail.jpg');
            $table->boolean('hot_deals')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('new_arrival')->default(false);
            $table->boolean('special_offer')->default(false);
            $table->boolean('special_deals')->default(false);
            $table->boolean('status')->default(true);
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('sub_subcategory_id')
                ->references('id')
                ->on('sub_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
